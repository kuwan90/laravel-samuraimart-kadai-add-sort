<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Product extends Model
{
    use HasFactory, Sortable;

    // 1つの商品は、1つのカテゴリーに属する
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // 1つの商品は、複数のレビューを持てる
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    // 1つの商品は、複数のユーザーにお気に入り登録される
    public function favorited_users()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }
}
