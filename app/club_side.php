<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class club_side extends Model
{

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
        'club_name',
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
}
