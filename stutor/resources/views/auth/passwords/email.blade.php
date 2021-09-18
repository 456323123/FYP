<!DOCTYPE html>
<html lang="en">
<head>
    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/605cd43e067c2605c0bc495b/1f1l9q5or';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
  <title>reset-password</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="{{ asset('mailstyle.css') }}" rel="stylesheet">
</head>
<body>

  <div class="login-popup">
  	 <div class="box">

  	 	 <div class="img-area">

  	 	 	<div class="img"><br><br>
                    {{-- <img src="{{ asset('mind/images/make_img.jpg') }}" style="height: 200px; margin-left:30px;"></h1> --}}
  	 	 	</div>
  	 	 	{{--  <h1>Your Logo</h1>  --}}
  	 	 </div>
  	 	 <div class="form">

                <div class="card-body">

  	 	 	{{--  <div class="close">&times;</div>  --}}
  	 	 	<h1>Reset Password</h1>
  	 	 	<form  method="POST" action="{{ route('password.email') }}">
                    @csrf
  	 	 		<div class="form-group">
  	 	 			<input  placeholder="Email"    id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        <p style="font-size: 14px; color: rgb(182, 13, 50)"> @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            @if (session('status'))
                        <div class="alert alert-success" role="alert" style="color: rgb(16, 95, 16)">
                            {{ session('status') }}
                        </div>
                    @endif
                            </p>
                </div>

  	 	 		{{--  <div class="form-group">
  	 	 			<label><input type="checkbox">
  	 	 				Remember Me
  	 	 			</label>
  	 	 		</div>  --}}
  	 	 		<button type="submit" class="btn"  class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}</button>
  	 	 	</form>
  	 	 </div>
  	 </div>
  </div>

<script>

  const loginPopup = document.querySelector(".login-popup");
  {{--  const close = document.querySelector(".close");  --}}


  window.addEventListener("load",function(){

   showPopup();
   // setTimeout(function(){
   //   loginPopup.classList.add("show");
   // },5000)

  })

  function showPopup(){
        const timeLimit = 1 // seconds;
        let i=0;
        const timer = setInterval(function(){
         i++;
         if(i == timeLimit){
          clearInterval(timer);
          loginPopup.classList.add("show");
         }
         console.log(i)
        },1000);
  }


  {{--  close.addEventListener("click",function(){
    loginPopup.classList.remove("show");
  })  --}}

</script>
</body>

</html>


