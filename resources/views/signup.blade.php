@extends('template')

@section('content')
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<div class="container" style="px;">
<div class="row">
<div class="col-md-offset-4 col-md-4">
 <div class="login-form">
    <form action="{!! url('signup'); !!}" method="post">


		<div class="or-seperator"><i>Signup</i></div>
        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
        	<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control" name="username" 
                value="{{ Request::old('username') ?: '' }}" placeholder="Username" required="required">
               
            </div>
            @if ($errors->has('username'))
                     <span class="help-block">{{ $errors->first('username') }}</span>
                     @endif
        </div>

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        	<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input type="text" class="form-control" name="email" placeholder="Email"
                value="{{ Request::old('email') ?: '' }}" required="required">
                
            </div>
            @if ($errors->has('email'))
                     <span class="help-block">{{ $errors->first('email') }}</span>
                     @endif
        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                <input type="password" class="form-control" name="password" placeholder="Password" required="required">
            </div>
            @if ($errors->has('password'))
                     <span class="help-block">{{ $errors->first('password') }}</span>
                     @endif
        </div>
       
        <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
        	<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control" name="firstname" 
                placeholder="firstname" value="{{ Request::old('firstname') ?: '' }}" required="required">
            </div>
            @if ($errors->has('firstname'))
                     <span class="help-block">{{ $errors->first('firstname') }}</span>
                     @endif
        </div>

        <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
        	<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control" name="lastname" 
                placeholder="lastname" value="{{ Request::old('lastname') ?: '' }}" required="required">
            </div>
            @if ($errors->has('lastname'))
                     <span class="help-block">{{ $errors->first('lastname') }}</span>
                     @endif
        </div>

        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
        	<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                <input type="text" class="form-control" name="phone" 
                value="{{ Request::old('phone') ?: '' }}" placeholder="phone number" required="required">
            </div>
            @if ($errors->has('phone'))
                     <span class="help-block">{{ $errors->first('phone') }}</span>
                     @endif
        </div>

        <div class="form-group{{ $errors->has('skills') ? ' has-error' : '' }}">
        	<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control" name="skills" placeholder="your skills separated by comma, eg web developer, electrician" required="required">
            </div>
            @if ($errors->has('skills'))
                     <span class="help-block">{{ $errors->first('skills') }}</span>
                     @endif
        </div>

        <div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">
        	<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-marker"></i></span>
                <input type="text" class="form-control" name="state" placeholder="state of residence" required="required">
            </div>
            @if ($errors->has('state'))
                     <span class="help-block">{{ $errors->first('state') }}</span>
                     @endif
        </div>

        <div class="form-group{{ $errors->has('town') ? ' has-error' : '' }}">
        	<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-marker"></i></span>
                <input type="text" class="form-control" name="town" placeholder="town eg. aba, oshodi" required="required">
            </div>
            @if ($errors->has('town'))
                     <span class="help-block">{{ $errors->first('town') }}</span>
                     @endif
        </div>
        

		        
        <div class="form-group">
            <button type="submit" class="btn btn-success btn-block login-btn">Signup</button>
        </div>
          
        <input type="hidden" name="_token" value="{{ Session::token() }}">  
    </form>
    
</div> 
</div>
</div>
</div>  

@stop