<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\productRequest;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use DataTables;



class ProductsController extends Controller
{
    public function index(){
        
        $products= Product::all();
        return view('dashboard.products.index',compact('products'));
    }
    public function datatable(Request $request){
        $data = Product::with('category','brand')->get();
        return  Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('category_id', function ($row) {
                return  $row->category->name??null;    
                })
                ->addColumn('subCategory_id', function ($row) {
                    return  $row->subCategory->name??null;    
                    })
                ->addColumn('brand_id', function ($row) {
                    return  $row->brand->name??null;    
                    })
            ->addColumn('action', function ($row) {
            return $btn = '
            <a  id="'.$row->id.'" class="btn btn-xs btn-primary edit" 
            href="'.route('admin.products.edit',$row->id).'"><i class="fa fa-edit"></i></a>
        
            <a id="'.$row->id.'" 
            class="btn btn-sm btn-danger delete"><i class="fa fa-trash"></i></a>';
            
            })
            ->addColumn('photo', function ($data) { 
                $url=asset("images/products/$data->photo"); 
                return '<img src='.$url.' border="2" width="150" height="100" class="img-rounded" align="center" />'; 
         })  
            ->rawColumns(['action','photo','category_id','brand_id','subCategory_id'])
            ->make(true);

            }

    public function create (){
        $categories=Category::all();
        $brands=Brand::all();
        $products= Product::all();

         return view('dashboard.products.create',compact('categories','brands','products'));
    }

    public function store (productRequest $request){

        //store brand by using ajax
        
          // save photo
          $file_extention = $request->photo ->getClientOriginalExtension();
          $file_name=time().'.'.$file_extention;
          $path='images/products';
          $request->photo ->move($path,$file_name);

        $products = $request->all();
       
        $products = Product::create([  
            'name'=> $products['name'],
            'brand_id'=> $products['brand_id'],
            'category_id'=> $products['category_id'],
            'subCategory_id'=> $products['subCategory_id'],
            'description'=> $products['description'],
            'price'=> $products['price'],
            'have'=> $products['have'],
            'final_price'=> $products['final_price'],
            'photo'=>$file_name,
            
        ]);
        return view('dashboard.products.index');
    }
    public function edit($id){
        $products = Product::find($id);
        $categories=Category::all();
        $brands=Brand::all();

        return view('dashboard.products.edit', compact('categories','brands','products'));
    }

    public function update (productRequest $request,$products_id){

            $products = Product::find($products_id);
            $products ->update($request->all());

            if ($request->has('photo')) {
                $destnation= 'images/products/'.$products->photo;
                if(File::exists($destnation)){
                File::delete($destnation);
                }
                $file=$request->file('photo');
                $extention=$file->getClientOriginalExtension();
                $file_name=time().'.'.$extention;
                $file->move('images/products/',$file_name);
                $products->photo=$file_name;
                $products->update();

         
            }
            return redirect()->route('products.dashboard')->with(['success' => 'تم التحديث بنجاح']);
    
        
    }

    public function destroy(Request $request){
        $products = Product::find($request->input('id'));
                if($products->delete())
                {
                    echo 'This Product Deleted Succefuly';
                }
            }
            public function site(){
                return view('site.index');
            }


}
