<?php
/**
 * Modèle permettant la gestion de l'ensemble des produits
 */
class Catalogue extends Model {   
	
/**
 * Tableau contenant l'ensemble des champs à valider
 *
 * @var 	array
 * @access 	public
 * @author 	koéZionCMS
 * @version 0.1 - 17/01/2012 by FI
 */
	var $validate = array(
		'name' => array(
			'rule' => array('minLength', 2),
			'message' => 'Post.name'
		),
		'prefix' => array(
			'rule1' => array(
				'rule' => array('minLength', 3),
				'message' => 'Post.prefix.rule1'
			),
			'rule2' => array(
				'rule' => array('custom', '/^([a-zA-Z0-9-]+)$/'),
				'message' => "Post.prefix.rule2"
			)
		)
	);
	
/**
 * Tableau contenant l'ensemble des champs intégrer dans l'index de recherche
 *
 * @var 	array
 * @access 	public
 * @author 	koéZionCMS
 * @version 0.1 - 27/01/2012 by FI
 */
	/*var $fields_to_index = array(
		'fields' => array('name', 'slug', 'prefix', 'page_description', 'page_keywords'),
		'display' => array(
			'title' => 'name',
			'description' => 'page_description',
			'slug' => 'slug',
			'prefix' => 'prefix'
		)
	);*/
}