<?php

namespace App\Repositories;

use App\Models\Type;
use App\Traits\UploadAble;
use Illuminate\Http\UploadedFile;
use App\Contracts\TypeContract;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Doctrine\Instantiator\Exception\InvalidArgumentException;

/**
 * Class CategoryRepository
 *
 * @package \App\Repositories
 */
class TypeRepository extends BaseRepository implements TypeContract
{
    use UploadAble;

    /**
     * CategoryRepository constructor.
     * @param Type $model
     */
    public function __construct(Type $model)
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
    public function listTypes(string $order = 'id', string $sort = 'asc', array $columns = ['*'])
    {
        return $this->all($columns, $order, $sort);
    }

    /**
     * @param int $id
     * @return mixed
     * @throws ModelNotFoundException
     */
    public function findTypeById(int $id)
    {
        try {
            return $this->findOneOrFail($id);

        } catch (ModelNotFoundException $e) {

            throw new ModelNotFoundException($e);
        }

    }

    /**
     * @param array $params
     * @return Type|mixed
     */
    public function createType(array $params)
    {
        try {
            $collection = collect($params);

            $logo = null;

            if ($collection->has('logo') && ($params['logo'] instanceof  UploadedFile)) {
                $logo = $this->uploadOne($params['logo'], 'types');
            }

            $merge = $collection->merge(compact('logo'));

            $type = new Type($merge->all());

            $type->save();

            return $type;

        } catch (QueryException $exception) {
            throw new InvalidArgumentException($exception->getMessage());
        }
    }

    /**
     * @param array $params
     * @return mixed
     */
    public function updateType(array $params)
    {
        $type = $this->findTypeById($params['id']);

        $collection = collect($params)->except('_token');

        if ($collection->has('logo') && ($params['logo'] instanceof  UploadedFile)) {

            if ($type->logo != null) {
                $this->deleteOne($type->logo);
            }

            $logo = $this->uploadOne($params['logo'], 'types');
        }

        $merge = $collection->merge(compact('logo'));

        $type->update($merge->all());

        return $type;
    }

    /**
     * @param $id
     * @return bool|mixed
     */
    public function deleteType($id)
    {
        $type = $this->findTypeById($id);

        if ($type->logo != null) {
            $this->deleteOne($type->logo);
        }

        $type->delete();

        return $type;
    }
}