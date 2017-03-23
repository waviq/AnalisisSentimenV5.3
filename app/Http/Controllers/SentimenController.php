<?php

namespace App\Http\Controllers;

use App\AhokSentiment;
use App\StemmingAhok;
use App\AgusSentiment;
use App\StemmingAgus;
use App\Word;
use Illuminate\Http\Request;

class SentimenController extends Controller
{
    public function postAhokSentiment(){
        $stemming = StemmingAhok::all();
        AhokSentiment::truncate();


        foreach ($stemming as $key => $stemmings){
            $text = explode(' ',$stemmings->text);
            $data = Word::whereIn('word',$text)->get();
            $positif = $data->whereIn('sentimen_id',1)->count();
            $negatif = $data->whereIn('sentimen_id',2)->count();

            $save = new AhokSentiment();
            $save->id = $key+1;
            $save->From_User = $stemmings->From_User;
            $save->text = $stemmings->text;

            if($positif>$negatif && $positif>=1){
                $sentimentId = 1;
            }elseif ($negatif>$positif && $negatif>=1){
                $sentimentId = 2;
            }else{
                $sentimentId = 3;
            }
            $save->sentiment_id = $sentimentId;
            $save->save();
        }
        return redirect(url(action('SentimenController@getSentimentAhok')));
    }

    public function getSentimentAhok(){
        $ahok = AhokSentiment::paginate(30);
        return view('classification.sentiment.index',compact('ahok'));
    }

    //Agus
    public function postAgusSentiment(){
        $stemming = StemmingAgus::all();
        AgusSentiment::truncate();


        foreach ($stemming as $key => $stemmings){
            $text = explode(' ',$stemmings->text);
            $data = Word::whereIn('word',$text)->get();
            $positif = $data->whereIn('sentimen_id',1)->count();
            $negatif = $data->whereIn('sentimen_id',2)->count();

            $save = new AgusSentiment();
            $save->id = $key+1;
            $save->From_User = $stemmings->From_User;
            $save->text = $stemmings->text;

            if($positif>$negatif && $positif>=1){
                $sentimentId = 1;
            }elseif ($negatif>$positif && $negatif>=1){
                $sentimentId = 2;
            }else{
                $sentimentId = 3;
            }
            $save->sentiment_id = $sentimentId;
            $save->save();
        }
        return redirect(url(action('SentimenController@getSentimentAgus')));
    }

    public function getSentimentAgus(){
        $ahok = AgusSentiment::paginate(30);
        return view('classification.sentiment.index',compact('ahok'));
    }

    //Anis

}
