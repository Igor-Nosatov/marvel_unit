<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
  protected $table = 'images';

  protected $fillable = ['name','hero_id'];

  public function hero()
  {
    return $this->belongsTo('App\Hero');
  }
}
