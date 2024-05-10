<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
   public function Adminlogin(){

    return view('Admin/adminlogin');
   }

   public function Authenticate(Request $request)
   {
    
     $validator=validator::make($request->all(),[
   
       'email'=>'required|email',
       'password'=>'required|min:8|regex:/^(?=.*[A-Z])(?=.*[^\w\d\s])(?!.*\s).*$/',
   
     ]);
     if ($validator->passes()) {
      if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => md5($request->password)])){
        if (Auth::guard('admin')->user()->role!="admin") {
         Auth::guard('admin')->logout();
        }
        
        return redirect()->route('adminlogin')->withErrors("not authorize");
      }
      else {
        
        return redirect()->route('admindashboard');
   
       }
     }
     else {
      
       return redirect()->route('login')
       ->withInput()
       ->withErrors($validator);
     }
   
   
   
   }

  
   public function Admindashboard()
   {
       return view('Admin/admindashboard');
   }

   public function Adminlogout()
   {
    Auth::guard('admin')->logout();
    return view('Admin/adminlogin');
   }



}
