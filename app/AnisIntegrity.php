<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnisIntegrity extends Model
{
    public function sentiment(){
        return $this->belongsTo(Sentiment::class);
    }
}
