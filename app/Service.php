<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
  public $Primarykey = 'id';
  public $guarded = [];

  protected $fillable = [
    'name', 'description', 'link'
  ];
}
