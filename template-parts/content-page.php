<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Revos
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php revos_post_thumbnail(); 
		the_content(); ?>
</article><!-- #post-<?php the_ID(); ?> -->
