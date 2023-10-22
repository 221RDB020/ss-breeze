<?php

namespace App\Services\Category;

use App\Models\Category;

class Service
{
    public function store(array $data) {
        Category::create($data);
    }

    public function update(Category $category, array $data) {
        $category->update($data);
    }
}
