<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AhokSentiment extends Model
{
    protected $table = 'ahok_sentiment';
    public $timestamps = false;

    public function sentiment(){
        return $this->belongsTo(Sentiment::class);
    }



}
