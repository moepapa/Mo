<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Contracts\SongContract;
use App\Repositories\SongRepository;
use App\Contracts\ArtistContract;
use App\Repositories\ArtistRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    protected $repositories = [
        SongContract::class          =>          SongRepository::class,
        ArtistContract::class            =>          ArtistRepository::class,
    ];
    

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        foreach ($this->repositories as $interface => $implementation)
        {
            $this->app->bind($interface, $implementation);
        }
    }
}
