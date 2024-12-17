<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Revos
 * 
 */
global $revos;
?>
<section class="category caruselhome shop sidebar container">
    <div class="title-home-wrapper">
    <?php if($revos['category-title-home']) {  ?>
        <h3 class="title-home"><span><?php echo $revos['category-title-home']; ?></span></h3>
        <?php }  ?>
        <?php if($revos['category-desc-home']) {  ?>
        <p class="desc-home"><?php echo $revos['category-desc-home']; ?></p>
        <?php }  ?>
    </div>
 <?php get_template_part( 'template-parts/category', 'carousel' ); ?>
</section>