<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WordIndonesian extends Model
{
    protected $table = 'word_positif';
    protected $fillable = [
      'id','positif'
    ];
    protected $casts = [
      //'positif' =>  'array'
    ];
}
