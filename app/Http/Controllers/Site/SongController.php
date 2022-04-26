<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Contracts\SongContract;
use App\Http\Controllers\Controller;
use App\Http\Controllers\BaseController;
use App\Http\Requests\StoreSeedlingFormRequest;
use App\Models\Song;

class SongController extends Controller
{
    protected $songRepository;

    public function __construct(SongContract $songRepository)
    {
        $this->songRepository = $songRepository;
    }

    public function show($slug)
    {
        $song = $this->songRepository->findSongBySlug($slug);

        return view('site.pages.song', compact('song'));
    }


    public function search(Request $request)
    {
        $request->validate([
            'query' => 'required|min:3',
        ]);

        $query = $request->input('query');

        $songs = Song::where('song_name', 'like', "%$query%")
                            ->orWhere('description', 'like', "%$query%")
                            ->paginate(3);

        // $songs = Song::search($query)->paginate(3);

        return view('site.pages.search-results')->with('songs', $songs);
    }
}