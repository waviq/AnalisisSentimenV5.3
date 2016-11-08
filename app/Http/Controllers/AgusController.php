<?php

namespace App\Http\Controllers;

use App\Agus;
use App\CaseholdingAgus;
use App\NormalisasiAgus;
use App\StatusProcces;
use App\StemmingAgus;
use App\StopwordAgus;
use Illuminate\Http\Request;

use App\Http\Requests;

class AgusController extends Controller
{
    public function index()
    {
        return view('cagub.agus.index');
    }

    public function data()
    {

        $agus = Agus::paginate(30);
        //dd($ahok);
        return view('cagub.agus.data', compact('agus'));
    }

    public function postCaseFolding()
    {
        $agus = Agus::all();
        CaseholdingAgus::truncate();

        foreach ($agus as $key => $aguss){
            $saveAgus = new CaseholdingAgus();
            $saveAgus->id = $key+1;
            $saveAgus->From_User = $aguss->From_User;
            $saveAgus->text = lower($aguss->Text);
            $saveAgus->save();
        }

        $status = StatusProcces::where('id',1)->first();
        $status->status = 1;
        $status->save();

        return redirect(url(action('AgusController@caseFolding')));
    }
    public function caseFolding()
    {
        $agusLower = CaseholdingAgus::paginate(30);
        return view('cagub.agus.casefolding', compact('agusLower'));
    }

    public function postNormalisasi()
    {
        $agusCaseholding = CaseholdingAgus::all();
        NormalisasiAgus::truncate();
        foreach ($agusCaseholding as $key => $agus){
            $saveAhok = new NormalisasiAgus();
            $saveAhok->id = $key+1;
            $saveAhok->From_User = $agus->From_User;
            $saveAhok->text = iconv(mb_detect_encoding(normalisasi($agus->text), mb_detect_order(), true), "UTF-8", normalisasi($agus->text));
            $saveAhok->save();
        }
        $status = StatusProcces::where('id',2)->first();
        $status->status = 1;
        $status->save();

        return redirect(url(action('AgusController@normalisasi')));
    }
    public function normalisasi()
    {
        $agus = NormalisasiAgus::paginate(30);
        return view('cagub.agus.normalisasi', compact('agus'));
    }

    public function postStopword(){

        $agusStopword = NormalisasiAgus::all();
        StopwordAgus::truncate();

        foreach ($agusStopword as $key => $agus){
            $saveAgus = new StopwordAgus();
            $saveAgus->id = $key+1;
            $saveAgus->From_User = $agus->From_User;
            $saveAgus->text = stopword($agus->text);
            $saveAgus->save();
        }

        return redirect(url(action('AgusController@stopword')));
    }
    public function stopword(){

        $agus = StopwordAgus::paginate(30);
        return view('cagub.agus.stopword', compact('agus'));
    }

    public function postStemming(){

        $agustopword = StopwordAgus::all();
        StemmingAgus::truncate();

        foreach ($agustopword as $key => $agus){
            $saveAgus = new StemmingAgus();
            $saveAgus->id = $key+1;
            $saveAgus->From_User = $agus->From_User;
            $saveAgus->text = stemming($agus->text);
            $saveAgus->save();
        }
        return redirect(url(action('AgusController@getStemming')));

    }

    public function getStemming(){
        $agus = StemmingAgus::paginate(30);
        return view('cagub.agus.stemming', compact('agus'));
    }
}
