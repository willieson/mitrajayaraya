<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    // Kolom yang dapat diisi
    protected $fillable = [
        'name',
        'description',
        'price',
    ];

    // Relasi satu ke banyak dengan ProductImg
    public function images()
    {
        return $this->hasMany(ProductImg::class, 'product_id');
    }
}
