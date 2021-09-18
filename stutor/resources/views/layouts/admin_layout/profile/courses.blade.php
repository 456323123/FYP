@extends('layouts.admin_layout.admin_layout')
@section('content')



<div class="container " style="margin-top:200px; ">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('User Detail') }}</div>
                @if(Session::has('error_message'))
 <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-top:10px;">
 {{ Session::get('error_message') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif


                <div class="card-body" >
                    <form method="POST" action="{{ route('User.updatepost') }}">
                        @csrf
  <div class="form-group row">

                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Subject 1') }}</label>

                            <div class="col-md-6">


   <select name="english"   class="form-control">
     <option value="{{$user->english}}">{{ $user->english}}</option>
     <option value="Urdu">Urdu</option>
         <option value="English">English</option>
     <option value="Maths">Maths</option>
     <option value="pak.studies">Pak.studies</option>
     <option value="Computer">Computer</option>
      <option value="" >None</option>
   </select>
</div>

                            </div>



                             <div class="form-group row">

                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Subject 2') }}</label>

                            <div class="col-md-6">


   <select name="urdu"   class="form-control js-states" id="single" class="single">
     <option value="{{$user->urdu}}">{{ $user->urdu }}</option>
     <option value="Urdu">Urdu</option>
     <option value="Maths">Maths</option>
      <option value="English">English</option>
     <option value="pak.studies">Pak.studies</option>
     <option value="Computer">Computer</option>
      <option value="">none</option>
   </select>
</div>

                            </div>
                        </div>








                           <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="button button2 mb-2">
                                    {{ __('User update') }}
                                </button>
                                <button  class="button button2 mb-2" type="reset"> Reset</button>
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



@endsection
