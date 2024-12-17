<?php
/**
 * Redux Framework media config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__( 'Отзывы', 'your-textdomain-here' ),
		'id'         => 'reviews-theme',
		'subsection' => true,
		'fields'     => array(
            array(
				'id'       => 'reviews-back',
				'type'     => 'media',
				'title'    => esc_html__( 'Бекграунд', 'your-textdomain-here' ),
				'url'      => false,
				'preview'  => true,
			),
			array(
				'id'       => 'reviews-title',
				'type'     => 'text',
				'title'    => esc_html__( 'Заголовок', 'your-textdomain-here' ),
				'default'  => 'О нас',
			),
			array(
				'id'       => 'reviews-tеxt-left',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Текст', 'your-textdomain-here' ),
				'default'  => '',
			),
        ),
        )
    );