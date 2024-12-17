<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Revos
 * 
 */
global $revos; ?>
<section class="banners">
    <div class="banners__content container">
        <div class="banners__item">
            <img src="<?php echo $revos['banner1']['url'] ?>" alt="<?php bloginfo('name'); ?>">
        </div>
        <div class="banners__item">
        <img src="<?php echo $revos['banner2']['url'] ?>" alt="<?php bloginfo('name'); ?>">
        </div>
    </div>
</section>