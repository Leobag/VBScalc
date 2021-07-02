<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class experience extends Model
{
  protected $table = 'experiences';
  public $Primarykey = 'id';
  public $guarded = [];

    public function descriptions(){
      return $this->hasMany('App\experienceDescription', 'experience_id');
    }
    public function photos(){
      return $this->hasMany('App\experiencePhoto', 'experience_id');
    }
}
