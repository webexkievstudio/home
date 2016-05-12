<?php
/*
Template Name: Ameria page
*/
?>

 <?php get_header(); ?>

<section class="portfolio-page">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-2 col-sm-12">
                    <a onclick="goBack()" class="arrow-previous bold"><i class="fa fa-angle-left" aria-hidden="true"></i>Назад</a>
                </div>
            </div>
            <div class="row project-description-block">
                <div class="col-lg-3 col-lg-offset-2 col-sm-4">
                    <h2>ameria</h2>
                    <hr>
                    <p>Индивидуальный дизайн корпоративной страницы для платформы rabota.ua</p>
                    <a class="button button-black" href="http://rabota.ua/company72466/about.html">Перейти на сайт</a>
                </div>
                <div class="col-xs-12 col-sm-8 col-lg-5 reset-pad">
                    <img src="<?php bloginfo('template_url'); ?>/img/common/ameriadesktop.png" alt="ameria-desktop" class="pull-right hidden-xs img-responsive">
                    <img src="<?php bloginfo('template_url'); ?>/img/common/ameriadesktop2.png" alt="ameria-desktop" class="visible-xs img-responsive img-full-width">
                </div>
            </div>
            <div class="row idea-block">
                <div class="col-lg-3 col-lg-offset-2 col-sm-4">
                    <h2>Идея</h2>
                    <hr>
                    <p>Транслировать технологичность и прогрессивные взгляды современной немецкой IT компании.</p>
                </div>
                <div class="col-sm-8 col-lg-5">
                    <img src="<?php bloginfo('template_url'); ?>/img/common/am1.png" alt="ameria-place" class="img-responsive img-full-width img-shadow">
                </div>
            </div>
        </section>

        <section class="contacts row">
            <div class="col-lg-8 col-lg-offset-2 col-xs-12">
                <hr class="full-width gray-color">
                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-sm-offset-1">
                        <h3>Закажите обратный звонок</h3>
                        <form id="phoneUs" method="POST">
                            <div class="form-group">
                                <input type="tel" id="phoneUsClientPhone" placeholder="+" required="required">
                            </div>
                            <div id="phoneUsControl">
                                <div class="form-group">
                                    <input type="submit" value="Отправить" class="button button-black sendInfo" id="sendFormPhoneUs">
                                </div>
                            </div>
                        </form>
                        <div class="hidden-xs">
                            <h3 class="mail-title">Почта</h3>
                            <a class="mail-text-hidden-xs" href="mailto:webex.kiev.ua@gmail.com">webex.kiev.ua@gmail.com</a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-sm-offset-2 write-us">
                        <h3>Напишите нам</h3>
                        <form id="writeUs" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="writeUsClientName">Имя:</label>
                                <input type="text" id="writeUsClientName" placeholder="Enter your name" required="required">
                            </div>
                            <div class="form-group">
                                <label for="writeUsClientPhone">Телефон:</label>
                                <input type="tel" id="writeUsClientPhone" placeholder="+">
                            </div>
                            <div class="form-group">
                                <label for="writeUsClientMail">E-mail:</label>
                                <input type="email" id="writeUsClientMail" placeholder="abd123@gmail.com" required="required">
                            </div>
                            <div class="form-group">
                                <label for="writeUsClientInquiry">Запрос:</label>
                                <textarea id="writeUsClientInquiry" rows="1" required="required"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="file" id="addFileInput" class="addFileInput">
                            </div>
                            <div id="writeUsControl">
                                <div class="form-group">
                                    <input type="submit" value="Отправить" class="button button-black pull-left sendInfo" id="sendFormWriteUs">
                                </div>
                            </div>
                        </form>
                        <br>
                        <div class="visible-xs">
                            <hr class="hr-2">
                            <h3>Почта</h3>
                            <a class="mail-text-visible-xs center-block" href="mailto:webex.kiev.ua@gmail.com">webex.kiev.ua@gmail.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

<?php get_footer(); ?>
