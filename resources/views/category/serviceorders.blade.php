@extends('myadmin.master')

@section('content')


<button class="btn btn-sm btn-info" id="load-data">Load data with ajax</button>
<table class="table table-striped">
    <thead>
        <tr>
        <th>Title</th>
            
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
          
        </tr>
    </thead>
    <tbody>
   
    </tbody>
    </table>

    <script src="{{ URL::asset('js/bootstrap.js') }}"></script>
<script src="{{ URL::asset('js/jquery-3.3.1.min.js') }}"></script>

<script>
$(document).ready(function(){
//set header. laravel needs it to support ajax



$('#load-data').on('click', function(){
url: 
});

});
</script>
@endsection