<div class="section">
	<div class="box">
		<div class="title"><h2><?php echo _("Configuration du coeur de KoéZionCMS"); ?></h2></div>
		<div class="content nopadding">
			<?php 			
			echo $helpers['Form']->create(array('id' => 'ConfigCore', 'action' => Router::url('backoffice/configs/core_liste'), 'method' => 'post')); 
				echo $helpers['Form']->input('check_password_local', 'Tester le mot de passe en local', array('type' => 'checkbox', 'tooltip' => "Cochez cette case pour activer le contrôle du mot de passe en local"));
				echo $helpers['Form']->input('hash_password', 'Crypter les mots de passe utilisateurs', array('type' => 'checkbox', 'tooltip' => "Cochez cette case pour activer hashage des mots de passe dans la base de données"));
				echo $helpers['Form']->input('log_sql', 'Activer le log SQL', array('type' => 'checkbox', 'tooltip' => "Cochez cette case pour activer le log des reqêtes SQL effectuées"));
				echo $helpers['Form']->input('log_php', 'Activer le log PHP', array('type' => 'checkbox', 'tooltip' => "Cochez cette case pour activer le log des erreurs PHP"));
				echo $helpers['Form']->input('display_php_error', 'Afficher les erreurs PHP', array('type' => 'checkbox', 'tooltip' => "Cochez cette case pour afficher les erreurs PHP"));
				echo $helpers['Form']->input('local_storage_session', 'Stocker les variables de sessions localement', array('type' => 'checkbox', 'tooltip' => "Cochez cette case pour activer le stockage local des variables de sessions"));
				echo $helpers['Form']->input('backoffice_home_page', _("Page d'accueil du backoffice"), array('tooltip' => _("Indiquez ici l'adresse de la première page du backoffice")));
				$txtAfterInput = '<br />Pour plus d\'informations sur les timezones <a href="http://php.net/manual/en/timezones.php" target="_blank">cliquez-ici</a>';	
				echo $helpers['Form']->input('date_default_timezone', _("Timezone par défaut"), array('txtAfterInput' => $txtAfterInput));		
			echo $helpers['Form']->end(true); 
			?>
		</div>
	</div>
</div>