<?php

namespace App\Http\Controllers\Advertisement;

use App\Http\Controllers\Category\BaseController;
use App\Http\Filters\AdvertisementFilter;
use App\Http\Requests\Advertisement\IndexRequest;
use App\Models\Advertisement;
use App\Models\Category;
use Inertia\Inertia;

class IndexController extends BaseController
{
    public function __invoke(IndexRequest $request, $category, $subcategory, $subcategory2 = null)
    {
        $_category = Category::where('url',$category)->first();
        $_subcategory = Category::where('url',$subcategory)->first();

        $data = $request->validated();

        $query = Advertisement::query();

        if ($subcategory2) {
            $_subcategory2 = Category::where('url',$subcategory2)->first();
            $_subcategory->hasChildren = count($_subcategory->children) > 0;

            $query->where('category_id', $_subcategory2->id);
        } else {
            $query->where('category_id', $_subcategory->id);
        }

        $filter = app()->make(AdvertisementFilter::class, ['queryParams' => array_filter($data)]);

        $advertisements = $query
            ->filter($filter)
            ->latest()
            ->get()
            ->toArray();

        return Inertia::render('Advertisement/Index', [
            'category' => $_category,
            'subcategory' => $_subcategory,
            'subcategory2' => $_subcategory2 ?? null,
            'advertisements' => $advertisements,
        ]);
    }
}
