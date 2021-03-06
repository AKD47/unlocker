<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>
<section id="product" class="product">

    <h1 class="title">услуги</h1>

    <div class="container">

        <div class="product__wrapper">

            <div class="product__wrapper--item">
                <div class="product__wrapper--icon">
                    <img src="<?php bloginfo('template_directory'); ?>/img/unlocker_dors.png" alt="Квас">
                </div>

                <h3>Вскрытие дверей</h3>

                <p>Специалисты выполняют работу так, что дверь останется
                    невредимой. На неё тут де можно поставить дополнительный замок или поменять на новый тот, который
                    подвел. Такое решение изначально предусматривается нашими мастерами, а потому необходимые
                    инструменты всегда имеются с собой.</p>

            </div>

            <div class="product__wrapper--item">
                <div class="product__wrapper--icon">
                    <img src="<?php bloginfo('template_directory'); ?>/img/unlock_locks.png" alt="Кеги">
                </div>

                <h3>Замена, врезка замков</h3>

                <p>Наши специалисты имеют 5-ти летний стаж успешной работы и более 5 тысяч успешно реализованных
                    проектов.
                    Индивидуальный подход к каждому клиенту
                    Лучшее соответствие цена/качество в Донецк.
                    Конфиденциальность секретной информации заказчика
            </div>

            <div class="product__wrapper--item">
                <div class="product__wrapper--icon">
                    <img src="<?php bloginfo('template_directory'); ?>/img/unlocker_consultation.png" alt="Торговое оборудование">
                </div>

                <h3>Техническая консультация</h3>

                <p>Наши специалисты проконсультируют Вас по любым вопросам, касающимся замков и дверей. Ждем Вашего звонка</p>
            </div>

        </div>

        <div class="separator">
            <span class="separator__icon">
                <img src="<?php bloginfo('template_directory'); ?>/img/icons/unlocker-icon.png" alt="">
            </span>
            <span class="separator__line"></span>
        </div>

    </div>

</section>
