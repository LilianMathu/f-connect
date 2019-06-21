<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    //
    public function Buyer()
    {
        return $this->belongsTo(Buyer::class);
    }
    protected $fillable = ['buyer_id', 'credit', 'debit'];

}
