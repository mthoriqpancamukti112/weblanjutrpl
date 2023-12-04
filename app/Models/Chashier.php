<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chashier extends Model
{
    use HasFactory;

    protected $table = 'chashier';
    protected $fillable = ['name', 'phone', 'age'];
}
