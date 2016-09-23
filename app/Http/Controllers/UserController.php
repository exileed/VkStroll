<?php

namespace VkStroll\Http\Controllers;

use VkStroll\Http\Requests;
use VkStroll\Http\Requests\AddUserRequest;
use VkStroll\Http\Requests\AuthUserRequest;
use VkStroll\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Request;
use Session;

class UserController extends Controller
{
    public function index() {

    }

    public function register(AddUserRequest $request) {
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password =  Hash::make($request->input('password'));
        $user->status = 0;
        $user->ip = Request::ip();
        $user->referer = '';
        $user->balance = 0;
        $user->tariff = 1;
        $user->tariff_finish = Carbon::now()->addDay(3);
        if ($user->save()) {
            return response()->json(['status' => 'ok']);
        } else {
            return response()->json(['status' => 'error']);
        }

    }

    public function login(AuthUserRequest $request) {
        $user = new User();
        $response = $user->where('email', '=', $request->input('email'))->first();
        if (Hash::check($request->input('password'), $response->password)) {
            Session::put('user_id', $response->id);
            return response()->json(['status' => 'ok', 'name' => $response->name]);
        } else {
            return response()->json(['status' => 'error']);
        }
    }
}
