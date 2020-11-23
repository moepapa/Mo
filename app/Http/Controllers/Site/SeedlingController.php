<?php

namespace App\Http\Controllers\Site;

use Cart;
use Illuminate\Http\Request;
use App\Contracts\SeedlingContract;
use App\Http\Controllers\Controller;
use App\Models\Seedling;

class SeedlingController extends Controller
{
    protected $seedlingRepository;

    public function __construct(SeedlingContract $seedlingRepository)
    {
        $this->seedlingRepository = $seedlingRepository;
    }

    public function show($slug)
    {
        $seedling = $this->seedlingRepository->findSeedlingBySlug($slug);

        return view('site.pages.seedling', compact('seedling'));
    }

    public function addToCart(Request $request)
    {
        $seedling = $this->seedlingRepository->findSeedlingById($request->input('seedlingId'));
        $options = $request->except('_token', 'seedlingId', 'price', 'qty');

        Cart::add(uniqid(), $seedling->myan_name, $request->input('price'), $request->input('qty'), $options);

        return redirect()->back()->with('success_message', 'Item added to cart successfully.');
    }

    public function search(Request $request)
    {
        $request->validate([
            'query' => 'required|min:3',
        ]);

        $query = $request->input('query');

        $seedlings = Seedling::where('myan_name', 'like', "%$query%")
                            ->orWhere('cultivate', 'like', "%$query%")
                            ->orWhere('medicine', 'like', "%$query%")
                            ->paginate(3);

        // $seedlings = Seedling::search($query)->paginate(3);

        return view('site.pages.search-results')->with('seedlings', $seedlings);
    }
}