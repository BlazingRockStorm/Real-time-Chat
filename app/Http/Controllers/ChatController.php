<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function write()
    {
        return view('write');
    }

    public function send(Request $request)
    {
        $redis = Redis::connection();

        $redis->publish('message', $request->all()['message']);

        return redirect('write');
    }

    public function receive()
    {
        return view('receive');
    }
}
