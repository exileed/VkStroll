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
        <div class="panel" style="margin-bottom: 0px;">
            <div class="page-content tab-content page-content-table nav-tabs-animate">
                <div class="tab-pane animation-fade active" id="forum-newest" role="tabpanel">
                    <table class="table is-indent" style="margin-bottom: 0px;">
                        <tbody>
                        <tr data-url="panel.tpl" data-toggle="slidePanel">
                            <td class="pre-cell"></td>
                            <td class="cell-60 responsive-hide">
                                <a class="avatar" href="javascript:void(0)">
                                    <img class="img-responsive" src="http://synapps-lab.fr/Medias/new.png" alt="...">
                                </a>
                            </td>
                            <td>
                                <div class="content">
                                    <div class="title">
                                        Как удалить вопрос из архива?
                                    </div>
                                    <div class="metas">
                                        <span class="started">1 день назад</span>
                                    </div>
                                </div>
                            </td>
                            <td class="cell-80 forum-posts">
                                <span class="num">1</span>
                                <span class="unit">Post</span>
                            </td>
                            <td class="suf-cell"></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection