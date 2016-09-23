<?php

namespace VkStroll\Http\Controllers;

use VkStroll\Http\Requests;
use VkStroll\Http\Requests\AddVkAccauntRequest;
use VkStroll\Http\Requests\DeleteAccauntRequest;
use VkStroll\Account;
use Illuminate\Support\Facades\Request;
use Session;

class AccountController extends Controller
{
    public function add(AddVkAccauntRequest $request) {
        $account = new Account();
        $account->owner_id = Session::get('user_id');
        $account->login = $request->input('login');
        $account->password = $request->input('password');
        $account->device = $request->input('device');
        $account->avatar = 'http://localhost/photos/noavatar.jpg';
        $account->proxy_ip = $request->input('proxy_ip', null);
        $account->proxy_auth = $request->input('proxy_auth', null);
        $account->proxy_type = $request->input('proxy_type', null);
        $account->status = 'auth';
        $account->status_text = 'Авторизируем';
        $account->status_type = 'info';
        if ($account->save()) {
            return response()->json(['status' => 'ok', 'id' => $account->id]);
        } else {
            return response()->json(['status' => 'error']);
        }
    }

    public function delete(DeleteAccauntRequest $request) {
        $account = Account::find($request->input('id'));
        if ($account->owner_id != Session::get('user_id')) {
            return response()->json(['status' => 'error', 'msg' => 'Аккаунт не принадлежит вам']);
        } else {
            if ($account->delete()) {
                return response()->json(['status' => 'ok']);
            } else {
                return response()->json(['status' => 'error', 'msg' => 'Ошибка при удалении']);
            }
        }
    }
}
