<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->

    <script src="{{ asset('js/app.js') }}" defer></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
 <link href="{{ asset('style.css') }}" rel="stylesheet">


<!------ Include the above in your HEAD tag ---------->
<style>
     .navbar {
  min-height: 73px;
}
</style>

 <style>
.button {

  border: none;

  padding: 2px 8px;
  text-align: center;
  text-decoration:none;
  text-decoration-style: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}



.button2 {
  background-color: white;
 color: black;
  border: 2px solid #008CBA;
}

.button2:hover {
  background-color: #008CBA;
  color: white;
  text-decoration:none;
}

.button3 {
  background-color: white;
  color: black;
  border: 2px solid #f44336;
}

.button3:hover {
  background-color: #f44336;
  color: white;
}

.button4 {
  background-color: white;
  color: black;
  border: 2px solid #e7e7e7;
}

.button4:hover {background-color: #e7e7e7;}

.button5 {
  background-color: white;
  color: black;
  border: 2px solid #555555;
}

.button5:hover {
  background-color: #555555;
  color: white;
  text-decoration:none;
}
</style>
</head>

<body>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
 <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm " >
            <div class="container ">

                <a class="navbar-brand" href="{{ url('/') }}">   <img src="{{ url('uploads/khan.png') }}" style="width:111px; height:63px; position:absolute; top:5px; border-radius:0%">
                    {{ config('', '') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto float-right">
                        <!-- Authentication Links -->
                        @guest
                           <li class="nav-item">
                                <a class=" button button2 ml-1"   href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class=" ml-1  button button2" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" style="position:relative;padding-left:50px " aria-haspopup="true" aria-expanded="false" v-pre>

                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <a class="dropdown-item" href="{{ url('/profile') }}"
                                      >
                                        {{ __('User profile') }}
                                    </a>
                                      <a class="dropdown-item" href="{{ url('/show') }}"
                                      >
                                        {{ __('Teachers') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>

                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

<div class="row justify-content-center" style="margin-top:50px">
      <div class="col-md-10">
          <div class="container">

	<div class="row  justify-content-center">
		<div class="col-lg-10">

            <div class="card hovercard">
                <div class="cardheader">
                </div>
                <div class="avatar">

                    <img src="{{ asset('/uploads/avatars/'.$todos['avatar'])}} ">
                </div>
                <div class="info">

                    <div class="title" style="color: rgb(106, 143, 223); artisan serve">
                       {{ $todos['name'] }}
                    </div>
                <div class="ml-2"><h2 class="page-header text-left">Subjects</h2></div>

				<p class="text-left " style="margin-left: 10px;" >

@foreach ($todos['usercourse'] as $subject)



        Class: {{ $subject['cours_name'] }} <br>  Subjects: {{ $subject['subject_name'] }}





@endforeach
</p>


                </div>

                <div class="col-md-12"><h2 class="page-header text-left">Introductions</h2></div
                    <div class="col-md-12">
				<p class="text-left ml-3" > Please Whatsapp your Specific need and problems and more details
+92-3015462005
For all Science Subjects,Quran-e-Pak with Tajveed,ATPL and flight operations.</p>

<div class="col-md-12"><h2 class="page-header  text-left">Educational Info:</h2></div>
	<p class="text-left ml-3" > Please Whatsapp your Specific need and problems and more details
+92-3015462005
For all Science Subjects,Quran-e-Pak with Tajveed,ATPL and flight operations.</p>


   <div class="bottom">
                    <a class="btn btn-primary btn-twitter btn-sm" href="https://facebook.com">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a class="btn btn-danger btn-sm" rel="publisher"
                       href="https://plus.google.com/+ahmshahnuralam">
                        <i class="fa fa-google-plus"></i>
                    </a>
                    <a class="btn btn-primary btn-sm" rel="publisher"
                       href="https://plus.google.com/shahnuralam">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a class="btn btn-warning btn-sm" rel="publisher" href="https://plus.google.com/shahnuralam">
                        <i class="fa fa-behance"></i>
                    </a>
                </div>
</div>

			</div>
            </div>

        </div>

	</div>
</div>
      </div>
</div></body>


