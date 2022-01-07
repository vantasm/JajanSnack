<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function detail_transaction()
    {
        return $this->hasMany("App\DetailTransaction", "product_id", "id");
    }
}
