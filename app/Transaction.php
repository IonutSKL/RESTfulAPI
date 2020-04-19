<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'quantity',
        'buyer_id',
        'seller_id'
    ];

    public function buyer(){
        return $this->belongsTo(Buyer::class);
    }

    public function seller(){
        return $this->belongsTo(Seller::class);
    }
}
