<div class="smarttabs nobottom">
	<ul class="anchor">
		<li><a href="#general"><?php echo _("Général"); ?></a></li>
		<li><a href="#right_column"><?php echo _("Colonne de droite"); ?></a></li>
		<li><a href="#seo"><?php echo _("SEO"); ?></a></li>
		<li><a href="#options"><?php echo _("Options"); ?></a></li>
		<li><a href="#secure"><?php echo _("Sécuriser la page"); ?></a></li>
		
		<?php 
		//On ne va afficher ce menu que si le site courant est sécurisé
		$websitesSession = Session::read('Backoffice.Websites'); //Récupération de la variable de session
		$currentWebsite = $websitesSession['current']; //Récupération du site courant
		$websiteDetails = $websitesSession['details'][$currentWebsite]; //Récupération du détail du site courant
		$isSecure = $websiteDetails['secure_activ']; //On va vérifier si celui-ci est sécurisé
		if($isSecure) {
			
			?><li><a href="#emailing"><?php echo _("Emailing"); ?></a></li><?php 
		}
		?>
	</ul>
	<div id="general">
		<div class="content nopadding">
			<?php 
			echo $helpers['Form']->input('parent_id', 'Page parente', array('type' => 'select', 'datas' => $categoriesList, 'tooltip' => "Indiquez la page parente de cette page (Racine du site par défaut)"));
			$typeList = array(1 => "Page catégorie (Intégrée dans le menu)", 2 => "Page évènement (Non intégrée dans le menu)");
			echo $helpers['Form']->input('type', 'Type de page', array('type' => 'select', 'datas' => $typeList, 'tooltip' => "Une page évènement n'est pas intégrée dans le menu général, vous pourrez faire des liens vers celle-ci via l'éditeur WYSIWYG"));
			echo $helpers['Form']->input('name', '<i>(*)</i> Titre', array('tooltip' => "Indiquez le titre de la page. Ce champ sera utilisé (par défaut) comme titre de page dans les moteurs de recherche, 70 caractères maximum recommandé"));
			echo $helpers['Form']->input('content', 'Contenu', array('type' => 'textarea', 'rows' => 5, 'cols' => 10, 'wysiswyg' => true,  'class' => 'xxlarge', 'tooltip' => "Saisissez ici le contenu de votre page, n'hésitez pas à utiliser les modèles de pages pour vous aider"));
			echo $helpers['Form']->input('online', 'En ligne', array('type' => 'checkbox', 'tooltip' => "Cochez cette case pour diffuser cette page"));
			?>
		</div>
	</div>
	<div id="right_column">
		<div class="content nopadding">
			<?php
			echo $helpers['Form']->input('title_colonne_droite', 'Titre colonne de droite', array('tooltip' => "Indiquez le titre qui sera affiché dans la colonne de droite"));			
			echo $helpers['Form']->input('display_children', 'Afficher les pages enfants dans la colonne de droite', array('type' => 'checkbox', 'tooltip' => "En cliquant sur cette case les enfants de la page seront affichés dans la colonne de droite, ATTENTION pensez à saisir le champ titre de la colonne de droite"));
			//echo $helpers['Form']->input('title_children', 'Titre colonne de droite', array('tooltip' => "Indiquez le titre qui sera affiché dans la colonne de droite pour les enfants (Activé que si vous avez cliqué sur la case précédente)"));			
			echo $helpers['Form']->input('display_brothers', 'Afficher les pages du même niveau dans la colonne de droite', array('type' => 'checkbox', 'tooltip' => "En cliquant sur cette case les pages du même niveau seront affichés dans la colonne de droite, ATTENTION pensez à saisir le champ titre de la colonne de droite"));
			//echo $helpers['Form']->input('title_brothers', 'Titre colonne de droite', array('tooltip' => "Indiquez le titre qui sera affiché dans la colonne de droite pour les menus du même niveau (Activé que si vous avez cliqué sur la case précédente)"));
			?>
		</div>
	</div>
	<div id="seo">
		<div class="content nopadding">
			<?php 
			echo $helpers['Form']->input('slug', 'Url', array('tooltip' => "Indiquez l'url que vous souhaitez mettre en place. ATTENTION n'utiliser que des caractères autorisés pour l'url (Que des lettres, des chiffres et -)"));
			echo $helpers['Form']->input('page_title', 'Meta title', array('tooltip' => "Titre de la page (70 caractères maximum recommandé, par défaut ce champ aura pour valeur le champ Titre)"));
			echo $helpers['Form']->input('page_description', 'Meta description', array('tooltip' => "Résumé de la page html, 160 caractères maximum recommandé"));
			echo $helpers['Form']->input('page_keywords', 'Meta keywords', array('tooltip' => "Liste des mots-clés de la page html séparés par une virgule, 10-20 mots-clés maximum (Optionnel)"));		
			?>
		</div>
	</div>
	<div id="options">
		<div class="content nopadding">
			<?php 
			$categoriesList[0] = 'Pas de redirection';
			$categoriesList[-1] = "[&nbsp;&nbsp;&nbsp;Page d'accueil&nbsp;&nbsp;&nbsp;]";
			echo $helpers['Form']->input('redirect_category_id', 'Rediriger vers', array('type' => 'select', 'datas' => $categoriesList, 'tooltip' => "Vous permet de rediriger cette page vers une autre de la liste"));			
			echo $helpers['Form']->input('title_posts_list', 'Titre bloc article', array('tooltip' => "Indiquez le titre qui sera affiché au dessus de la liste des articles"));			
			
			if(!isset($formulaires)) { $formulaires = array (1 => 'Formulaire de contact'); } 
			echo $helpers['Form']->input('display_form', 'Formulaire', array('type' => 'select', 'datas' => $formulaires, 'tooltip' => "Indiquez le formulaire que vous souhaitez afficher sur la page", 'firstElementList' => "Sélectionnez un formulaire"));
			?>
		</div>
	</div>
	<div id="secure">
		<div class="content nopadding">
			<?php 
			echo $helpers['Form']->input('is_secure', 'Activer la protection de la page', array('type' => 'checkbox', 'tooltip' => "Cochez cette case pour diffuser cette page"));
			echo $helpers['Form']->input('txt_secure', 'Texte page sécurisée', array('type' => 'textarea', 'rows' => 5, 'cols' => 10, 'wysiswyg' => true,  'class' => 'xxlarge', 'tooltip' => "Saisissez ici le texte qui sera affiché si la page est sécurisée"));	
			?>
		</div>
	</div>
	<?php if($isSecure) { ?>			
		<div id="emailing">
			<div class="content nopadding">
				<?php 
				echo $helpers['Form']->input('send_mail', "Envoyer un email pour informer les utilisateurs de l'ajout (ou de la modification)", array('type' => 'checkbox', 'tooltip' => "En cochant cette case un email sera automatiquement envoyer à l'ensemble des utilisateurs référencés dans le système"));
				echo $helpers['Form']->input('message_mail', 'Contenu email newsletter', array('type' => 'textarea', 'rows' => 5, 'cols' => 10, 'wysiswyg' => true,  'class' => 'xxlarge', 'tooltip' => "Indiquez le texte qui sera envoyé par email"));
				?>
			</div>
		</div>
	<?php } ?>
</div>