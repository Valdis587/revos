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
<section class="feautered caruselhome shop sidebar container">
    <div class="title-home-wrapper">
    <?php if($revos['feutered-title-home']) {  ?>
        <h3 class="title-home"><span><?php echo $revos['feutered-title-home']; ?></span></h3>
        <?php }  ?>
        <?php if($revos['feutered-desc-home']) {  ?>
        <p class="desc-home"><?php echo $revos['feutered-desc-home']; ?></p>
        <?php }  ?>
    </div>
        <?php 
           $query_args = array(
            'post_type' => 'product',
            'tax_query' => array(
                array(
                    'taxonomy' => 'product_visibility',
                    'field'    => 'name',
                    'terms'    => 'featured',
                ),
            ),
        );
        $r = new WP_Query( $query_args  );
        if ( $r->have_posts() ) {
    do_action( 'start_wrapper_home_carousel' );
                 while ( $r->have_posts() ) {
                       global $product;
                       $r->the_post();
                       wc_get_template_part( 'content', 'product' );
                       } 
                do_action( 'end_wrapper_home_carousel' );
           ?>
        <?php }  wp_reset_postdata();
        ?> 
</section>
