<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Region;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = $request->input('query');
        $regionId = $request->input('region_id');

        $productsQuery = Product::where('name', 'LIKE', "%$query%");

        if ($regionId) {
            $region = Region::find($regionId);
            if (!$region) {
                return response()->json([
                    'message' => 'Region not found'
                ],404);
            }
            $productsQuery->whereIn('id', $region->products->pluck('id'));
        }

        $products = $productsQuery->select('name')
            ->get();

        return response()->json($products);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
