<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SeedlingImage extends Model
{
    /**
     * @var string
     */
    protected $table = 'seedling_images';

    /**
     * @var array
     */
    protected $fillable = ['seedling_id', 'thumbnail', 'full'];

    /**
     * @var array
     */
    protected $casts = [
        'seedling_id'    =>  'integer',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function seedling()
    {
        return $this->belongsTo(Seedling::class);
    }
}
