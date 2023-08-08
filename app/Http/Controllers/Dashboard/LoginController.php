<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Controller\DashboardController;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Models\Admin;
use App\User;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{ 
    // get register page
    public function getregister(){
        return view('dashboard.register');
    }

    public function register(Request $request  ){
        //dd($request->all());

        // save photo
        $file_extention = $request->photo ->getClientOriginalExtension();
        $file_name=time().'.'.$file_extention;
        $path='images/admins';
        $request->photo ->move($path,$file_name);
        

        //make register
        $admins = $request->all();
        $admins = Admin::create([
            'name'=> $admins['name'],
            'email'=> $admins['email'],
            'password'=> bcrypt($admins['password']),
            'photo'=>$file_name,
        ]);
        auth()->guard('admin')->login($admins);
        if('$admins') {
           
            return redirect() -> route('admin.dashbord')->with(['success' => 'مرحبا بك لقد تم التسجيل واصبحت الان عضوا']);
        }
        
    }

    // get login page
    public function getLogin(){
        return view('dashboard.login');
    }
    public function login(Request $request){
        if (auth()->guard('admin')->attempt(['email' => $request->input("email"), 'password' => $request->input("password")])) {
            
             return redirect() -> route('admin.dashbord')->with(['success' => 'مرحبا بك لقد سجلت عمليه الدخول']);
         }
         
         return redirect()->back()->with(['error' => 'عفوا يوجد مشكله يرجي التسجيل مره اخري']);
    }

    public function logout(){
        auth()->guard('admin')->logout();
        return redirect() 
        -> route('get.admin.login')->with(['success' => 'لقد قمت بعمليه تسجيل الخروج']);
    }

    
}

