<?php

namespace App\Repositories;

use App\Models\Seedling;
use App\Traits\UploadAble;
use Illuminate\Http\UploadedFile;
use App\Contracts\SeedlingContract;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Doctrine\Instantiator\Exception\InvalidArgumentException;

/**
 * Class SeedlingRepository
 *
 * @package \App\Repositories
 */
class SeedlingRepository extends BaseRepository implements SeedlingContract
{
    use UploadAble;

    /**
     * SeedlingRepository constructor.
     * @param Seedling $model
     */
    public function __construct(Seedling $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }

    /**
     * @param string $order
     * @param string $sort
     * @param array $columns
     * @return mixed
     */
    public function listSeedlings(string $order = 'id', string $sort = 'asc', array $columns = ['*'])
    {
        return $this->all($columns, $order, $sort);
    }

    /**
     * @param int $id
     * @return mixed
     * @throws ModelNotFoundException
     */
    public function findSeedlingById(int $id)
    {
        try {
            return $this->findOneOrFail($id);

        } catch (ModelNotFoundException $e) {

            throw new ModelNotFoundException($e);
        }

    }

    /**
     * @param array $params
     * @return Seedling|mixed
     */
    public function createSeedling(array $params)
    {
        try {
            $collection = collect($params);

            $featured = $collection->has('featured') ? 1 : 0;
            $status = $collection->has('status') ? 1 : 0;

            $merge = $collection->merge(compact('status', 'featured'));

            $seedling = new Seedling($merge->all());

            $seedling->save();

            if ($collection->has('categories')) {
                $seedling->categories()->sync($params['categories']);
            }
            return $seedling;

        } catch (QueryException $exception) {
            throw new InvalidArgumentException($exception->getMessage());
        }
    }

    /**
     * @param array $params
     * @return mixed
     */
    public function updateSeedling(array $params)
    {
        $seedling = $this->findSeedlingById($params['seedling_id']);

        $collection = collect($params)->except('_token');

        $featured = $collection->has('featured') ? 1 : 0;
        $status = $collection->has('status') ? 1 : 0;

        $merge = $collection->merge(compact('status', 'featured'));

        $seedling->update($merge->all());

        if ($collection->has('categories')) {
            $seedling->categories()->sync($params['categories']);
        }

        return $seedling;
    }

    /**
     * @param $id
     * @return bool|mixed
     */
    public function deleteSeedling($id)
    {
        $seedling = $this->findSeedlingById($id);

        $seedling->delete();

        return $seedling;
    }

    /**
     * @param $slug
     * @return mixed
     */
    public function findSeedlingBySlug($slug)
    {
        $seedling = Seedling::where('slug', $slug)->first();

        return $seedling;
    }
}
