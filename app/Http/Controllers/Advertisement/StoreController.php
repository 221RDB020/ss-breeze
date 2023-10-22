<?php

namespace App\Http\Controllers\Advertisement;

use App\Http\Controllers\Category\BaseController;
use App\Models\Advertisement;
use App\Models\Category;

class StoreController extends BaseController
{
    public function __invoke($category, $subcategory, $subcategory2 = null, $ad)
    {
        $_category = Category::where('url',$category)->first();
        $_subcategory = Category::where('url',$subcategory)->first();
        $_subcategory2 = Category::where('url',$subcategory2)->first();

        $advertisement = Advertisement::findOrFail($ad);

        return view(
            'advertisement.show',
            compact(
                '_category',
                '_subcategory',
                '_subcategory2',
                'advertisement',
            )
        );
    }
}
