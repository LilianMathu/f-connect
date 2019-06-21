<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produce extends Model
{
    //
    public function farmer()
    {
        return $this->belongsTo(Farmer::class);
    }
    protected $fillable = ['farmer_id', 'quantity', 'cost'];

}
