<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    protected $table = 'word';
    public $timestamps = false;

    public function sentiment(){
        return $this->belongsTo(Sentiment::class);
    }
}
