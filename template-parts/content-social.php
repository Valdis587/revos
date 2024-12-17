<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Revos
 */
global $revos; ?>
 <ul class="social-list">
<?php if($revos['tg']) { ?>
                    <li><a aria-label="telegram" href="<?php echo $revos['tg']; ?>"><i class="icon-telegram-plane"></i></a></li>
                    <?php } ?>
                    <?php if($revos['sk']) { ?>
                    <li><a aria-label="skype"  href="<?php echo $revos['sk']; ?>"><i class="icon-skype"></i></a></li>
                    <?php } ?>
                    <?php if($revos['vb']) { ?>
                    <li><a aria-label="viber"  href="<?php echo $revos['vb']; ?>"><i class="icon-viber"></i></a></li>
                    <?php } ?>
                    <?php if($revos['vk']) { ?>
                    <li><a aria-label="vk"  href="<?php echo $revos['vk']; ?>"><i class="icon-vk"></i></a></li>
                    <?php } ?>
                    <?php if($revos['wh']) { ?>
                    <li><a aria-label="whatsapp" href="<?php echo $revos['wh']; ?>"><i class="icon-whatsapp"></i></a></li>
                    <?php } ?>
                    </ul>