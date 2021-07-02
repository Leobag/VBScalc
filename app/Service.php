<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class service extends Model
{
  protected $table = 'services';
  public $Primarykey = 'id';
  public $guarded = [];

  public function photos(){
    return $this->hasMany('App\servicePhoto', 'service_id');
  }

  public function descriptions(){
    return $this->hasMany('App\serviceDescription', 'service_id');
  }
}
