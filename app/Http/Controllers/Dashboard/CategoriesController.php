<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\categoryRequest;
use App\Models\Category;
use App\services\UploadService;

use DataTables;


use File;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index(){
       $categories=Category::all();
       //return $categories;
         return view('dashboard.categories.index',compact('categories'));
            
    }
    public function create(){
        $categories=Category::all();
       // dd($categories);
        return view('dashboard.categories.create',compact('categories'));
    }

    public function datatable(Request $request){
        $data = Category::with('parent')->get();
        return  Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('parent_id', function ($row) {
                return $row->parent_id == null ? 'Main Category' : $row->parent->name;    
                })
            ->addColumn('action', function ($row) {
            return $btn = '
            <a  id="'.$row->id.'" class="btn btn-xs btn-primary edit" ><i class="fa fa-edit"></i></a>
        
            <a id="'.$row->id.'" 
            class="btn btn-sm btn-danger delete"><i class="fa fa-trash"></i></a>';
            
            })
            ->addColumn('photo', function ($data) { 
                $url=asset("images/categories/$data->photo"); 
                return '<img src='.$url.' border="2" width="150" height="100" class="img-rounded" align="center" />'; 
         })  
            ->rawColumns(['action','photo','parent_id'])
            ->make(true);

            }
    public function store (categoryRequest $request ,UploadService $upload){

         //save photo
  
         $file_name = $upload->uploadImage($request->photo,'images/categories');

        $categories = $request->all();
        

      $categories =array(
          'name'=>$request->name,
          'parent_id'=> $request->parent_id,
          'description'=>$request ->description,
          'photo'=>$file_name,
      );
      $create = Category::create( $categories);

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
        $categories =Category::find($id);
        $return_data=view('dashboard.categories.edit',compact('categories'))->render();
        return response()->json([
            'status'=>200,
            'categories'=>$categories,
            'return_data'=>$return_data,
        ]);
        
    }

    public function update (Request $request){
            $categories = Category::find($request->category_id);
            if (!$categories)
                return response()->json([
                    'status' => false,
                    'msg' => 'هذ الكاتيجوري  غير موجود',
                ]);
                $categories ->update($request->all());
            //update data
            if ($request->has('photo')) {
                $destnation= 'images/categories/'.$categories->photo;
                if(File::exists($destnation)){
                    File::delete($destnation);
                }
                $file=$request->file('photo');
                $extention=$file->getClientOriginalExtension();
                $file_name=time().'.'.$extention;
                $file->move('images/categories/',$file_name);
                $categories->photo=$file_name;
                $categories->update();
                
            }
            return response()->json([
                'status' => true,
                'msg' => 'تم  التعديل بنجاح',
            ]);
          

    
        
    }

    public function destroy(Request $request){
        $categories = Category::find($request->input('id'));
                if($categories->delete())
                {
                    echo 'This Category Deleted Succefuly';
                }
            }
    public function getChildByParentId (Request $request,$id){
        $category=Category::find($request -> id); 
       if($category){
        $child_id=Category::getChildByParentId($request -> id);
        if(count($child_id)<=0){
            return response()->json(['status'=>false,'data'=>null,'msg'=>'']);
        }
        return response()->json(['status'=>true,'data'=>$child_id,'msg'=>'']);

       }else{
        return response()->json(['status'=>false,'data'=>null,'msg'=>'']);
       }
     }

}

