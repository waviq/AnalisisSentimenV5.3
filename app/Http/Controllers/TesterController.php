<?php

namespace App\Http\Controllers;

use App\Word;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class TesterController extends Controller
{
    public function index(){
        return view('Tester.index');
    }

    public function stemming(){
        $input = Input::get('words');
        $hasil = stemming($input);

        return view('Tester.result', compact('hasil'));
    }

    public function normalisasi(){
        $input = Input::get('words');
        $hasil = normalisasi($input);

        return view('Tester.result', compact('hasil'));
    }

    public function sentimen(){

        $input = Input::get('words');

        $search = explode(' ',$input);
        $data = Word::whereIn('word',$search)->get();
        $positif = $data->whereIn('sentimen_id',1)->count();
        $negatif = $data->whereIn('sentimen_id',2)->count();

        if($positif>$negatif && $positif>=1){
            $hasil = 'Positif';
            return view('Tester.result', compact('hasil'));
        }elseif ($negatif>$positif && $negatif>=1){
            $hasil = 'Negatif';
            return view('Tester.result', compact('hasil'));
        }else{
            $hasil = 'Netral';
            return view('Tester.result', compact('hasil'));
        }

    }
}
