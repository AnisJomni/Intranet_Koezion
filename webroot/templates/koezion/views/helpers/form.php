<?php
require_once(HELPERS.DS.'form_helper.php');
class Form extends FormHelper {
	
/**
 * 
 * - div : si vrai la valeur retournée sera contenu dans une div
 * - divright : si vrai le champ input sera retourné dans un div
 * - fulllabelerror : si vrai l'affichage du message d'erreur se fera à part
 * 
 * @see FormHelper::input()
 */	
	function input($name, $label, $options = array()) {
		
		//====================    PARAMETRAGES    ====================//

		$escapeAttributes = array('div', 'divright', 'fulllabelerror');
		$this->escapeAttributes = am($escapeAttributes, $this->escapeAttributes);		
		
		//Liste des options par défaut
		$defaultOptions = array(
			'div' => true,
			'divright' => true,
			'fulllabelerror' => false
		);
		$options = array_merge($defaultOptions, $options); //Génération du tableau d'options utilisé dans la fonction
		
		$inputDatas = parent::input($name, $label, $options); //Appel fonction parente
				
		//====================    	TRAITEMENTS DES DONNEES    ====================//			
		$classError = '';
		if(!empty($inputDatas['inputError'])) { $classError = ' error'; }
				
		if($inputDatas['inputOptions']['div']) {

			if(isset($inputDatas['inputOptions']['divRowBorderTop']) && !$inputDatas['inputOptions']['divRowBorderTop']) { $styleDiv = ' style="border-top:none"'; } else { $styleDiv = ''; }

			if($inputDatas['inputOptions']['divright']) { 
				if($inputDatas['inputOptions']['fulllabelerror']) {
					return '<div class="row'.$classError.'"'.$styleDiv.'>'.$inputDatas['inputLabel'].'<div class="rowright">'.$inputDatas['inputElement'].'</div>'.$inputDatas['inputError'].'</div>';				
				} else {
					return '<div class="row'.$classError.'"'.$styleDiv.'>'.$inputDatas['inputLabel'].'<div class="rowright">'.$inputDatas['inputElement'].$inputDatas['inputError'].'</div>'.'</div>';
				} 
			}
			else { return '<div class="row'.$classError.'"'.$styleDiv.'>'.$inputDatas['inputLabel'].$inputDatas['inputElement'].$inputDatas['inputError'].'</div>'; }
		} else { return $inputDatas['inputLabel'].$inputDatas['inputElement'].$inputDatas['inputError']; }		
	}
}
?>