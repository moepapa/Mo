<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;

class Song extends Model
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
            'songs.song_name' => 10,
            'songs.description' => 5,
        ],
    ];

    //
    /**
     * @var string
     */
    protected $table = 'songs';

    /**
     * @var array
     */
    protected $fillable = [
        'artist_id', 'song_name', 'description',
    ];

    /**
     * @var array
     */
    protected $casts = [
        'artist_id'  =>  'integer',
    ];

     /**
     * @param $value
     */
    public function setNameAttribute($value)
    {
        $this->attributes['song_name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }

      /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function songs()
    {
        return $this->hasMany(Song::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function images()
    {
        return $this->hasMany(SongImage::class);
    }

}

