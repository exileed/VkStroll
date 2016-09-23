var host = 'http://vkstroll.dev';
var TargetPanel = 'search';

var User = {
    register: function() {
        toastr.options.progressBar = true;
        $('#auth_loader').show();
        var result = null,
            msg = null,
            input = null,
            name = $('#name').val(),
            email = $('#email').val(),
            password = $('#password').val(),
            password_confirmation = $('#password_confirmation').val()

        $.ajax({
                url: '../../ajax/register',
                type: 'POST',
                data: {
                    name: name,
                    email: email,
                    password: password,
                    password_confirmation: password_confirmation
                }
            })
            .done(function(jqXHR) {
                if (jqXHR.status != 'ok') {
                    toastr.error('Во время регистрации произошла неизвестная ошибка', 'Ошибка');
                    setTimeout('location.replace("'+host+'/page/error")', 4000);
                } else {
                    toastr.info('Регистрация прошла успешно', 'Успех!');
                    setTimeout('location.replace("'+host+'/page/login")', 4000);
                }
            })
            .fail(function(jqXHR) {
                if (jqXHR.status == 422) {
                    $.each(jqXHR.responseJSON, function(key, value) {
                        $('#' + key).css({
                            'border': '1px',
                            'border-color': '#f96868',
                            'border-style': 'solid'
                        });
                        switch (key) {
                            case 'name':
                                input = 'Имя';
                                break;
                            case 'email':
                                input = 'Email';
                                break;
                            case 'password':
                                input = 'Пароль';
                                break;
                            default:
                                input = 'Поле';
                                break;
                        }
                        switch (value[0]) {
                            case 'validation.required':
                                msg = 'заполненно не верно';
                                break;
                            case 'validation.unique':
                                msg = 'уже используеться в системе';
                                break;
                            case 'validation.confirmed':
                                msg = 'нужно подтвердить';
                                break;
                            default:
                                msg = 'заполненно не правильно';
                                break
                        }
                        toastr.error(input + ' ' + msg, 'Ошибка');
                        setTimeout("$('#auth_loader').hide();", 4000);
                    });
                }
            });
    },
    login: function() {
        toastr.options.progressBar = true;
        $('#auth_loader').show();
        var result = null,
            email = $('#email').val(),
            password = $('#password').val()
        $.ajax({
                url: '../../ajax/login',
                type: 'POST',
                data: {
                    email: email,
                    password: password
                }
            })
            .done(function(jqXHR) {
                if (jqXHR.status != 'ok') {
                    toastr.error('Проверьте правильность введенных данных', 'Ошибка');
                    setTimeout('location.replace("'+host+'/page/login")', 4000);
                } else {
                    toastr.info(jqXHR.name + ', авторизация прошла успешно', 'Успех!');
                    setTimeout('location.replace("'+host+'/panel")', 4000);
                }
            })
            .fail(function(jqXHR) {
                if (jqXHR.status == 422) {
                    $.each(jqXHR.responseJSON, function(key, value) {
                        $('#' + key).css({
                            'border': '1px',
                            'border-color': '#f96868',
                            'border-style': 'solid'
                        });
                        switch (key) {
                            case 'email':
                                input = 'Email';
                                break;
                            default:
                                input = 'Поле';
                                break;
                        }
                        switch (value[0]) {
                            case 'validation.required':
                                msg = 'заполненно не верно';
                                break;
                            case 'validation.exists':
                                msg = 'не зарегистрирован в системе';
                                break;
                            default:
                                msg = 'заполненно не правильно';
                                break
                        }
                        toastr.error(input + ' ' + msg, 'Ошибка');
                        setTimeout("$('#auth_loader').hide();", 4000);
                    });
                }
            });
    }
}

