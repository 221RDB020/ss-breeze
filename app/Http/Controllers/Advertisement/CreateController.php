<?php

namespace App\Http\Controllers\Advertisement;

use App\Http\Controllers\Category\BaseController;
use App\Models\Advertisement;
use App\Models\Category;
use Illuminate\Support\Facades\Cache;

class CreateController extends BaseController
{
    public function __invoke()
    {
        $allCategories = Cache::rememberForever('categories:all', function () {
            return Category::all();
        });

        $mainCategories = Cache::rememberForever('categories:main', function () use ($allCategories) {
            return $allCategories->whereNull('parent_id')->get();
        });

        $subCategories = Cache::rememberForever('categories:sub', function () use ($allCategories) {
            return $allCategories->where('parent_id', '!=', null)->all();
        });

        return view(
            'advertisement.create',
            compact(
                'mainCategories',
                'subCategories'
            )
        );
    }
}
