<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\brandRequest;
use App\Models\Brand;
use App\services\UploadService;
use DataTables;


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
    public function datatable(Request $request){
        $data = Brand::all();
        return  Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
            return $btn = '
            <a  id="'.$row->id.'" class="btn btn-xs btn-primary edit"
            ><i class="fa fa-edit edit"
            data-toggle="tooltip" 
              ></i></a>
        
            <a id="'.$row->id.'" 
            class="btn btn-sm btn-danger delete"><i class="fa fa-trash"></i></a>';
            
            })
            ->addColumn('photo', function ($data) { 
                $url=asset("images/brands/$data->photo"); 
                return '<img src='.$url.' border="2" width="150" height="100" class="img-rounded" align="center" />'; 
         })  
            ->rawColumns(['action','photo'])
            ->make(true);

            }

    public function store (brandRequest $request ,UploadService $upload){
        
        //store brand by using ajax
        
          // save photo

         $file_name = $upload->uploadImage($request->photo,'images/brands');

        $brands = $request->all();
        $create = Brand::create([
            'name'=> $brands['name'],
            'description'=> $brands['description'],
            'photo'=>$file_name,
        ]);
        if($create)
        return response()->json([
          'status' => true,
          'msg' => 'تم الحفظ بنجاح',
      ]);
        else
        return response()->json([
          'status' => false,
          'msg' => 'فشل الحفظ',
      ]);
  
      
    }
    public function edit ($id){
        $brands =Brand::find($id);
        $return_data=view('dashboard.Brands.edit',compact('brands'))->render();

        return response()->json([
            'status'=>200,
            'brands'=>$brands,
            'return_data'=>$return_data,
        ]);
        
    }
    public function update(Request $request){
        $brands = Brand::find($request->brand_id);
        $brands ->update($request->all());
        if (!$brands)
            return response()->json([
                'status' => false,
                'msg' => 'هذ البراند غير موجود',
            ]);
         
        //update data
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
        return response()->json([
            'status' => true,
            'msg' => 'تم  التعديل بنجاح',
        ]);
      
    }

public function destroy(Request $request,$id){
    $brands = Brand::find($request->input('id'));
            if($brands->delete())
            {
                echo 'This Brand Deleted Succefuly';
            }
        }

       
}
