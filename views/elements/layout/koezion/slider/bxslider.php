<?php 
//THKS TO AA
if(isset($sliders) && count($sliders) > 0) { 
	
	$css = array(
		'layout/'.$websiteParams['tpl_layout'].'/slider/bxslider/jquery.bxslider'
	);		
	echo $helpers['Html']->css($css, true);
	
	$js = array(
			'layout/'.$websiteParams['tpl_layout'].'/slider/bxslider/jquery.bxslider.min',
			'layout/'.$websiteParams['tpl_layout'].'/slider/bxslider/jquery.easing.1.3',
			'layout/'.$websiteParams['tpl_layout'].'/slider/bxslider/jquery.fitvids',
			'layout/'.$websiteParams['tpl_layout'].'/slider/bxslider/bxslider'
	);
	echo $helpers['Html']->js($js, true);
	?>
	<div class="container_alpha slider">			
		<ul class="bxslider">
			<?php 
			foreach($sliders as $k => $v) {	

				require_once(LIBS.DS.'simple_html_dom.php');
				
				$sliderImg = str_get_html($v['image']);
				$sliderImg->find('img', 0)->style = 'width: 918px;';				
				?><li><?php 
					echo $sliderImg;
					if(isset($v['content']) && !empty($v['content'])) { 
						echo '<div class="bx-caption">'.$v['content'].'</div>';
					} 
				?></li><?php 	
			}	
			?>
		</ul>
	</div>
<?php } ?>		