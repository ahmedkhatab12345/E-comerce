<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ProfileRequest;
use App\Http\Requests\changPasswordRequest;
use App\Traits\profileTrait;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use File;




class DashboardController extends Controller
{
    // get index page of admin
    public function index(){
        return view('dashboard.index');
    }

    public function viewProfile(){
        return view('dashboard.profile');
    }

    //start profile function
    // 1- update data profile
    public function update_data(ProfileRequest $request){
        //dd($request->all());
       
        $admin=$request->all();
        $user=Admin::FindOrFail(Auth::user()->id);
       $update= $user ->update($admin);
        if ($request->has('photo')) {
            $destnation= 'images/admins/'.$user->photo;
            if(File::exists($destnation)){
                File::delete($destnation);
            }
            $file=$request->file('photo');
            $extention=$file->getClientOriginalExtension();
            $file_name=time().'.'.$extention;
            $file->move('images/admins/',$file_name);
            $user->photo=$file_name;
            $user->update();
        }
        if($update)
        return response()->json([
          'status' => true,
          'msg' => 'تم الحفظ بنجاح',
      ]);
        else
        return response()->json([
          'status' => false,
          'msg' => 'فشل الحفظ',
      ]);

        // return redirect()->back()->with(['success' => 'تم التحديث بنجاح']);
    
    }
/*
    public function chang_password(Request $request){
        $currentPassword = Hash::check($request->password,auth()->user()->password);
        if($currentPassword){
            Admin::FindOrFail(Auth::user()->id)->update([
                'password'=>Hash::check($request->password)
            ]);
            toastr()->success('Data has been saved successfully!');
            return redirect()->route('myprofile')->with(['success' => 'تم التحديث بنجاح']);
        }else{
            
            return redirect()->route('myprofile')->with(['error' => 'عفوا هناك مشكله الرجاء المحاوله مره اخري لاحقا']);
        }
    }
*/
public function changePassword(changPasswordRequest $request)
{
    try{
    $currentPasswordStatus = Hash::check($request->current_password, auth()->user()->password);
    if($currentPasswordStatus){

        Admin::findOrFail(Auth::user()->id)->update([
            'password' => Hash::make($request->password),
        ]);

        return redirect()->back()->with('message','Password Updated Successfully');

    }else{

        return redirect()->back()->with('message','Current Password does not match with Old Password');
    }
} catch (Exception $e) {
    return redirect()->back()->with('message','Current Password does not match with Old Password');
}
}

}
