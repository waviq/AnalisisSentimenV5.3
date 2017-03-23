<?php

namespace App\Http\Controllers;

use App\AhokSentiment;
use App\AnisSentimen;
use App\StemmingAhok;
use App\StemmingAnis;
use App\Word;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ClassificationController extends Controller
{
    public function index(){
        return view('classification.index');
    }

    public function indexSentimen(){
        return view('sentimen.index');
    }

    public function postAnisSentiment(){
        $stemming = StemmingAnis::all();
        AnisSentimen::truncate();


        foreach ($stemming as $key => $stemmings){
            $text = explode(' ',$stemmings->text);
            $data = Word::whereIn('word',$text)->get();
            $positif = $data->whereIn('sentimen_id',1)->count();
            $negatif = $data->whereIn('sentimen_id',2)->count();

            $save = new AnisSentimen();
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
        return redirect(url(action('ClassificationController@getSentimentAnis')));
    }

    public function getSentimentAnis(){
        $ahok = AnisSentimen::paginate(30);
        return view('classification.sentiment.index',compact('ahok'));
    }







}
