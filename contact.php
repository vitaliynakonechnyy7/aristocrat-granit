<!DOCTYPE html>
        <head>
        <meta charset = "UTF-8">
	    <link href='https://arisocrat-granit.com.ua/contact' lang="uk-ua" />
        <link rel="alternate" href='http://aristocrat-granit.com.ua/' hreflang="uk-ua" />
        <link rel="alternate" href='https://aristocrat-granit.com.ua/ru' hreflang="ru-ua" />
        <meta name="robots" content="index, follow" />
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Наша адресса і номери телефону на карті Житомира.</title>
        <meta name="description" content="На цій сторінці можна знайти нашу адрессу і номери телефону, на карті побачити місце знаходження  ☎  +38 (096) 806 11 28." />
        <meta name='viewport' content='width=device-width,initial-scale=1'/>
        <meta content='true' name='HandheldFriendly'/>
        <meta content='width' name='MobileOptimized'/>
        <meta content='yes' name='apple-mobile-web-app-capable'/>
        <meta http-equiv="x-ua-compatible" content="ie=edge">
    <?php
    include 'parts/header-links.php';
    include 'parts/header_menu-ukr.php';
    ?>
        <!-- header section end -->
        <!-- pages-title-start -->
		<section class="contact-img-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="con-text">
						  <p><a href="index.php"><h4>| ПОВЕРНУТИСЯ НА ГОЛОВНУ | <h4></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		<!-- pages-title-end -->
		<!-- contact content section start -->
		<section class="top-map-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="map-area">
                            <div class="contact-map">
                                <div>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d4285.732084884767!2d28.668921165711268!3d50.30477789657496!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sua!4v1585419024010!5m2!1sru!2sua" width="800" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="page-title">
                            <h2>Напишіть нам або зателефонуйте</h2>
                            <h3>Наше місце знаходження</h3>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <strong><a href="mailto:aristocrat.stone@gmail.com" type="text" name="email">aristocrat.stone@gmail.com</a>
                                        </strong>
                                        <br>
                                        <address> Україна Житомир </address>
                                    </div>
                                    <div class="col-sm-3">
                                        <strong>Telephone</strong>
										<br>
										  <ul>
                                            <li><p><a href="tel:+380968061128" itemprop="telephone">+38(096) 806 1128 </p></a><p> Руслан</p></li>
                                          </ul>
										<br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h3>Форма зв'язку</h3>
                            </div>
                            <form class="cendo" action="mail.php" method="post">
                                
                                <div class="form-group required">
                                    <label class="col-md-2 control-label">Ваше </label>
                                    <div class="col-md-10">
                                       <label>
                                          <input class="form-control" type="text" value="" name="name">
                                       </label>
                                    </div>
                                </div>
                                <div class="form-group required">
                                    <label class="col-md-2 control-label">E-Mail адресса</label>
                                    <div class="col-md-10">
                                      <label>
                                          <input class="form-control" type="text" value="" name="email">
                                      </label>
                                    </div>
                                </div>
                                <div class="form-group required">
                                    <label class="col-md-2 control-label">Текст</label>
                                    <div class="col-md-10">
                                        <textarea class="form-control" rows="10" name="message"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="buttons">
                                        <div class="pull-right">
                                          <label>
                                             <input class="btn btn-primary" type="submit" value="Submit">
                                          </label>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		<!-- contact content section end -->
        <?php
          include 'parts/footer.php';
       ?>