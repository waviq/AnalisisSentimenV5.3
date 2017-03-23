<?php

namespace App\Http\Controllers;

use Alert;
use App\Http\Requests\CapabilityRequest;
use App\Http\Requests\IntegrityRequest;
use App\Http\Requests\WordRequest;
use App\Word;
use App\WordCabability;
use App\WordIntegrity;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class WordSentimentController extends Controller
{
    public function index(){
        return view('word.index');
    }
    public function getWordPositif(){
        $word = Word::where('sentimen_id',1)->orderBy('id','desc')->paginate(30);
        return view('word.positif',compact('word'));
    }
    public function getWordNegatif(){
        $word = Word::where('sentimen_id',2)->orderBy('id','desc')->paginate(30);
        return view('word.negatif',compact('word'));
    }

    public function getWordIntegririty(){
        $word = WordIntegrity::where('sentimen_id',4)->orderBy('id','desc')->paginate(30);
        return view('word.integrity',compact('word'));
    }

    public function postWordIntegrity(IntegrityRequest $request){
        $input = Input::get('word');

        $word = new WordIntegrity();
        $word->word = $input;
        $word->sentimen_id = Input::get('sentimen_id');
        $saved = $word->save();

        if ($saved){
            alert()->success('Sukses Menyimpan');
        }else if(!$saved){
            alert()->error('Gagal Menyimpan');
        }
        return redirect(url(action('WordSentimentController@getWordIntegririty')));
    }

    public function getWordCapability(){
        $word = WordCabability::where('sentimen_id',5)->orderBy('id','desc')->paginate(30);
        return view('word.capability',compact('word'));
    }

    public function postWordCapability(CapabilityRequest $request){
        $input = Input::get('word');

        $word = new WordCabability();
        $word->word = $input;
        $word->sentimen_id = Input::get('sentimen_id');
        $saved = $word->save();

        if ($saved){
            alert()->success('Sukses Menyimpan');
        }else if(!$saved){
            alert()->error('Gagal Menyimpan');
        }
        return redirect(url(action('WordSentimentController@getWordCapability')));
    }

    public function postWordPositif(WordRequest $request){
        $input = Input::get('word');

        $word = new Word();
        $word->word = $input;
        $word->sentimen_id = Input::get('sentimen_id');
        $saved = $word->save();

        if ($saved){
            alert()->success('Sukses Menyimpan');
        }else if(!$saved){
            alert()->error('Gagal Menyimpan');
        }
        return redirect(url(action('WordSentimentController@getWordPositif')));
    }


    public function postWordNegatif(WordRequest $request){
        $input = Input::get('word');

        $word = new Word();
        $word->word = $input;
        $word->sentimen_id = Input::get('sentimen_id');
        $saved = $word->save();

        if ($saved){
            alert()->success('Sukses Menyimpan');
        }else if(!$saved){
            alert()->error('Gagal Menyimpan');
        }
        return redirect(url(action('WordSentimentController@getWordNegatif')));
    }

    public function hapusCapability($id){
        $word = WordCabability::findOrFail($id);
        $word->delete();

        alert()->success('Sukses menghapus');
        return redirect()->back();
    }

    public function hapusIntegrity($id){
        $word = WordIntegrity::findOrFail($id);
        $word->delete();

        alert()->success('Sukses menghapus');
        return redirect()->back();
    }
    public function hapus($id){
        $word = Word::findOrFail($id);
        $word->delete();

        alert()->success('Sukses menghapus');
        return redirect()->back();
    }
    public function hapusNegatif($id){
        $word = Word::findOrFail($id);
        $word->delete();

        alert()->success('Sukses menghapus');
        return redirect()->back();
    }

    public function searchPositif(){
        $input = Input::get('word');
        $seach = explode(' ',$input);
        $tableWordPositig = Word::where('sentimen_id',1);

        foreach ($seach as $term){
            $tableWordPositig->where('word','LIKE','%' .$term.'%');
        }
        $word = $tableWordPositig->paginate(10);
        //dd($word->first());
        return view('word.positif', compact('word'));
    }
    public function searchNegatif(){
        $input = Input::get('word');
        $seach = explode(' ',$input);
        $tableWordNegatif= Word::where('sentimen_id',2);

        foreach ($seach as $term){
            $tableWordNegatif->where('word','LIKE','%' .$term.'%');
        }
        $word = $tableWordNegatif->paginate(10);
        //dd($word->first());
        return view('word.negatif', compact('word'));
    }
    public function searchIntegrity(){
        $input = Input::get('word');
        $seach = explode(' ',$input);
        $tableWordNegatif= WordIntegrity::where('sentimen_id',4);

        foreach ($seach as $term){
            $tableWordNegatif->where('word','LIKE','%' .$term.'%');
        }
        $word = $tableWordNegatif->paginate(10);
        //dd($word->first());
        return view('word.integrity', compact('word'));
    }

    public function searchCapability(){
        $input = Input::get('word');
        $seach = explode(' ',$input);
        $tableWordNegatif= WordCabability::where('sentimen_id',5);

        foreach ($seach as $term){
            $tableWordNegatif->where('word','LIKE','%' .$term.'%');
        }
        $word = $tableWordNegatif->paginate(10);
        //dd($word->first());
        return view('word.capability', compact('word'));
    }
}
