@extends('layouts.Front.Front_layout')
@section('content')
<div class="row justify-content-center">

<div class="col-md-8 ">
    <br><br><br><br><br><br>
          <div class="container">
 <div class="card text-center">
  <div class="card-header">

  </div>
  <div class="card-body">
    <h5 class="card-title">Your Account is Successful Register</h5>
    <p class="card-text"><div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Well done!</h4>
  <p>Thank you for applying for membership to our site. We will review your details and send you an email letting you know whether your application has been successful or not by Admin.</p>
  <hr>

</div>
    <a href="{{  url('/show')}}" class="button button2" style="margin-bottom:10px;">Go To Home</a>
  </div >

</div>
         <br><br> <br><br> <br><br> </div>
          </div>

        </div>

@endsection
