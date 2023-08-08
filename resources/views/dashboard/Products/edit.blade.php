@extends('layouts.dashboard.app')

@section('content')

<div class="content-wrapper">

<div 
class="box box-primary w-50 p-3"
style="margin-right: 50px; padding =30px; border:solid 2px #2794EB; border-radius: 25px;">

<div class="box-header">
    <h2 class="box-title text-center">Edit Product</h2>
</div><!-- end of box header -->

<div class="box-body" style="padding-right:30px;">


    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data" >

        {{ csrf_field() }}

        <div class="form-group col-md-8" style="margin-top :15px;">
            <label>Name</label>
            <input type="text" name="name"  value="{{$products->name}}" 
            class="form-control @error('name') is-invalid @enderror" >
            @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>
        <div class="form-group col-md-8" style="margin-top :15px;">
            <label>Brands</label>
            <select  class="form-control" name="brand_id">
                    <option value="">{{$products->brand->name}}</option>
                    @foreach(App\Models\Brand::get() as $brand)
                    <option value="{{$brand->id}}">{{$brand->name}}</option>
                    @endforeach
                </select>
                
        </div>
        <div class="form-group col-md-8" style="margin-top :15px;">
            <label>Category</label>
            <select  class="form-control" id="cat_id" name="category_id">
                    <option value="">{{$products->category->name}}</option>
                    @foreach(App\Models\Category::where('parent_id',null)->get() as $category)
                    <option value="{{$category->id}}">{{ $category->name}}</option>
                    @endforeach
                </select>
        </div>

        <div class="form-group col-md-8 d-none" id="child_cat_div" >
            <label>Child Category</label>
            <select  class="form-control" id="child_cat_id" name="category_id">
            </select>
        </div>
        
        <div class="form-group col-md-8" style="margin-top :15px;">
            <label>Description</label>
            <input type="text" name="description"value="{{$products->description}}"
             class="form-control @error('description') is-invalid @enderror">
            @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>
        <div class="form-group col-md-8" style="margin-top :15px;">
            <label>Price</label>
            <input type="text" name="price" id="textone"value="{{$products->price}}"
             class="form-control value1 @error('price') is-invalid @enderror">
            @error('price')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>
        <div class="form-group col-md-8" style="margin-top :15px;">
            <label> Have_offer</label>
            <select class="form-control @error('have') is-invalid @enderror" name="have" id="selector" onchange="yesnoCheck(this);">
            <option value="">{{$products->have}}</option>
            <option  value="true">Yes</option>
            <option  value="false">No</option>
            </select>
            @error('have')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>
        <div class="form-group col-md-8" style="display: none;" id="select_id">
            <label>Value Or Present</label>
            <select class="form-control" id="selector" onchange="yesnoCheck(this);">
            <option value="">Chose</option>
            <option id="value"  value="value">Value</option>
            <option  value="Present">Present %</option>
            </select>
        </div>
        <div class="form-group col-md-8" style="display: none;" id="offer_id">
            <label>Value Of Offer</label>
            <input type="text" name="offerv" id="texttwo" class="form-control value2"  placeholder="enter value of Discount">
            
        </div>
        <div class="form-group col-md-8" style="display: none;" id="offer_id2">
            <label>Value Of Offer</label>
            <input type="text" name="offerp" id="texttwo2" class="form-control value2" placeholder="enter persent (%) of Discount">
            
        </div>
        <div class="form-group col-md-8" style="display: none;" id="total_id">
            <label>Total Price</label>
            <input type="text" name="final_price" id="result" class="form-control total" >
           
        </div>
        <div class="form-group" style="margin-top :15px;">
            <label>Photo</label>
            <input type="file" data-default-file="{{asset('images/products/'.$products->photo)}}"
             class="dropify  @error('photo') is-invalid @enderror" name="photo">
            @error('photo')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        <div class="form-group" style="margin-top :15px;">
            <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Add </button>
        </div>
        
    </form><!-- end of form -->

</div><!-- end of box body -->

</div><!-- end of box -->
</div><!-- end of content wrapper -->
@endsection
@section('price_js')
<script type="text/javascript">
 $('#cat_id').change(function(){
         var cat_id=$(this).val();
        //  alert(cat_id);
    
         if(cat_id !=null){
             $.ajax({
                 url:"/admin/categories/category/"+cat_id+"/child",
                 type:"POST",
                 data:{
                     _token:"{{csrf_token()}}",
                     cat_id:cat_id,
                 },
                 success:function(response){
                     var html_option="<option value=''>-- Chaild Category --</option>";
                     if(response.status){
                         $('#child_cat_div').removeClass('d-none');
                         $.each(response.data,function(id,name){
                            html_option +="<option value='"+id+"'>"+name+"</option>";
                         });
                     }else{
                        $('#child_cat_div').addClass('d-none');
                     }
                     $('#child_cat_id').html(html_option);
                 }
             });
         }
     });
 function yesnoCheck(that) {
   

    if (that.value == "true") {
        document.getElementById("select_id").style.display = "block";
    }
    else {
        document.getElementById("select_id").style.display = "none";
        document.getElementById("offer_id").style.display = "none";
        document.getElementById("offer_id2").style.display = "none";

    }

    if (that.value == "value") {
        document.getElementById("offer_id").style.display = "block";
        document.getElementById("total_id").style.display = "block";
    }
    else {
        document.getElementById("offer_id").style.display = "none";
        document.getElementById("total_id").style.display = "none";
    }

    if (that.value == "Present") {
        document.getElementById("offer_id2").style.display = "block";
        document.getElementById("total_id").style.display = "block";

     }
   
}

    $('#texttwo').keyup(function(){
        var textone;
        var texttwo;
        textone = parseFloat($('#textone').val());
        texttwo = parseFloat($('#texttwo').val());
        var result = textone - texttwo;
        $('#result').val(result.toFixed(2));


    });
    $('#texttwo2').keyup(function(){
        var textone;
        var texttwo;
        textone = parseFloat($('#textone').val());
        texttwo = parseFloat($('#texttwo2').val())/100;
        var result =textone-( textone * texttwo);
        $('#result').val(result.toFixed(2));


    });

  

</script>
@endsection
