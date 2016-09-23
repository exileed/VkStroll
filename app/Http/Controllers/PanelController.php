<?php

namespace VkStroll\Http\Controllers;

use Illuminate\Http\Request;

use VkStroll\Http\Requests;
use VkStroll\Account;
use VkStroll\Target;
use VkStroll\Task;
use VkStroll\Ticket;
use Session;

class PanelController extends Controller
{
    public function index() {
        $accounts = Account::where('owner_id', '=', Session::get('user_id'))->get();
        return view('panel/index', ['accounts' => $accounts]);
    }

    public function TargetShow() {
        $targets = Target::where('owner_id', '=', Session::get('user_id'))->get();
        return view('panel/target', ['targets' => $targets]);
    }

    public function HelpShow() {
        return view('panel/help/help');
    }

    public function HelpOpenedShow() {
        $ticket = Ticket::where('owner_id', '=', Session::get('user_id'))->where('status', '=', 'open')->orderBy('id', 'desc')->get();
        return view('panel/help/opened', ['tickets' => $ticket]);
    }

    public function HelpArchiveShow() {
        return view('panel/help/archive');
    }

    public function SettingsShow() {
        return view('panel/settings');
    }

    public function TasksShow() {
        $accounts = Account::where('owner_id', '=', Session::get('user_id'))->get();
        $targets = Target::where('owner_id', '=', Session::get('user_id'))->get();
        $tasks = Task::where('owner_id', '=', Session::get('user_id'))->get();
        return view('panel/task', ['accounts' => $accounts, 'targets' => $targets, 'tasks' => $tasks]);
    }

    public function  HelpCreateShow() {
        return view('panel/help/create');
    }
}
