<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\sliderRequest;
use App\services\UploadService;
use App\Models\Slider;
use DataTables;
use File;



class SlidersController extends Controller
{
    public function index(){
        
        $sliders=Slider::all();
        return view('dashboard.sliders.index',compact('sliders'));
    }

    public function create (){
         return view('dashboard.sliders.create');
    }
    public function datatable(Request $request){
        $data = Slider::all();
        return  Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
            return $btn = '
            <a id="'.$row->id.'"
            class="btn btn-xs btn-primary edit" 
            data-toggle="tooltip"  data-id="'.$row->id.'"><i class="fa fa-edit"></i></a>
        
             <a id="'.$row->id.'" 
               class="btn btn-sm btn-danger delete"><i class="fa fa-trash"></i></a> ';
            
            })
            ->addColumn('photo', function ($data) { 
                $url=asset("images/sliders/$data->photo"); 
                return '<img src='.$url.' border="2" width="150" height="100" class="img-rounded" align="center" />'; 
         })  
            ->rawColumns(['action','photo'])
            ->make(true);
        
            }

    public function store (sliderRequest $request){

        //store brand by using ajax
        
        //  // save photo
         $file_extention = $request->photo ->getClientOriginalExtension();
         $file_name=time().'.'.$file_extention;
         $path='images/sliders';
         $request->photo ->move($path,$file_name);

        $sliders = $request->all();
        $create = Slider::create([
            'name'=> $sliders['name'],
            'description'=> $sliders['description'],
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
        $sliders =Slider::find($id);
        $return_data=view('dashboard.sliders.edit',compact('sliders'))->render();

        return response()->json([
            'status'=>200,
            'sliders'=>$sliders,
            'return_data'=>$return_data,

        ]);
        
    }
    public function update(Request $request,UploadService $upload){
        $sliders = Slider::find($request->slider_id);
        $sliders ->update($request->all());
        if (!$sliders)
            return response()->json([
                'status' => false,
                'msg' => 'هذ الاسليدر غير موجود',
            ]);
         
        //update data
        if ($request->has('photo')) {
            $destnation= 'images/sliders/'.$sliders->photo;
            if(File::exists($destnation)){
                File::delete($destnation);
            }
            $file=$request->file('photo');
            $extention=$file->getClientOriginalExtension();
            $file_name=time().'.'.$extention;
            $file->move('images/sliders/',$file_name);
            $sliders->photo=$file_name;
            $sliders->update();
            
        }
        return response()->json([
            'status' => true,
            'msg' => 'تم  التعديل بنجاح',
        ]);
    }

public function destroy(Request $request){
$slider = Slider::find($request->input('id'));
        if($slider->delete())
        {
            echo 'This Slider Deleted Succefuly';
        }
    }
 

}
