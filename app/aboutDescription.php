<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class aboutDescription extends Model
{
    protected $table = 'about_descriptions';

    public function description(){
      return $this->belongsTo('App\abouts', 'about_id');
    }
}
