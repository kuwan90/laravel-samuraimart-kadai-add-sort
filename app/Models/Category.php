<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // 1つのカテゴリーは、複数の商品を持てる
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
