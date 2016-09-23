@extends('layouts.panel')

@section('content')
    <button class="site-action btn-raised btn btn-info btn-floating" data-target="#TargetAdd" data-toggle="modal" type="button">
        <i class="icon wb-plus" aria-hidden="true"></i>
    </button>
    <div class="page-content">
        <div class="panel" style="padding: 20px;">
            <table id="target" class="table table">
                <thead>
                <tr>
                    <th>Название</th>
                    <th>Статус</th>
                    <th>Количество</th>
                    <th>Дата</th>
                    <th>Действие</th>
                </tr>
                </thead>
                <tbody>
                @foreach($targets as $target)
                    <tr id="{{ $target->id }}">
                        <td>{{ $target->name }}</td>
                        <td><span class="label label-outline label-{{ $target->status_type }}">{{ $target->status_text }}</span></td>
                        <td>{{ $target->count }}</td>
                        <td>{{ $target->updated_at }}</td>
                        <td class="text-nowrap">
                            <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip" data-original-title="Edit">
                                <i class="icon wb-wrench" aria-hidden="true"></i>
                            </button>
                            <button onclick="Targets.delete('{{ $target->id }}');" type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip" data-original-title="Delete">
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
    <div class="modal fade modal-primary" id="TargetAdd" aria-hidden="true"
         aria-labelledby="exampleModalPrimary" role="dialog" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title">Добавить таргетированную базу</h4>
                </div>
                <ul class="nav nav-tabs nav-tabs-line" data-plugin="nav-tabs" role="tablist">
                    <li onclick="TargetPanel = 'search';" class="active" role="presentation"><a data-toggle="tab" href="#exampleLine1" aria-controls="exampleLine1"
                                                              role="tab">Из поиска</a></li>
                    <li onclick="TargetPanel = 'active';" role="presentation"><a data-toggle="tab" href="#exampleLine2" aria-controls="exampleLine2"
                                               role="tab">Активные</a></li>
                    <li onclick="TargetPanel = 'groups';" role="presentation"><a data-toggle="tab" href="#exampleLine3" aria-controls="exampleLine3"
                                               role="tab">По ключу</a></li>
                    <li onclick="TargetPanel = 'list';" role="presentation"><a data-toggle="tab" href="#exampleLine4" aria-controls="exampleLine4"
                                               role="tab">Списком</a></li>
                </ul>

                <div class="modal-body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="exampleLine1" role="tabpanel">
                            <div class="col-lg-12 form-group">
                                <p>Ввидите поисковый запрос, например "Юрий Гагарин", либо оставьте пустым</p>
                                <input id="q" type="text" class="form-control" name="lastName" placeholder="Запрос">
                            </div>
                            <div class="col-lg-4 form-group">
                                <p>Выберите страну</p>
                                <select id="country" class="form-control" onchange="VkDatabase.getCity();">
                                    <option>Выбрать страну</option>
                                    <option value="2">Украина</option>
                                    <option value="1">Россия</option>
                                    <option value="3">Беларусь</option>
                                    <option value="4">Казахстан</option>
                                    <option value="5">Азербайджан</option>
                                    <option value="6">Армения</option>
                                    <option value="7">Грузия</option>
                                    <option value="8">Израиль</option>
                                    <option value="9">США</option>
                                    <option value="65">Германия</option>
                                </select>
                            </div>
                            <div class="col-lg-4 form-group">
                                <p>Выберите город</p>
                                <select id="city" class="form-control">
                                </select>
                            </div>
                            <div class="col-lg-4 form-group">
                                <p>Выберите пол</p>
                                <select id="sex" class="form-control">
                                    <option value="1">Женщины</option>
                                    <option value="2">Мужчины</option>
                                    <option value="0">Любой</option>
                                </select>
                            </div>
                            <div class="col-lg-12 form-group">
                                <p>Интересы, через запятую например "рыбалка,отдых,обучение"</p>
                                <input id="interests" type="text" class="form-control" name="lastName" placeholder="Интересы">
                            </div>
                            <div class="col-lg-4 form-group">
                                <p>Возвраст от</p>
                                <input id="age_from" type="text" class="form-control" name="lastName" placeholder="От">
                            </div>
                            <div class="col-lg-4 form-group">
                                <p>Возвраст до</p>
                                <input id="age_to" type="text" class="form-control" name="lastName" placeholder="До">
                            </div>
                            <div class="col-lg-4 form-group">
                                <div style="height: 12px;"></div>
                            </div>
                        </div>

                        <div class="tab-pane" id="exampleLine2" role="tabpanel">
                            <p style="text-align: center">Укажите ссылки на тематические сообщества, либо сообщества конкурентов. <br> <b>Каждое сообщество с новой строки</b></p>
                            <textarea id="active" class="form-control" id="textareaDefault" rows="3" style="margin-bottom: 20px;"></textarea>
                        </div>

                        <div class="tab-pane" id="exampleLine3" role="tabpanel">
                            <p>Укажите ссылку на группу в которой будем искать</p>
                            <input id="link" type="text" class="form-control" name="lastName" placeholder="Ссылка">
                            <p>Укажите ключевые слова для поиска аудитории, например "ищу фотографа".</p>
                            <textarea id="groups" class="form-control" id="textareaDefault" rows="3"></textarea>
                            <i>Каждая кдючевая фраза с новой строки</i>
                        </div>

                        <div class="tab-pane" id="exampleLine4" role="tabpanel">
                            <p>Укажите список ID, где каждый индитификатор с новой строки</p>
                            <textarea id="list" class="form-control" id="textareaDefault" rows="3" style="margin-bottom: 20px;"></textarea>
                        </div>
                <div align="right">
                    <button type="button" class="btn btn-primary" onclick="Targets.add();">Добавить</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->
@endsection