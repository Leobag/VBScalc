<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{

  protected $table = 'about';

  public $guarded = [];

  protected $fillable = [
    'name', 'description',
  ];
}
