<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class aboutPhoto extends Model
{
    protected $table = 'about_photo';

    public function photo(){
      return $this->belongsTo('App\abouts', 'about_id');
    }
}
