@extends('layouts.panel')

@section('content')
    <button class="site-action btn-raised btn btn-info btn-floating" data-target="" data-toggle="modal" type="button">
        <i class="icon wb-refresh" aria-hidden="true"></i>
    </button>
    <div class="page-content">
        <div class="panel nav-tabs-horizontal">
            <ul class="nav nav-tabs nav-tabs-line" data-plugin="nav-tabs" role="tablist">
                <li class="active" role="presentation"><a data-toggle="tab" href="#exampleTopHome" aria-controls="exampleTopHome" role="tab" aria-expanded="true"><i class="icon wb-plugin" aria-hidden="true"></i>Уведомления</a></li>
                <li role="presentation" class=""><a data-toggle="tab" href="#exampleTopComponents" aria-controls="exampleTopComponents" role="tab" aria-expanded="false"><i class="icon wb-user" aria-hidden="true"></i>Разгадывание каптчи</a></li></ul>
            <div class="panel-body">
                <div class="tab-content">
                    <div class="tab-pane active" id="exampleTopHome" role="tabpanel">
                        <div class="nav-tabs-vertical">
                            <ul class="nav nav-tabs nav-tabs-line margin-right-25" data-plugin="nav-tabs" role="tablist" style="height: 228px;">
                                <li class="active" role="presentation"><a data-toggle="tab" href="#exampleTabsLineLeftOne" aria-controls="exampleTabsLineLeftOne" role="tab" aria-expanded="true">Email</a></li>
                                <li role="presentation" class=""><a data-toggle="tab" href="#exampleTabsLineLeftTwo" aria-controls="exampleTabsLineLeftTwo" role="tab" aria-expanded="false">ВКонтакте</a></li>
                                <li role="presentation" class=""><a data-toggle="tab" href="#exampleTabsLineLeftThree" aria-controls="exampleTabsLineLeftThree" role="tab" aria-expanded="false">SMS</a></li>
                                <li role="presentation" class=""><a data-toggle="tab" href="#exampleTabsLineLeftFour" aria-controls="exampleTabsLineLeftFour" role="tab" aria-expanded="false">Telegram</a></li>
                            </ul>
                            <div class="tab-content padding-vertical-15" style="height: 228px;">
                                <div class="tab-pane active" id="exampleTabsLineLeftOne" role="tabpanel">
                                    <div class="col-lg-4 form-group">
                                        <div class="checkbox-custom checkbox-primary">
                                            <input type="checkbox" id="1">
                                            <label for="1">Получать уведомления на E-mail</label>
                                        </div>
                                        <input type="text" class="form-control" id="inputPlaceholder" placeholder="Email">
                                        <div class="checkbox-custom checkbox-primary">
                                            <input type="checkbox" id="2">
                                            <label for="2">Получать уведомления о ошибках</label>
                                        </div>
                                        <div class="checkbox-custom checkbox-primary">
                                            <input type="checkbox" id="3">
                                            <label for="3">Получать уведомления о сообщениях</label>
                                        </div>
                                        <div class="checkbox-custom checkbox-primary">
                                            <input type="checkbox" id="4">
                                            <label for="4">Получать стастистику каждые 24 часа</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 form-group">
                                    </div>
                                    <div class="col-lg-4 form-group">
                                    </div>
                                </div>
                                <div class="tab-pane" id="exampleTabsLineLeftTwo" role="tabpanel">
                                    <div class="alert alert-info alert-dismissible" role="alert">
                                        Чтобы получать уведомления, <a class="alert-link" href="javascript:void(0)">добавьте нашего бота в друзья</a>.
                                    </div>
                                    <div class="col-lg-4 form-group">
                                        <div class="checkbox-custom checkbox-primary">
                                            <input type="checkbox" id="1">
                                            <label for="1">Получать уведомления сообщением VK</label>
                                        </div>
                                        <input type="text" class="form-control" id="inputPlaceholder" placeholder="Ссылка на страницу ВКонтакте">
                                    </div>
                                    <div class="col-lg-4 form-group">
                                        <div class="checkbox-custom checkbox-primary">
                                            <input type="checkbox" id="2">
                                            <label for="2">Получать уведомления о ошибках</label>
                                        </div>
                                        <div class="checkbox-custom checkbox-primary">
                                            <input type="checkbox" id="3">
                                            <label for="3">Получать уведомления о сообщениях</label>
                                        </div>
                                        <div class="checkbox-custom checkbox-primary">
                                            <input type="checkbox" id="4">
                                            <label for="4">Получать стастистику каждые 24 часа</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 form-group">
                                    </div>

                                </div>
                                <div class="tab-pane" id="exampleTabsLineLeftThree" role="tabpanel">
                                    <div class="alert alert-info alert-dismissible" role="alert">
                                        Стоимость уведомлений по SMS - 1 рубль, <a class="alert-link" href="javascript:void(0)">рекомендуем пополнить ваш баланс</a>.
                                    </div>
                                    <div class="col-lg-4 form-group">
                                        <div class="checkbox-custom checkbox-primary">
                                            <input type="checkbox" id="1">
                                            <label for="1">Получать уведомления через SMS</label>
                                        </div>
                                        <input type="text" class="form-control" id="inputPlaceholder" placeholder="Номер в международном формате">
                                    </div>
                                    <div class="col-lg-4 form-group">
                                        <div class="checkbox-custom checkbox-primary">
                                            <input type="checkbox" id="2">
                                            <label for="2">Получать уведомления о ошибках</label>
                                        </div>
                                        <div class="checkbox-custom checkbox-primary">
                                            <input type="checkbox" id="3">
                                            <label for="3">Получать уведомления о сообщениях</label>
                                        </div>
                                        <div class="checkbox-custom checkbox-primary">
                                            <input type="checkbox" id="4">
                                            <label for="4">Получать стастистику каждые 24 часа</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 form-group">
                                    </div>
                                </div>
                                <div class="tab-pane" id="exampleTabsLineLeftFour" role="tabpanel">
                                    А тут будет наш телеграм канал, а пока что идите нахуй.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="exampleTopComponents" role="tabpanel">
                        <div class="col-lg-4 form-group">
                            <div class="radio-custom radio-primary">
                                <input type="radio" id="inputRadiosChecked" name="inputRadios" checked="">
                                <label for="inputRadiosChecked">Использовать разгадывание каптчи от VKStroll</label>
                            </div>
                            <div class="radio-custom radio-primary">
                                <input type="radio" id="inputRadiosUnchecked" name="inputRadios">
                                <label for="inputRadiosUnchecked">Использование сервиса антикаптчи</label>
                            </div>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Ключ сервиса">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-default btn-outline">Баланс</button>
                    </span>
                            </div>
                            <select style="margin-top: 20px;" class="form-control">
                                <option>antigate.com</option>
                                <option>rucaptcha.com</option>
                                <option>ripcaptcha.com</option>
                                <option>captchabot.com</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection