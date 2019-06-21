<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Farmer extends Model
{
    //
    public function produce()
    {
       return $this->hasMany(Produce::class);
    }
    protected $fillable = ['name', 'email', 'phone', 'password', 'location'];


}

