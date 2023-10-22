<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\ShowRequest;
use App\Models\Category;
use Inertia\Inertia;

class ShowController extends Controller
{
    public function __invoke($category, $subcategory = null)
    {
        $_category = Category::where('url',$category)->first();

        if ($subcategory) {
            $_subcategory = Category::where('url',$subcategory)->first();

            $categoryChildren = $_subcategory->children->map(function($child) {
                $child->load(['advertisements' => function ($query) use ($child) {
                    $query->select('category_id')
                        ->selectRaw('count(*) as advertisement_count')
                        ->groupBy('category_id')
                        ->where('category_id', $child->id);
                }]);
                return [
                    'id' => $child->id,
                    'name' => $child->name,
                    'url' => $child->url,
                    'parent_url' => $child->parent->url,
                    'hasChildren' => count($child->children) > 0,
                    'advertisementCount' => $child->advertisements->first()->advertisement_count ?? 0,
                    'categoryHead' => $child->category_head,
                ];
            });
        } else {
            $categoryChildren = $_category->children->map(function($child) {
                return [
                    'id' => $child->id,
                    'name' => $child->name,
                    'url' => $child->url,
                    'hasChildren' => count($child->children) > 0,
                    'advertisementCount' => $child->advertisements->count(),
                    'categoryHead' => $child->category_head,
                ];
            });
        }

        return Inertia::render('Category/Show', [
            'category' => $_category,
            'subcategory' => $_subcategory ?? null,
            'categoryChildren' => $categoryChildren,
        ]);
    }
}
