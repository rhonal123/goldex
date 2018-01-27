<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Configuration extends Model
{
    //
  protected $fillable = ['anoTransito'];
  protected $guarded = ['id'];
  protected $hidden = ['created_at','updated_at'];
  protected $casts = ['anoTransito' => 'date'];
}
