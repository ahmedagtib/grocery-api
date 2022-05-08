<?php

namespace App\Http\Controllers\FrontApi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\FrontApi\TraitApi;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class UserController extends Controller
{
	use TraitApi;
    public function get_intent(){
          
         if(Auth::user()) {
           	return Auth::user()->createSetupIntent();
          } 

          return 404;
          
    }


    public function pay_with_stripe(Request $request){
         try{
              $user = Auth::user();
              $paymentMethodId = $request->paymentMethodId;

              if($user->stripe_id == null){
                 	$user->createAsStripeCustomer();
               } 

              $user->addPaymentMethod($paymentMethodId);
              $user->charge(100,$request->paymentMethodId); //$ * 100 to cent 
               
              /*
                - order
              */ 
              return 200;

          }catch(\Exception $e){ 
            return   $this->server_errors($e->getMessage());
          }
    }
}


