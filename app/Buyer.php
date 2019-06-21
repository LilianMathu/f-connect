<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{
    //
    public function wallet()
    {
       return $this->hasOne(Wallet::class);
    }
    protected $fillable = ['name', 'email', 'phone', 'password'];
}
