<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailTransaction extends Model
{
    use HasFactory;

    public function product()
    {
        return $this->belongsTo("App\Product", "product_id", "id");
    }

    public function transaction()
    {
        return $this->belongsTo("App\Transaction", "transaction_id", "id");
    }
}
