@extends('layouts.dashboard.app')

@section('content')
@php
$index=0
@endphp
<div >
<table class="table" id="table_id">
<div class="col-md-6"style="margin-bottom: 25px;">       
        <a href="{{ route('admin.products.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i><h7> Add Product </h7></a>

    </div>
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Category_id</th>
      <th scope="col">SubCategory_id</th>
      <th scope="col">Brand_id</th>
      <th scope="col">Description</th>
      <th scope="col">Have_Offer</th>
      <th scope="col">Price</th>
      <th scope="col">Total_Price</th>
      <th scope="col">Photo</th>
      <th scope="col">Process</th>
    </tr>
  </thead>
  <tbody>
 
  </tbody>
</table>
</div>
@endsection
@push('javascripts')
    <script type="text/javascript">
        $(function() {
            var table = $('#table_id').DataTable({
             
                processing: true,
                serverSide: true,
                order:[
                  [0,"desc"]
                ],
                ajax: "{{ Route('products.datatable') }}",
                columns: [
                    {
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'category_id',
                        name: 'category_id',
                    },
                    {
                        data: 'subCategory_id',
                        name: 'subCategory_id',
                    },
                    {
                        data: 'brand_id',
                        name: 'brand_id',
                    },
                    {
                        data: 'description',
                        name: 'description',
                    },
                    {
                        data: 'have',
                        name: 'have',
                    },
                    {
                        data: 'price',
                        name: 'price',
                    },
                    {
                        data: 'final_price',
                        name: 'final_price',
                    },
                    {
                        data: 'photo',
                        name: 'photo',
                        
                    },
              
                    {
                        data: 'action',
                        name: 'action',
                        

                    },
                ]
            });
        });
        $(document).on('click', '.delete', function(){
        var id = $(this).attr('id');
        if(confirm("Are you sure you want to Delete this data?"))
        {
            $.ajax({
                url:"{{route('admin.products.delete')}}",
                mehtod:"get",
                data:{id:id},
                success:function(data)
                {
                    alert(data);
                    $('#table_id').DataTable().ajax.reload();
                }
            })
        }
        else
        {
            return false;
        }
    }); 

    </script>
@endpush