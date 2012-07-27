<div class="smarttabs nobottom">
	<ul class="anchor">
		<li><a href="#general"><?php echo _("Général"); ?></a></li>
		<li><a href="#websites_users"><?php echo _("Sites accessibles"); ?></a></li>
	</ul>
	<div id="general">
		<div class="content nopadding">
			<?php 
			echo $helpers['Form']->input('name', "<i>(*)</i> Libellé du groupe", array('tooltip' => "Indiquez le libellé du groupe d'utilisateurs"));
			echo $helpers['Form']->input('online', 'En ligne', array('type' => 'checkbox', 'tooltip' => "Cochez cette case pour diffuser ce groupe d'utilisateurs"));
			?>
		</div>
	</div>
	<div id="websites_users">
		<div class="content nopadding">
			<div class="row" style="overflow:hidden;">
				<label>
					<?php echo $helpers['Html']->img('backoffice/tooltip.png', array("original-title" => "Cochez le (ou les) site(s) que cet utilisateur peut administrer", "class" => "tip-w", "style" => "float: left; margin-right: 5px; cursor: pointer;", "alt" => "tooltip")); ?>
					Site(s) administrable(s)
				</label>
				<div class="rowright">
					<?php 
					foreach($websitesList as $id => $name) {
						?><span class="checkbox" style="float: left; display: block; margin: 0 20px 20px 0; width: 15%; line-height: 15px;"><?php
						echo $helpers['Form']->input('website_id.'.$id, $name, array('type' => 'checkbox', 'div' => false));
						?></span><?php
					}
					?>
				</div>
			</div>
		</div>
	</div>
</div>