<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    protected $table = 'heroes';
    protected $fillable = ['nick','real','characteristic','superpowers','catch_phrase'];

    public function image()
    {
    	return $this->hasOne('App\Image');
    }
}
