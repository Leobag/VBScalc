<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class abouts extends Model
{

  protected $table = 'abouts';

  public $guarded = [];

  protected $fillable = [
    'name', 'introduction_p1','introduction_p2'
  ];
  public function descriptions(){
    return $this->hasMany('App\aboutDescription', 'about_id');
  }

  public function photos(){
    return $this->hasMany('App\aboutPhoto', 'about_id');
  }
}
