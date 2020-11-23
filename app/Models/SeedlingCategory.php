<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SeedlingCategory extends Model
{
    protected $table = 'seedling_categories';

    public $timestamps = false;

    protected $fillable = [
        'category_id', 'seedling_id'
    ];

    public function seedling()
    {
        return $this->belongsTo(Seedling::class, 'seedling_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
