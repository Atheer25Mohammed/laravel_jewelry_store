<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    // تحديد الحقول القابلة للملء (fillable) لتجنب الاستثناءات الخاصة بـ Mass Assignment
    protected $fillable = ['name', 'email', 'phone', 'address'];
}
