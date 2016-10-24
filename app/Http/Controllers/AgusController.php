<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AgusController extends Controller
{
    public function index(){
        return view('cagub.agus.index');
    }
}
