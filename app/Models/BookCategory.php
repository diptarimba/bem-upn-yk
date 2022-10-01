<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function sub_category()
    {
        return $this->hasMany(BookSubCategory::class, 'category_id');
    }

    public function book()
    {
        return $this->hasManyThrough(Book::class, BookSubCategory::class, 'category_id', 'sub_category_id');
    }
}
