<?php

namespace App\Repositories;

use App\Models\Song;
use App\Traits\UploadAble;
use Illuminate\Http\UploadedFile;
use App\Contracts\SongContract;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Doctrine\Instantiator\Exception\InvalidArgumentException;

/**
 * Class SongRepository
 *
 * @package \App\Repositories
 */
class SongRepository extends BaseRepository implements SongContract
{
    use UploadAble;

    /**
     * SongRepository constructor.
     * @param Song $model
     */
    public function __construct(Song $model)
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
    public function listSongs(string $order = 'id', string $sort = 'asc', array $columns = ['*'])
    {
        return $this->all($columns, $order, $sort);
    }

    /**
     * @param int $id
     * @return mixed
     * @throws ModelNotFoundException
     */
    public function findSongById(int $id)
    {
        try {
            return $this->findOneOrFail($id);

        } catch (ModelNotFoundException $e) {

            throw new ModelNotFoundException($e);
        }

    }

    /**
     * @param array $params
     * @return Song|mixed
     */
    public function createSong(array $params)
    {
        try {
            $collection = collect($params);

            $featured = $collection->has('featured') ? 1 : 0;
            $status = $collection->has('status') ? 1 : 0;

            $merge = $collection->merge(compact('status', 'featured'));

            $song = new Song($merge->all());

            $song->save();

            // if ($collection->has('categories')) {
            //     $song->categories()->sync($params['categories']);
            // }
            return $song;

        } catch (QueryException $exception) {
            throw new InvalidArgumentException($exception->getMessage());
        }
    }

    /**
     * @param array $params
     * @return mixed
     */
    public function updateSong(array $params)
    {
        $song = $this->findSongById($params['song_id']);

        $collection = collect($params)->except('_token');

        $featured = $collection->has('featured') ? 1 : 0;
        $status = $collection->has('status') ? 1 : 0;

        $merge = $collection->merge(compact('status', 'featured'));

        $song->update($merge->all());

        if ($collection->has('categories')) {
            $song->categories()->sync($params['categories']);
        }

        return $song;
    }

    /**
     * @param $id
     * @return bool|mixed
     */
    public function deleteSong($id)
    {
        $song = $this->findSongById($id);

        $song->delete();

        return $song;
    }

    /**
     * @param $slug
     * @return mixed
     */
    public function findSongBySlug($slug)
    {
        $song = Song::where('slug', $slug)->first();

        return $song;
    }
}
