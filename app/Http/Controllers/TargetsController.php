<?php

namespace VkStroll\Http\Controllers;

use VkStroll\Http\Requests;
use VkStroll\Http\Requests\AddTargetsRequest;
use VkStroll\http\Requests\DeleteTargetsRequest;
use VkStroll\Target;
use Illuminate\Support\Facades\Request;
use Session;

class TargetsController extends Controller
{
    public function AddTargets(AddTargetsRequest $request) {
        $target = new Target();
        $target->name = $request->input('name');
        $target->type = $request->input('type');
        $target->owner_id = Session::get('user_id');
        $target->count = 0;
        $this->status = 'work';
        $target->status_type = 'info';
        $target->status_text = 'Парсинг';
        $target->json_params = $request->input('json_params');
        if ($target->save()) {
            return response()->json(['status' => 'ok', 'id' => $target->id, 'created_at' => $target->created_at->format('Y-m-d H:i:s')]);
        } else {
            return response()->json(['status' => 'error']);
        }
    }

    public function DeleteTargets(DeleteTargetsRequest $request) {
        $target = Target::find($request->input('id'));
        if ($target->owner_id != Session::get('user_id')) {
            return response()->json(['status' => 'error', 'msg' => 'База не принадлежит вам']);
        } else {
            if ($target->delete()) {
                return response()->json(['status' => 'ok']);
            } else {
                return response()->json(['status' => 'error', 'msg' => 'Ошибка при удалении']);
            }
        }
    }
}
