<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function boards()
    {
        return $this->hasMany('App\Board');
    }
}
