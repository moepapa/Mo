<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use App\Contracts\ArtistContract;
use App\Repositories\ArtistRepository;

/**
 * Class Artist
 * @package App\Models
 */
class Artist extends Model
{
    /**
     * @var string
     */
    protected $table = 'artists';

    /**
     * @var array
     */
    protected $fillable = ['name', 'slug'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function songs()
    {
        return $this->hasMany(Song::class);
    }

    protected $repositories = [
        ArtistContract::class            =>          ArtistRepository::class,
    ];
}
