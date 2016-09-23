@extends('layouts.panel')

@section('content')
    <div class="page-content container-fluid">
        <div class="example example-buttons" style="margin-top: -20px;">
            <div class="btn-group btn-group-justified">
                <div class="btn-group" role="group">
                    <a href="{{ url('panel/help/create') }}" type="button" class="btn btn-primary">
                        <i class="icon wb-chat-working" aria-hidden="true"></i>
                        <br>
                        <span class="text-uppercase hidden-xs">Задать вопрос</span>
                    </a>
                </div>

                <div class="btn-group" role="group">
                    <a href="{{ url('panel/help/opened') }}" type="button" class="btn btn-info">
                        <i class="icon wb-time" aria-hidden="true"></i>
                        <br>
                        <span class="text-uppercase hidden-xs">Отправленные вопросы</span>
                    </a>
                </div>

                <div class="btn-group" role="group">
                    <a href="{{ url('panel/help/archive') }}" type="button" class="btn btn-success">
                        <i class="icon wb-briefcase" aria-hidden="true"></i>
                        <br>
                        <span class="text-uppercase hidden-xs">Архив сообщений</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="panel" style="padding: 15px;">
            <input id="title" style="margin-bottom: 10px;" type="text" class="form-control" id="inputPlaceholder" placeholder="Название тикета">
            <textarea id="msg" style="margin-bottom: 10px;" class="form-control" id="textareaDefault" rows="6" placeholder="Описание проблемы"></textarea>
            <button onclick="Ticket.add();" style="width: 120px;" type="button" class="btn btn-block btn-primary">Отправить</button>
        </div>
    </div>
@endsection