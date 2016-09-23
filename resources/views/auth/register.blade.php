@extends('layouts.app')

@section('content')
<!-- Page -->
<div id="auth_loader" style="display:none;">
    <div class="example-loading example-well height-350 vertical-align text-center">
        <br>
        <div class="loader loader-tadpole loader-tadpole"></div>
    </div>
    <p style="padding-top:60px;color: #526069; text-align: center; font-size: 22px;">Подождите, сейчас мы регистрируем ваш аккаунт :)</p>
</div>
<div class="page animsition vertical-align text-center" data-animsition-in="fade-in"
     data-animsition-out="fade-out">
    <div class="page-content vertical-align-middle">
        <div class="brand">
            <img class="brand-img" src="{{asset("images/logo.png")}}" alt="...">
            <h2 class="brand-text">VkStroll</h2>
        </div>
        <p>Зарегистрируйтесь чтобы начать работу</p>
            <div class="form-group">
                <label class="sr-only" for="inputName">Имя</label>
                <input id="name" type="text" class="form-control" name="name" placeholder="Имя">
            </div>
            <div class="form-group">
                <label class="sr-only" for="inputEmail">Email</label>
                <input id="email" type="email" class="form-control" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <label class="sr-only" for="inputPassword">Пароль</label>
                <input id="password" type="password" class="form-control" name="password"
                       placeholder="Пароль">
            </div>
            <div class="form-group">
                <label class="sr-only" for="inputPasswordCheck">Подтвердите пароль</label>
                <input id="password_confirmation" type="password" class="form-control" name="passwordCheck"
                       placeholder="Подтвердите пароль">
            </div>
            <button class="btn btn-primary btn-block" onclick="User.register();">Регистрация</button>
        <p>У вас есть аккаунт? Перейдите к  <a href="login.html">Авторизации</a></p>
        <footer class="page-copyright page-copyright-inverse">
            <p>Powered by "Карандаш"</p>
            <p>© 2016. All RIGHT RESERVED.</p>
        </footer>
    </div>
</div>
<!-- End Page -->
@endsection
