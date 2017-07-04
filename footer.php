<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package artcraft
 */
?>

<!-- start footer.html-->
<footer id="contacts" class="footer">

    <div class="container">

        <div class="header__logo">
            <p><span>UN</span>locker</p>
            <p>аварийное вскрытие замков</p>
        </div>

        <div class="footer__wrapper">

            <div class="footer__contacts">

                <p>контакты</p>

                <a href="tel:<?= fw_get_db_customizer_option('phone1');?>"><i class="fa fa-phone" aria-hidden="true"></i> : <?= fw_get_db_customizer_option('phone1');?></a>
                <a href="tel:<?= fw_get_db_customizer_option('phone2');?>"><i class="fa fa-phone" aria-hidden="true"></i> : <?= fw_get_db_customizer_option('phone2');?></a>
                <a href="tel:<?= fw_get_db_customizer_option('phone3');?>"><i class="fa fa-phone" aria-hidden="true"></i> : <?= fw_get_db_customizer_option('phone3');?></a>


                <a href="mailto:<?= fw_get_db_customizer_option('email');?>"><i class="fa fa-envelope" aria-hidden="true"></i> : <?= fw_get_db_customizer_option('email');?></a>

            </div>

            <div class="footer__contacts">

                <p>Официальный сайт «Аварийное вскрытие дверей Донецк»</p>
                <p>83003, г. Донецк, ул. Артема, 30</p>
                <p>© 2017. Все права защищены</p>

            </div>

        </div>

    </div>

</footer>

<div class="modal-recall" id="modal-recall">

    <p class="modal-recall__title">Вы можете позвонить по любому, указанному внизу телефону</p>

    <a class="modal-recall__number" href="tel:<?= fw_get_db_customizer_option('phone1');?>"><?= fw_get_db_customizer_option('phone1');?></a>
    <a class="modal-recall__number" href="tel:<?= fw_get_db_customizer_option('phone2');?>"><?= fw_get_db_customizer_option('phone2');?></a>
    <a class="modal-recall__number" href="tel:<?= fw_get_db_customizer_option('phone3');?>"><?= fw_get_db_customizer_option('phone3');?></a>

</div>
<div id="overlay"></div>

<a href="#" id='Go_Top'><img alt="up" src="<?php bloginfo('template_directory'); ?>/img/icons/go-top-icon.png"></a>


<!-- end footer.html-->

<?php wp_footer(); ?>
</body>
</html>
