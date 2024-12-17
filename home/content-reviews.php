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
<section class="homereviews">
    <div class="homereviews__back">
    <img src="<?php echo $revos['reviews-back']['url']; ?>" alt="<?php bloginfo('name'); ?>">
    </div>
    <div class="homereviews__content container">
        <div class="homereviews__content-left">
            <h2 class="homereviews__content-title"><?php echo $revos['reviews-title']; ?></h2>
            <div class="homereviews__content-desc">
            <?php echo $revos['reviews-tеxt-left']; ?>
            </div>
        </div>
        <div class="homereviews__content-right">
            <div class="swiper homereviews__slider">
                <div class="swiper-wrapper homereviews__wrapper">
        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args2 = array(
            'order' 	 => 'DESC',
            'post_type' 	 => 'otzyvy',
            'paged'	         => $paged
        );

        $MY_QUERY = new WP_Query( $args2 );
        if ( $MY_QUERY->have_posts() ) :
            while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post(); 
            get_template_part( 'template-parts/content', 'reviews' );
            endwhile;
        endif;
        wp_reset_postdata();
        ?>
        </div>
        </div>
        </div>
    </div>
</section>