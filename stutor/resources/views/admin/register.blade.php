@extends('layouts/master')

@section('title')
admin-dashboard
@endsection

@section('content')
<div class="row">

          <div class="col-md-12">

            <div class="card">
              <div class="card-header " >
<div class="col-md-5 float-right" >

      <form action="{{ route('sources-index') }}"  method="post">
        {{ csrf_field() }}
      <div class="input-group float-right">
          <input type="search" id="myInput" onkeyup="()" name="search" placeholder="Serach by name and phone number..." class="form-control mt-3" style="height: 38px;" >
          <span class="input-group-prepend" class="float-right">
              <button type="submit" class="btn btn-primary mt-3" >search</button>
          </span>
      </div>
      </form>


  </div>
                <h4 class="card-title"> User Details</h4>
                 @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
              </div>
              <div class="card-body">
                <div class="table-responsive">

                    <thead class=" text-primary">
                 <table class="table" id="myTable">
  <thead>
    <tr>
      <th scope="col">user</th>
       <th scope="col">user id</th>
      <th scope="col">Name</th>
      <th scope="col">phone</th>
      <th scope="col">Email</th>
      <th scope="col">Roles</th>
      <th scope="col">Document</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
      <th scope="col">status</th>
    </tr>
  </thead>
  <tbody>
      @foreach($users as $user)
    <tr>
      <td> <img src="/uploads/avatars/{{ $user->avatar}}" style="width:75px; height:75px;   border-radius:50%; margin-right:25px; margin-bottom:20px;"></td>
      <td>{{ $user->id}}</td>
      <td>{{ $user->name}}</td>

      <td>{{ $user->phone}}</td>
      <td>{{ $user->email}}</td>
      <td>{{ $user->usertype}}</td>
        <td><a href="/document/{{ $user->document }} " class="btn btn-default">Download CV</a></td>
       {{--  <td> <iframe src="/uploads/document/{{ $user->document}}" style="width:75px; height:75px;   border-radius:50%; margin-right:25px; margin-bottom:20px;"> </iframe></td>  --}}
      <td><a href="/role-edit/{{ $user->id }}" class="btn btn-success">EDIT</a></td>
       <td><a href="/delete/{{ $user->id }} " class="btn btn-danger">DELTE</a></td>
       <td>@if($user->status==0)Inactive @else Active @endif</td>
       <td><a href="{{ route('status',['id'=>$user->id])}}" class="btn btn-danger">@if($user->status==1)Inactive @else Active @endif</a></td>

    </tr>
@endforeach

  </tbody>
</table>

                </div>
                {{ $users->render() }}
              </div>

            </div>

          </div>

        </div>



<script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];


    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }

}
</script>
@endsection

@section('script')



@endsection
