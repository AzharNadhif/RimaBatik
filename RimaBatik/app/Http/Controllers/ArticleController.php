<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function show($id_event){

        $events = Event::findOrFail($id_event);

        $prevEvent = Event::where('id_event', '<', $id_event)->orderBy('id_event', 'desc')->first();
        $nextEvent = Event::where('id_event', '>', $id_event)->orderBy('id_event', 'asc')->first();

        return view('article', compact('events', 'prevEvent', 'nextEvent'));
    }
}
