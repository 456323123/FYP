
@extends('layouts.admin_layout.admin_layout')
@section('content')


    <div class="row justify-content-center mt-lg-5" style="margin-top:50px">
      <div class="col-md-10">
          <div class="container " style="margin-top: 100px;">

	<div class="row  justify-content-center">
		<div class="col-lg-10">

            <div class="card hovercard">
                <div class="cardheader">
                </div>
                <div class="avatar">

                    <img src="{{ asset('uploads/avatars/'.$todos['avatar']) }}">
                </div>
                <div class="info">

                    <div class="title">
                        <a target="_blank" href="/show">{{ $todos->name }}</a>
                    </div>
                 <div style="margin-left:1px;" class=" fas fa fa-phone">  {{ $todos->phone }}
                 </div>

                 <div style="margin-left:1px;" class=" fas 	fa fa-map-marker">  {{ $todos->name }}
                 </div>

                 <div style="margin-left:1px;" class=" fas fas fa-mail-bulk">
                      <a href="" >  {{ $todos->email }}
                 </div>
                </div>

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
                <?php
                 if(!empty($_GET['encoded_message'])){
                echo $decode_message = decrypt($_GET['encoded_message']);
                }
                 ?>

                <form action="{{ url('show-teachers/'.$todos->id) }}" method="POST">
                    {{ csrf_field() }}
                    <textarea style="height:200px; width:400px" id="id" name="message" required="">
                  
                    </textarea><br>
                    <input type="submit"  value="send message">
                </form>
                 @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
                        </div>
                    @endif
            </div>

        </div>

	</div>
</div>
      </div>
</div>
@endsection









