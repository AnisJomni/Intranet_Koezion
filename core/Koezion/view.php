<?php
/**
 * 
 */
class View extends Object {   
    
	var $vars = array(); //Variables à passer à la vue - Ne sert que dans la classe
	var $rendered = false; //Permet de savoir si la vue à déjà été rendue	
	var $controller = false; //Contrôleur souhaitant afficher la vue
	var $view = false; //Vue à charger
	
/**
 * Tableau contenant la liste des helpers à charger
 *
 * @var 	array
 * @access 	public
 * @author 	KoéZionCMS
 * @version 0.1 - 21/05/2012 by FI
 */	
	var $helpers = array(
		'Html',
		'Form',
		'Paginator'
	);	
	
/**
 * Constructeur de la classe
 *
 * @param 	varchar $view 			Nom de la vue à charger
 * @param 	object 	$controller 	Contrôleur faisant appel à la vue
 * @access	public
 * @author	koéZionCMS
 * @version 0.1 - 13/06/2012 by FI
 */	
	function __construct($view, $controller) {
		
		$this->view = $view;
		$this->controller = $controller;
		$this->layout = $controller->layout;
		$this->vars = $controller->get('vars');
		$this->vars['components'] = $controller->components;	
		$this->params = $controller->params;
		
		foreach($this->helpers as $k => $v) {

			$helper = low($v);
			require_once HELPERS.DS.$helper.'.php';
			unset($this->helpers[$k]);
			$this->vars['helpers'][$v] = new $v($this);
		}
		
		$this->rendered = false;		
    }    

/**
 * Cette fonction permet d'effectuer le rendu d'une page
 *
 * @access	public
 * @author	koéZionCMS
 * @version 0.1 - 13/06/2012 by FI
 */    
    public function render() {
    	
    	if($this->rendered) { return false; } //Si la vue est déjà rendue on retourne faux
    
    	extract($this->vars); //On récupère les variables	
    	
    	//Si on désire rendre une vue particulière celle
    	if(strpos($this->view, '/') === 0) { $view = VIEWS.$this->view.'.php'; }
    	
    	//Sinon le comportement par défaut ira chercher les vues dans le dossier views
    	else { 
    		
    		$view = VIEWS.DS.$this->controller->request->controller.DS.$this->view.'.php';
    		
    		//Si la variable existe (Elle n'existe que pour le front)
    		if(isset($this->vars['websiteParams'])) {
    			
    			$templateLayout = $this->vars['websiteParams']['tpl_layout']; //On récupère le layout courant
    			$alternativeView = VIEWS.DS.$this->controller->request->controller.DS.$templateLayout.DS.$this->view.'.php'; //On génère une variable contenant le chemin vers une vue alternative située dans un dossier portant le nom du layout
    		
	    		//Si ce fichier n'existe pas on prendra la vue par défaut
    			if(file_exists($alternativeView)) { $view = $alternativeView; }
    		}    		 
    	} 
    
    	ob_start(); //On va récupérer dans une variable le contenu de la vue pour l'affichage dans la variable layout_for_content
    	require_once($view); //Chargement de la vue
    	$content_for_layout = ob_get_clean(); //On stocke dans cette variable le contenu de la vue
    	require_once VIEWS.DS.'layout'.DS.$this->layout.'.php'; //On fait l'inclusion du layout par défaut et on affiche la variable dedans
    	$this->rendered = true; //On indique que la vue est rendue   	
    }
    
/**
 * Cette fonction permet de charger dans une vue une page html
 *
 * @param 	varchar $element 	Elément à charger
 * @param 	array 	$vars 		Variables que l'on souhaite faire passer (en plus) à l'élément
 * @access	public
 * @author	koéZionCMS
 * @version 0.1 - 23/12/2011
 * @version 0.2 - 21/05/2012 by FI - Rajout de la possibilité de passer des variables à la fonction
 */
    public function element($element, $vars = null) {
        
    	if(isset($vars) && !empty($vars)) { 
    		foreach($vars as $k => $v) { 
    			$this->vars[$k] = $v; 
    		} 
    	}    	
    	extract($this->vars);    
    	$element = ELEMENTS.DS.str_replace('/', DS, $element); //On transforme les / par ceux utilisés sur le système
    	$element .= '.php'; //On rajoute l'extension    
    	
    	if(!file_exists($element)) { require_once VIEWS.DS.'errors'.DS.'missing_element.php'; } //Si le fichier n'existe pas on affiche un message d'erreur 
    	else { require_once $element; } //Sinon on le charge
    }
    
/**
 * Cette fonction permet l'appel d'une action d'un controller depuis une vue
 *
 * @param 	varchar $controller Nom du controller à appeler
 * @param 	varchar $action 	Nom de l'action à effectuer
 * @param 	array 	$parameters Paramètres de la fonction
 * @return 	mixed 	Résultat de la fonction
 * @access	public
 * @author	koéZionCMS
 * @version 0.1 - 06/03/2012 by FI
 */
    function request($controller, $action, $parameters = array()) {
    	
    	$fileName = strtolower(Inflector::underscore($controller).'_controller'); //On récupère dans une variable le nom du controller
    	$filePath = CONTROLLERS.DS.$fileName.'.php'; //On récupère dans une variable le chemin du controller
    	require_once $filePath; //Inclusion de ce fichier si il existe
    	$controllerName = Inflector::camelize($fileName); //On transforme le nom du fichier pour récupérer le nom du controller
    	$c = new $controllerName(null, false); //Création d'une instance du controller souhaité
    	
    	//Appel de la fonction dans le contrôlleur
    	return call_user_func_array(array($c, $action), $parameters);
    }
}