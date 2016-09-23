<?php

namespace VkStroll\Http\Controllers;

use VkStroll\Http\Requests;
use VkStroll\Http\Requests\AddTicketRequest;
use VkStroll\Http\Requests\ReponseTicketRequest;
use Illuminate\Support\Facades\Request;
use Session;
use Carbon\Carbon;
use VkStroll\Ticket;
use VkStroll\TicketMsg;

class TicketController extends Controller
{
    public function TicketAdd(AddTicketRequest $request) {
        $ticket = new Ticket();
        $ticket->title = $request->input('title');
        $ticket->owner_id = Session::get('user_id');
        $ticket->status = 'open';
        if ($ticket->save()) {
            $ticket_msg = new TicketMsg();
            $ticket_msg->ticket_id = $ticket->id;
            $ticket_msg->from_id = Session::get('user_id');
            $ticket_msg->msg = $request->input('msg');
            if ($ticket_msg->save()) {
                return response()->json(['status' => 'ok', 'id' => $ticket_msg->id]);
            } else {
                return response()->json(['status' => 'error']);
            }
        } else {
            return response()->json(['status' => 'error']);
        }
    }

    public function TicketShow($id) {
        $messages = TicketMsg::where('ticket_id', '=', $id)->get();
        return view('panel/help/show', ['messages' => $messages, 'user_id' => Session::get('user_id'), 'ticket_id' => $id]);
    }

    public function TicketResponse(ReponseTicketRequest $request) {
        $ticket = Ticket::find($request->input('ticket_id'));
        if ($ticket->owner_id != Session::get('user_id')) {
            return response()->json(['status' => 'error', 'msg' => 'Вы не можете ответить не на свой вопрос']);
        } else {
            $ticket_msg = new TicketMsg();
            $ticket_msg->ticket_id = $request->input('ticket_id');
            $ticket_msg->from_id = Session::get('user_id');
            $ticket_msg->msg = $request->input('msg');
            if ($ticket_msg->save()) {
                return response()->json(['status' => 'ok', 'id' => $ticket_msg->id]);
            } else {
                return response()->json(['status' => 'error']);
            }
        }
    }
}
