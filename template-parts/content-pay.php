<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Revos
 */
global $revos; ?>
<ul class="footer__pay-list">
<?php if($revos['pay1']) { ?>
                <li><img src="<?php echo $revos['pay1']['url']; ?>" alt="<?php  bloginfo('name'); ?>"></li>
                <?php } ?>
                <?php if($revos['pay2']) { ?>
                <li><img src="<?php echo $revos['pay2']['url']; ?>" alt="<?php  bloginfo('name'); ?>"></li>
                <?php } ?>
                <?php if($revos['pay3']) { ?>
                <li><img src="<?php echo $revos['pay3']['url']; ?>" alt="<?php  bloginfo('name'); ?>"></li>
                <?php } ?>
                <?php if($revos['pay4']) { ?>
                <li><img src="<?php echo $revos['pay4']['url']; ?>" alt="<?php  bloginfo('name'); ?>"></li>
                <?php } ?>
                <?php if($revos['pay5']) { ?>
                <li><img src="<?php echo $revos['pay5']['url']; ?>" alt="<?php  bloginfo('name'); ?>"></li>
                <?php } ?>
</ul>