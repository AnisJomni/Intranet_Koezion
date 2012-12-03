<div id="top-bar">
	<ul>		
		<li class="nolink"><?php echo _("Bonjour"); ?> <?php echo Session::read("Backoffice.User.name"); ?></li>		
		<?php 
		if($nbFormsContacts > 0) { 
			
			?><li><a href="<?php echo Router::url('backoffice/contacts/index'); ?>"><?php echo $helpers['Html']->img('backoffice/icon-message.png', array('alt' => _("Messages Internautes"))); ?> <?php echo _("Messages"); ?><span><?php echo $nbFormsContacts; ?></span></a></li><?php
		}
		
		if($nbPostsComments > 0) { 
			
			?><li><a href="<?php echo Router::url('backoffice/posts_comments/index'); ?>"><?php echo $helpers['Html']->img('backoffice/icon-message.png', array('alt' => _("Commentaires Internautes"))); ?> <?php echo _("Commentaires articles"); ?><span><?php echo $nbPostsComments; ?></span></a></li><?php 
		}
		
		$websites = Session::read('Backoffice.Websites');
		$websitesListe = $websites['liste'];
		$currentWebsite = Session::read('Backoffice.Websites.current');		
		?>
		<li class="browse_website"><a href="<?php echo $websites['details'][$currentWebsite]['url']; ?>" target="_blank"><?php echo $helpers['Html']->img('backoffice/website.png', array('alt' => _("Sites Internet"))); ?></a></li>
		<li class="noborder">
			<?php			
			echo _("Site courant").' : '.$websitesListe[$currentWebsite];
			if(count($websitesListe) > 1) {
				?>
				<ul class="websites">
					<?php foreach($websitesListe as $websiteId => $websiteLibelle) { ?>
						<li><a href="<?php echo Router::url('backoffice/websites/change_default/'.$websiteId); ?>"><?php echo _("Utiliser").' '.$websiteLibelle; ?></a></li>			
					<?php } ?>				
				</ul>				
				<?php 
			}
			?>
		</li>
		<?php if(Session::user('role') == 'admin') { ?>
			<?php /* ?><li><a href="<?php echo Router::url('backoffice/users/index'); ?>"><?php echo $helpers['Html']->img('backoffice/icon-profile.png', array('alt' => _("Gestion utilisateurs"))); ?> <?php echo _("Utilisateurs"); ?></a></li><?php */ ?>
			<li>
				<img src="<?php echo BASE_URL; ?>/img/backoffice/icon-settings.png" alt="Settings" /> <?php echo _("Paramètres"); ?>
				<ul>
					<?php /* ?><li><a href="<?php echo Router::url('backoffice/websites/index'); ?>"><?php echo _("Gestion des sites Internet"); ?></a></li>
					<li><a href="<?php echo Router::url('backoffice/users/index'); ?>"><?php echo _("Gestion des utilisateurs"); ?></a></li>
					<li><a href="<?php echo Router::url('backoffice/plugins/index'); ?>"><?php echo _("Gestion des plugins"); ?></a></li>					
					<li class="nolink center">---------- <?php echo _("FICHIERS DE CONF"); ?> ----------</li><?php */ ?>	
					<li><a href="<?php echo Router::url('backoffice/configs/database_liste'); ?>"><?php echo _("Base de données"); ?></a></li>			
					<li><a href="<?php echo Router::url('backoffice/configs/mailer_liste'); ?>"><?php echo _("Envoi de mails"); ?></a></li>			
					<li><a href="<?php echo Router::url('backoffice/configs/router_liste'); ?>"><?php echo _("Gestion des routes"); ?></a></li>			
					<li><a href="<?php echo Router::url('backoffice/configs/posts_liste'); ?>"><?php echo _("Articles"); ?></a></li>
					<li><a href="<?php echo Router::url('backoffice/configs/exports_liste'); ?>"><?php echo _("Exports"); ?></a></li>
					<?php /* ?><li><a href="<?php echo Router::url('backoffice/configs/sessions_liste'); ?>"><?php echo _("Sessions"); ?></a></li><?php */ ?>	
				</ul>
			</li>
			<?php /* ?><li><a href="<?php echo Router::url('backoffice/websites/index'); ?>"><?php echo $helpers['Html']->img('backoffice/icon-websites.png', array('alt' => _("Gestion des Sites Internet"))); ?> <?php echo _("Sites Internet"); ?></a></li><?php */ ?>
		<?php } ?>			
		
		<li class="logout"><a href="<?php echo Router::url('users/logout'); ?>" title="Logout"><?php echo $helpers['Html']->img('backoffice/logout.png', array('alt' => _("Déconnexion"))); ?></a></li>
	</ul>
</div>