var Accounts = {
    add: function() {
        toastr.options.progressBar = true;
        var result = null,
            msg = null,
            login = $('#login').val(),
            password = $('#password').val(),
            device = $('#device').val(),
            proxy_ip = $('#proxy_ip').val(),
            proxy_auth = $('#proxy_auth').val(),
            proxy_type = $('#proxy_type').val(),
            tr_table = null;

        $.ajax({
                url: '../ajax/accounts/add',
                type: 'POST',
                data: {
                    login: login,
                    password: password,
                    device: device,
                    proxy_ip: proxy_ip,
                    proxy_auth: proxy_auth,
                    proxy_type: proxy_type
                }
            })
            .done(function(jqXHR) {
                if (jqXHR.status != 'ok') {
                    toastr.error('Проверьте правильность введенных данных');
                } else {
                    toastr.success('Добавили аккаунт');
                    tr_table = '<tr id="' + jqXHR.id + '"><td><span class="avatar avatar-online"><img src="http://localhost/photos/noavatar.jpg"></span></td> <td>' + login + '</td> <td></td> <td><span class="label label-outline label-info">Авторизация</span></td> <td class="text-nowrap"> <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip" data-original-title="Редактировать"> <i class="icon wb-wrench" aria-hidden="true"></i> </button> <button type="button" onclick="Accounts.delete(\'' + jqXHR.id + '\');" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip" data-original-title="Удалить"> <i class="icon wb-close" aria-hidden="true"></i> </button> </td></tr>';
                    $('#VkTable tr:last').after(tr_table);
                    $('#VkAddModal').hide();
                    $('.modal-backdrop.in').hide();
                }
            })
            .fail(function(jqXHR) {
                if (jqXHR.status == 422) {
                        toastr.error('Во время удаления произошла ошибка', 'Ошибка');
                        $('#VkAddModal').hide();
                        $('.modal-backdrop.in').hide();
                }
            });
    },
    delete: function(id) {
        alertify.confirm('Вы действительно хотите удалить аккаунт?',
            function() {
                $.ajax({
                        url: '../ajax/accounts/delete',
                        type: 'POST',
                        data: {
                            id: id
                        }
                    })
                    .done(function(jqXHR) {
                        if (jqXHR.status != 'ok') {
                            toastr.error(jqXHR.msg);
                        } else {
                            toastr.success('Успешно удалили');
                            $('#' + id).remove();
                        }
                    })
                    .fail(function(jqXHR) {
                        if (jqXHR.status == 422) {
                            toastr.error('Во время удаления произошла ошибка', 'Ошибка');
                        }
                    });
            },
            function() {
                toastr.error('Отменили удаление аккаунта', 'Ошибка');
            });
    }
}

var Targets = {
    add: function() {
        if (TargetPanel == 'search') {
            var name = null,
                created_at = null,
                tr_table = null,
                q = $('#q').val(),
                city = $('#city').val(),
                country = $('#country').val(),
                sex = $('#sex').val(),
                interests = $('#interests').val(),
                age_from = $('#age_from').val(),
                age_to = $('#age_to').val(),
                json_params = {
                    q: q,
                    city: city,
                    county: country,
                    sex: sex,
                    interests: interests,
                    age_from: age_from,
                    age_to: age_to
                };
            json_params = JSON.stringify(json_params);
        }
        if (TargetPanel == 'active') {
            var json_params = JSON.stringify($('#active').val().split(/\n|\r/));
        }
        if (TargetPanel == 'groups') {
            var json_params = {
                link: $('#link').val(),
                groups: JSON.stringify($('#groups').val().split(/\n|\r/))
            }
            json_params = JSON.stringify(json_params);
        }
        if (TargetPanel == 'list') {
            var json_params = JSON.stringify($('#list').val().split(/\n|\r/));
        }
        $('#TargetAdd').hide();
        $('.modal-backdrop.in').hide();
        alertify
            .defaultValue("Название базы")
            .prompt("Введите название таргетированной базы",
                function(val, ev) {
                    ev.preventDefault();
                    name = val;
                    $.ajax({
                            url: '../ajax/target/add',
                            type: 'POST',
                            data: {
                                name: name,
                                type: TargetPanel,
                                json_params: json_params,
                            }
                        })
                        .done(function(jqXHR) {
                            if (jqXHR.status != 'ok') {
                                toastr.error('Проверьте правильность введенных данных');
                            } else {
                                created_at = jqXHR.created_at;
                                tr_table = '<tr id="' + jqXHR.id + '"><td>' + name + '</td> <td><span class="label label-outline label-info">Парсинг</span></td> <td>0</td> <td>' + created_at + '</td> <td class="text-nowrap"> <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip" data-original-title="Edit"> <i class="icon wb-wrench" aria-hidden="true"></i> </button> <button onclick="Targets.delete(\'' + jqXHR.id + '\');" type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip" data-original-title="Delete"> <i class="icon wb-close" aria-hidden="true"></i> </button> </td> </tr>';
                                $('#target tr:last').after(tr_table);
                                toastr.success('Добавили базу');
                            }
                        })
                        .fail(function(jqXHR) {
                            if (jqXHR.status == 422) {
                                    toastr.error('Во время удаления произошла ошибка', 'Ошибка');
                            }
                        });

                },
                function(ev) {
                    ev.preventDefault();
                    toastr.error('Отменили создание таргетированной базы', 'Ошибка');

                });
    },
    delete: function(id) {
        alertify.confirm('Вы действительно хотите удалить таргетированную базу?',
            function() {
                $.ajax({
                        url: '../ajax/target/delete',
                        type: 'POST',
                        data: {
                            id: id
                        }
                    })
                    .done(function(jqXHR) {
                        if (jqXHR.status != 'ok') {
                            toastr.error(jqXHR.msg);
                        } else {
                            toastr.success('Успешно удалили');
                            $('#' + id).remove();
                        }
                    })
                    .fail(function(jqXHR) {
                        if (jqXHR.status == 422) {
                            toastr.error('Во время удаления произошла ошибка', 'Ошибка');
                        }
                    });
            },
            function() {
                toastr.error('Отменили удаление аккаунта', 'Ошибка');
            });
    }
}

