<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MakananModel extends Model
{
    use HasFactory;

    protected $table = 'list_makanan';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama',
        'harga',
        'deskripsi',
        'rating'
    ];

}
