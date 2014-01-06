<?php
/**
 * Cette classe permet les envois de mails
 * Elle utilise la classe SwiftMailer de Chris Corbyn
 * 
 * PHP versions 4 and 5
 *
 * KoéZionCMS : PHP OPENSOURCE CMS (http://www.koezion-cms.com)
 * Copyright KoéZionCMS
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright	KoéZionCMS
 * @link        http://www.koezion-cms.com
 * @link		http://swiftmailer.org/
 * @todo Si il y a des erreurs dans le paramétrage des configurations une fatal error générée par swiftMailer est lancé voir comment faire pour la gérer de façon plus jolie
 */
class EmailComponent extends Component {

	var $mailer = false;
	
	private $smtpHost = ''; 
	private $smtpPort = '';
	private $smtpUserName = '';
	private $smtpPassword = '';

	private $mailSetFromEmail = '';
	private $mailSetFromName = '';
		
/**
 * Constructeur de la classe
 *
 * @access 	public
 * @author 	koéZionCMS
 * @version 0.1 - 06/20/2011 by FI
 * @version 0.2 - 02/03/2012 by FI - Modification de la récupération des configurations, on passe maintenant par un fichier .ini
 * @version 0.3 - 18/04/2012 by FI - Modification de la récupération du .ini il n'y a plus de section
 */
	function init($file) {
		
		require_once(LIBS.DS.'config_magik.php'); //Import de la librairie de gestion des fichiers de configuration
		$cfg = new ConfigMagik($file, true, true); //Création d'une instance
		$conf = $cfg->keys_values(CURRENT_WEBSITE_ID); //Récupération des configurations en fonction du nom de domaine
		
		$this->smtpHost 		= isset($conf['smtp_host']) ? $conf['smtp_host'] : '';
		$this->smtpPort 		= isset($conf['smtp_port']) ? $conf['smtp_port'] : '';
		$this->smtpUserName 	= isset($conf['smtp_user_name']) ? $conf['smtp_user_name'] : '';
		$this->smtpPassword 	= isset($conf['smtp_password']) ? $conf['smtp_password'] : '';
		
		$this->mailSetFromEmail = isset($conf['mail_set_from_email']) ? $conf['mail_set_from_email'] : ''; //Récupération du mail de l'expéditeur
		$this->mailSetFromName 	= isset($conf['mail_set_from_name']) ? $conf['mail_set_from_name'] : ''; //Récupération du nom de l'expéditeur
		
		$this->bccEmail 		= isset($conf['bcc_email']) ? $conf['bcc_email'] : ''; //Récupération de la copie
				
		require_once SWIFTMAILER.DS.'swift_required.php'; //Inclusion de la librairie d'envoi de mails
		
		//////////////////////
		//    HACK 1AND1    //
		//A tester pour voir si cela fonction sur l'ensemble de leurs mutualisés
		//Pour le moment testé sur les serveurs dédiés clé en main
		if(substr_count($_SERVER['DOCUMENT_ROOT'], '/kunden/')) {
			
			$transport = Swift_MailTransport::newInstance();
			$this->mailer = Swift_Mailer::newInstance($transport); //Création d'une nouvelle instance de mail
			
		} else {
		
			//Si les paramètres sont bien renseignés 
			if(
				!empty($this->smtpHost) && 
				!empty($this->smtpPort) && 
				!empty($this->smtpUserName) && 
				!empty($this->smtpPassword)
			) {			
				
				if(isset($conf['smtp_secure']) && $conf['smtp_secure']) { $encryption = 'ssl'; } else {  $encryption = null; }
				
				//Définition du transport smtp
				$transport = Swift_SmtpTransport::newInstance()
					->setHost($this->smtpHost) //Host
					->setPort($this->smtpPort) //Port
					->setEncryption($encryption)
					->setUsername($this->smtpUserName) //Username
					->setPassword($this->smtpPassword); //Mot de passe
			
				$this->mailer = Swift_Mailer::newInstance($transport); //Création d'une nouvelle instance de mail
			}
		}
	}
	
/**
 * Cette fonction va envoyer le mail
 * 
 * $datas se compose des données suivantes :
 * 	--> subject : sujet du mail
 * 	--> to : destinataire du mail
 * 	--> element : contenu de l'email
 *  --> vars : variables éventuelles
 *
 * @param 	array 	Paramètres du mail
 * @param 	object 	Controleur
 * @param 	varchar Fichier de configuration smtp
 * @return 	integer Nombre de message(s) envoyé(s)
 * @access 	public
 * @author 	koéZionCMS
 * @version 0.1 - 06/02/2012 by FI
 * @version 0.2 - 02/08/2012 by FI - Customisation des messages
 * @version 0.3 - 07/11/2013 by FI - Mise en place de la possibilité de ne pas envoyer de bcc
 */
	function send($datas, $controller, $file = null) {
		
		if(!isset($file) && empty($file)) { $file = CONFIGS.DS.'files'.DS.'mailer.ini'; }
		$this->init($file);
		
		$numSent = 0;	
		
		if($this->mailer) {
			
			$view = new View(null, $controller); //Création d'un objet vue pour le rendu
	
			//Passage des éventuelles variables
			if(isset($datas['vars'])) {
	
				foreach($datas['vars'] as $k => $v) { $view->vars[$k] = $v; }
			}
			
			ob_start(); //On démarre le rendu
			$view->element($datas['element'], $controller->request->data); //On récupère l'élément à envoyer
			$content_for_layout = ob_get_clean(); //On récupère le rendu
	
			$type = isset($datas['type']) ? $datas['type'] : 'text/html'; //Récupération du type du message
			//Création du message
			$message = Swift_Message::newInstance()
				->setSubject($datas['subject']) //Mise en place du sujet
				->setFrom(array($this->mailSetFromEmail => $this->mailSetFromName)) //Mise en place de l'adresse de l'expéditeur								
				->addPart($content_for_layout, $type); // And optionally an alternative body
			
			//Si on a des fichiers joints
			if(isset($datas['filesToUpload']) && !empty($datas['filesToUpload'])) {
				
				set_time_limit(0); //Pas de limite de temps d'exécution
				foreach($datas['filesToUpload'] as $fieldToUpload => $fieldInfosToUpload) {

					$message->attach(Swift_Attachment::fromPath($fieldInfosToUpload['path'].DS.$fieldInfosToUpload['uploaded_name']));
				}				
			}		
			
			//Par défaut on rajoute toujours la valeur bcc --> !isset($datas['noBcc'])
			//Si l'index existe et que sa valeur est vrai on le rajout aussi
			//Dans le cas contraire on ne fait rien pas de copie envoyée
			if(!isset($datas['noBcc']) || (isset($datas['noBcc']) && !$datas['noBcc'])) { 
			
				$bcc = array();
				if(!empty($this->bccEmail)) { $bcc[] = $this->bccEmail; } //Gestion éventuelle de l'envoi en copie cachée via le fichier de conf			
				if(isset($datas['bcc']) && !empty($datas['bcc'])) { $bcc[] = $datas['bcc']; } //Gestion éventuelle de l'envoi en copie cachée via le formulaire directement	
				if(count($bcc)) { $message->setBcc($bcc); } 
			}
									
			if(is_array($datas['to'])) {
								
				// And specify a time in seconds to pause for (30 secs)
				$this->mailer->registerPlugin(new Swift_Plugins_AntiFloodPlugin(100, 30));
				
				foreach($datas['to'] as $k => $to) {
					
					$message->setTo(array($to));
					$numSent += $this->mailer->send($message); //On envoi le message
				}				
			}
			else { //Mise en place de l'adresse du destinataire
				
				$message->setTo(array($datas['to']));
				$numSent += $this->mailer->send($message); //On envoi le message			
			}			
		}
		return $numSent;
	}
	
/**
 * Cette fonction va envoyer un mail de test
 *
 * @return 	integer Nombre de message(s) envoyé(s)
 * @access 	public
 * @author 	koéZionCMS
 * @version 0.1 - 06/02/2012 by FI
 */	
	function send_test($controller) {
		
		$this->init(CONFIGS.DS.'files'.DS.'mailer.ini');
		$numSent = 0;
		
		if($this->mailer) {
			
			//Création du message
			$message = Swift_Message::newInstance()
				->setSubject("PARAMETRAGE SERVEUR SMTP koéZionCMS") //Mise en place du sujet
				->setFrom(array('noreply@koezion-cms.com' => 'koéZionCMS')) //Mise en place de l'adresse de l'expéditeur
				->setTo(array($this->bccEmail)) //Mise en place de l'adresse du destinataire
				->addPart("Votre serveur SMTP est correctement paramétré", 'text/html'); // And optionally an alternative body
				
			$numSent = $this->mailer->send($message); //On envoi le message
		}
		
		return $numSent;	
	}
}