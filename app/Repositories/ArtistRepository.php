<?php

namespace App\Repositories;

use App\Models\Artist;
use App\Traits\UploadAble;
use Illuminate\Http\UploadedFile;
use App\Contracts\ArtistContract;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Doctrine\Instantiator\Exception\InvalidArgumentException;

/**
 * Class ArtistRepository
 *
 * @package \App\Repositories
 */
class ArtistRepository extends BaseRepository implements ArtistContract
{
    use UploadAble;

    /**
     * ArtistRepository constructor.
     * @param Artist $model
     */
    public function __construct(Artist $model)
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
    public function listArtists(string $order = 'id', string $sort = 'asc', array $columns = ['*'])
    {
        return $this->all($columns, $order, $sort);
    }

    /**
     * @param int $id
     * @return mixed
     * @throws ModelNotFoundException
     */
    public function findArtistById(int $id)
    {
        try {
            return $this->findOneOrFail($id);

        } catch (ModelNotFoundException $e) {

            throw new ModelNotFoundException($e);
        }

    }

    /**
     * @param array $params
     * @return Artist|mixed
     */
    public function createArtist(array $params)
    {
        try {
            $collection = collect($params);

            $logo = null;

            if ($collection->has('logo') && ($params['logo'] instanceof  UploadedFile)) {
                $logo = $this->uploadOne($params['logo'], 'artists');
            }

            $featured = $collection->has('featured') ? 1 : 0;
            $menu = $collection->has('menu') ? 1 : 0;

            $merge = $collection->merge(compact('logo'));

            $artist = new Artist($merge->all());

            $artist->save();

            return $artist;

        } catch (QueryException $exception) {
            throw new InvalidArgumentException($exception->getMessage());
        }
    }

    /**
     * @param array $params
     * @return mixed
     */
    public function updateArtist(array $params)
    {
        $artist = $this->findArtistById($params['id']);

        $collection = collect($params)->except('_token');

        if ($collection->has('logo') && ($params['logo'] instanceof  UploadedFile)) {

            if ($artist->logo != null) {
                $this->deleteOne($artist->logo);
            }

            $logo = $this->uploadOne($params['logo'], 'artists');
        }

        $featured = $collection->has('featured') ? 1 : 0;
        $menu = $collection->has('menu') ? 1 : 0;

        $merge = $collection->merge(compact('logo'));

        $artist->update($merge->all());

        return $artist;
    }

    /**
     * @param $id
     * @return bool|mixed
     */
    public function deleteArtist($id)
    {
        $artist = $this->findArtistById($id);

        if ($artist->logo != null) {
            $this->deleteOne($artist->logo);
        }

        $artist->delete();

        return $artist;
    }

    /**
     * @return mixed
     */
    public function treeList()
    {
        return Artist::orderByRaw('-name ASC')
            ->get()
            ->nest()
            ->setIndent('|–– ')
            ->listsFlattened('name');
    }

    public function findBySlug($slug)
    {
        return Artist::with('songs')
            ->where('slug', $slug)
            ->where('menu', 1)
            ->first();
    }
}