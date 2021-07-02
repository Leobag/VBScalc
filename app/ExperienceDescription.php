<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class experienceDescription extends Model
{

  protected $table = 'experience_descriptions';

  public function description(){
    return $this->belongsTo('App\experience', 'experience_id');
  }

}
