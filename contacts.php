<?php
/*
Template Name: Контакты
*/
get_header();
get_template_part( 'template-parts/content', 'head' );
global $revos;
?>
<div class="page container">
    <div class="page__content">
        <div class="page__item">
            <ul class="page__contact-list">
            <?php if($revos['phone']) { ?>
                <li><a href="tel:<?php echo str_replace(array("(", ")", "-", " "), "", $revos['phone']); ?>"><i class="icon-phone-alt"></i><?php echo $revos['phone']; ?></a></li>
                <?php } ?>
                <?php if($revos['email']) { ?>
                <li><a href="mailto:<?php echo $revos['email']; ?>"><i class="icon-envelope"></i><?php echo $revos['email']; ?></a></li>
                <?php } ?>
                <?php if($revos['adres']) { ?>
                <li><i class="icon-map-marker-alt"></i><?php echo $revos['adres']; ?></li>
                <?php } ?>
                <?php if($revos['time-york']) { ?>
                <li><i class="icon-clock"></i> <?php echo $revos['time-york']; ?></li>
                <?php } ?>
            </ul>
        </div>
        <div class="page__item">
        <?php if($revos['map']) { 
            echo $revos['map'];
        } ?>
        </div>
    </div>
</div>
<?php
get_footer();