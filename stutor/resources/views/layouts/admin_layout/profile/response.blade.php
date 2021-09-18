@extends('layouts.admin_layout.admin_layout')
@section('content')

<div class="content-wrapper" style="margin-bottom:90px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Subjects</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">product</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content" >
      <div class="container-fluid" >
        <div class="row">
          <div class="col-12">



            <div class="card">
              <div class="card-header">

@if(Session::has('status'))
 <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-top:10px;">
 {{ Session::get('status') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
                <h3 class="card-title">Subjects</h3>
{{--  <a href="{{ url('add/new/subject') }}" class="button button2 float-right" style="width: 150px; display:inline-block">Add Subjects</a>  --}}
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="subjects" class="table table-bordered table-striped">
                  <thead>
                  <tr>


                    <th> Name</th>
                    <th>Location</th>
                    <th>Response</th>
                    <th>Date/Time</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>

 {{--  @foreach ($usercart as $subject)

  @foreach ($subject['subject'] as $subject)  --}}
                  <tr>

                    <td>tanveer</td>
<td><a title="Delete product" class="confirmsubjectDelete" href="javascript:void(0)" record="delete"   <?php /* href="{{url('admin/delete-category/'.$category->id)}}" */ ?>><i class="fas fa-trash"></i></a></td>



                  </tr>
{{--  @endforeach
  @endforeach  --}}
                  </tbody>

                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection
