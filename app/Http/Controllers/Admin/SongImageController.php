<?php

namespace App\Http\Controllers\Admin;

use App\Traits\UploadAble;
use App\Models\SongImage;
use Illuminate\Http\Request;
use App\Contracts\SongContract;
use App\Http\Controllers\Controller;

class SongImageController extends Controller
{
    use UploadAble;

    protected $songRepository;

    public function __construct(SongContract $songRepository)
    {
        $this->songRepository = $songRepository;
    }

    public function upload(Request $request)
    {
        $song = $this->songRepository->findSongById($request->song_id);

        if ($request->has('image')) {

            $image = $this->uploadOne($request->image, 'songs');

            $songImage = new SongImage([
                'full'      =>  $image,
            ]);

            $song->images()->save($songImage);
        }
        return redirect()->back();

        // return response()->json(['status' => 'Success']);
    }

    public function delete($id)
    {
        $image = SongImage::findOrFail($id);

        if ($image->full != '') {
            $this->deleteOne($image->full);
        }
        $image->delete();

        return redirect()->back();
    }
}
