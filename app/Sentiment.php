<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sentiment extends Model
{
    protected $table = 'sentimen';

    public function word(){
        return $this->hasMany(Word::class);
    }

    public function wordIntegrity(){
        return $this->hasMany(WordIntegrity::class);
    }
    public function wordCapability(){
        return $this->hasMany(WordCabability::class);
    }

    public function ahokSentiment(){
        return $this->hasMany(AhokSentiment::class);
    }

    public function agusSentiment(){
        return $this->hasMany(AgusSentiment::class);
    }

    public function anisSentiment(){
        return $this->hasMany(AnisSentimen::class);
    }

    public function agusIntegritas(){
        return $this->hasMany(AgusIntegrity::class);
    }

    public function ahokIntegritas(){
        return $this->hasMany(AhokIntegrity::class);
    }

    public function anisIntegritas(){
        return $this->hasMany(AnisIntegrity::class);
    }

}
