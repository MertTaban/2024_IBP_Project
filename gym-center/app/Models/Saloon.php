<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saloon extends Model
{
    use HasFactory;
    protected $table = 'saloons';

    protected $fillable = [
        'name',
        'address',
        'phone',
        'email',
        'monthly_price',
        'active_member',
        'description'
    ];
}
