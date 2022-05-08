<?php

namespace App\Http\Controllers\FrontApi;


trait TraitApi{
   
  public function server_errors($data){

     return response()->json(['message'=>'error','data'=>$data,'code'=>500],500); 
  }
   
  public function validation_errors($data){

     return response()->json(['message'=>'error','data'=> $data,'code'=>422],422); 
  }

   
  public function Unauthorised_errors($data){

     return response()->json(['message'=>'Unauthorised','data'=> $data,'code'=>503],503); 
  }

  public function success_response($data){
     return response()->json(['message'=>'success','data'=> $data,'code'=>201],201); 
  }



}



?>

