<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_order extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_id',
        'name',
        'price',
        'avatar',
        'quantity',
    ];
    public function order(){
        return $this->belongsTo(order::class);
    }
}
