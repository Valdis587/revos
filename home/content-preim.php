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
<section class="preim container">
    <div class="title-home-wrapper">
    <?php if($revos['preim-title-home']) {  ?>
        <h3 class="title-home"><span><?php echo $revos['preim-title-home']; ?></span></h3>
        <?php }  ?>
        <?php if($revos['preim-desc-home']) {  ?>
        <p class="desc-home"><?php echo $revos['preim-desc-home']; ?></p>
        <?php }  ?>
    </div>
    <div class="preim__content">
    <?php
        foreach ($revos['preim-back'] as $tab => $key) { $i++; ?>
        <div class="preim__item">
            <div class="preim__img">
            <img src="<?php echo $key['url']; ?>" alt="<?php echo $revos['preim-title'][$i-1]; ?>">
            </div>
            <div class="preim__info">
                <h4 class="preim__title"><?php echo $revos['preim-title'][$i-1]; ?></h4>
                <p class="preim__desc"><?php echo $revos['preim-desc'][$i-1]; ?></p>
            </div>
        </div>
        <?php } ?>
    </div>
</section>
