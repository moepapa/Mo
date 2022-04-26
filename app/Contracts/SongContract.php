<?php

namespace App\Contracts;

/**
 * Interface SongContract
 * @package App\Contracts
 */
interface SongContract
{
    /**
     * @param string $order
     * @param string $sort
     * @param array $columns
     * @return mixed
     */
    public function listSongs(string $order = 'id', string $sort = 'desc', array $columns = ['*']);

    /**
     * @param int $id
     * @return mixed
     */
    public function findSongById(int $id);

    /**
     * @param array $params
     * @return mixed
     */
    public function createSong(array $params);

    /**
     * @param array $params
     * @return mixed
     */
    public function updateSong(array $params);

    /**
     * @param $id
     * @return bool
     */
    public function deleteSong($id);

    /**
     * @param $slug
     * @return mixed
     */
    public function findSongBySlug($slug);
}
