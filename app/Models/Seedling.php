<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;

class Seedling extends Model
{

    use SearchableTrait;

    /**
     * Searchable rules.
     *
     * @var array
     */
    protected $searchable = [
        /**
         * Columns and their priority in search results.
         * Columns with higher values are more important.
         * Columns with equal values have equal importance.
         *
         * @var array
         */
        'columns' => [
            'seedlings.name' => 10,
            'seedlings.cultivate' => 5,
            'seedlings.medicine' => 5,
        ],
    ];

    /**
     * @var string
     */
    protected $table = 'seedlings';

    /**
     * @var array
     */
    protected $fillable = [
        'type_id', 'myan_name', 'eng_name', 'botany_name', 'slug', 'race', 'duration', 'origin', 'image', 'quantity',
         'cultivate', 'soil', 'grow', 'medicine', 'cultivateTitle', 'soilTitle', 'growTitle', 'medicineTitle',
        'weight', 'price', 'sale_price', 'status', 'featured',
    ];

    /**
     * @var array
     */
    protected $casts = [
        'quantity'  =>  'integer',
        'type_id'  =>  'integer',
        'status'    =>  'boolean',
        'featured'  =>  'boolean'
    ];

     /**
     * @param $value
     */
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function seedlings()
    {
        return $this->hasMany(Seedling::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function images()
    {
        return $this->hasMany(SeedlingImage::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'seedling_categories', 'seedling_id', 'category_id');
    }
}
