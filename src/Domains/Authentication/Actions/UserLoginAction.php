<?php

namespace Domains\Authentication\Actions;

use Domains\Authentication\Tasks\CallOAuthServerTask;
use Domains\Shared\Actions\Action;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserLoginAction extends Action
{
    public function run(Request $request)
    {
        $email = $request->email ?? null;
        $password = $request->password ?? null;

        $response = app(CallOAuthServerTask::class)->run($email, $password);
        return $response;
    }
}
