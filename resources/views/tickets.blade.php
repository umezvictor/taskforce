@extends('template')

@section('content')
<div class="container" style="margin-bottom:20px;">
<div class="row">
<div class="col-lg-5">
<h1 style="font-size:18px; font-weight:bold;">Create a support ticket</h1>

<p style="color:red;">select a department</p>
<form method="post" action="{{ route('tickets.store')}}" enctype="multipart/form-data">
    {{csrf_field()}}

    <div class="form-group">
       
       <input type="radio"  name="department" value="Accounts" checked="checked"> Accounts<br>
		<input type="radio" name="department" value="Sales"> Sales<br>
        <input type="radio" id="gender"  name="department" value="HR"> HR<br>
        <input type="radio" id="gender"  name="department" value="IT"> IT<br>
        <input type="radio" id="gender"  name="department" value="Ticketing"> Ticketing<br>
	</div>

<br />
<div class="form-group">
        <label for="inputEmail">Full name</label>
        <input type="text" class="form-control" name="fullname" id="fname" placeholder="enter your fullname">
    </div>


    <div class="form-group">
        <label for="inputEmail">Email</label>
        <input type="email" class="form-control" name="email" id="Email" placeholder="Email">
    </div>
 
    <div class="form-group">
    <label for="priority">Priority</label>
    <select class="form-control" name="priority">
                <option>normal</option>
                <option>medium</option>

                 <option>high</option>
                 <option>critical</option>
            </select>
    </div>

    <div class="form-group">
        <label for="subject">Subject</label>
        <input type="text" class="form-control" name="subject" placeholder="Subject">
    </div>
    <div class="form-group">
    <label for="Message">Message</label>
    <textarea name="message" id="" cols="30" rows="10" class="form-control"></textarea>
    </div>

      <div class="form-group">
      <label for="myfile">Upload file</label>
    <input type="file" name="myfile" id="query">
    </div>

    <input type="hidden" name="status" value="open">
    
    <button type="submit" class="btn btn-success btn-lg">Submit Ticket</button>
</form>
</div>
</div>
</div>
@stop