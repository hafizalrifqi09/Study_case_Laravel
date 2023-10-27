<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class medicine extends Model
{
    use HasFactory;

    // property yang digunakan untuk menyimpan nama-nama colum yang bisa di isi valuenya
    protected $fillable = [
        'type',
        'name',
        'price',
        'stock',
    ];
}
