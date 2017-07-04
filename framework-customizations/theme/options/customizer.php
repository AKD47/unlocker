<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/*
 * Настройки сайта (телефоны, соц-сети и пр.)
 * Список всех возможных опицй http://manual.unyson.io/en/latest/options/built-in/introduction.html
 */
$options = [
	'panel_contacts' => [
		'title'   => __( 'Контакты', '{domain}' ),
		'options' => [
			'phone1' => [
				'type'  => 'text',
				'label' => __( 'Телефон', '{domain}' ),
				'value' => '(095) ‎770-50-61',
			],
			'phone2' => [
				'type'  => 'text',
				'label' => __( 'Телефон', '{domain}' ),
				'value' => '(071) 347-76-87',
			],
			'phone3' => [
				'type'  => 'text',
				'label' => __( 'Телефон', '{domain}' ),
				'value' => '(062) 207-33-11',
			],
			'email' => [
				'type'  => 'text',
				'label' => __( 'Email', '{domain}' ),
				'value' => 'example@gmail.com',
			]
		],
	],
];
//	'panel_social' => [
//		'title'   => __( 'Социальные сети', '{domain}' ),
//		'options' => [
//			'twitter' => [
//				'type'  => 'text',
//				'label' => __( 'Twitter', '{domain}' ),
//				'value' => 'http://twitter.com/',
//			],
//			'facebook' => [
//				'type'  => 'text',
//				'label' => __( 'Facebook', '{domain}' ),
//				'value' => 'http://facebook.com/',
//			],
//		],
//	],
//];