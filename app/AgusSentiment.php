<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AgusSentiment extends Model
{
    protected $table = 'agus_sentiments';
    public $timestamps = false;


    public function sentiment(){
        return $this->belongsTo(Sentiment::class);
    }
}
