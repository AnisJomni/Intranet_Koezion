<div class="title">
	<h2>
		<?php echo _("Articles (Blog)")." - "; ?> 
		<?php echo ($pager['totalElements'] > 0) ? $pager['totalElements'] : 'Aucun'; ?> éléments
	</h2>
	<?php echo $helpers['Html']->backoffice_button_title($params['controllerFileName'], 'add', "Ajouter"); ?>
</div>