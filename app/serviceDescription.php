<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class serviceDescription extends Model
{
    public $Primarykey = 'id';
    protected $table = 'service_description'

    public function description(){
      return $this->belongsTo('App\service', 'service_id');
    }
}
