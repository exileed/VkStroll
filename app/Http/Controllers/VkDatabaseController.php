<?php

namespace VkStroll\Http\Controllers;

use VkStroll\Http\Requests;
use VkStroll\Http\Requests\GetCityRequest;
use Illuminate\Support\Facades\Request;
use anlutro\cURL\cURL;

class VkDatabaseController extends Controller
{
    public function GetCity(GetCityRequest $request) {
        $curl = new cURL;
        $response =  $curl->post('http://api.vk.com/method/database.getCities', ['country_id' => $request->input('country_id'), 'lang' => 'ru']);
       return $response;
    }
}
