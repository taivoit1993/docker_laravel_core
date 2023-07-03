<?php

namespace Domains\Authentication\Actions;

use Domains\Authentication\Tasks\UserRegisterTask;
use Domains\Shared\Actions\Action;
use Illuminate\Http\Request;

class UserRegisterAction extends Action
{
    public function run(Request $request)
    {
        $name = $request->name ?? null;
        $email = $request->email ?? null;
        $password = $request->password ?? null;
        return app(UserRegisterTask::class)
            ->run([
                'name' => $name,
                'email' => $email,
                'password' => $password
            ]);
    }
}
