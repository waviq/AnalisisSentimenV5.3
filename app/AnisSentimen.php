<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnisSentimen extends Model
{
    public function sentiment(){
        return $this->belongsTo(Sentiment::class);
    }
}
