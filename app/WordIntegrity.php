<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WordIntegrity extends Model
{
    protected $table = 'word_integrities';
    public function sentiment(){
        return $this->belongsTo(Sentiment::class);
    }
}
