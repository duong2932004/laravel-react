<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $fillable = [
        'active_status_id',
        'name',
        'email',
        'email_verified_at',
        'password',
        'image',
        'numberPhone',
    ];
    public function active_status(){
        return $this->belongsTo(Active_status::class);
    }
}
