<?php

namespace Domains\Authentication\Tasks;

use Domains\Shared\Tasks\Tasks;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class CallOAuthServerTask extends Tasks
{
    public function run($email, $password)
    {
        $data = [
            'grant_type' => 'password',
            'client_id' => config("common.authentication.client_id"),
            'client_secret' => config("common.authentication.client_secret"),
            'username' => $email,
            'password' => $password,
            'scope' => '',
        ];
        $headers = ['HTTP_ACCEPT' => 'application/json'];
        $res = Request::create('oauth/token', 'POST', $data, [], [], $headers);
        $result = App::handle($res);
        $response = json_decode($result->getContent(), true);
        return $response;
    }
}
