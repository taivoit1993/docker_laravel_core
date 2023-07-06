<?php
namespace Domains\Category\Actions;

use Domains\Category\Tasks\CreateCategoryTask;
use Domains\Shared\Actions\Action;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CreateCategoryAction extends Action
{
    public function run(Request $request)
    {
        $name = $request->name ?? null;
        $description = $request->description ?? null;
        $slug = Str::slug($name);
        return app(CreateCategoryTask::class)->run([
            'name' => $name,
            'description' => $description,
            'slug' => $slug
        ]);
    }
}
