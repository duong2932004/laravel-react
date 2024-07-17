<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'method_id',
        'status_oder_id',
        'product_id',
        'numberPhone',
        'address',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function method(){
        return $this->belongsTo(Method::class);
    }
    public function status_oder(){
        return $this->belongsTo(Status_oder::class);
    }
}
