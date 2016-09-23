@extends('layouts.panel')

@section('content')
    <button class="site-action btn-raised btn btn-info btn-floating" data-target="#TaskAdd" data-toggle="modal" type="button">
        <i class="icon wb-plus" aria-hidden="true"></i>
    </button>
    <div class="page-content">
        <div class="panel" style="padding: 20px;">
            <table id="task" class="table table">
                <thead>
                <tr>
                    <th>Название</th>
                    <th>Статус</th>
                    <th>Лог</th>
                    <th>Действие</th>
                </tr>
                </thead>
                <tbody>
                @foreach($tasks as $task)
                    <tr id="{{ $task->id }}">
                        <td>{{ $task->name }}</td>
                        <td><span class="label label-outline label-{{ $task->status_type }}">{{ $task->status_text }}</span></td>
                        <td><a href="{{ url('/logs') }}/{{ $task->id }}">Просмотреть логи</a> </td>

                        <td>
                            <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip" data-original-title="Продолжить">
                                <i class="icon wb-play" aria-hidden="true"></i>
                            </button>
                            <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip" data-original-title="Остановить">
                                <i class="icon wb-stop" aria-hidden="true"></i>
                            </button>
                            <button type="button" onclick="Tasks.delete('{{ $task->id }}');" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip" data-original-title="Удалить">
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
    <div class="modal fade modal-primary" id="TaskAdd" aria-hidden="true"
         aria-labelledby="exampleModalPrimary" role="dialog" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title">Добавить задание</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6 form-group">
                            <p>Аккаунт с которого выполнять задания</p>
                            <select id="acc" class="form-control">
                                @foreach($accounts as $account)
                                    <option value="{{ $account->id }}">{{ $account->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-lg-6 form-group">
                            <p>База по которой будем работать</p>
                            <select id="target" class="form-control">
                                @foreach($targets as $target)
                                    <option value="{{ $target->id }}">{{ $target->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-lg-12 form-group">
                            <p>Укажите текст сообщения для рассылки</p>
                            <textarea id="msg" class="form-control" rows="3" style=""></textarea>
                        </div>
                                            </div>
                    <div class="row">
                        <div class="col-lg-4 form-group"><div class="checkbox-custom checkbox-primary">
                                <input type="checkbox" id="likes">
                                <label for="likes">Ставим лайки</label>
                            </div></div>
                        <div class="col-lg-4 form-group"><div class="checkbox-custom checkbox-primary">
                                <input type="checkbox" id="friends">
                                <label for="friends">Добавляем в друзья</label>
                            </div></div>
                        <div class="col-lg-4 form-group"><div class="checkbox-custom checkbox-primary">
                                <input type="checkbox" id="messages">
                                <label for="messages">Отправляем ЛС</label>
                            </div></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="Tasks.add();">Добавить</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->
@endsection