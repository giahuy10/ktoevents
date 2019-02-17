<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EventUser;
use App\EventUserAnswer;
class EventUserController extends Controller
{
    public function store(Request $request){
        return response()->json($request, 200);
    }
}
