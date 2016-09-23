<?php

namespace Lib;

use Lib\vk_api;


class vkengine
{
    private $vk_api;
    private $access_token;
    private $user_id;
    private $proxy_auth = '';
    private $proxy_ip = '';
    private $proxy_type = '';
    
    
    public function __construct($user_agent, $app_key, $app_id, $proxy_ip = '', $proxy_type = '', $proxy_auth = '')
    {
        $this->vk_api = new vk_api($user_agent, $app_id, $app_key);
        if ($proxy_ip) $this->vk_api->set_proxy_settings($proxy_ip, $proxy_type, $proxy_auth);
    }

    public function vk_auth($login, $password, $captcha_key = '', $captcha_sid = '') {
        $result = $this->vk_api->vk_auth($login, $password, $captcha_key, $captcha_sid);
        return $result;
    }

    public function api_token_test($token) {
        $params = array('voip' => '0',
                        'access_token' => $token);
        $result = $this->vk_api->api_call('account.setOnline', $params);
        if ($result->response) {
            return True;
        } else {
            return False;
        }
    }

    public function set_auth_info($access_token, $user_id) {
       $this->access_token = $access_token;
       $this->user_id = $user_id;
    }

    public function message_send($user_id, $message, $attachment = '',$captcha_key = '', $captcha_sid = '') {
        $params = array(
            'user_id' => $user_id,
            'message' => $message,
            'attachment' => $attachment,
            'access_token' => $this->access_token,
            'captcha_key' => $captcha_key,
            'captcha_sid' => $captcha_sid
        );
        $result = $this->vk_api->api_call('messages.send', $params);
        return $result;
    }

    public function like_add($type,$owner_id,$item_id,$captcha_key = '', $captcha_sid = '') {
        $params = array(
            'type' => $type,
            'owner_id' => $owner_id,
            'item_id' => $item_id,
            'access_token' => $this->access_token,
            'captcha_key' => $captcha_key,
            'captcha_sid' => $captcha_sid
        );
        $result =$this->vk_api->api_call('likes.add',$params);
        return $result;

    }

    public function friends_add($user_id,$text = '',$captcha_key = '', $captcha_sid = '') {
        $params = array(
            'user_id' => $user_id,
             'text' => $text,
            'access_token' => $this->access_token,
            'captcha_key' => $captcha_key,
            'captcha_sid' => $captcha_sid
        );
        $result =$this->vk_api->api_call('friends.add',$params);
        return $result;
    }

    public function repost_create($object,$message,$captcha_key = '', $captcha_sid = '') {
        $params = array(
            'object' => $object,
            'message' => $message,
            'access_token' => $this->access_token,
            'captcha_key' => $captcha_key,
            'captcha_sid' => $captcha_sid
        );
        $result =$this->vk_api->api_call('wall.repost',$params);
        return $result;
    }

    public function wall_get($owner_id,$count,$offset = '',$filter = '') {
        $params = array(
            'owner_id' => $owner_id,
            'offset' => $offset,
            'count' => $count,
            'filter' => $filter,
            'access_token' => $this->access_token
        );
         $result =$this->vk_api->api_call('wall.get',$params);
        return $result;

    }

    public function photo_get($owner_id,$album_id,$count,$offset ='') {
        $params = array(
            'owner_id' => $owner_id,
            'album_id' => $album_id,
            'offset' => $offset,
            'count' => $count,
            'access_token' => $this->access_token,
            'rev' => 1
        );
        $result =$this->vk_api->api_call('photos.get',$params);
        return $result;
    }


    public function friends_get($user_id) {
        $params = array(
            'user_id' => $user_id,
            'access_token' => $this->access_token,
        );
        $result =$this->vk_api->api_call('friends.get',$params);
        return $result;
    }

    public function users_search($q = '',$city = '',$country = '',$sex = '',$age_from = '', $age_to = '',$online = '',$interests = '') {
        $params = array(
        'access_token' => $this->access_token,
        'count'=> 1000,
        'has_photo' => 1,
        'q'=> $q,
        'city' => $city,
        'country' => $country,
        'sex' => $sex,
        'age_from' => $age_from,
        'age_to' => $age_to,
        'online' => $online,
        'interests' => $interests
        );
        $result =$this->vk_api->api_call('users.search',$params);
        return $result;
    }

    public function users_getMembers($group_id, $count, $offset ='') {
        $params = array(
            'group_id' => $group_id,
            'count' => $count,
            'offset' => $offset,
            'access_token' => $this->access_token,
        );
        $result =$this->vk_api->api_call('groups.getMembers',$params);
        return $result;
    }

    public function likes_get_list($type, $owner_id, $item_id, $count, $filter,$offset='') {
        $params = array(
            'type' => $type,
            'owner_id' => $owner_id,
            'item_id' => $item_id,
            'count' => $count,
            'filter' => $filter,
            'offset' => $offset,
            'access_token' => $this->access_token,
        );
        $result =$this->vk_api->api_call('likes.getList',$params);
        return $result;
    }

    public function convert_name_to_id($str, $type) {
        if ($type == 'user') {
            $params = array('uids' => $str);
            $result = $this->vk_api->api_call('users.get', $params);
            $result = $result->response[0]->uid;
        }
        if ($type == 'group') {
            $params = array('gids' => $str);
            $result = $this->vk_api->api_call('groups.getById', $params);
            $result = $result->response[0]->gid;
        }
        return $result;
    }

    public function GetUserInfo($uid, $token, $fields = 'photo_50') {
        $params = array('user_ids' => $uid,
                        'fields' => $fields,
                        'access_token' => $token);
        $result = $this->vk_api->api_call('users.get', $params);
        return $result;
    }

}