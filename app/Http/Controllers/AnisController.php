<?php

namespace App\Http\Controllers;

use App\Anis;
use App\CaseholdingAnis;
use App\NormalisasiAnis;
use App\StatusProcces;
use App\StemmingAnis;
use App\StopwordAnis;
use Illuminate\Http\Request;

use App\Http\Requests;

class AnisController extends Controller
{
    public function index(){
        return view('cagub.anis.index');
    }

    public function data()
    {

        $anis = Anis::paginate(30);
        //dd($ahok);
        return view('cagub.anis.data', compact('anis'));
    }

    public function postCaseFolding()
    {
        $anis = Anis::all();
        CaseholdingAnis::truncate();

        foreach ($anis as $key => $aguss){
            $saveAnis = new CaseholdingAnis();
            $saveAnis->id = $key+1;
            $saveAnis->From_User = $aguss->From_User;
            $saveAnis->text = lower($aguss->Text);
            //dd($saveAnis);
            $saveAnis->save();
        }

        $status = StatusProcces::where('id',1)->first();
        $status->status = 1;
        $status->save();

        return redirect(url(action('AnisController@caseFolding')));
    }
    public function caseFolding()
    {
        $anisLower = CaseholdingAnis::paginate(30);

        return view('cagub.anis.casefolding', compact('anisLower'));
    }

    public function postNormalisasi()
    {
        $anisCaseholding = CaseholdingAnis::all();
        NormalisasiAnis::truncate();
        foreach ($anisCaseholding as $key => $anis){
            $saveAnis = new NormalisasiAnis();
            $saveAnis->id = $key+1;
            $saveAnis->From_User = $anis->From_User;
            $saveAnis->text = iconv(mb_detect_encoding(normalisasi($anis->text), mb_detect_order(), true), "UTF-8", normalisasi($anis->text));
            $saveAnis->save();
        }
        $status = StatusProcces::where('id',2)->first();
        $status->status = 1;
        $status->save();

        return redirect(url(action('AnisController@normalisasi')));
    }
    public function normalisasi()
    {
        $anis = NormalisasiAnis::paginate(30);
        return view('cagub.anis.normalisasi', compact('anis'));
    }

    public function postStopword(){

        $agusStopword = NormalisasiAnis::all();
        StopwordAnis::truncate();

        foreach ($agusStopword as $key => $anis){
            $saveAnis = new StopwordAnis();
            $saveAnis->id = $key+1;
            $saveAnis->From_User = $anis->From_User;
            $saveAnis->text = stopword($anis->text);
            $saveAnis->save();
        }
        return redirect(url(action('AnisController@stopword')));
    }

    public function stopword(){
        $anis = StopwordAnis::paginate(30);
        return view('cagub.anis.stopword', compact('anis'));
    }

    public function postStemming(){

        $anistopword = StopwordAnis::all();
        StemmingAnis::truncate();

        foreach ($anistopword as $key => $anis){
            $saveAnis = new StemmingAnis();
            $saveAnis->id = $key+1;
            $saveAnis->From_User = $anis->From_User;
            $saveAnis->text = stemming($anis->text);
            $saveAnis->save();
        }
        return redirect(url(action('AnisController@getStemming')));
    }

    public function getStemming(){
        $anis = StemmingAnis::paginate(30);
        return view('cagub.anis.stemming', compact('anis'));
    }
}
