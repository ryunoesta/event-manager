<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EventRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Event;

class EventController extends Controller
{
    // イベント情報の取得
    public function index(Request $request)
    {
        $events = Event::all();
        return view('/dashboard', compact('events'));
    }

    // イベントの登録
    public function create()
    {
        return view('events.create');
    }

    public function store(EventRequest $request)
    {
        $event = new Event;

        $event->fill($request->all()->save);

        return redirect('dashboard')->with('message', '登録しました');
    }


}
