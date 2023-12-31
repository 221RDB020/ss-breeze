<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;

class EditController extends BaseController
{
    public function __invoke()
    {
        $categories = Category::all();
        return view('category.index', compact('categories'));
    }
}
