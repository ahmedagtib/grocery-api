<?php

namespace App\Http\Controllers\FrontApi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\FrontApi\TraitApi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    use TraitApi;

    public function getUser(){
        return Auth::user();
    }

    public function LoginToken(Request $request){
         try{

            $validator = Validator::make(request()->all(),[
                        'email' => 'required|email',
                        'password' => 'required',
                        'device_name' => 'required',
            ]);

            if($validator->fails()) {
                return   $this->validation_errors($validator->errors());
            }

            $user = User::where('email', $request->email)->first();

            if(!$user || !Hash::check($request->password, $user->password)) {

                   return $this->Unauthorised_errors('Login invalid');
             }
             
             $data = [
                 'user'  => $user,
                 'token' => $user->createToken($request->device_name)->plainTextToken
             ];

          return $this->success_response($data);
                
          }catch (\Exception $e) { 
                return   $this->server_errors($e->getMessage());
           }
    }

    public function RegisterUser(Request $request){

        try{

            $validator = Validator::make(request()->all(), [
                'name'     => 'required',
                'email'    => 'required|email|unique:users',
                'password' => 'required|min:6',
            ]);

           if($validator->fails()) {
               return   $this->validation_errors($validator->errors());
            }

          $user = User::create([
                  'name'     => $request->name,
                  'email'    => $request->email,
                  'password' => Hash::make($request->password)
            ]);

            $user->makeUser();
            

            return   $this->success_response('created');

        }catch (\Exception $e) { 

             return   $this->server_errors($e->getMessage());
        }
    } 

    public function LogoutUser(Request $request){

        $request->user()->tokens()->delete();
    }

}
