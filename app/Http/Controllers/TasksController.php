<?php

namespace VkStroll\Http\Controllers;

use VkStroll\Http\Requests;
use VkStroll\Http\Requests\AddTasksRequest;
use VkStroll\Http\Requests\DeleteTasksRequest;

use VkStroll\Task;
use Illuminate\Support\Facades\Request;
use Session;

class TasksController extends Controller
{
    public function AddTask(AddTasksRequest $request) {
        $task = new Task();
        $task->name = $request->input('name');
        $task->owner_id = Session::get('user_id');
        $task->acc_id = $request->input('acc_id');
        $task->target_id = $request->input('target_id');
        $task->msg = $request->input('msg');
        $task->settings = $request->input('json_params');
        $task->status = 'work';
        $task->status_type = 'success';
        $task->status_text = 'Работаю';
        if ($task->save()) {
            return response()->json(['status' => 'ok', 'id' => $task->id]);
        } else {
            return response()->json(['status' => 'error']);
        }
    }

    public function DeleteTask(DeleteTasksRequest $request) {
        $task = Task::find($request->input('id'));
        if ($task->owner_id != Session::get('user_id')) {
            return response()->json(['status' => 'error', 'msg' => 'Задание не принадлежит вам']);
        } else {
            if ($task->delete()) {
                return response()->json(['status' => 'ok']);
            } else {
                return response()->json(['status' => 'error', 'msg' => 'Ошибка при удалении']);
            }
        }
    }
}
