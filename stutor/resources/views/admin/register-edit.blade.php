@extends('layouts/master')

@section('title')
Edit-register
@endsection

@section('content')

<div  class="container">

<div class="row">

    <div class="col-md-12 ">

        <div class="card">

            <div class="card-header" ><h2>Edit User Roles</h2> </div>
            <div class="card-body">

            <div class="row">
                <div class="col-md-6">
                    <form action="/role-register-update/{{$users->id}}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                              @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" name="username"  value="{{ $users->name }}">
     </div>

 <div class="form-group">
    <label>Give Role</label>
   <select name="usertype"   class="form-control">
          <option value="" disabled selected disabled>Select Role</option>
     <option value="admin">Admin</option>
     <option value="Teacher">Teacher</option>
   </select>
</div>

 <div class="form-group">
    <label>Status</label>

   <select name="status"   class="form-control">
              <option value="" disabled selected>Select Status</option>
     <option value="1">Active</option>
     <option value="0">Inactive</option>
   </select>
</div>

  <button  type="submit" class="btn btn-success">update</button>
  <a href="/role-register" class="btn btn-danger">cancel</a>

 </form>

                </div>
            </div>


             </div>

            </div>
        </div>
    </div>
</div>

@endsection


@section('script')
@endsection
