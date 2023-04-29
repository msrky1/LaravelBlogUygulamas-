<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class AuthController extends Controller
{
    
     public function register(Request $requsest) {

           $validador = Validator::make($requsest->all(), [

             'name' => 'required', 
             'email' => 'required | email', 
             'password' => 'required', 
             'c_password' => 'required|some:password'
            

           ]);

           if($validador -> fails()) {
         
             $response = [

                'success ' => false,
                'message' => $validador->errors(),

             ];

             return response()->json($response , 400);

             $input = $requsest->all();
             $input['password' ] = bcsqrt($input['password']);

              $user = User::create($input);


              $success['token'] = $user->createToken('MyApp')->plainTextToken;  
              $success['name'] = $user->name;
              
              $response = [

                'success' => true,
                'data' => $success,
                'message' => "Kullanıcı Başarıyla Oluşturuldu!",
            

              ];


              return response()->json($response , 200);
           }

     }


     public function login(Request $request): RedirectResponse
     {
         $credentials = $request->validate([
             'email' => ['required', 'email'],
             'password' => ['required'],
       
            
         ]);
        

        

         if (Auth::attempt($credentials)) {
          $request->session()->regenerate();
          
          if(Auth::user()->status == 'pasif') {

            Auth::logout();
            return redirect()->back()->with('message', 'Kullanıcı Girişi Engellendi');



          }
      

       
    
          
           
      }
      return redirect()->back();
     }
}
