<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Str;

class CaseFoldingController extends Controller
{
    public function postCaseFolding(){


        $lowercase = Str::lower("Saya pergi ke pasar");

        return $lowercase;
    }
}
