<?php 

$email = WPBC_get_theme_settings('general_email');
$email = str_replace('.', '(dot)', $email);
$email = str_replace('@', '(at)', $email);
$instagram = WPBC_get_theme_settings('general_instagram');

$footer_form = WPBC_get_theme_settings('footer_form');
$footer_copyright = WPBC_get_theme_settings('footer_copyright');
?>


<div id="instagram" class="bg-white">

	<div class="container gpt-4 gpb-5">
		<div class="row">
			<div class="col-12">
				<?php if(!empty($instagram)){ ?>
				<p><b>@<?php echo $instagram; ?></b></p>
				<?php } ?>
			</div>
		</div>
	</div>

</div>


<div id="contact"></div>
<footer id="main-footer" class="gpt-6 gpb-1 text-white position-relative" data-inview-me="fixed-background" data-fixed-target="#footer-bg"> 
	
	<div class="container">
		
		<div class="row gpb-6">

			<div class="col-lg-2">
				<h2 class="section-title text-white gmb-2">Contact</h2>
			</div>

			<div class="col-lg-4 gmb-2">
				
				<?php if(!empty($email)){ ?> 
					<p><a class="antispam preserve-content-span" href="mailto:<?php echo $email; ?>" target="_blank">[icon_envelope color="#ffffff"] &nbsp;&nbsp;<span></span></a></p>
				<?php } ?>

				<?php if(!empty($instagram)){ ?>
					<p><a href="https://instagram.com/<?php echo $instagram; ?>" target="_blank">[icon_instagram color="#ffffff"] &nbsp;&nbsp;@<?php echo $instagram; ?></a></p>
				<?php } ?>
			
			</div>

			<div class="col-lg-6">
				<?php if(!empty($footer_form)){ ?>
				[contact-form-7 id="<?php echo $footer_form; ?>" title="Formulario de contacto"]
				<?php } ?>
			</div>

		</div>

		<div class="row row--copy">
			<div class="col-md-6 text-center text-md-left">
				<?php if(!empty($footer_copyright)){ ?>
				<p><?php echo $footer_copyright; ?></p>
				<?php } ?>
			</div>
			<div class="col-md-6 text-center text-md-right">
				<p><a class="text-white" href="http://nomadeweb.com" target="_blank">Diseño y desarrollo por [icon_nomade color="#ffffff"]</a></p>
			</div>
		</div>
	
	</div>

</footer>