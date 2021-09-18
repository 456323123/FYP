<?php use App\User;?>
@extends('teacher.admin_layout')
@section('content')

<div class="content-wrapper" style="margin-bottom:90px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Patient Appointments</h1>
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
                <h3 class="card-title">Patient Appointments</h3>
{{--  <a href="{{ url('add/new/subject') }}" class="button button2 float-right" style="width: 150px; display:inline-block">Patient Appointments</a>  --}}
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="subjects" class="table table-bordered table-striped">
                  <thead>
                  <tr>


                    <th>Name</th>
                       <th>Message</th>
                    <th> Phone</th>
                    <th> City</th>
                    <th>Day and Time</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>

  @foreach($Appointment as $Appointment)
                <?php $Patient_name=User::getname($Appointment->sender_id);
                $Patient_phone=User::getphone($Appointment->sender_id);
                $Patient_city=User::getcity($Appointment->sender_id);
                   $Patient_time=User::getcity($Appointment->sender_id);
                    $id=User::id($Appointment->sender_id);
                    $encoded_message=encrypt( $Appointment->message) ;
                  ?>
                  <tr>

                    <td>{{$Patient_name}}</td>
                         <td>{{substr($Appointment->message,0,200) }}....</td>
                     <td>{{$Patient_phone}}</td>
                      <td>{{$Patient_city}}</td>
                        <td>{{ $Appointment->created_at}}</td>

  <td> <a href="#" title="view Detail"><i class="fas fa-eye"> &nbsp;</i></a>
                       <a href="{{url('/show-teachers/'.$id.'/?$encoded_message='.$encoded_message)}}" target="_blank" ><i class="far fa-comment-dots"></i>&nbsp;</a>
                            &nbsp;<i class="far fa-trash-alt"></i>
                        </i>
                    </td>


                  </tr>
@endforeach

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
