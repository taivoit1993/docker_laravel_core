<?php

namespace Domains\Category\Controllers;
use Domains\Category\Actions\CreateCategoryAction;
use Domains\Category\Requests\CreateCategoryRequest;
use Illuminate\Routing\Controller as BaseController;

class CategoryController extends BaseController
{
    public function create(CreateCategoryRequest $request){
        return app(CreateCategoryAction::class)->run($request);
    }

    public function getAll(){

    }

    public function findById(){

    }

    public function delete(){

    }

    public function update(){

    }
}
