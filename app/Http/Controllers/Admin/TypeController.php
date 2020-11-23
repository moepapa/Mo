<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Contracts\TypeContract;
use App\Http\Controllers\BaseController;

class TypeController extends BaseController
{
    /**
     * @var TypeContract
     */
    protected $typeRepository;

    /**
     * CategoryController constructor.
     * @param TypeContract $typeRepository
     */
    public function __construct(TypeContract $typeRepository)
    {
        $this->typeRepository = $typeRepository;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $types = $this->typeRepository->listTypes();

        $this->setPageTitle('Types', 'List of all types');
        return view('admin.types.index', compact('types'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $this->setPageTitle('Types', 'Create Type');
        return view('admin.types.create');
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

        $type = $this->typeRepository->createType($params);

        if (!$type) {
            return $this->responseRedirectBack('Error occurred while creating type.', 'error', true, true);
        }
        return $this->responseRedirect('admin.types.index', 'Type added successfully' ,'success',false, false);
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $type = $this->typeRepository->findTypeById($id);

        $this->setPageTitle('Types', 'Edit Type : '.$type->name);
        return view('admin.types.edit', compact('type'));
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

        $type = $this->typeRepository->updateType($params);

        if (!$type) {
            return $this->responseRedirectBack('Error occurred while updating type.', 'error', true, true);
        }
        return $this->responseRedirectBack('Type updated successfully' ,'success',false, false);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete($id)
    {
        $type = $this->typeRepository->deleteType($id);

        if (!$type) {
            return $this->responseRedirectBack('Error occurred while deleting type.', 'error', true, true);
        }
        return $this->responseRedirect('admin.types.index', 'Type deleted successfully' ,'success',false, false);
    }
}
