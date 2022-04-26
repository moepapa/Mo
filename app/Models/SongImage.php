<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SongImage extends Model
{
    /**
     * @var string
     */
    protected $table = 'song_images';

    /**
     * @var array
     */
    protected $fillable = ['song_id', 'thumbnail', 'full'];

    /**
     * @var array
     */
    protected $casts = [
        'song_id'    =>  'integer',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function song()
    {
        return $this->belongsTo(Song::class);
    }
}
