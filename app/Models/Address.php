<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    protected $table='address_user';

    public function user(){
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
