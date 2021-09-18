@extends('layouts.admin_layout.admin_layout')
@section('content')



<div class="container " style="margin-bottom:420px;">

    <div class="row justify-content-center" style="margin-top:100px;">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add Subjects') }}</div>
                @if(Session::has('error_message'))
 <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-top:10px;">
 {{ Session::get('error_message') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif


                <div class="card-body" >
                    <form method="POST" action="{{ route('User.step') }}"  enctype="multipart/form-data" >
                     @csrf

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if(Session::has('success_message'))
 <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-top:10px;">
 {{ Session::get('success_message') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
                       <div class="form-group row">

                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('select course') }}</label>

                            <div class="col-md-6">


   <select name="cours_name" id="course_id"  class="form-control" >
       <option value="" >Select course </option>
@foreach($courses as $course)
     <option value="{{ $course->name }}">{{ $course->name }}</option>

      @endforeach
   </select>
</div>

                            </div>


<div id="appendsubject">
    @include('layouts.admin_layout.profile.append_subjects')
</div>





                        </div>








                           <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="button button2 mt-4">
                                    {{ __('Add Subject') }}
                                </button>
                                <button  class="button button2 mt-4" type="reset"> Reset</button>
                                  <br><br>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
<div>
        </main>
    </div>

                        </div>


<h1></h1>
@endsection
