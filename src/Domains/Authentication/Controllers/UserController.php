<?php
namespace Domains\Authentication\Controllers;

use Domains\Authentication\Actions\UserLoginAction;
use Domains\Authentication\Actions\UserRegisterAction;
use Domains\Shared\Controllers\CoreController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class UserController extends CoreController {
    public function userLogin(Request $request){
        $request = app(UserLoginAction::class)->run($request);
        return $this->sendResponse($request,"Login Success!");
    }

    public function userRegister(Request $request){
        $user =  app(UserRegisterAction::class)->run($request);
        return $user;
    }
}
