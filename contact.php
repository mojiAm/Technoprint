<?php 
	/*
		Template Name: contact
	*/
	get_template_part('./inc/header'); 
?>

<section class="contact">
	<div class="container">
		<!-- start Title of each page -->
		<?php get_template_part('./inc/title'); ?>
		<!-- end Title of each page -->
		<div class="form-detail">
			<div class="form">
				<div class="tit"><h2>تماس با ما</h2></div>
				<div class="text"><p>با تشکر از بازدید سایت شما می توانید از راه زیر با ما تماس حاصل فرمائید.</p></div>
				<form action="<?php bloginfo('template_url') ?>/mail.php" id="contact" method="post" target="ifrm">
					<p><span>*</span> نام و نام خانوادگی</p>
					<input type="text"  class="text" name="name" id="name" autocomplete="off" />
					<p><span>*</span> ایمیل</p>
					<input type="text" class="text" name="email" id="email" autocomplete="off" />
					<p><span>*</span> پیام</p>
					<textarea name="message" id="message" cols="25" rows="5" ></textarea>
					<p>پر کردن فیلدهای <span>ستاره دار</span> الزامیست.</p>
					<input type="submit" class="button" id="submit" name="submit" value="ارسال" />
				</form>
				<iframe id='ifrm' name='ifrm' src="" frameborder="0" scrolling="no"></iframe>
			<div class="badboy"></div>
			</div>
			<div class="detail">
				<div class="phone-pic">
					<div class="map">
						<iframe width="211" height="322" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps/ms?msa=0&amp;msid=208152577024565193217.0004c1c95d80b1d14a8b2&amp;hl=en&amp;ie=UTF8&amp;t=m&amp;ll=36.313362,59.561949&amp;spn=0.011135,0.009012&amp;z=15&amp;output=embed"></iframe>
					</div>
				</div>
			</div>
			<div class="badboy"></div>
			<div class="addres">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
</section>

<?php get_template_part('./inc/footer') ?>