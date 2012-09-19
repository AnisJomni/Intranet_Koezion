<?php echo $helpers['Html']->docType(); ?>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<?php if(isset($title_for_layout) && !empty($title_for_layout)) { ?><title><?php echo $title_for_layout; ?></title><?php echo "\n"; } ?>
		<?php if(isset($description_for_layout) && !empty($description_for_layout)) { ?><meta name="description" content="<?php echo $description_for_layout; ?>" /><?php echo "\n"; } ?>
		<?php if(isset($keywords_for_layout) && !empty($keywords_for_layout)) { ?><meta name="keywords" content="<?php echo $keywords_for_layout; ?>" /><?php echo "\n"; } ?>			
		<meta name="generator" content="<?php echo GENERATOR_META; ?>" /><?php //ATTENTION VOUS NE POUVEZ PAS SUPPRIMER CETTE BALISE ?>		
		<?php
		echo "\n";
		$css = array(
			$websiteParams['tpl_layout'].'/reset',
			$websiteParams['tpl_layout'].'/style',
			$websiteParams['tpl_layout'].'/grids',
			$websiteParams['tpl_layout'].'/hook',
			$websiteParams['tpl_layout'].'/menu',
			$websiteParams['tpl_layout'].'/nivo_slider',
			$websiteParams['tpl_layout'].'/superbuttons',
			$websiteParams['tpl_layout'].'/pagination',
			$websiteParams['tpl_layout'].'/prettyphoto',
			$websiteParams['tpl_layout'].'/table',
			$websiteParams['tpl_layout'].'/forms',
			$websiteParams['tpl_layout'].'/pricing',
			$websiteParams['tpl_layout'].'/footer',
			$websiteParams['tpl_layout'].'/colors/'.trim($websiteParams['tpl_code']).'/default',
			$websiteParams['tpl_layout'].'/colors/'.trim($websiteParams['tpl_code']).'/body',
			$websiteParams['tpl_layout'].'/syntaxhighlighter/shCore',
			$websiteParams['tpl_layout'].'/syntaxhighlighter/shCoreDefault'
		);		
		
		//On va vérifier si un dossier header est présent dans le dossier upload/images/header
		//Si tel est le cas on va récupérer l'ensemble des fichiers présent puis compter qu'il y en ait au moins un
		//Ensuite on va afficher le css qui gère le fond du header
		//On ne fera rien par défaut
		$headerDir = WEBROOT.DS.'upload'.DS.'images'.DS.'header';
		if(is_dir($headerDir)) { 
						
			$headerFiles = directoryContent($headerDir);
			if(count($headerFiles) > 0) { $css[] = $websiteParams['tpl_layout'].'/hook_header'; } 
		}
		
		echo $helpers['Html']->css($css, true);
		
		if(!empty($websiteParams['css_hack'])) { ?><style type="text/css"><?php echo $websiteParams['css_hack']; ?></style><?php }
		
		$js = array(
			$websiteParams['tpl_layout'].'/jquery-1.5.1.min',
			$websiteParams['tpl_layout'].'/menu',
			$websiteParams['tpl_layout'].'/input',
			$websiteParams['tpl_layout'].'/plugins',
			$websiteParams['tpl_layout'].'/script',
			$websiteParams['tpl_layout'].'/images_zoom',
			$websiteParams['tpl_layout'].'/pricing_table',
			$websiteParams['tpl_layout'].'/syntaxhighlighter/shCore',
			$websiteParams['tpl_layout'].'/syntaxhighlighter/shBrushCss',
			$websiteParams['tpl_layout'].'/syntaxhighlighter/shBrushJScript',
			$websiteParams['tpl_layout'].'/syntaxhighlighter/shBrushPhp',
			$websiteParams['tpl_layout'].'/syntaxhighlighter/shBrushPlain',
			$websiteParams['tpl_layout'].'/syntaxhighlighter/shBrushSql',
			$websiteParams['tpl_layout'].'/syntaxhighlighter/shBrushXml'
		);
		echo $helpers['Html']->js($js);
				
		echo $helpers['Html']->analytics($websiteParams['ga_code']);
		?>
		
		<script type="text/javascript">
     		SyntaxHighlighter.all()
		</script>
	</head>

	<body>
		<div id="container">
			<?php $this->element('frontoffice/header'); ?>
			<?php $this->element('frontoffice/menu_general'); ?>		
	    
			<div class="main png_bg">
				<div class="inner_main">
					<?php echo $content_for_layout; ?>
				</div>
		    </div>
		    <div class="endmain png_bg"></div>
		
			<?php $this->element('frontoffice/footer'); ?>
			<?php $this->element('frontoffice/logout'); ?>
		</div>
	</body>
</html>