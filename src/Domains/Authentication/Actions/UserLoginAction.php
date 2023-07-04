<?php

namespace Domains\Authentication\Actions;

use Domains\Authentication\Tasks\CallOAuthServerTask;
use Domains\Shared\Actions\Action;
use Illuminate\Http\Request;

class UserLoginAction extends Action
{
    public function run(Request $request)
    {
        $email = $request->email ?? null;
        $password = $request->password ?? null;

        $response = app(CallOAuthServerTask::class)->run($email, $password);
        if(array_key_exists("error",$response)){
            return $this->sendError($response['error'],[$response['message']],401)->send();
        }
        return $response;
    }
}