var Tasks = {
    add: function () {
       var target_id = $('#target').val(),
           acc_id = $('#acc').val(),
           name = null, 
           json_params = null,
           likes = $('#likes').prop("checked"),
           friends = $('#friends').prop("checked"),
           messages = $('#messages').prop("checked"),
           msg = $('#msg').val();

           json_params = {
               likes: likes,
               friends: friends,
               messages: messages,
           };
           json_params = JSON.stringify(json_params);
        $('#TaskAdd').hide();
        $('.modal-backdrop.in').hide();
        alertify
            .defaultValue("Название задания")
            .prompt("Введите название задания",
                function(val, ev) {
                    ev.preventDefault();
                    $.ajax({
                        url: '../ajax/task/add',
                        type: 'POST',
                        data: {
                            name: val,
                            target_id: target_id,
                            acc_id: acc_id,
                            json_params: json_params,
                            msg:msg
                        }
                    })
                        .done(function(jqXHR) {
                            if (jqXHR.status != 'ok') {
                                toastr.error('Проверьте правильность введенных данных', 'Ошибка');
                            } else {
                                tr_table = '<tr id="'+jqXHR.id+'"><td>'+ val +'</td><td><span class="label label-outline label-success">Работаю</span></td><td><a href="'+host+'/logs/'+jqXHR.id+'">Просмотреть логи</a></td><td><button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip" data-original-title="Продолжить"><i class="icon wb-play" aria-hidden="true"></i></button><button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip" data-original-title="Остановить"><i class="icon wb-stop" aria-hidden="true"></i></button><button type="button" onclick="Tasks.delete(\''+jqXHR.id+'\');" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip" data-original-title="Удалить"><i class="icon wb-close" aria-hidden="true"></i></button></td></tr>';
                                $('#task tr:last').after(tr_table);
                                toastr.success('Добавили базу');
                            }
                        })
                        .fail(function(jqXHR) {
                            if (jqXHR.status == 422) {
                                    toastr.error('Во время добавления произошла ошибка', 'Ошибка');
                            }
                        });

                },
                function(ev) {
                    ev.preventDefault();
                    toastr.error('Отменили создание таргетированной базы', 'Ошибка');

                });
    },
    delete: function (id) {
        alertify.confirm('Вы действительно хотите удалить задание?',
            function() {
                $.ajax({
                    url: '../ajax/task/delete',
                    type: 'POST',
                    data: {
                        id: id
                    }
                })
                    .done(function(jqXHR) {
                        if (jqXHR.status != 'ok') {
                            toastr.error(jqXHR.msg);
                        } else {
                            toastr.success('Успешно удалили');
                            $('#' + id).remove();
                        }
                    })
                    .fail(function(jqXHR) {
                        if (jqXHR.status == 422) {
                            toastr.error('Во время удаления произошла ошибка', 'Ошибка');
                        }
                    });
            },
            function() {
                toastr.error('Отменили удаление аккаунта', 'Ошибка');
            });
    }
}

var Ticket = {
    add: function () {
        var title = $('#title').val(),
            msg = $('#msg').val();
        $.ajax({
            url: '../../ajax/ticket/add',
            type: 'POST',
            data: {
                title: title,
                msg: msg
            }
        })
            .done(function(jqXHR) {

                toastr.success('УРААААААА');
            })
            .fail(function(jqXHR) {
                if (jqXHR.status == 422) {
                    toastr.error('Не смогли добавить обращение', 'Ошибка');
                }
            });
    },
    response: function () {
        var msg = $('#msg').val(),
            ticket_id = $('#ticket_id').val(),
            new_div = null;
        $.ajax({
            url: '../../../ajax/ticket/response',
            type: 'POST',
            data: {
                msg: msg,
                ticket_id: ticket_id
            }
        })
            .done(function(jqXHR) {
                toastr.success('УРААААААА');
                new_div = '<div class="chat chat-left"><div class="chat-body"><div class="chat-content">'+msg+'</div></div></div>';
                $('.app-message-chats').append(new_div);
                $('#msg').val('');
            })
            .fail(function(jqXHR) {
                if (jqXHR.status == 422) {
                    toastr.error('Не смогли добавить обращение', 'Ошибка');
                }
            });
    }
}

var Navigator = {
    go: function (url) {
        location.replace(url);
    }
}

var VkDatabase = {
    getCity: function() {
        var Country = $('#country').val(),
            result = null;
        $('#city').empty();
        $.ajax({
                url: '../ajax/vkdatabase/getcity',
                type: 'POST',
                data: {
                    country_id: Country
                }
            })
            .done(function(jqXHR) {
                result = $.parseJSON(jqXHR);
                for (var i = 0; i < result.response.length; i++) {
                    $('#city').append('<option value="' + result.response[i].cid + '">' + result.response[i].title + '</option>');
                }
            })
            .fail(function(jqXHR) {
                if (jqXHR.status == 422) {
                        toastr.error('Не верный id страны', 'Ошибка');
                }
            });
    }
}