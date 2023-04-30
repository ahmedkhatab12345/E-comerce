<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\brandRequest;
use App\Models\Brand;

use File;
use Illuminate\Http\Request;

class BrandsController extends Controller
{
    public function index(){
        
        $brands=Brand::all();
        return view('dashboard.Brands.index',compact('brands'));
    }

    public function create (){
        return view('dashboard.Brands.create');
    }

    public function store (brandRequest $request){

         // save photo
         $file_extention = $request->photo ->getClientOriginalExtension();
         $file_name=time().'.'.$file_extention;
         $path='images/brands';
         $request->photo ->move($path,$file_name);

        $brands = $request->all();
        $brands = Brand::create([
            'name'=> $brands['name'],
            'description'=> $brands['description'],
            'photo'=>$file_name,
        ]);
        return redirect()->route('brand.dashboard')->with(['success' => 'حسنا لقد قمت باضافه براند جديد']);
      
    }
    public function edit($id){
        $brands = Brand::find($id);
        return view('dashboard.Brands.edit', compact('brands'));
    }

    public function update (Request $request,$brand_id){

            $brands = Brand::find($brand_id);
            $brands ->update($request->all());

            if ($request->has('photo')) {
                $destnation= 'images/brands/'.$brands->photo;
                if(File::exists($destnation)){
                    File::delete($destnation);
                }
                $file=$request->file('photo');
                $extention=$file->getClientOriginalExtension();
                $file_name=time().'.'.$extention;
                $file->move('images/brands/',$file_name);
                $brands->photo=$file_name;
                $brands->update();

         
            }
            return redirect()->route('brand.dashboard')->with(['success' => 'تم التحديث بنجاح']);
    
        
    }

    public function destroy($id){
        
        $brands = Brand::find($id);
       

        $brands->delete();

        return redirect()->route('brand.dashboard')->with(['success' => 'تم الحذف  بنجاح']);


}

}
