<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Contracts\ArtistContract;
use App\Contracts\SongContract;
use App\Http\Controllers\BaseController;
use App\Http\Requests\StoreSongFormRequest;
use App\Models\Song;

class SongController extends BaseController
{
    protected $artistRepository;

    protected $songRepository;

    public function __construct(
        ArtistContract $artistRepository,
        SongContract $songRepository
    )
    {
        $this->artistRepository = $artistRepository;
        $this->songRepository = $songRepository;
    }

    public function index()
    {
        $songs = $this->songRepository->listSongs();

        $this->setPageTitle('Songs', 'Songs List');
        return view('admin.songs.index', compact('songs'));
    }

    public function create()
    {
        $artists = $this->artistRepository->listArtists('name', 'asc');

        $this->setPageTitle('Songs', 'Create Song');
        return view('admin.songs.create');
    }

    public function store(StoreSongFormRequest $request)
    {
        $params = $request->except('_token');

        $song = $this->songRepository->createSong($params);

        if (!$song) {
            return $this->responseRedirectBack('Error occurred while creating song.', 'error', true, true);
        }
        return $this->responseRedirect('admin.songs.index', 'Song added successfully' ,'success',false, false);
    }

    public function show($id)
    {
        $song = $this->songRepository->findSongById($id);

        $this->setPageTitle('Song Details', $id);
        return view('admin.songs.show', compact('song'));
    }

    public function edit($id)
    {
        $song = $this->songRepository->findSongById($id);
        $artists = $this->artistRepository->listArtists('name', 'asc');

        $this->setPageTitle('Songs', 'Edit Song');
        return view('admin.songs.edit', compact('song'));
    }

    public function update(StoreSongFormRequest $request)
    {
        $params = $request->except('_token');

        $song = $this->songRepository->updateSong($params);

        if (!$song) {
            return $this->responseRedirectBack('Error occurred while updating song.', 'error', true, true);
        }
        return $this->responseRedirect('admin.songs.index', 'Song updated successfully' ,'success',false, false);
    }

    public function delete($id)
    {
        $song = $this->songRepository->deleteSong($id);

        if(!$song){
            return $this->responseRedirectBack('Error occurred while deleting song.', 'error', true, true);
        }
        return $this->responseRedirect('admin.songs.index', 'Song deleted successfully' ,'success',false, false);


    }

    public function search(Request $request)
    {
        $request->validate([
            'query' => 'required|min:3',
        ]);

        $query = $request->input('query');

        $songs = Song::where('song_name', 'like', "%$query%")
                            ->paginate(3);

        // $songs = Song::search($query)->paginate(3);

        return view('admin.search-results')->with('songs', $songs);
    }
}
