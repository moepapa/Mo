<?php

namespace App\Contracts;

/**
 * Interface ArtistContract
 * @package App\Contracts
 */
interface ArtistContract
{
    /**
     * @param string $order
     * @param string $sort
     * @param array $columns
     * @return mixed
     */
    public function listArtists(string $order = 'id', string $sort = 'desc', array $columns = ['*']);

    /**
     * @param int $id
     * @return mixed
     */
    public function findArtistById(int $id);

    /**
     * @param array $params
     * @return mixed
     */
    public function createArtist(array $params);

    /**
     * @param array $params
     * @return mixed
     */
    public function updateArtist(array $params);

    /**
     * @param $id
     * @return bool
     */
    public function deleteArtist($id);
}