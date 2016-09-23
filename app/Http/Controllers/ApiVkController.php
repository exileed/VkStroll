<?php

namespace VkStroll\Http\Controllers;

use Illuminate\Http\Request;

use VkStroll\Http\Requests;
use Lib\vkengine;
use VkStroll\Account;

class ApiVkController extends Controller
{
    public function AuthVk() {
        $accounts = Account::where('status', '=', 'auth')->get();
        for ($i = 0; $i < $accounts->count(); $i++) {
            $VkEngine = new VkEngine($accounts[$i]['user_agent'], 'hHbZxrka2uZ6jB1inYsH', '2274003');
            $result = $VkEngine->vk_auth($accounts[$i]['login'], $accounts[$i]['password']);
            if (isset($result->access_token)) {
                $token = $result->access_token;
                $result = $VkEngine->GetUserInfo($result->user_id, $result->access_token);
                $account = Account::find($accounts[$i]['id']);
                $account->name = $result->response[0]->first_name.' '.$result->response[0]->last_name;
                $account->avatar = $result->response[0]->photo_50;
                $account->token = $token;
                $account->status = 'loggined';
                $account->status_type = 'success';
                $account->status_text = 'Авторизирован';
                $account->save();
            } else {
                $account = Account::find($accounts[$i]['id']);
                $account->status = 'error';
                $account->status_type = 'danger';
                $account->status_text = 'Ошибка';
                $account->save();
            }
        }
    }

    public function ParseVk() {

    }
}
