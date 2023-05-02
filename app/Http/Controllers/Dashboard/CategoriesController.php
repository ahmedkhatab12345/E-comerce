<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\categoryRequest;
use App\Models\Category;


use File;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index(){
        
        $categories=Category::all();
        return view('dashboard.categories.index',compact('categories'));
    }

    public function create (){
        $categories = Category::whereNull('parent_id')->get();

        return view('dashboard.categories.create',compact('categories'));
    }

    public function store (Request $request){

         //save photo
         $file_extention = $request->photo ->getClientOriginalExtension();
         $file_name=time().'.'.$file_extention;
         $path='images/categories';
         $request->photo ->move($path,$file_name);

        $categories = $request->all();
        $categories = Category::create([
            'name'=> $categories['name'],
            'description'=> $categories['description'],
            'photo'=>$file_name,
        ]);
        return redirect()->route('categories.dashboard')->with(['success' => 'حسنا لقد قمت باضافه براند جديد']);

      $data =array(
          'name'=>$request->name,
          'parent_id'=> $request->parent_id,
          'description'=>$request ->description,
          'photo'=>$file_name,
      );
      $create = Category::create( $data);
      return redirect()->route('categories.dashboard')->with(['success' => 'حسنا لقد قمت باضافه قسم جديد جديد']);

    }
    public function edit($id){
        $categories = Category::find($id);
        return view('dashboard.categories.edit', compact('categories'));
    }

    public function update (Request $request,$category_id){

            $categories = Category::find($category_id);
            $categories ->update($request->all());

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
            return redirect()->route('categories.dashboard')->with(['success' => 'تم التحديث بنجاح']);
    
        
    }

    public function destroy($id){
        
        $categories = Category::find($id);
        $categories->delete();
        return redirect()->route('categories.dashboard')->with(['success' => 'تم الحذف  بنجاح']);


}

}

// $category = Category::fin dOrFail($id);
//     if(count($category->subcategory))
//     {
//         $subcategories = $category->subcategory;
//         foreach($subcategories as $cat)
//         {
//             $cat = Category::findOrFail($cat->id);
//             $cat->parent_id = null;
//             $cat->save();
//         }
//     }
//     $category->delete();
//     return redirect()->back()->with('delete', 'Category has been deleted successfully.');