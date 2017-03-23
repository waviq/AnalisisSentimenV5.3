<?php

namespace App\Http\Controllers;

use App\AgusIntegrity;
use App\AgusSentiment;
use App\AhokIntegrity;
use App\AhokSentiment;
use App\AnisIntegrity;
use App\AnisSentimen;
use App\WordIntegrity;
use Illuminate\Http\Request;

class IntegritasController extends Controller
{
    public function indexIntegritas(){
        return view('classification.integritas.index');
    }
    public function postAgus(){
        $sentiment = AgusSentiment::where('sentiment_id',1)->orWhere('sentiment_id',3)->get();
        AgusIntegrity::truncate();


        foreach ($sentiment as $key => $sentiments){
            $text = explode(' ',$sentiments->text);
            $data = WordIntegrity::whereIn('word',$text)->get();
            $integritas = $data->whereIn('sentimen_id',4)->count();
            //$negatif = $data->whereIn('sentimen_id',2)->count();

            $save = new AgusIntegrity();
            $save->id = $key+1;
            $save->From_User = $sentiments->From_User;
            $save->text = $sentiments->text;

            if($integritas){
                $sentimentId = 4;
            }else{
                $sentimentId = 3;
            }
            $save->sentiment_id = $sentimentId;
            $save->save();
        }
        return redirect(url(action('IntegritasController@getIntegritasAgus')));
    }

    public function getIntegritasAgus(){
        $integritas = AgusIntegrity::paginate(30);
        return view('classification.integritas.showCagubIntegritas',compact('integritas'));
    }

    public function postAhok(){
        $sentiment = AhokSentiment::where('sentiment_id',1)->orWhere('sentiment_id',3)->get();
        AhokIntegrity::truncate();


        foreach ($sentiment as $key => $sentiments){
            $text = explode(' ',$sentiments->text);
            $data = WordIntegrity::whereIn('word',$text)->get();
            $integritas = $data->whereIn('sentimen_id',4)->count();
            //$negatif = $data->whereIn('sentimen_id',2)->count();

            $save = new AhokIntegrity();
            $save->id = $key+1;
            $save->From_User = $sentiments->From_User;
            $save->text = $sentiments->text;

            if($integritas){
                $sentimentId = 4;
            }else{
                $sentimentId = 3;
            }
            $save->sentiment_id = $sentimentId;
            $save->save();
        }
        return redirect(url(action('IntegritasController@getIntegritasAhok')));
    }

    public function getIntegritasAhok(){
        $integritas = AhokIntegrity::paginate(30);
        return view('classification.integritas.showCagubIntegritas',compact('integritas'));
    }

    public function postAnis(){
        $sentiment = AnisSentimen::where('sentiment_id',1)->orWhere('sentiment_id',3)->get();
        AnisIntegrity::truncate();


        foreach ($sentiment as $key => $sentiments){
            $text = explode(' ',$sentiments->text);
            $data = WordIntegrity::whereIn('word',$text)->get();
            $integritas = $data->whereIn('sentimen_id',4)->count();
            //$negatif = $data->whereIn('sentimen_id',2)->count();

            $save = new AnisIntegrity();
            $save->id = $key+1;
            $save->From_User = $sentiments->From_User;
            $save->text = $sentiments->text;

            if($integritas){
                $sentimentId = 4;
            }else{
                $sentimentId = 3;
            }
            $save->sentiment_id = $sentimentId;
            $save->save();
        }
        return redirect(url(action('IntegritasController@getIntegritasAnis')));
    }

    public function getIntegritasAnis(){
        $integritas = AnisIntegrity::paginate(30);
        return view('classification.integritas.showCagubIntegritas',compact('integritas'));
    }
}
