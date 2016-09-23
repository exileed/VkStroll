<?php

namespace Lib;

use Lib\curl;

class vk_api
{
    private $api_url = 'https://api.vk.com/method/';
    private $user_agent;
    private $app_key;
    private $app_id = '';
    private $curl;
    private $result_type = '';
    private $proxy_auth = '';
    private $proxy_ip = '';
    private $proxy_type = '';
    private $access_token = '';
    private $captcha_sid = '';
    

    public function __construct($user_agent, $app_id , $app_key)
    {
        $this->user_agent = $user_agent;
        $this->app_id = $app_id;
        $this->app_key = $app_key;
        $this->curl = new curl();
    }

    public function api_call($method, $params) {
        $link = $this->link_generator($method);
        $result = $this->request($link, $params);
        if (!$this->result_type) $result = json_decode($result);
        return $result;
    }

    public function vk_auth($login, $password, $captcha_key = '', $captcha_sid = '') {
        $params = array(
            'grant_type' => 'password',
            'client_id' => $this->app_id,
            'client_secret' => $this->app_key,
            'username' => $login,
            'password' => $password
        );
        $result = $this->request('https://oauth.vk.com/token', $params);
        return json_decode($result);

    }

    public function set_proxy_settings($proxy_ip, $proxy_auth = '', $proxy_type = '') {
        $this->proxy_ip = $proxy_ip;
        $this->proxy_type = $proxy_type;
        $this->proxy_auth = $proxy_auth;
    }

    public function set_result_type($result_type) {
        $this->result_type = $result_type;
    }

    private function link_generator($method) {
        return $this->api_url.$method.$this->result_type;
    }

    private function request($link, $params) {
        if ($this->proxy_ip) {
            $this->curl->set_proxy($this->proxy_ip);
            if ($this->proxy_auth) $this->curl->set_proxy_auth($this->proxy_auth);
            if ($this->proxy_type) $this->curl->set_proxy_type($this->proxy_type);
        }
        $result = $this->curl->post($link, $params);
        return $result;
    }
}