/*
Copyright (c) 2003-2011, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
*/

CKEDITOR.addTemplates(
	'default', {
		imagesPath:CKEDITOR.getUrl(CKEDITOR.plugins.getPath('templates')+'templates/images/'),
		templates:[
		    {
				title:'Texte catégorie',
				image:'txt_categorie.gif',
				description:'',
				html:''+
						'<h2 class="widgettitle">Lorem ipsum</h2>' +
						'<div class="hr"><div class="inner_hr"></div></div>' +
						'<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>'
			},
			{
				title:'Texte slider',
				image:'slider.gif',
				description:'',
				html:'' +					
						'<h3 class="widgettitle">Lorem ipsum</h3>' +
						'<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s.</p>' +
						'<p><a class="superbutton" href="/">Lorem ipsum</a></p>'
			},
			{
				title:'Texte focus',
				image:'focus.gif',
				description:'Image 48/48px',
				html:'' +
						'<h3 class="widgettitle">Lorem ipsum</h3>' +
						'<p>' +
							'<img alt="" src="" style="width: 48px; height: 48px; float: left; margin-right: 5px; margin-bottom: 5px;" />' +
							'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s.' +
						'</p>' +
						'<p>' + 
							'<a class="superbutton" href="/">Lorem ipsum</a>' + 
						'</p>'
			},
			{
				title:'Texte descriptif court article (V1)',
				image:'desc_court_article.gif',
				description:'Image 187/100px',
				html:'' +				
						'<p>' +
							'<img class="border_magic" alt="" src="" style="width: 187px; height: 100px; float: left; margin-right: 10px; margin-bottom: 10px;" />' +
							'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s.' +
						'</p>' +
						'<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s.</p>'
			},
			{
				title:'Texte descriptif court article (V2)',
				image:'desc_court_article.gif',
				description:'Image 100/157px',
				html:'' +				
						'<p>' +
							'<img alt="" class="border_magic" src="" style="width: 100px; height: 157px; float: left; margin-right: 10px; margin-bottom: 10px;" />' +
							'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s.' +
						'</p>' +
						'<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s.</p>'
			},
			{
				title:'Texte descriptif long article (V1)',
				image:'desc_long_article.gif',
				description:'Images 264/111px',
				html:'' +				
						'<h2 class="widgettitle">Lorem Ipsum is simply dummy text of the printing and typesetting industry</h2>' +
						'<div class="hr"><div class="inner_hr">&nbsp;</div></div>' +
						'<p><span class="dropcapspot">L</span>orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s.</p>' +
						'<div class="gs_4">' +
							'<a class="zoomer" href="/" rel="prettyPhoto"><img alt="" class="border_magic" src="" style="width: 264px; height: 111px; " /></a>' +
							'<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>' +
						'</div>' +
						'<div class="gs_4">' +
							'<a class="zoomer" href="/" rel="prettyPhoto"><img alt="" class="border_magic" src="" style="width: 264px; height: 111px; " /></a>' +
							'<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p></div>' +
						'<div class="gs_4 omega">' +
							'<a class="zoomer" href="/" rel="prettyPhoto"><img alt="" class="border_magic" src="" style="width: 264px; height: 111px; " /></a>' +
							'<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>' +
						'</div>' +
						'<div class="hr"><div class="inner_hr">&nbsp;</div></div>' +
						'<blockquote><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p></blockquote>' +
						'<div class="hr"><div class="inner_hr">&nbsp;</div></div>' +
						'<ul class="bullet-arrow">' +
							'<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry,</li>' +
							'<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry,</li>' +
							'<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry,</li>' +
							'<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry,</li>' +
							'<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry,</li>' +
							'<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry,</li>' +
							'<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry,</li>' +
							'<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry,</li>' +
							'<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>' +
						'</ul>' +
						'<p class="information"><strong>Lorem Ipsum :</strong><br />Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>' +
						'<div class="gs_4">' +
							'<a class="zoomer" href="/" rel="prettyPhoto"><img alt="" class="border_magic" src="" style="width: 264px; height: 111px; " /></a>' +
							'<ul class="bullet-dot">' +
								'<li>Lorem Ipsum is simply dummy text.</li>' +
								'<li><strong>Lorem Ipsum is simply dummy text.</strong></li>' +
								'<li>Lorem Ipsum is simply dummy text.</li>' +
							'</ul>' +
						'</div>' +
						'<div class="gs_4">' +
							'<a class="zoomer" href="/" rel="prettyPhoto"><img alt="" class="border_magic" src="" style="width: 264px; height: 111px; " /></a>' +
							'<ul class="bullet-dot">' +
								'<li>Lorem Ipsum is simply dummy text.</li>' +
								'<li><strong>Lorem Ipsum is simply dummy text.</strong></li>' +
								'<li>Lorem Ipsum is simply dummy text.</li>' +
							'</ul>' +
						'</div>' +
						'<div class="gs_4 omega">' +
							'<a class="zoomer" href="/" rel="prettyPhoto"><img alt="" class="border_magic" src="" style="width: 264px; height: 111px; " /></a>' +
							'<ul class="bullet-dot">' +
								'<li>Lorem Ipsum is simply dummy text.</li>' +
								'<li><strong>Lorem Ipsum is simply dummy text.</strong></li>' +
								'<li>Lorem Ipsum is simply dummy text.</li>' +
							'</ul>' +
						'</div>' +
						'<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>'
			},
			{
				title:'Texte descriptif long article (V2)',
				image:'desc_long_article.gif',
				description:'Images 100/157px et 187/100px',
				html:'' +				
						'<h2 class="widgettitle">Lorem Ipsum Dolor<span>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span></h2>' +
						'<div class="hr"><div class="inner_hr">&nbsp;</div></div>' +
						'<p>' +
							'<img alt="" class="border_magic" src="" style="width: 100px; height: 157px; float: left; margin-right: 10px; margin-bottom: 10px;" />' +
							'<span class="dropcapspot">L</span>orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.' +
						'</p>' +
						'<h4>Lorem</h4>' +
						'<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>' +
						'<h4>Lorem</h4>' +
						'<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>' +
						'<p class="information">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.<p>' +
						'<table cellpadding="0" cellspacing="0" id="ethernatable">' +
							'<tbody>' +
								'<tr>' +
									'<th id="MatrixItems">&nbsp;</th>' +
									'<th class="tablecol"><h6>Lorem</h6></th>' +
									'<th class="tablecol"><h6>Ipsum</h6></th>' +
									'<th class="tablecol"><h6>Dolor</h6></th>' +
									'<th class="tablecol"><h6>Sit Amet</h6></th>' +
								'</tr>' +
								'<tr>' +
									'<td class="tableid first"><h6>Lorem</h6></td>' +
									'<td class="odd">Ipsum</td>' +
									'<td class="even">Dolor</td>' +
									'<td class="odd">Sit</td>' +
									'<td class="even">Amet</td>' +
								'</tr>' +
								'<tr>' +
									'<td class="tableid first"><h6>Lorem</h6></td>' +
									'<td class="odd">Ipsum</td>' +
									'<td class="even">Dolor</td>' +
									'<td class="odd">Sit</td>' +
									'<td class="even">Amet</td>' +
								'</tr>' +
								'<tr>' +
									'<td class="tableid first"><h6>Lorem</h6></td>' +
									'<td class="odd">Ipsum</td>' +
									'<td class="even">Dolor</td>' +
									'<td class="odd">Sit</td>' +
									'<td class="even">Amet</td>' +
								'</tr>' +
							'</tbody>' +
						'</table>' +
						'<p style="text-align: center;"><em>Lorem ipsum dolor sit amet</em></p>' +
						'<p><img alt="" class="border_magic" src="" style="width: 187px; height: 100px; float: left; margin-right: 10px; margin-bottom: 10px;" />Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s.</p>' +
						'<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s.</p>'
			},
			{
				title:'Texte footer (Colonne gauche)',
				image:'footer.gif',
				description:'',
				html:'' +
						'<h4 class="widgettitle">Lorem ipsum</h4>' +
						'<p>' +
							'Lorem Ipsum is simply dummy ? Lorem Ipsum !<br />' +
							'<strong>Lorem Ipsum :</strong> 11 11 11 11 11<br />' +
							'<strong>Lorem Ipsum :</strong> 22 22 22 22 22<br />' +
							'<strong>Lorem Ipsum :</strong> <a href="/">Lorem Ipsum</a>' +
						'</p>'
			},
			{
				title:'Texte footer (Colonne droite)',
				image:'footer.gif',
				description:'',
				html:'' +
						'<h4 class="widgettitle">Lorem ipsum</h4>' +
						'<ul>' +
							'<li>Lorem ipsum</li>' +
							'<li>Lorem ipsum</li>' +
							'<li>Lorem ipsum</li>' +
							'<li><a href="/">Lorem ipsum</a></li>' +
						'</ul>'
			},
			{
				title:'Titre niveau 1 et sous-titre',
				image:'titre_sous_titre.gif',
				description:'',
				html:''+
						'<h1>' + 
							'Lorem ipsum' + 
							'<span>Dolor sit amet</span>' + 
						'</h1>'
			},
			{
				title:'Titre niveau 2 et sous-titre',
				image:'titre_sous_titre.gif',
				description:'',
				html:''+
						'<h2>' + 
							'Lorem ipsum' + 
							'<span>Dolor sit amet</span>' + 
						'</h2>'
			},
			{
				title:'Titre niveau 3 et sous-titre',
				image:'titre_sous_titre.gif',
				description:'',
				html:''+
						'<h3>' + 
							'Lorem ipsum' + 
							'<span>Dolor sit amet</span>' + 
						'</h3>'
			},
			{
				title:'Colonne de prix',
				image:'pricing.gif',
				description:'',
				html:'' + 
						'<div class="pricing">' +
							'<div class="pricing_column">' + 
								'<div class="pricing_blurb">' +
									'<h3>BASIC</h3>' +
									'<h2>$50</h2>' +
								'</div>' +
								'<div class="specs"><p>Per year</p></div>' +
								'<div class="specs"><p>1TB Bandwidth</p></div>' +
								'<div class="specs"><p>1GB Space</p></div>' +
								'<div class="specs"><p>Hot Dogs</p></div>' +
								'<div class="buyme"><p><a href="/" class="superbutton">Buy Now!</a></p></div>' +
							'</div>' +
						'</div>'
			},
			{
				title:'Menu accordéon',
				image:'accordeon.gif',
				description:'',
				html:'' +
						'<h3 class="toggle">Lorem ipsum</h3>' +
						'<div class="toggler">' +
							'<p>Proin tristique dictum vehicula. Vivamus non tellus ligula. Cras arcu tortor, euismod id lacinia quis, ultricies sagittis urna. Etiam feugiat porttitor ullamcorper.</p>' +
						'</div>'
			},
			{
				title:'Portfolio 1 colonne (avec colonne droite)',
				image:'portfolio_1c.gif',
				description:'Image 300/200px',
				html:'' +
						'<div class="gs_8 omega">' +
							'<a href="/" class="zoomer" rel="prettyPhoto"><img src="" alt="" class="border_magic alignleft" style="width: 300px; height: 200px;" /></a>' +
							'<h3>Vivamus non tellus</h3>' +
							'<p>Proin tristique dictum vehicula. Vivamus non tellus ligula. Cras arcu tortor, euismod id lacinia quis, ultricies sagittis urna. Etiam feugiat porttitor ullamcorper.</p>' +
							'<p><a href="/">Lorem ipsum</a></p>' +
						'</div>'
			},
			{
				title:'Portfolio 1 colonne (pleine page)',
				image:'portfolio_1c.gif',
				description:'Image 649/420px',
				html:'' +
						'<div class="gs_12 omega">' +
							'<a href="/" class="zoomer" rel="prettyPhoto"><img src="" alt="" class="border_magic alignleft" style="width: 649px; height: 420px;" /></a>' +
							'<h3>Vivamus non tellus</h3>' +
							'<p>Proin tristique dictum vehicula. Vivamus non tellus ligula. Cras arcu tortor, euismod id lacinia quis, ultricies sagittis urna. Etiam feugiat porttitor ullamcorper.</p>' +
							'<p><a href="/">Lorem ipsum</a></p>' +
						'</div>'
			},
			{
				title:'Portfolio 2 colonnes (avec colonne droite)',
				image:'portfolio_2c.gif',
				description:'Images 264/111px',
				html:'' +
						'<div class="gs_4">' +
							'<a href="/" class="zoomer" rel="prettyPhoto"><img src="" alt="" class="border_magic" style="width: 264px; height: 111px;" /></a>' +
							'<h3>Vivamus non tellus ligula.</h3>' +
							'<p>Proin tristique dictum vehicula. Vivamus non tellus ligula. Cras arcu tortor, euismod id lacinia quis, ultricies sagittis urna. Etiam feugiat porttitor ullamcorper.</p>' +
							'<p><a href="/">Lorem ipsum</a></p>' +
						'</div>' + 
						'<div class="gs_4 omega">' +
							'<a href="/" class="zoomer" rel="prettyPhoto"><img src="" alt="" class="border_magic" style="width: 264px; height: 111px;" /></a>' +
							'<h3>Vivamus non tellus ligula.</h3>' +
							'<p>Proin tristique dictum vehicula. Vivamus non tellus ligula. Cras arcu tortor, euismod id lacinia quis, ultricies sagittis urna. Etiam feugiat porttitor ullamcorper.</p>' +
							'<p><a href="/">Lorem ipsum</a></p>' +
						'</div>'
			},
			{
				title:'Portfolio 2 colonnes (pleine page)',
				image:'portfolio_2c.gif',
				description:'Images 418/200px',
				html:'' +
						'<div class="gs_6">' +
							'<a href="/" class="zoomer" rel="prettyPhoto"><img src="" alt="" class="border_magic" style="width: 418px; height: 200px;" /></a>' +
							'<h3>Vivamus non tellus ligula.</h3>' +
							'<p>Proin tristique dictum vehicula. Vivamus non tellus ligula. Cras arcu tortor, euismod id lacinia quis, ultricies sagittis urna. Etiam feugiat porttitor ullamcorper.</p>' +
							'<p><a href="/">Lorem ipsum</a></p>' +
						'</div>' + 
						'<div class="gs_6 omega">' +
							'<a href="/" class="zoomer" rel="prettyPhoto"><img src="" alt="" class="border_magic" style="width: 418px; height: 200px;" /></a>' +
							'<h3>Vivamus non tellus ligula.</h3>' +
							'<p>Proin tristique dictum vehicula. Vivamus non tellus ligula. Cras arcu tortor, euismod id lacinia quis, ultricies sagittis urna. Etiam feugiat porttitor ullamcorper.</p>' +
							'<p><a href="/">Lorem ipsum</a></p>' +
						'</div>'
			},
			{
				title:'Portfolio 3 colonnes (pleine page)',
				image:'portfolio_3c.gif',
				description:'Images 264/111px',
				html:'' +
						'<div class="gs_4">' + 
							'<a href="/" class="zoomer" rel="prettyPhoto"><img src="" alt="" class="border_magic" style="width: 264px; height: 111px;" /></a>' + 
							'<h3>Vivamus non tellus</h3>' + 
							'<p>Proin tristique dictum vehicula. Vivamus non tellus ligula. Cras arcu tortor, euismod id lacinia quis, ultricies sagittis urna. Etiam feugiat porttitor ullamcorper.</p>' + 
							'<p><a href="/">Lorem ipsum</a></p>' + 
						'</div>' + 
						'<div class="gs_4">' + 
							'<a href="/" class="zoomer" rel="prettyPhoto"><img src="" alt="" class="border_magic" style="width: 264px; height: 111px;" /></a>' + 
							'<h3>Cras arcu tortor</h3>' + 
							'<p>Proin tristique dictum vehicula. Vivamus non tellus ligula. Cras arcu tortor, euismod id lacinia quis, ultricies sagittis urna. Etiam feugiat porttitor ullamcorper.</p>' + 
							'<p><a href="/">Lorem ipsum</a></p>' + 
						'</div>' + 
						'<div class="gs_4 omega">' + 
							'<a href="/" class="zoomer" rel="prettyPhoto"><img src="" alt="" class="border_magic" style="width: 264px; height: 111px;" /></a>' + 
							'<h3>Donec eget</h3>' + 
							'<p>Proin tristique dictum vehicula. Vivamus non tellus ligula. Cras arcu tortor, euismod id lacinia quis, ultricies sagittis urna. Etiam feugiat porttitor ullamcorper.</p>' + 
							'<p><a href="/">Lorem ipsum</a></p>' + 
						'</div>'
			},
			{
				title:'Portfolio 4 colonnes (pleine page)',
				image:'portfolio_4c.gif',
				description:'Images 187/100px',
				html:'' +
						'<div class="gs_3">' +
							'<a href="/" class="zoomer" rel="prettyPhoto"><img src="" alt="" class="border_magic" style="width: 187px; height: 100px;" /></a>' +
							'<h3>Sultricies sagittis</h3>' +
							'<p>Proin tristique dictum vehicula. Vivamus non tellus ligula.</p>' +
							'<p><a href="/">Lorem ipsum</a></p>' +
						'</div>' +
						'<div class="gs_3">' +
							'<a href="/" class="zoomer" rel="prettyPhoto"><img src="" alt="" class="border_magic" style="width: 187px; height: 100px;" /></a>' +
							'<h3>Vivamus non tellus</h3>' +
							'<p>Proin tristique dictum vehicula. Vivamus non tellus ligula.</p>' +
							'<p><a href="/">Lorem ipsum</a></p>' +
						'</div>' +
						'<div class="gs_3">' +
							'<a href="/" class="zoomer" rel="prettyPhoto"><img src="" alt="" class="border_magic" style="width: 187px; height: 100px;" /></a>' +
							'<h3>Proin tristique</h3>' +
							'<p>Proin tristique dictum vehicula. Vivamus non tellus ligula.</p>' +
							'<p><a href="/">Lorem ipsum</a></p>' +
						'</div>' +
						'<div class="gs_3 omega">' +
							'<a href="/" class="zoomer" rel="prettyPhoto"><img src="" alt="" class="border_magic" style="width: 187px; height: 100px;" /></a>' +
							'<h3>Aenean pulvinar</h3>' +
							'<p>Proin tristique dictum vehicula. Vivamus non tellus ligula.</p>' +
							'<p><a href="/">Lorem ipsum</a></p>' +
						'</div>'
			},
			{
				title:'Images articles 2 colonnes (Pleine page)',
				image:'portfolio_2c.gif',
				description:'Images 276/148px',
				html:'' +
						'<div class="gs_4">' +
							'<a class="zoomer" href="/"><img alt="" class="border_magic" src="" style="width: 276px; height: 148px;" /></a>' +
							'<h3>Lorem Ipsum</h3>' +
							'<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>' +
						'</div>' +
						'<div class="gs_4 omega">' +
							'<a class="zoomer" href="/"><img alt="" class="border_magic" src="" style="width: 276px; height: 148px;" /></a>' +
							'<h3>Lorem Ipsum</h3>' +
							'<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>' +
						'</div>'
			},
			{
				title:'Tableau',
				image:'tableau.gif',
				description:'',
				html:'' +
						'<table cellspacing="0" cellpadding="0" id="ethernatable">' +
							'<tbody>' +
								'<tr>' +
									'<th id="MatrixItems">&nbsp;</th>' +
									'<th class="tablecol">' +
										'<h6>Examples</h6>' +
									'</th>' +
									'<th class="tablecol">' +
										'<h6>Of</h6>' +
									'</th>' +
									'<th class="tablecol">' +
										'<h6>Columns</h6>' +
									'</th>' +
									'<th class="tablecol">' +
										'<h6>Titles</h6>' +
									'</th>' +
								'</tr>' +
								'<tr>' +
									'<td class="tableid first"><h6>Examples</h6></td>' +
									'<td class="odd">&mdash;</td>' +
									'<td class="even">78</td>' +
									'<td class="odd">874</td>' +
									'<td class="even">6765</td>' +
								'</tr>' +
								'<tr>' +
									'<td class="tableid"><h6>Of</h6></td>' +
									'<td class="odd">322</td>' +
									'<td class="even">21</td>' +
									'<td class="odd">4342</td>' +
									'<td class="even">43421</td>' +
								'</tr>' +
								'<tr>' +
									'<td class="tableid"><h6>The</h6></td>' +
									'<td class="odd">12</td>' +
									'<td class="even">64563</td>' +
									'<td class="odd">8773</td>' +
									'<td class="even">24</td>' +
								'</tr>' +
								'<tr>' +
									'<td class="tableid"><h6>Row</h6></td>' +
									'<td class="odd">242</td>' +
									'<td class="even">&mdash;</td>' +
									'<td class="odd">165</td>' +
									'<td class="even">&mdash;</td>' +
								'</tr>' +
								'<tr>' +
									'<td class="tableid last"><h6>Titles</h6></td>' +
									'<td class="odd last">231</td>' +
									'<td class="even last">4622</td>' +
									'<td class="odd last">&mdash;</td>' +
									'<td class="even last">8684</td>' +
								'</tr>' +
							'</tbody>' +
						'</table>'
			},
			{
				title:'Saut de ligne',
				image:'breakline.gif',
				description:'',
				html:'<div class="hr"><div class="inner_hr"></div></div>'
			},
			{
				title:'Clear',
				image:'breakline.gif',
				description:'',
				html:'<div class="clearfix"></div>'
			},
			{
				title:'Image zoomée',
				image:'image_zoom.gif',
				description:'Image 264/111px',
				html:'<a class="zoomer" href="/" rel="prettyPhoto"><img alt="" class="border_magic" src="" style="width: 264px; height: 111px; " /></a>'
			}
		]
	}
);