<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{

    public function index()
    {
        return view('calendar');
    }

    public function feed()
    {
        $events = Event::select('title','start_at AS start', 'end_at AS end')->get();
        return json_encode($events);
    }


    public function create()
    {
        return view('events.create');
    }

    public function store(Request $request)
    {
      $validated = $request->validate([
           'title' => 'required',
           'start_at' => 'required',
           'end_at' => 'required',
      ]);

      $todo = Event::create([
           'title' => $request->title,
           'start_at' => date("Y-m-d H:i:s", strtotime($request->start_at)),
           'end_at' => date("Y-m-d H:i:s", strtotime($request->end_at)),
      ]);

      return $this->index();
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
