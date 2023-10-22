<?php

namespace App\Http\Controllers\Category;

use App\Models\Category;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $categories = Cache::rememberForever('categories:main', function () {
            return Category::whereNull('parent_id')->get();
        });

        return Inertia::render('Category/Index', [
            'categories' => $categories,
        ]);
    }
}
