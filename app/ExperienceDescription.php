<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExperienceDescription extends Model
{

  public function experience(){
    return $this->belongsTo('App\Experience', 'experience_id');
  }

}
