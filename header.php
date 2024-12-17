<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Revos
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<?php global $revos; ?>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="wrapper">
	<header class="header">
		<div class="header__top-line">
			<div class="header__top-content container">
				<div class="header__top-social">
				<?php get_template_part( 'template-parts/content', 'social' ); ?>
				</div>
				<div class="header__top-contact">
				<?php if($revos['phone']) { ?>
                <a href="tel:<?php echo str_replace(array("(", ")", "-", " "), "", $revos['phone']); ?>"><i class="icon-phone-alt"></i><?php echo $revos['phone']; ?></a>
                <?php } ?>
                <?php if($revos['email']) { ?>
                <a href="mailto:<?php echo $revos['email']; ?>"><i class="icon-envelope"></i><?php echo $revos['email']; ?></a>
                <?php } ?>
				</div>
				<button aria-label="menu" class="header__burger"><i class="icon-bars"></i></button> 
			</div>
		</div>
		<div class="header__center-line">
			<div class="header__center-content container">
				<div class="header__logo">
				<?php get_template_part( 'template-parts/content', 'logo' ); ?>
				</div>
				<div class="header__search">
				<?php if ( class_exists( 'WooCommerce' ) ) { get_product_search_form(); }  ?>
				</div>
				<div class="header__cart-block">
				<?php get_template_part( 'template-parts/content', 'cartblock' ); ?>
				</div>
			</div>
		</div>
		<div class="header__menu-line">
			<div class="header__menu-content container">
				<div class="header__menu-category">
				<?php if( has_nav_menu('menu-category') ) { ?>
					<div class="header__menu-category-wrapp">
					<i class="icon-bars"></i><a class="header__menu-category-link" href="javascript:void(0);"><span>Категории</span></a>
					<nav class="header__menu-cat">
					<?php Theme_menu_category(); ?>
					</nav>
				</div>
					<?php  } ?>	
				</div>
				<nav class="header__menu-primary">
				<button aria-label="menu-close" class="header__menu-close"><i class="icon-plus"></i></button>
			<?php if( has_nav_menu('menu-primary') ) {
				Theme_menu_primary();
			}
				?>
				</nav>
				<a class="header__popup-form" href="javascript:void(0);">Заказать звонок</a>
			</div>
		</div>
	</header><!-- #masthead -->
	<div class="content-wrapper">