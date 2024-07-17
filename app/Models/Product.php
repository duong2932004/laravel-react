<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
        'avatar',
        'description',
        'quantity',
        'sold',
        'active_status_id'
    ];
    public function active_status(){
        return $this->belongsTo(Active_status::class);
    }
}
