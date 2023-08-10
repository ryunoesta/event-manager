<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EventRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Event;
use Illuminate\Pagination\Paginator;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $events = Event::paginate(10);
        return view('/dashboard', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response 
     */
    public function store(EventRequest $request)
    {
        $event = new Event;
        $event->fill($request->all());
        $event->save();
        return redirect()->route('dashboard')->with('message', 'イベントを登録しました。');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $event = Event::find($id);
        return view('events.edit' , [
            'event' => $event
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EventRequest $request, int $id)
    {
        $event = Event::find($id);
        $event->fill($request->all());
        $event->save();
        return redirect()->route('dashboard')->with('message', 'イベントを編集しました');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        Event::where('id', $id)->delete();
        return redirect()->route('dashboard')->with('message', 'イベントを削除しました');
    }

}
