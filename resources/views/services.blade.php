@extends('template')

@section('content')
<div class="alert alert-success" style="display:none"></div>

<div class="container" style="margin-bottom:20px;">
<div class="row">
<div class="col-lg-5">
<form>
<div class="form-group">
      
<input type="text" class="form-control" name="search" id="search" placeholder="search for popular services">
</div>
</form>

<table class="table table-bordered table-hover">

<tbody>
</tbody>
</table>
</div>
</div>
</div>

<div class="container" style="margin-bottom:20px;">
<div class="row">
<div class="col-lg-5">
<h1 style="font-size:18px; font-weight:bold;">Book a service</h1>

<p id="status"></p>
<form  id="booking-form">
{{csrf_field()}} 
<div class="form-group">
        <label for="inputEmail">Which service are you requesting for?</label>
        <input type="text" class="form-control" name="title" id="title" placeholder="title">
    </div>


<div class="form-group">
        <label for="subject">Name</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="Name">
    </div>

    <div class="form-group">
        <label for="inputEmail">Email</label>
        <input type="text" class="form-control" name="email" id="email" placeholder="Email">
    </div>
    <div class="form-group">
        <label for="subject">Phone</label>
        <input type="text" class="form-control" name="phone" id="phone" placeholder="telephone">
    </div>
    
    <button type="submit" id="saveBooking" class="btn btn-success btn-lg">Book Now!!</button>
</form>
</div>
</div>
</div>
<script src="{{ URL::asset('js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ URL::asset('js/bootstrap.js') }}"></script>


<script>
//ajax need this to function in laravel
//submit form with ajax
$('#saveBooking').click(function(){
 //e.preventDefault();
 //alert('ok');
$.ajax({
    type:'post',
   url:'savebooking',
   
   data:{
       '_token':$('input[name=_token]').val(),//you can also use $('#id attribute specified in the form')
       'title':$('input[name=title]').val(),
       'name':$('input[name=name]').val(),
       'email':$('input[name=email]').val(),
       'phone':$('input[name=phone]').val()
   },
   success: function(response){
       $('#status').html(response.message);//not working yet, i need to display success message
      // window.location.reload();
   },
});//end of ajax

});//end form submit

</script>

<script>
$('#search').on('keyup', function(){
$value = $(this).val();
$.ajax({
 type: 'get',
 url: 'search',
 data: {'search':$value},
 success: function(data){
     //console.log(data);
     $('tbody').html(data);
 },


});
});
</script>
@stop