<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'date', 'file', 'preview', 'sub_category_id'
    ];

    public function sub_category()
    {
        return $this->belongsTo(BookSubCategory::class, 'sub_category_id');
    }

    public function category()
    {
        return $this->belongsTo(BookCategory::class);
    }
}
