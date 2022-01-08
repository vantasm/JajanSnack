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

    public function scopeCategory($query, array $filters)
    {
        if(isset($filters["category"]) ? $filters["category"] : false)
        {
            return $query->where("category", "like", $filters["category"]);
        }
    }
}
