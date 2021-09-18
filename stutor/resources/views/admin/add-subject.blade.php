   @extends('layouts/master')

@section('title')
admin-dashboard
@endsection

@section('content')
<br><br>
 <div class="card-footer">
<form method="post" action="{{ url('add-subject') }}">
        @csrf
   <div class="col-md-6">
       @if(Session::has('success_message'))
 <div class="alert alert-danger alert-dismissible fade show" role="alert" style="margin-top:10px;">
 {{ Session::get('success_message') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
               <div class="form-group">
<div class="field_wrapper">
    <div>
        <input type="text" style="width:200px"   id="name" name="name[]" placeholder="Course name"/>
        <a href="javascript:void(0);" class="add_button" title="Add field"> Add</a>
    </div>
</div>

                </div>

           <button type="submit" class="btn btn-primary">Save course</button>
          </div>


</form>
<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> courses</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                 <table class="table">
  <thead>
    <tr>
      <th scope="col">Course ID</th>
      <th scope="col">Course Name</th>

    </tr>
  </thead>
  <tbody>
      @foreach($course as $course)
    <tr>



      <th scope="row">{{ $course->id
           }}</th>
      <td>
          {{ $course->name
           }}</td>

    </tr>
 @endforeach

  </tbody>
</table>

                </div>
              </div>
            </div>
          </div>

        </div>
</div>
@endsection
