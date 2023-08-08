@extends('layouts.dashboard.app')

@section('content')
@php
$index=0
@endphp
<div>
<table class="table" id="table_id" >
<div class="col-md-6"style="margin-bottom: 25px;">        
        <a href="{{route('admin.categories.create')}}"  class="btn btn-primary"><i class="fa fa-plus"></i><h7> Add Category </h7></a>
    </div>
    <div class="alert alert-success" id="success_msg" style="display: none;">
            تم الحذف  بنجاح
        </div>
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">parent_id</th>
      <th scope="col">Description</th>
      <th scope="col">Photo</th>
      <th scope="col">Process</th>
    </tr>
  </thead>
  <tbody>
  </tbody>
</table>
</div>
<!-- edit_category -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">  
    <div class="modal-dialog">
        <div class="modal-content"  style="border:solid 2px #2794EB; border-radius: 25px;">
            <div class="modal-header">
            <button type="button" class="btn btn-danger btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <h2 class="modal-title"id="exampleModalLabel">Edit Category</h2>
            </div><!-- end of box header -->
          

            <div id="editCategory"></div>
            <div class="alert alert-success" id="success_msg" style="display: none;">
            تم الحفظ بنجاح
            </div>

        </div>
    </div>
</div>
<!-- endEdit_category -->
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
                ajax: "{{ Route('categories.datatable') }}",
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
                        data: 'parent_id',
                        name: 'parent_id'
                    },
                    {
                        data: 'description',
                        name: 'description',
                    },
                    {
                        data: 'photo',
                        name: 'photo',
                        
                    },
              
                    {
                        data: 'action',
                        name: 'action',
                        // orderable: false,
                        // searchable: false

                    }
                ]
            });

        });
        $('#table_id').on('click','#deleteCategoyBtn',function(e){
                e.preventDefault();
// alert('jj');
            var id = $(this).data('id');

            var deleteConfirm = confirm("Are you sure delete tis category?");
            if (deleteConfirm == true) {
                 // AJAX request
                
                 $.ajax({
                     url: "{{ route('admin.categories.delete') }}",
                     type: 'post',
                     data: {"_token": "{{ csrf_token() }}"},
                     success: function (data) {
                        
                    if (data.status == true) {
                        $('#success_msg').show();
                    }

                }
                 });
            }

       });

       $(document).on('click', '.delete', function(){
        var id = $(this).attr('id');
        if(confirm("Are you sure you want to Delete this data?"))
        {
            $.ajax({
                url:"{{route('admin.categories.delete')}}",
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
    $(document).ready(function(){
    $(document).on('click', '.edit', function(){
        var category_id = $(this).attr('id');
        // alert(category_id);
        $('#editModal').modal('show');
        $.ajax({
            type:"GET",
            url:"/admin/categories/edit-category/"+category_id,
            success:function(response) {
                $("body #editCategory").html(response.return_data);
        }
        });
     
    }); 
});
    </script>
@endpush

