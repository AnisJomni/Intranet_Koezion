/*
Copyright (c) 2003-2011, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
*/
/*CKEDITOR.editorConfig = function(config)
{*/
	CKEDITOR.config.language = 'fr'; //Langue de l'éditeur
	CKEDITOR.config.autoParagraph = false;	
	
		//CKEDITOR.config.basicEntities = false;
		//CKEDITOR.config.entities = false;
		//CKEDITOR.config.entities_greek = false;
	CKEDITOR.config.entities_latin = false;
		//CKEDITOR.config.htmlEncodeOutput = false;
		//CKEDITOR.config.entities_processNumerical = false;
	
	CKEDITOR.config.templates_replaceContent = false; //Indique lors de la sélection de templates si il faut remplacer le contenu actuel
	CKEDITOR.config.extraPlugins = 'internpage'; //Mise en place d'un plugin supplémentaire
	
	//Définition de la barre de menu
	CKEDITOR.config.toolbar_App =
	[
	    { name: 'document',    items : [ 'Source','Templates'] },
	    { name: 'clipboard',   items : [ 'Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo' ] },
	    { name: 'editing',     items : [ 'Find','Replace','-','SelectAll','-','SpellChecker', 'Scayt' ] },
	    '/',
	    { name: 'basicstyles', items : [ 'Bold','Italic','Underline','Strike','Subscript','Superscript','-','RemoveFormat' ] },
	    { name: 'paragraph',   items : [ 'NumberedList','BulletedList','-','Outdent','Indent','-','Blockquote','-','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock','-','BidiLtr','BidiRtl' ] },
	    { name: 'links',       items : [ 'Link','Unlink','Anchor' ] },
	    { name: 'insert',      items : [ 'Image','Flash','Table','HorizontalRule','SpecialChar' ] },
	    '/',
	    { name: 'styles',      items : [ 'Styles','Format','Font','FontSize' ] },
	    { name: 'colors',      items : [ 'TextColor','BGColor' ] },
	    { name: 'tools',       items : [ 'Maximize', 'ShowBlocks','-','About'] }
	];	
	CKEDITOR.config.toolbar = 'App';
	
	//Changement des tailles de polices de caractère
	CKEDITOR.config.fontSize_sizes = '8/8px;9/9px;10/10px;11/11px;12/12px;13/13px;14/14px;15/15px;16/16px;17/17px;18/18px;19/19px;20/20px;21/21px;22/22px;23/23px;24/24px;25/25px;';
	
	//Insertion des css utilisés
	CKEDITOR.config.contentsCss = [
		CKEDITOR.basePath + '../../css/frontoffice/reset.css',
		CKEDITOR.basePath + '../../css/frontoffice/style.css',
		CKEDITOR.basePath + '../../css/frontoffice/grids.css',
		CKEDITOR.basePath + '../../css/frontoffice/hook.css',
		CKEDITOR.basePath + '../../css/frontoffice/superbuttons.css',
		CKEDITOR.basePath + '../../css/frontoffice/prettyphoto.css',
		CKEDITOR.basePath + '../../css/frontoffice/table.css',
		CKEDITOR.basePath + '../../css/frontoffice/forms.css',
		CKEDITOR.basePath + '../../css/frontoffice/pricing.css',
		CKEDITOR.basePath + '../../css/frontoffice/colors/red/default.css',	
		CKEDITOR.basePath + '../../css/frontoffice/hook_ckeditor.css'
	];	
	
	CKEDITOR.config.stylesSet = 'default:' + CKEDITOR.basePath + 'default_styles.js'; //Mise en place des styles par défaut	
	
	CKEDITOR.config.colorButton_colors =
		'8c8085,776890,9ccbc1,7c907c,91e4e6,9a1616,777777,776890,acbeac,b7c3c1,d171ce,ba91de,b37731,DE5328,e26fb5,7d96a4,128ece,598196,babc8e,DE5328,c884d0,b56de5,d83737,329ac0,dadd21,0576ab,bdcb71,9696dd,97cbc0,f0d137,'+		
		'000,800000,8B4513,2F4F4F,008080,000080,4B0082,696969,' +
		'B22222,A52A2A,DAA520,006400,40E0D0,0000CD,800080,808080,' +
		'F00,FF8C00,FFD700,008000,0FF,00F,EE82EE,A9A9A9,' +
		'FFA07A,FFA500,FFFF00,00FF00,AFEEEE,ADD8E6,DDA0DD,D3D3D3,' +
		'FFF0F5,FAEBD7,FFFFE0,F0FFF0,F0FFFF,F0F8FF,E6E6FA,FFF';
	
	/*CKEDITOR.config.filebrowserBrowseUrl = CKEDITOR.basePath + '../kcfinder/browse.php?type=files';
	CKEDITOR.config.filebrowserImageBrowseUrl = CKEDITOR.basePath + '../kcfinder/browse.php?type=images';
	CKEDITOR.config.filebrowserFlashBrowseUrl = CKEDITOR.basePath + '../kcfinder/browse.php?type=flash';
	CKEDITOR.config.filebrowserUploadUrl = CKEDITOR.basePath + '../kcfinder/upload.php?type=files';
	CKEDITOR.config.filebrowserImageUploadUrl = CKEDITOR.basePath + '../kcfinder/upload.php?type=images';
	CKEDITOR.config.filebrowserFlashUploadUrl = CKEDITOR.basePath + '../kcfinder/upload.php?type=flash';*/
//};