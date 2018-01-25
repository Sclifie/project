<?php session_start();
 setcookie(
         'new_cookie',
         'true',
         time() + 3600
     );
 var_dump($_SESSION);
 $_SESSION['auth'] = true;
 $_SESSION['login'] = "GLEB KOLESNIKOV";
?>
<?php include 'header.php' ?>
<?php include 'menu.php' ?>
<main id="authentication" class="inner-bottom-md">
    <div class="container">
        <div class="row">

            <div class="col-md-6">
                <section class="section sign-in inner-right-xs">
                    <h2 class="bordered">Войти в аккаунт</h2>
                    <p>Авторизуйтесь пожалуйста</p>

                    <div class="social-auth-buttons">
                        <div class="row">
                            <div class="col-md-6">
                                <button class="btn-block btn-lg btn btn-vk"><i class="fa fa-vk"></i>Войти через Вконтакте</button>
                            </div>
                        </div>
                    </div>

                    <form class="login-form cf-style-1 "  id="auth_form">
                        <div class="field-row">
                            <label>E-mail</label>
                            <input type="text" class="le-input req" id="auth_user_email">
                        </div><!-- /.field-row -->

                        <div class="field-row">
                            <label>Пароль</label>
                            <input type="text"  class="le-input req" data-settings="hello" id="auth_user_pw">
                        </div><!-- /.field-row -->
<!--               С       Т      А        Т      У        С                  А         У       Т       А -->
                        <div class="auth-status-block">
                            <span id="auth_status" class="auth-status">
                                Some Text
                            </span>
                        </div>
                        <div class="field-row clearfix">
                        	<span class="pull-left">
                        		<label class="content-color"><input type="checkbox" class="le-checbox auto-width inline"> <span class="bold">Запомнить меня</span></label>
                        	</span>
                            <span class="pull-right">
                        		<a href="#" class="content-color bold">Забыли пароль?</a>
                        	</span>
                        </div>

                        <div class="buttons-holder">
                            <button type="submit" class="le-button huge" id="auth_form_btn">Войти</button>
                        </div><!-- /.buttons-holder -->
                    </form><!-- /.cf-style-1 -->

                </section><!-- /.sign-in -->
            </div><!-- /.col -->

            <div class="col-md-6">
                <section class="section register inner-left-xs">
                    <h2 class="bordered">Создать новый аккаунт</h2>
                    <p>Создайте свой собственный аккаун с безграницными возможностями</p>

                    <form role="form" class="register-form cf-style-1" id="register_form">
                        <div class="field-row">
                            <label>E-mail</label>
                            <input type="text" class="le-input">
                        </div><!-- /.field-row -->
                        <div class="field-row">
                            <label>Логин</label>
                            <input type="text" class="le-input">
                        </div>
                        <div class="field-row">
                            <label>Пароль</label>
                            <input type="password" class="le-input">
                        </div>
 <!--               С       Т      А        Т      У        С                  Р        Е      Г        А -->
                        <div class="reg-status-block">
                            <span id="auth_status" class="auth-status">
                                Some Text 2
                            </span>
                        </div><br>
                        <div class="buttons-holder">
                            <button type="submit" class="le-button huge">Регистрация</button>
                        </div><!-- /.buttons-holder -->
                    </form>

                    <h2 class="semi-bold">Присоединитесь к нам сегодня для :</h2>

                    <ul class="list-unstyled list-benefits">
                        <li><i class="fa fa-check primary-color"></i> Увеличение скорости взаимодействия с нами</li>
                        <li><i class="fa fa-check primary-color"></i> Контролируйте Ваши заказы</li>
                        <li><i class="fa fa-check primary-color"></i> Храните историю Ваших заказов и получайте бонусы</li>
                    </ul>

                </section><!-- /.register -->

            </div><!-- /.col -->

        </div><!-- /.row -->
    </div><!-- /.container -->
    <div id="otladka">

    </div>
</main><!-- /.authentication -->
<script src="assets/js/auth_users.js"></script>
<script src="assets/js/reg_users.js"></script>
<script src="assets/js/form.verify.js"></script>
<?php include 'footer.php'?>