@extends('layouts.panel')

@section('content')
    <input type="hidden" id="ticket_id" value="{{ $ticket_id }}">
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
        <div class="panel animation-fade active" style="padding: 15px;">
            <div class="page-main">
                <!-- Chat Box -->

                <div class="app-message-chats">

                    @foreach($messages as $message)
                        @if($message->from_id === $user_id)
                            <div class="chat chat-left">
                                <div class="chat-body">
                                    <div class="chat-content">
                                        {{$message->msg}}
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="chat">
                                <div class="chat-body">
                                    <div class="chat-content">
                                        {{$message->msg}}
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                    </div>

                </div>
                <!-- End Chat Box -->
                <textarea id="msg" style="margin-bottom: 10px;" class="form-control" id="textareaDefault" rows="3" placeholder="Текст сообщения"></textarea>
                <button onclick="Ticket.response();" style="width: 120px;" type="button" class="btn btn-block btn-primary">Отправить</button>


            </div>
        </div>
@endsection