@extends('layouts.dashboard.app')
@section('content')

@extends('layouts.admin.main')
@section('content')
<section class="rightcol">         
      <form action="" method="post" class="basic-grey">
            <h1>Edit Category 
                <span>Please fill all the texts in the fields.</span>
            </h1>
            <label>
                <span>Category name :</span>
                <input id="name" type="text" name="catename" placeholder="Please enter category"  value="{{$categories->name}}"/>
            </label>
              <label>
                <span>Category :</span>
                <select name="catfather">
                @foreach($catefather as $cf)
                @if($cate->parents->idcategory != $cf->idcategory)                                               
                <option value="{{$cf->idcategory}}}" selected>{{{$cf->cat_name}}}</option>
                @else
                 <option  selected disabled hidden value=''></option>"      
                 <option value="{{$cf->idcategory}}}">{{{$cf->cat_name}}}</option>
                 @endif
                @endforeach  
                </select>
            </label> 
                                
             <label>
                <span> </span> 
                <input type="Submit" class="button" value="Send" /> 
            </label>    
        </form>
</section>
@endsection

@endsection
@section('price_js')

<script type="text/javascript">

</script>
@endsection
