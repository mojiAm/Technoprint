	<footer>
		<!-- Main Footer -->
		<div class="main-footer">
			<div class="container">
				<div class="first">
					<div class="tit">
						<h2>مطالب مرتبط</h2>
					</div>
					<?php $args = array(
					    'numberposts' => 2,
					    'offset' => 0,
					    'category' => 0,
					    'orderby' => 'post_date',
					    'order' => 'DESC',
					    'include' => '',
					    'exclude' => '',
					    'meta_key' => '',
					    'meta_value' =>'',
					    'post_type' => 'article',
					    'post_status' => 'draft, publish, future, pending, private',
					    'suppress_filters' => true 
					    ); 

						$recent_posts = wp_get_recent_posts( $args );

						foreach( $recent_posts as $recent ){

							$url     = get_permalink($recent["ID"]);
							$title   = $recent["post_title"];
							$pict    = get_the_post_thumbnail($recent["ID"], "medium");

							echo "<div class='title'>
	                               	<h2> $title </h2>
								  </div>
								  <div class='text'>
									<a href=\"$url\"><p>متن مقاله اول متن مقاله اول متن مقاله اول متن مقاله اول متن مقاله اول</p></a>
								  </div>";
						}
					?>
				</div>
				<div class="second">
					<div class="tit">
						<h2>لینک های مفید</h2>
					</div>
					<div class="click-here">
						<a href="http://www.thebarcodewarehouse.co.uk/default.aspx" target="_blank">
							<img src="<?php bloginfo('template_url'); ?>/images/footer-useful-link.png" alt="Barcode warehouse" />
						</a>
						<p>Barcode warehouse</p>
					</div>
					<div class="badboy"></div>
					<div class="click-here">
						<a href="http://www.barcodesinc.com/cats/barcode.htm" target="_blank">
							<img src="<?php bloginfo('template_url'); ?>/images/footer-useful-link.png" alt="Barcodes inc" />
						</a>
						<p>Barcodes inc</p>
					</div>
					<div class="badboy"></div>
					<div class="click-here">
						<a href="http://www.barcodegiant.com" target="_blank">
							<img src="<?php bloginfo('template_url'); ?>/images/footer-useful-link.png" alt="" />
						</a>
						<p>Barcode giant</p>
					</div>
					<div class="badboy"></div>
				</div>
				<div class="third">
					<div class="tit">
						<h2>پیگیری ما</h2>
					</div>
					<ul>
						<li class="rss"><a href="./"></a></li>
						<li class="twitter"><a href="./"></a></li>
						<li class="facebook"><a href="./"></a></li>
						<li class="flickr"><a href="./"></a></li>
						<li class="youtube"><a href="./"></a></li>
					</ul>
				</div>
				<div class="forth">
					<div class="tit">
						<h2>پیوستن به ما</h2>
					</div>
					<form action="<?php bloginfo('template_url') ?>/justmail.php" method="post" id="contact" target="ifrm">
						<p>* نام و نام خانوادگی</p>
						<input type="text" class="text" name="name" id="name" autocomplete="off" />
						<p>* ایمیل</p>
						<input type="text" class="text" name="email" id="email" autocomplete="off" />
						<p>پر کردن فیلدهای ستاره دار الزامیست</p>
						<button type="submit">ارسال</button>
					</form>
					<iframe id='ifrm' name='ifrm' src="" frameborder="0" scrolling="no"></iframe>
					<div class="badboy"></div>
				</div>
				<div class="badboy"></div>
			</div>
		</div>
		<!-- Bot Footer -->
		<div class="bot-footer">
			<div class="container">
				<div class="top">
					<a href="#myAnchor" id="anchor1" class="anchorLink"><p>بالا</p></a>
					<div class="badboy"></div>
				</div>
				<div class="copyright">
					<p>
						کپی رایت 1391 - کلیه حقوق این سایت متعلق به تکنو پرینت می باشد.

					</p>
					<p class="company">
						<a href="http://www.mediateq.ir" target="_blank">Designed by Mediateq</a>
					</p>
					<div class="amar">
						<div style="display:none;">
							<script type="text/javascript" src="http://counter.toolsir.com/secure.js"></script>
							<script type="text/javascript">
							  var _torder = '&pic=1';
							  var _turl = 'http://www.technoprints.ir';
							  _tCounter (_torder,_turl);
							</script>
						</div>
						<a href="http://www.toolsir.com/counter/url/technoprints.ir" target="_blank" title="مشاهده کامل آمار"><img src="<?php bloginfo('template_url'); ?>/images/chart.gif" title="گزارش آمار" alt="شمارنده" width="19" height="16" /></a>
					</div>
					<div class="badboy"></div>
				</div>
				<div class="menu">
					<nav>
						<?php
							wp_nav_menu( array(
								'theme_location'  => 'footermenu',
							    'container'       => false, 
							    'container_class' => '', 
							    'menu_class'      => '', 
							    'before'          => '<p>',
							    'after'           => '</p>',
							    'link_before'     => '',
							    'link_after'      => '',
							    'items_wrap'      => '<menu>%3$s</menu>'
							));
						?>
						<div class="badboy"></div>
					</nav>
				</div>
				<div class="badboy"></div>
			</div>
		</div>
	</footer>
</body>
</html>