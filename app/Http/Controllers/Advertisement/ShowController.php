<?php

namespace App\Http\Controllers\Advertisement;

use App\Http\Controllers\Category\BaseController;
use App\Models\Advertisement;
use App\Models\Category;
use Inertia\Inertia;

class ShowController extends BaseController
{
    public function __invoke($category, $subcategory, $subcategory2 = null, $ad)
    {
        $_category = Category::where('url',$category)->first();
        $_subcategory = Category::where('url',$subcategory)->first();
        $_subcategory2 = Category::where('url',$subcategory2)->first();

        $advertisement = Advertisement::findOrFail($ad);

        return Inertia::render('Advertisement/Show', [
            'category' => $_category,
            'subcategory' => $_subcategory,
            'subcategory2' => $_subcategory2,
            'ad' => $advertisement,
        ]);
    }
}
