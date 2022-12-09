<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ChannelController extends Controller
{
    public function index(Request $request)
    {
        $message=$request->message;
        // $messages=response()->json([
        //     'succ' =>1,
        //     'msg'=>$message
        // ]);

        $messages=DB::table('notifications')->orderBy('created_at','DESC')->get();
        // $messages=[];
        // $messages=DB::table('notifications')->take(4)->get();
        // return $messages;
        // event(new \App\Events\MessageEvent($messages));
        
        // \App\Events\MessageEvent::dispatch($messages);
        broadcast(new \App\Events\MessageEvent($messages));
        // broadcast(new \App\Events\MessageEvent($message))->toOthers();
        // broadcast(new SendMessage($user, $messages))->toOthers();

        return response()->json([
            'succ' =>1,
            'msg'=>$message
        ]);
    }
}
