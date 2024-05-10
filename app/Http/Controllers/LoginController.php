<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
   public function index()
   {
    return view('Login');
   }
   
   public function Authenticate(Request $request)
{
    
  $validator=validator::make($request->all(),[

    'email'=>'required|email',
    'password'=>'required|min:8|regex:/^(?=.*[A-Z])(?=.*[^\w\d\s])(?!.*\s).*$/',

  ]);
  if ($validator->passes()) {
   if(Auth::attempt(['email' => $request->email, 'password' => md5($request->password)])){
    return redirect()->route('dashboard');
   }
   else {
    return redirect()->route('login')->withErrors('Please enter a valid email or password');

    }
  }
  else {
    return redirect()->route('login')
    ->withInput()
    ->withErrors($validator);
  }



}

public function RegisterView(){
    return view('Register');
}

public function Register(Request $request)
{
  
    $validator=validator::make($request->all(),[
        'name' => 'required|regex:/^[^0-9]*$/',
        'email'=>'required|email|unique:users',
        'password'=>'required|confirmed|min:8|regex:/^(?=.*[A-Z])(?=.*[^\w\d\s])(?!.*\s).*$/',

      ]);
      if ($validator->passes()) {
      
        $user= new user;
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=md5($request->password);
        $user->role='customer';
        $user->save();
        return redirect()->route('login')->with('success','You have registered sucessfully');
       }
       
      
      else {
        return redirect()->route('register')
        ->withInput()
        ->withErrors($validator);
      }   
}

public function logout(){
    Auth::logout();
    return redirect()->route('login');
}

}
