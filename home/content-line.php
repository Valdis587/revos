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
<section class="line">
    <div class="line__wrapper">
    <div class="line__group">
    <?php 
                   $terms = get_terms( array(
                    'taxonomy' => 'product_cat',
                    'hide_empty' => true,
                    'pad_counts'=> true,
                    'orderby' => 'name',
                    //'parent' => 
                ) );
                if($terms) {
                    foreach($terms as $term) { ?> 
        <div class="line__text">
            <i class="icon-star"></i><span><?php echo $term->name;?></span>
        </div>
        <?php } } ?>
    </div>
    <div class="line__group" aria-hidden="true">
        <?php if($terms) {
                    foreach($terms as $term) { ?> 
        <div class="line__text">
            <i class="icon-star"></i><span><?php echo $term->name;?></span>
        </div>
        <?php } } ?>
    </div>
    </div>
</section>