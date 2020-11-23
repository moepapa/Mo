<?php

namespace App\Http\Controllers\Admin;

use App\Traits\UploadAble;
use App\Models\SeedlingImage;
use Illuminate\Http\Request;
use App\Contracts\SeedlingContract;
use App\Http\Controllers\Controller;

class SeedlingImageController extends Controller
{
    use UploadAble;

    protected $seedlingRepository;

    public function __construct(SeedlingContract $seedlingRepository)
    {
        $this->seedlingRepository = $seedlingRepository;
    }

    public function upload(Request $request)
    {
        $seedling = $this->seedlingRepository->findSeedlingById($request->seedling_id);

        if ($request->has('image')) {

            $image = $this->uploadOne($request->image, 'seedlings');

            $seedlingImage = new SeedlingImage([
                'full'      =>  $image,
            ]);

            $seedling->images()->save($seedlingImage);
        }
        return redirect()->back();

        // return response()->json(['status' => 'Success']);
    }

    public function delete($id)
    {
        $image = SeedlingImage::findOrFail($id);

        if ($image->full != '') {
            $this->deleteOne($image->full);
        }
        $image->delete();

        return redirect()->back();
    }
}
