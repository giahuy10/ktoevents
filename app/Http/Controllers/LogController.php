<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Log;
class LogController extends Controller
{
    public function store(Request $request) {
        $log = new Log;
        $log->type = $request->type;
        $log->event_id = $request->event_id;
        $log->data = json_encode($request->data);
        $log->save();
    }
}
