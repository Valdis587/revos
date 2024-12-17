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
<section class="faq container">
    <div class="title-home-wrapper">
    <?php if($revos['faq-title-home']) {  ?>
        <h3 class="title-home"><span><?php echo $revos['faq-title-home']; ?></span></h3>
        <?php }  ?>
        <?php if($revos['faq-desc-home']) {  ?>
        <p class="desc-home"><?php echo $revos['faq-desc-home']; ?></p>
        <?php }  ?>
    </div>
    <div class="faq__content">
    <?php 
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
    'order' 	 => 'DESC',
    'post_type' 	 => 'faq',
    'paged'	         => $paged
);

$MY_QUERY = new WP_Query( $args );
if ( $MY_QUERY->have_posts() ) :
    while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post(); ?>
        <div class="faq__item">
            <div class="faq__title"><span><?php the_title(''); ?></span><i class="icon-plus"></i></div>
           <div class="faq__otvet">
           <?php the_content(); ?>
          </div>
        </div>
<?php 
	endwhile;
endif;
?>
    </div>
</section>