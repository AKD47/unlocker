<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package artcraft
 */

/**
 * Вывод настроек темы
 *
 * @link http://manual.unyson.io/en/latest/helpers/php.html#database
 */
// fw_get_db_customizer_option($option_id, $default_value = null);

/**
 * Вывод меню
 *
 * @link https://wp-kama.ru/function/wp_nav_menu
 */
// wp_nav_menu([
//  'theme_location' => 'primary
//]);

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <title>Аварийное вскрытие дверей Донецк</title>
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/favicon.ico" type="image/x-icon">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body>

<header class="header">

    <div class="container">

        <div class="header__logo">
            <p><span>UN</span>locker</p>
            <p>аварийное вскрытие замков</p>
        </div>

        <nav class="header__navigation">

            <a href="#" id="header-burger" class="header__trigger">

                <span></span>

                <span></span>

                <span></span>

            </a>

            <!--<ul class="header__nav">
                <li><a href="#product">Услуги</a></li>
                <li><a href="#about">О нас</a></li>
                <li><a href="#equipment">Оборудование</a></li>
                <li><a href="#partnership">Приемущества</a></li>
                <li><a href="#contacts">Контакты</a></li>
            </ul>-->


            <?php wp_nav_menu( array(
                'theme_location'  => 'primary',
                'menu_class'      => 'header__nav'
            ) ); ?>

        </nav>

    </div>

</header>
