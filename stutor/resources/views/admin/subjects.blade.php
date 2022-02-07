   @extends('layouts/master')

@section('title')
admin-dashboard
@endsection

@section('content')
<br><br>
 <div class="card-footer">
<form name="productAttributeForm" id="productAttributeForm" method="get" action="{{ url('/subjects-postdata') }}" >

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
<div class="field_wrapper ">
    <div>
 <select style="width:200px; height:40px;"    name="course[]" required>

    <option value="">select Course</option>
    @foreach($course as $value)


       <option value="{{ $value->name  ?? '' }} ">{{  $value->name ?? '' }}</option>
          @endforeach
    </select>
        <input type="text" style="width:200px; height:40px;"    id="course_name" name="subject[]" placeholder="course name"/>

  
        <button href="javascript:void(0)" class="new btn btn-danger" title="Add field"> Add</button>

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
    @php $counter=0; @endphp

      @foreach($new as $data)
    <tr>


@php $counter++ @endphp
      <th scope="row">
          {{ $counter}}</th>
      <td>
          {{ $data->coursename }}</td>
                <td>
          {{ $data->subject_name}}</td>
                 <td><a href="{{ url('/subject/delete',$data->id)}}" class="btn btn-danger">delete</a></td>


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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
 $(document).ready(function() {
  var nmaxField = 100; //Input fields increment limitation
var naddButton = $('.new'); //Add button selector
var newwaper = $('.field_wrapper'); //Input field wrapper
var nfieldHTML = `<div >
    <select  style="width:200px;height:40px;"     name="course[]" required>
 <option value="" >select course</option>
    @foreach($course as $value)
       <option value="{{  $value->name ?? ''  }}"> {{$value->name ?? '' }}</option>
          @endforeach
    </select>
    <input type="text" style="width:200px;  height:40px;" name="subject[]" placeholder="course name"/> <a href="javascript:void(0)" class="remove_button btn btn-danger"> Remove</a></div>`;//New input field html
var x = 1; //Initial field counter is 1

//Once add button is clicked
$(naddButton).click(function () {

    //Check maximum number of input fields
    if (x < nmaxField) {
        x++; //Increment field counter
        $(newwaper).append(nfieldHTML); //Add field html
    }
});

//Once remove button is clicked
$(newwaper).on('click', '.remove_button', function (e) {
    e.preventDefault();
    $(this).parent('div').remove(); //Remove field html
    x--; //Decrement field counter
});
});
</script>





@endsection
