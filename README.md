## Filter Search

```php
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
                ]);
            }
            $productsQuery->whereIn('id', $region->products->pluck('id'));
        }

        $products = $productsQuery->select('name')
            ->get();

        return response()->json($products);
    }
```
