<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AnisController extends Controller
{
    public function index(){
        return view('cagub.anis.index');
    }
}
