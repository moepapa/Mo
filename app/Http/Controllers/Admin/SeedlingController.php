<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Contracts\TypeContract;
use App\Contracts\CategoryContract;
use App\Contracts\SeedlingContract;
use App\Http\Controllers\BaseController;
use App\Http\Requests\StoreSeedlingFormRequest;
use App\Models\Seedling;

class SeedlingController extends BaseController
{
    protected $typeRepository;

    protected $categoryRepository;

    protected $seedlingRepository;

    public function __construct(
        TypeContract $typeRepository,
        CategoryContract $categoryRepository,
        SeedlingContract $seedlingRepository
    )
    {
        $this->typeRepository = $typeRepository;
        $this->categoryRepository = $categoryRepository;
        $this->seedlingRepository = $seedlingRepository;
    }

    public function index()
    {
        $seedlings = $this->seedlingRepository->listSeedlings();

        $this->setPageTitle('Seedlings', 'Seedlings List');
        return view('admin.seedlings.index', compact('seedlings'));
    }

    public function create()
    {
        $types = $this->typeRepository->listTypes('name', 'asc');
        $categories = $this->categoryRepository->listCategories('name', 'asc');

        $this->setPageTitle('Seedlings', 'Create Seedling');
        return view('admin.seedlings.create', compact('categories', 'types'));
    }

    public function store(StoreSeedlingFormRequest $request)
    {
        $params = $request->except('_token');

        $seedling = $this->seedlingRepository->createSeedling($params);

        if (!$seedling) {
            return $this->responseRedirectBack('Error occurred while creating seedling.', 'error', true, true);
        }
        return $this->responseRedirect('admin.seedlings.index', 'Seedling added successfully' ,'success',false, false);
    }

    public function show($id)
    {
        $seedling = $this->seedlingRepository->findSeedlingById($id);

        $this->setPageTitle('Seedling Details', $id);
        return view('admin.seedlings.show', compact('seedling'));
    }

    public function edit($id)
    {
        $seedling = $this->seedlingRepository->findSeedlingById($id);
        $types = $this->typeRepository->listTypes('name', 'asc');
        $categories = $this->categoryRepository->listCategories('name', 'asc');

        $this->setPageTitle('Seedlings', 'Edit Seedling');
        return view('admin.seedlings.edit', compact('categories', 'types', 'seedling'));
    }

    public function update(StoreSeedlingFormRequest $request)
    {
        $params = $request->except('_token');

        $seedling = $this->seedlingRepository->updateSeedling($params);

        if (!$seedling) {
            return $this->responseRedirectBack('Error occurred while updating seedling.', 'error', true, true);
        }
        return $this->responseRedirect('admin.seedlings.index', 'Seedling updated successfully' ,'success',false, false);
    }

    public function delete($id)
    {
        $seedling = $this->seedlingRepository->deleteSeedling($id);

        if(!$seedling){
            return $this->responseRedirectBack('Error occurred while deleting seedling.', 'error', true, true);
        }
        return $this->responseRedirect('admin.seedlings.index', 'Seedling deleted successfully' ,'success',false, false);


    }

    public function search(Request $request)
    {
        $request->validate([
            'query' => 'required|min:3',
        ]);

        $query = $request->input('query');

        $seedlings = Seedling::where('myan_name', 'like', "%$query%")
                            ->paginate(3);

        // $seedlings = Seedling::search($query)->paginate(3);

        return view('admin.search-results')->with('seedlings', $seedlings);
    }
}
