<footer class="footer">
    <div class="container">
        <div class="col-xs-12  col-md-3">
            <nav class="widget-navigation  push-down-30">
                <h6>Я в социальных сетях</h6>
                <hr>
                <div class="social-icons  widget-social-icons">
                    <a href="https://ru-ru.facebook.com" class="social-icons__container"> <span class="zocial-facebook"></span> </a>
                    <a href="https://twitter.com" class="social-icons__container"> <span class="zocial-twitter"></span> </a>
                    <a href="https://www.youtube.com" class="social-icons__container"> <span class="zocial-youtube"></span> </a>
                </div>
            </nav>
        </div>

        <div class="col-xs-12  col-md-3 col-md-offset-1">
            <nav class="widget-navigation  push-down-30">
                <h6>Навигация</h6>
                <hr>
                <ul class="navigation">
                    <li> <a href="{{ route('main.index') }}">Домашняя</a> </li>
                    <li> <a href="{{ route('main.about') }}">Обо мне</a> </li>
                    <li> <a href="{{ route('main.feedback') }}">Написать мне</a> </li>
                    <li> <a href="{{ route('auth.register') }}">Регистрация</a> </li>
                    <li> <a href="{{ route('auth.login') }}">Вход</a> </li>
                </ul>
            </nav>
        </div>
        <div class="col-xs-12  col-md-4 col-md-offset-1">
            <div class="widget-contact  push-down-30">
                <h6>Контакты</h6>
                <hr>
                <span class="widget-contact__text">
                    <span class="widget-contact__title">Яцко Юля</span>
                    <br>Email: ysemaka@mail.ru
                    <br>Skype: yulka
                    <br>VK: https://vk.com/yulkayatsko
                    </span>
            </div>
        </div>
    </div>
</footer>