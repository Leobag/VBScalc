<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    public $guarded = [];

    public function experiencedescriptions(){
      return $this->hasMany('App\ExperienceDescription', 'experience_id');
    }
}
