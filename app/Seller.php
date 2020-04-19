<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seller extends User
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products(){
        return $this->hasMany(Product::class);
    }
}
