<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tool extends Model
{
    public $Primarykey = 'id';
    public $guarded = [];
    protected $table = 'tools';

    protected $fillable = [
      'name', 'description', 'link'
    ];
}
