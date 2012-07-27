<?php
/**
 * Mise en place des différentes routes et préfixes de l'application
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
 * @version 0.1 - 09/03/2012 by FI 
 */

require_once(LIBS.DS.'config_magik.php'); 									//Import de la librairie de gestion des fichiers de configuration
$cfg = new ConfigMagik(CONFIGS.DS.'files'.DS.'routes.ini', true, false); 	//Création d'une instance
$routesConfigs = $cfg->keys_values();										//Récupération des configurations

//On va créer une constante pour stocker la valeur par défaut du préfixe lors de l'ajout d'un post
define('POST_PREFIX', $routesConfigs['posts_prefix_singular']);

// Définition des différents préfixes de l'application
// Ici le préfixe backoffice et identifié par le mot renseigné dans le fichiers de configuration .ini

Router::prefix($routesConfigs['backoffice_prefix'], 'backoffice'); //Définition du prefixe backoffice

// Définition des différentes routes de l'application
// 
// Son fonctionnement est le suivant : 
// - A gauche l'url voulue
// - A droite l'url renseignée dans les vues

////////////////////////////
//   REGLES FRONTOFFICE   //
Router::connect('', 'home/index'); 																				//Page d'accueil du site
Router::connect('newsletter', 'contacts/newsletter'); 															//Inscription à la newsletter
Router::connect('sitemaps', 'sitemaps/index'); 																	//Affichage de la sitemap
Router::connect('robots', 'sitemaps/robots'); 																	//Affichage du fichier robots.txt
Router::connect('recherche', 'searches/index'); 																//Affichage du résultat de la recherche
Router::connect(':prefix/:slug-:id', 'posts/view/id:([0-9]+)/slug:([a-z0-9\-]+)/prefix:([a-z0-9\-]+)'); 		//Affichage du détail d'un post
Router::connect($routesConfigs['posts_prefix_plural'], 'posts/listing');						//Liste de tous les posts
Router::connect(':slug-:id', 'categories/view/id:([0-9]+)/slug:([a-z0-9\-]+)'); 								//Affichage d'une page catégorie
////////////////////////////

///////////////////////////
//   REGLES BACKOFFICE   //
Router::connect('connexion', 'users/login'); 																	//Connexion au backoffice
Router::connect($routesConfigs['backoffice_prefix'], $routesConfigs['backoffice_prefix'].'/categories/index'); 	//Accueil backoffice
///////////////////////////

// Pense bête : 
// 
// ([0-9]+) --> n'importe quel chiffre entre 0 et 9 répété plusieurs fois (ou non) 
// ([a-z0-9\-]+) n'importe quel caractères ou chiffres ou tiret répétés plusieurs fois
// + --> 1 ou plusieurs fois alors que * --> 0 ou plusieurs fois
// 
// Router::connect('blog/:action', 'posts/:action'); //Règles globales