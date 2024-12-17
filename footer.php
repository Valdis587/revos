<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Revos
 */
global $revos;
?>
</div>
	<footer class="footer">
		<div class="footer__content container">
			<div class="footer__contact">
				<h5 class="footer__title"><?php echo $revos['footer-title1'] ?></h5>
				<ul class="footer__contact-list">
			<?php if($revos['adres']) { ?>
                <li><i class="icon-map-marker-alt"></i><?php echo $revos['adres'] ?></li>
                <?php } ?>
				<?php if($revos['phone']) { ?>
					<li><i class="icon-phone-alt"></i><a href="tel:<?php echo str_replace(array("(", ")", "-", " "), "", $revos['phone']) ?>"><?php echo $revos['phone'] ?></a></li>
				<?php } ?>
				<?php if($revos['email']) { ?>
                    <li><i class="icon-envelope"></i><a href="mailto:<?php echo $revos['email'] ?>"><?php echo $revos['email'] ?></a></li>
					<?php } ?>
					<?php if($revos['time-york']) { ?>
                    <li><i class="icon-clock"></i><?php echo $revos['time-york'] ?></li>
					<?php } ?>
            </ul> 
			</div>
			<div class="footer__menu">
			<?php if( has_nav_menu('menu-page') ) { ?>
				<h5 class="footer__title"><?php echo $revos['footer-title2'] ?></h5>
				<?php Theme_menu_page(); } ?>
			</div>
			<div class="footer__menu">
			<?php if( has_nav_menu('menu-category-footer') ) { ?>
				<h5 class="footer__title"><?php echo $revos['footer-title3'] ?></h5>
				<?php Theme_menu_cat_footer(); } ?>
			</div>
			<div class="footer__menu">
			<?php if( has_nav_menu('menu-service') ) { ?>
				<h5 class="footer__title"><?php echo $revos['footer-title4'] ?></h5>
				<?php Theme_menu_service(); } ?>
			</div>
		</div>
		<div class="footer__bottom container">
			<div class="footer__bottom-left">
			<?php get_template_part( 'template-parts/content', 'social' ); ?>
			</div>
			<div class="footer__bottom-right">
			<?php get_template_part( 'template-parts/content', 'pay' ); ?>
			</div>
		</div>
		<div class="footer__copy">
		<p><?php echo $revos['copy']; ?></p>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php 
 if($revos['yandex']) {
	 echo $revos['yandex'];
  }
  if($revos['google']) {
	 echo $revos['google'];
  }
 ?>
<?php wp_footer(); ?>
</body>
</html>
