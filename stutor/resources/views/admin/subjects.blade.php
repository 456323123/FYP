   @extends('layouts/master')

@section('title')
admin-dashboard
@endsection

@section('content')
<br><br>
 <div class="card-footer">
<form name="productAttributeForm" id="productAttributeForm" method="post" action="{{ url('subjects') }}">
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

        <input type="text" style="width:200px"    id="course_name" name="course_name[]" placeholder="course name"/>
             <input type="text" style="width:200px"   id="subject" name="subject[]" placeholder="subject name"/>
        <a href="javascript:void(0);" class="new" title="Add field"> Add</a>

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
           <th scope="col">Subject Name</th>
                <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
      @foreach($new as $course)
    <tr>



      <th scope="row">
          {{ $course->id}}        </th>
      <td>
          {{ $course->coursename }}</td>
                <td>
          {{ $course->subject_name}}</td>
                 <td><a href="{{ url('/subject/delete',$course->id)}}" class="btn btn-danger">delete</a></td>


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
