<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Contracts\ArtistContract;
use App\Http\Controllers\BaseController;

class ArtistController extends BaseController
{
    /**
     * @var ArtistContract
     */
    protected $artistRepository;

    /**
     * CategoryController constructor.
     * @param ArtistContract $artistRepository
     */
    public function __construct(ArtistContract $artistRepository)
    {
        $this->artistRepository = $artistRepository;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $artists = $this->artistRepository->listArtists();

        $this->setPageTitle('Artists', 'List of all artists');
        return view('admin.artists.index', compact('artists'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $this->setPageTitle('Artists', 'Create Artist');
        return view('admin.artists.create');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'      =>  'required|max:191',
            'image'     =>  'mimes:jpg,jpeg,png|max:1000'
        ]);

        $params = $request->except('_token');

        $artist = $this->artistRepository->createArtist($params);

        if (!$artist) {
            return $this->responseRedirectBack('Error occurred while creating artist.', 'error', true, true);
        }
        return $this->responseRedirect('admin.artists.index', 'Artist added successfully' ,'success',false, false);
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $artist = $this->artistRepository->findArtistById($id);

        $this->setPageTitle('Artists', 'Edit Artist : '.$artist->name);
        return view('admin.artists.edit', compact('artist'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            'name'      =>  'required|max:191',
            'image'     =>  'mimes:jpg,jpeg,png|max:1000'
        ]);

        $params = $request->except('_token');

        $artist = $this->artistRepository->updateArtist($params);

        if (!$artist) {
            return $this->responseRedirectBack('Error occurred while updating artist.', 'error', true, true);
        }
        return $this->responseRedirectBack('Artist updated successfully' ,'success',false, false);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete($id)
    {
        $artist = $this->artistRepository->deleteArtist($id);

        if (!$artist) {
            return $this->responseRedirectBack('Error occurred while deleting artist.', 'error', true, true);
        }
        return $this->responseRedirect('admin.artists.index', 'Artist deleted successfully' ,'success',false, false);
    }
}
