<?php

namespace App\Contracts;

/**
 * Interface TypeContract
 * @package App\Contracts
 */
interface TypeContract
{
    /**
     * @param string $order
     * @param string $sort
     * @param array $columns
     * @return mixed
     */
    public function listTypes(string $order = 'id', string $sort = 'desc', array $columns = ['*']);

    /**
     * @param int $id
     * @return mixed
     */
    public function findTypeById(int $id);

    /**
     * @param array $params
     * @return mixed
     */
    public function createType(array $params);

    /**
     * @param array $params
     * @return mixed
     */
    public function updateType(array $params);

    /**
     * @param $id
     * @return bool
     */
    public function deleteType($id);
}