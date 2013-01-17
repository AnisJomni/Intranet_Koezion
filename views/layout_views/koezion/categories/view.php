<?php 
$this->element($websiteParams['tpl_layout'].'/breadcrumbs');
$title_for_layout = $category['page_title'];
$description_for_layout = $category['page_description'];
$keywords_for_layout = $category['page_keywords'];

if(isset($sliders) && count($sliders) > 0) { $this->element($websiteParams['tpl_layout'].'/slider'); } //Plugin Sliders Catégories
if(isset($googleMapAPI) && $mapPosition == 'topPage') { $this->element(PLUGINS.DS.'gmaps/views/gmaps/elements/frontoffice/map', null, false); } //Plugin Google Maps
?>
<div class="container_omega">
	<?php	
	
	if(count($children) == 0 && count($brothers) == 0 && count($postsTypes) == 0 && count($rightButtons) == 0) { 
		
		echo $this->vars['components']['Text']->format_content_text($category['content']);
		if(isset($googleMapAPI) && $mapPosition == 'afterTxt') { $this->element(PLUGINS.DS.'gmaps/views/gmaps/elements/frontoffice/map', null, false); } //Plugin Google Maps
		
		if(isset($displayCatalogues) && $displayCatalogues) {
			
			$this->element(PLUGINS.DS.'catalogues/views/elements/frontoffice/list', null, false);
			$this->element($websiteParams['tpl_layout'].'/pagination');
		}

		if(isset($displayWinesearchers) && $displayWinesearchers) {
		
			$this->element(PLUGINS.DS.'winesearchers/views/winesearchers/elements/frontoffice/list', null, false);
			$this->element($websiteParams['tpl_layout'].'/pagination');
		}
		
		if($category['display_form']) { 
						
			if(isset($formPlugin)) { $this->element(PLUGINS.DS.'formulaires/views/formulaires/elements/frontoffice/formulaire', null, false); }
			else { $this->element($websiteParams['tpl_layout'].'/formulaires/formulaire_contact'); } 
		}	
		
		$this->element($websiteParams['tpl_layout'].'/posts_list', array('cssZone' => ''));
		
	} else { 

		?>		
		<div class="gs_8">
			<div class="gs_8 omega">
				<?php		
				echo $this->vars['components']['Text']->format_content_text($category['content']);
				if(isset($googleMapAPI) && $mapPosition == 'afterTxt') { $this->element(PLUGINS.DS.'gmaps/views/gmaps/elements/frontoffice/map', null, false); } //Plugin Google Maps

				if($category['display_form']) { 
					
					if(isset($formPlugin)) { $this->element(PLUGINS.DS.'formulaires/views/formulaires/elements/frontoffice/formulaire', null, false); } 
					else { $this->element($websiteParams['tpl_layout'].'/formulaires/formulaire_contact'); } 
				}
				?>
			</div>		
			
			<?php 
			$this->element($websiteParams['tpl_layout'].'/posts_list');
			/*if(isset($displayPosts) && $displayPosts) { ?>
				<h2 class="widgettitle"><?php echo $libellePage; ?></h2>
				<div class="hr"></div>	
				<div class="gs_8 omega">
					<?php $this->element($websiteParams['tpl_layout'].'/posts_list'); ?>
					<?php $this->element($websiteParams['tpl_layout'].'/pagination'); ?>
				</div>		
			<?php }*/ ?>
		</div>		
		<?php 
		$this->element($websiteParams['tpl_layout'].'/colonne_droite'); 
	}
	?>
	<div class="clearfix"></div>
</div>
<?php if(isset($googleMapAPI) && $mapPosition == 'bottomPage') { $this->element(PLUGINS.DS.'gmaps/views/gmaps/elements/frontoffice/map', null, false); } //Plugin Google Maps ?>