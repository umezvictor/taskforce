@extends('template')

@section('content')
@if (session('status'))
    <div class="alert alert-danger">
        {{ session('status') }}
    </div>
@endif
<div class="container">
<div class="row">
<div class="col-md-offset-4 col-md-4">
 <div class="login-form">
    <form action="{!! url('signin'); !!}" method="post">
        		
        <div class="text-center social-btn">
            <a href="#" class="btn btn-primary btn-block"><i class="fa fa-facebook"></i> Login with <b>Facebook</b></a>
           	
        </div>
		<div class="or-seperator"><i>Login</i></div>

        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
        	<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control" name="username" placeholder="Username" required="required">
            </div>
            @if ($errors->has('username'))
                     <span class="help-block">{{ $errors->first('username') }}</span>
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
        <div class="clearfix">
            <label class="pull-left checkbox-inline"><input type="checkbox" name="remember"> Remember me</label>
            <a href="#" class="pull-right text-success">Forgot Password?</a>
        </div>       
        <div class="form-group">
            <button type="submit" class="btn btn-success btn-block login-btn">Signin</button>
        </div>
          
        <input type="hidden" name="_token" value="{{ Session::token() }}">  
    </form>
   
    <div class="hint-text small">Don't have an account? <a href='{!! url('signup'); !!}' class="text-success">Register Now!</a></div>
</div> 
</div>
</div>
</div>  

@stop