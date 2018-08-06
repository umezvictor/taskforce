<p>hello welcome and verify your email</p>
<a href="{{route('sendEmailDone',["email" => $user->email,"verifyToken" => $user->verify_token])}}">click here</a>