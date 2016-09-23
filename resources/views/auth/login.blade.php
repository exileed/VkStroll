@extends('layouts.app')

@section('content')
        <!-- Page -->
<div id="auth_loader" style="display:none;">
    <div class="example-loading example-well height-350 vertical-align text-center">
        <br>
        <div class="loader loader-tadpole loader-tadpole"></div>
    </div>
    <p style="padding-top:60px;color: #526069; text-align: center; font-size: 22px;">Подождите, сейчас мы авторизируем ваш аккаунт :)</p>
</div>
<div class="page animsition vertical-align text-center" data-animsition-in="fade-in"
     data-animsition-out="fade-out">>
    <div class="page-content vertical-align-middle">
        <div class="brand">
            <img class="brand-img" src="{{asset("images/logo.png")}}" alt="...">
            <h2 class="brand-text">VkStroll</h2>
        </div>
        <p>Пройдите авторизацию для входа в кабинет</p>
            <div class="form-group">
                <label class="sr-only" for="inputEmail">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <label class="sr-only" for="inputPassword">Пароль</label>
                <input type="password" class="form-control" id="password" name="password"
                       placeholder="Пароль">
            </div>
            <div class="form-group clearfix">
                <div class="checkbox-custom checkbox-inline checkbox-primary pull-left">
                    <input type="checkbox" id="inputCheckbox" name="remember">
                    <label for="inputCheckbox">Запомнить меня</label>
                </div>
                <a class="pull-right" href="forgot-password.html">Забыли пароль?</a>
            </div>
            <button class="btn btn-primary btn-block" onclick="User.login();">Авторизация</button>
        <p>У вас нет аккаунта? Пройдите <a href="register.html">Регистрацию</a></p>
        <footer class="page-copyright page-copyright-inverse">
            <p>Powered by "Карандаш"</p>
            <p>© 2016. All RIGHT RESERVED.</p>
        </footer>
    </div>
</div>
<!-- End Page -->
@endsection
