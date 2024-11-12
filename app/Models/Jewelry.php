<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jewelry extends Model
{
    use HasFactory;

    // تحديد الحقول القابلة للملء (fillable) لتجنب mass-assignment exception
    protected $fillable = ['name', 'description', 'price', 'image'];
}
