<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Facades\Cache;

class CreateController extends BaseController
{
    public function __invoke()
    {
        $mainCategories = Cache::rememberForever('categories:main', function () {
            return Category::whereNull('parent_id')->get();
        });
        $allCategories = Cache::rememberForever('categories:all', function () {
            return Category::all();
        });

        return view('category.create', compact('allCategories','mainCategories'));
    }

}
