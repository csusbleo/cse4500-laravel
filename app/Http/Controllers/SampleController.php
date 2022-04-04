<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App/Models/Calendar;

class CalendarController extends Controller
{
    public function index()
    {
        $events = Event::select('title', 'start_at AS start', 'end_at AS end')->get();
    }
    
}
