<?php

namespace App\Contracts;

/**
 * Interface SeedlingContract
 * @package App\Contracts
 */
interface SeedlingContract
{
    /**
     * @param string $order
     * @param string $sort
     * @param array $columns
     * @return mixed
     */
    public function listSeedlings(string $order = 'id', string $sort = 'desc', array $columns = ['*']);

    /**
     * @param int $id
     * @return mixed
     */
    public function findSeedlingById(int $id);

    /**
     * @param array $params
     * @return mixed
     */
    public function createSeedling(array $params);

    /**
     * @param array $params
     * @return mixed
     */
    public function updateSeedling(array $params);

    /**
     * @param $id
     * @return bool
     */
    public function deleteSeedling($id);

    /**
     * @param $slug
     * @return mixed
     */
    public function findSeedlingBySlug($slug);
}
