<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class table extends Model
{

  protected $fillable = [
        'users_id','club_name', 'player2', 'club_name2', 'player3', 'player4','level',
  ];
}
