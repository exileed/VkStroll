@extends('layouts.panel')

@section('content')
    <button class="site-action btn-raised btn btn-info btn-floating" data-target="#VkAddModal" data-toggle="modal" type="button">
        <i class="icon wb-plus" aria-hidden="true"></i>
    </button>
        <div class="page-content">
            <div class="panel" style="padding: 20px;">
                <table id="VkTable" class="table table">
                    <thead>
                    <tr>
                        <th>Аватар</th>
                        <th>Логин</th>
                        <th>Имя</th>
                        <th>Статус</th>
                        <th>Действие</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($accounts as $account)
                        <tr id="{{ $account->id }}"><td><span class="avatar avatar-online"><img src="{{ $account->avatar }}"></span></td>
                            <td>{{ $account->login }}</td>
                            <td>{{ $account->name }}</td>
                            <td><span class="label label-outline label-{{ $account->status_type }}">{{ $account->status_text }}</span></td>
                            <td class="text-nowrap">
                                <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip" data-original-title="Редактировать">
                                    <i class="icon wb-wrench" aria-hidden="true"></i>
                                </button>
                                <button type="button" onclick="Accounts.delete('{{ $account->id }}');" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip" data-original-title="Удалить">
                                    <i class="icon wb-close" aria-hidden="true"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade modal-primary" id="VkAddModal" aria-hidden="true"
         aria-labelledby="exampleModalPrimary" role="dialog" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title">Добавить аккаунт ВКонтакте</h4>
                </div>
                <div class="modal-body">
                    <p style="text-align:center;">
                        Укажите логин, и пароль от вашего аккаунта <b>ВКонтакте</b>. <br>
                        А так же укажите устройство, с которого будет проходить авторизацию аккаунт.
                    </p>
                    <div class="row">
                        <div class="col-lg-4 form-group">
                            <input type="text" class="form-control" name="login" id="login" placeholder="Логин">
                        </div>
                        <div class="col-lg-4 form-group">
                            <input type="email" class="form-control" name="password" id="password" placeholder="Пароль">
                        </div>
                        <div class="col-lg-4 form-group">
                            <select id="device" class="form-control">
                                <option>Android</option>
                                <option>IOS</option>
                            </select>
                        </div>
                        <p style="text-align:center;">
                            Если вы хотите использовать <b>прокси</b>, то укажите и данные для доступа
                        <div class="col-lg-4 form-group">
                            <input type="text" class="form-control" id="proxy_ip" name="proxy_ip" placeholder="ip:port">
                        </div>
                        <div class="col-lg-4 form-group">
                            <input type="email" class="form-control" id="proxy_auth" name="proxy_auth" placeholder="login:password">
                        </div>
                        <div class="col-lg-4 form-group">
                            <select id="proxy_type" class="form-control">
                                <option>HTTPS</option>
                                <option>SOCKS 4</option>
                                <option>SOCKS 5</option>
                            </select>
                        </div>
                        </p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="Accounts.add();">Добавить</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->
@endsection