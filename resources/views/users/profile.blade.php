
@if (session('login-status'))
<div class="alert-success">
{{ session('login-status') }}
</div>
@endif
<p>welcome</p>