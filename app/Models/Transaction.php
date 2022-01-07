<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo("App\User", "user_id", "id");
    }

    public function detail_transaction()
    {
        return $this->hasMany("App\DetailTransaction", "transaction_id", "id");
    }
}
