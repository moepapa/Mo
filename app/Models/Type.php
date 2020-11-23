<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use App\Contracts\TypeContract;
use App\Repositories\TypeRepository;

/**
 * Class Type
 * @package App\Models
 */
class Type extends Model
{
    /**
     * @var string
     */
    protected $table = 'types';

    /**
     * @var array
     */
    protected $fillable = ['name', 'slug'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function seedlings()
    {
        return $this->hasMany(Seedling::class);
    }

    protected $repositories = [
        CategoryContract::class         =>          CategoryRepository::class,
        TypeContract::class            =>          TypeRepository::class,
    ];
}
