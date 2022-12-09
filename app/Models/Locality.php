<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locality extends Model
{
    use HasFactory;
    protected $table="mt_locality";
    protected $fillable = [
        'value',
        'pincode',
        'active',
        'created_by',
        'updated_by',
    ];
}
