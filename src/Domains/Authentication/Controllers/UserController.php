<?php
namespace Domains\Authentication\Controllers;

use Domains\Authentication\Actions\UserRegisterAction;
use Domains\Shared\Controllers\CoreController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class UserController extends CoreController {
    public function userLogin(Request $request){

        $input = $request->all();
        $validation = Validator::make($input,[
            "email" => "required|email",
            "password" => "required"
        ]);
        if($validation->fails()){
            return response()->json(['error' => $validation->errors()],422);
        }
        if(Auth::attempt(['email' => $input['email'],'password' => $input['password']])){
            $user = Auth::user();
            $token = $user->createToken('MyApp')->accessToken;
            return response()->json(["token" => $token]);
        }
    }

    public function userRegister(Request $request){
        $user =  app(UserRegisterAction::class)->run($request);
        return $user;
    }
}
