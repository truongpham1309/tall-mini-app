<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    protected $table = 'products';
    
    protected $fillable = [
        'name',
        'price',
        'gallery',
        'quantity',
        'category_id',
        'description',
        'isDelete',
    ];
}
