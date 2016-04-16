<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ComplaintsController extends Controller
{
    public function create(Request $request){
        dd($request->all());
    }
}
