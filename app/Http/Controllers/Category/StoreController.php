<?php

namespace App\Http\Controllers\Category;

use App\Http\Requests\Category\StoreRequest;
use App\Models\Category;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        $this->service->store($data);

        return redirect()->route('category.create');
    }
}
