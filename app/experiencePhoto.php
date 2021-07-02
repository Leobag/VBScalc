<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class experiencePhoto extends Model
{
    protected $table = 'experience_photo';

    public function photo(){
      return $this->belongsTo('App\experience', 'experience_id');
    }
}
