<div class="smarttabs nobottom">
	<ul class="anchor">
		<li><a href="#general"><?php echo _("Général"); ?></a></li>
		<li><a href="#header"><?php echo _("header"); ?></a></li>
		<li><a href="#tpl"><?php echo _("Template"); ?></a></li>
		<li><a href="#txt"><?php echo _("Textes"); ?></a></li>
		<li><a href="#txtemails"><?php echo _("Textes emails"); ?></a></li>
		<li><a href="#seo"><?php echo _("SEO"); ?></a></li>
		<li><a href="#foot"><?php echo _("Footer"); ?></a></li>
		<li><a href="#options"><?php echo _("Options"); ?></a></li>
		<li><a href="#cssjs"><?php echo _("CSS & JS"); ?></a></li>
	</ul>
	<div id="general">
		<div class="content nopadding">
			<?php 
			echo $helpers['Form']->input('name', '<i>(*)</i> Titre', array('tooltip' => "Indiquez le titre du site Internet"));
			echo $helpers['Form']->input('url', '<i>(*)</i> Url', array('tooltip' => "Indiquez l'url complète du site Internet (avec http:// et sans le / à la fin)"));
			echo $helpers['Form']->input('online', 'En ligne', array('type' => 'checkbox', 'tooltip' => "Cochez cette case pour diffuser ce site Internet"));
			?>
		</div>
	</div>
	<div id="header">
		<div class="content nopadding">
			<?php 
			echo $helpers['Form']->input('tpl_logo', 'Logo', array('type' => 'textarea', 'toolbar' => 'image', 'rows' => 5, 'cols' => 10, 'wysiswyg' => true,  'class' => 'xxlarge', 'tooltip' => "Sélectionnez votre logo à l'aide de l'explorateur de fichier"));
			//echo $helpers['Form']->input('tpl_header', 'Header', array('type' => 'textarea', 'toolbar' => 'image', 'rows' => 5, 'cols' => 10, 'wysiswyg' => true,  'class' => 'xxlarge', 'tooltip' => "Sélectionnez l'image du header à l'aide de l'explorateur de fichier"));
			?>
		</div>
	</div>
	<div id="tpl">
		<div class="content nopadding">
			<div class="prettyRadiobuttons clearfix">
				<input type="hidden" id="InputTemplateId0" name="template_id" value="0" />
				<?php foreach($templatesList as $k => $templateValue) { echo $helpers['Form']->radiobutton_templates('template_id', $templateValue['id'], $templateValue['name'], $templateValue['layout'], $templateValue['code']); } ?>
			</div>
		</div>
	</div>
	<div id="txt">
		<div class="content nopadding">
			<?php 
			echo $helpers['Form']->input('txt_slogan', 'Slogan (accueil)', array('type' => 'textarea', 'rows' => 5, 'cols' => 10, 'wysiswyg' => true,  'class' => 'xxlarge', 'tooltip' => "Indiquez le slogan du site"));
			echo $helpers['Form']->input('txt_posts', 'Articles (accueil)', array('type' => 'textarea', 'rows' => 5, 'cols' => 10, 'wysiswyg' => true,  'class' => 'xxlarge', 'tooltip' => "Indiquez le texte de présentation des articles sur la page d'accueil"));
			echo $helpers['Form']->input('txt_newsletter', 'Page newsletter', array('type' => 'textarea', 'rows' => 5, 'cols' => 10, 'wysiswyg' => true,  'class' => 'xxlarge', 'tooltip' => "Indiquez le texte de la page newsletter"));
			//echo $helpers['Form']->input('txt_social', 'Texte social', array('type' => 'textarea', 'rows' => 5, 'cols' => 10, 'class' => 'xxlarge', 'tooltip' => ""));
			?>
		</div>
	</div>
	<div id="txtemails">
		<div class="content nopadding">
			<?php 
			echo $helpers['Form']->input('txt_mail_contact', 'Contenu email contact', array('type' => 'textarea', 'rows' => 5, 'cols' => 10, 'wysiswyg' => true,  'class' => 'xxlarge', 'tooltip' => "Indiquez le texte qui sera envoyé par email"));
			echo $helpers['Form']->input('txt_mail_comments', 'Contenu email commentaires', array('type' => 'textarea', 'rows' => 5, 'cols' => 10, 'wysiswyg' => true,  'class' => 'xxlarge', 'tooltip' => "Indiquez le texte qui sera envoyé par email"));
			echo $helpers['Form']->input('txt_mail_newsletter', 'Contenu email newsletter', array('type' => 'textarea', 'rows' => 5, 'cols' => 10, 'wysiswyg' => true,  'class' => 'xxlarge', 'tooltip' => "Indiquez le texte qui sera envoyé par email"));
			?>
		</div>
	</div>
	<div id="seo">
		<div class="content nopadding">
			<?php 
			echo $helpers['Form']->input('seo_page_title', 'Meta title', array('tooltip' => "Résumé de la page html, 160 caractères maximum recommandé"));
			echo $helpers['Form']->input('seo_page_description', 'Meta description', array('tooltip' => "Résumé de la page html, 160 caractères maximum recommandé"));
			echo $helpers['Form']->input('seo_page_keywords', 'Meta keywords', array('tooltip' => "Liste des mots-clés de la page html séparés par une virgule, 10-20 mots-clés maximum (Optionnel)"));		
			?>
		</div>
	</div>
	<div id="foot">
		<div class="content nopadding">
			<?php 
			echo $helpers['Form']->input('footer_gauche', 'Colonne de gauche', array('type' => 'textarea', 'rows' => 5, 'cols' => 10, 'wysiswyg' => true,  'class' => 'xxlarge'));			
			echo $helpers['Form']->input('footer_droite', 'Colonne de droite', array('type' => 'textarea', 'rows' => 5, 'cols' => 10, 'wysiswyg' => true,  'class' => 'xxlarge'));
			echo $helpers['Form']->input('footer_bottom', 'Baseline', array('type' => 'textarea', 'rows' => 5, 'cols' => 10, 'wysiswyg' => true,  'class' => 'xxlarge'));
			echo $helpers['Form']->input('footer_social', 'Texte social', array('type' => 'textarea', 'rows' => 5, 'cols' => 10, 'class' => 'xxlarge', 'tooltip' => "Indiquez ici, par exemple, le texte du module social de Facebook. Attention si vous activez cette zone la zone newsletter sera supprimée."));
			echo $helpers['Form']->input('footer_addthis', 'Module AddThis', array('type' => 'textarea', 'rows' => 5, 'cols' => 10, 'class' => 'xxlarge', 'tooltip' => "Indiquez ici le code pour le module AddThis."));
			?>
		</div>
	</div>
	<div id="options">
		<div class="content nopadding">
			<?php 
			$positionList = array('header' => "Dans le header", 'menu' => "Dans le menu");
			echo $helpers['Form']->input('search_engine_position', 'Position du moteur de recherche', array('type' => 'select', 'datas' => $positionList));			
			//$sliderTypesList = array(1 => "Slider simple", 2 => "Slider 3D"); //Supprimé pour le moment pour des raisons de conflits dans les librairies jQuery
			$sliderTypesList = array(1 => "Slider simple");
			echo $helpers['Form']->input('slider_type', 'Type de slider', array('type' => 'select', 'datas' => $sliderTypesList));
			echo $helpers['Form']->input('ga_code', 'Code Google Analytics', array('type' => 'textarea', 'rows' => 5, 'cols' => 10, 'class' => 'xxlarge'));			
			$txtSecure = 'Sécuriser le site. <i>Seuls les utilisateurs enregistrés pourront se connecter. <a href="'.Router::url('backoffice/users/index').'">'._("Ajouter un utilisateur").'</a></i>';
			echo $helpers['Form']->input('secure_activ', $txtSecure, array('type' => 'checkbox', 'tooltip' => "Cochez cette case pour activer la sécurité sur le site"));			
			$txtLog = "Logger les utilisateurs. <i>Attention cette option ne fonctionne que dans le cas de sites sécurisés.</i>";
			echo $helpers['Form']->input('log_users_activ', $txtLog, array('type' => 'checkbox', 'tooltip' => "Cochez cette case pour activer le log des utilisateurs. La mise en place de cette option peut ralentir l'affichage des pages"));
			?>
		</div>
	</div>
	<div id="cssjs">
		<div class="content nopadding">
			<?php 
			echo $helpers['Form']->input('css_hack', 'Rajout de code css', array('type' => 'textarea', 'rows' => 30, 'cols' => 10, 'class' => 'xxlarge'));
			echo $helpers['Form']->input('js_hack', 'Rajout de code js', array('type' => 'textarea', 'rows' => 30, 'cols' => 10, 'class' => 'xxlarge'));
			?>
		</div>
	</div>
</div>