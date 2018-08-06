@extends('myadmin.master')

@section('content')

<h2 style="font-size:13px;">Categories</h2>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
    @foreach($categories as $cat)
        <tr>
            <td>{{$cat->title}}</td>
            <td>{{$cat->description}}</td>
            <td><button class="btn btn-success btn-xs" data-mytitle="{{$cat->title}}" 
            data-vdescription="{{$cat->description}}" data-catid="{{$cat->id}}" 
            data-toggle="modal" data-target="#editModal">Edit</button></td>
            <td><button class="btn btn-danger btn-xs" 
             data-catid="{{$cat->id}}" data-toggle="modal" data-target="#deleteModal">Delete</button></td>
        </tr>
       @endforeach
    </tbody>
</table>


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">
  Add new
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add new category</h4>
      </div>
      
      <div class="modal-body">
      <form action="{{route('category.store')}}" method="post">
        {{csrf_field()}}
      
            @include('category.form')
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
           <button type="submit" class="btn btn-primary">Save</button>
          
          </form>
      </div>
   
      
    </div>
  </div>
</div>
<!--end of modal-->


<!-- editt Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit content</h4>
      </div>
      <!--{{method_field('patch')}}  is used for updating records-->
      <div class="modal-body">
      <form action="{{route('category.update', 'test')}}" method="post">
      {{method_field('patch')}} 
        {{csrf_field()}}
            @include('category.form')
            <input type="hidden" name="id" id="cat_id" value="">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
           <button type="submit" class="btn btn-primary">Save</button>
          
          </form>
      </div>
   
      
    </div>
  </div>
</div>
<!--end of edit modal-->

<!--delete modal-->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Delete record</h4>
      </div>
      
      <div class="modal-body">
      <h2>Are you sure?</h2>
      <form action="{{route('category.destroy', 'test')}}" method="post">
      {{method_field('delete')}}
        {{csrf_field()}}
            
            <input type="hidden" name="id" id="cat_id" value="">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
           <button type="submit" class="btn btn-danger">Delete</button>
          
          </form>
      </div>
   
      
    </div>
  </div>
</div>
<!--end of delete modal-->

<script src="{{ URL::asset('js/bootstrap.js') }}"></script>
<script src="{{ URL::asset('js/jquery-3.3.1.min.js') }}"></script>

<script>
$('#editModal').on('show.bs.modal', function (event) {
  //console.log('modal opened');
  var button = $(event.relatedTarget) // Button that triggered the modal
  var title = button.data('mytitle'); // Extract info from data-* attributes
  var description = button.data('vdescription');
  var cat_id = button.data('catid');
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  
  modal.find('.modal-body #title').val(title);//looks for the input with id = title in the form and 
  modal.find('.modal-body #description').val(description);
  modal.find('.modal-body #cat_id').val(cat_id);
  /*
code interpretation of   modal.find('.modal-body #title').val(title);

look inside the modal for input element with an id called title, value gotten from 
when found, populate it with the variable title defined above

  */
})
</script>


<script>
$('#deleteModal').on('show.bs.modal', function (event) {
  //console.log('modal opened');
  var button = $(event.relatedTarget) // Button that triggered the modal
  
  var cat_id = button.data('catid');
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
 
  modal.find('.modal-body #cat_id').val(cat_id);
})
</script>
@endsection