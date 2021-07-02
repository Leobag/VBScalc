<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class servicePhoto extends Model
{
    public $Primarykey = 'id';
    protected $table = 'service_photo';

    public function photo(){
      return $this->belongsTo('App\service', 'service_id');
    }
}
