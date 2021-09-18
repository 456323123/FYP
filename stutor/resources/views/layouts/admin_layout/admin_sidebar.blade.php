<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->


    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3  mb-3 d-flex" style="background: #232629; padding:4px;">
        <div class="image">
             <img src="{{  asset('uploads/avatars/'.Auth::user()->avatar) }}" style="width:32px; height:32px; position:absolute; margine-top:-10px; left:10px ;border-radius:50%">
        </div>
        <div class="info">
          <a  class="d-block" style="margin-left: 25px;">{{ ucwords (Auth::user()->name )}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
@if (Session::get('page')=="home")
<?php $active ="active"; ?>
@else
<?php $active =""; ?>

@endif
                  <li class="nav-item">
            <a href="{{ url('/home') }}" class=" nav-link {{ $active }}">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Teachers

              </p>
            </a>
          </li>

<!--sitting link-->
          <li class="nav-item has-treeview menu-open">
                @if (Session::get('page')=="profile" || Session::get('page')=="password")
<?php $active ="active"; ?>
@else
<?php $active =""; ?>

@endif
            <a href="#" class="nav-link  {{ $active }}" >
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Sittings
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">
                          @if (Session::get('page')=="profile" )
                            <?php $active ="active"; ?>
                               @else
                             <?php $active =""; ?>
                             @endif
              <li class="nav-item">
                <a href="{{ url('/profilenew') }}" class="nav-link {{ $active }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User Profile</p>
                </a>
              </li>
               @if (Session::get('page')=="password")
                            <?php $active ="active"; ?>
                               @else
                             <?php $active =""; ?>
                             @endif
              <li class="nav-item">

                <a href="{{ url('/password-updated') }}" class="nav-link {{ $active }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Password Update</p>
                </a>
              </li>

            </ul>
          </li>


<!--catagory link-->
           <li class="nav-item has-treeview menu-open">
                @if (Session::get('page')=="subject_add" || Session::get('page')=="subject_view")
<?php $active ="active"; ?>
@else
<?php $active =""; ?>

@endif
            <a href="#" class="nav-link  {{ $active }}" >
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
               Courses Section
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">
                          @if (Session::get('page')=="subject_add" )
                            <?php $active ="active"; ?>
                               @else
                             <?php $active =""; ?>
                             @endif
              <li class="nav-item">
                <a href="{{ url('/add/new/subject') }}" class="nav-link {{ $active }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Subject</p>
                </a>
              </li>
               @if (Session::get('page')=="subject_view")
                            <?php $active ="active"; ?>
                               @else
                             <?php $active =""; ?>
                             @endif
              <li class="nav-item">

                <a href="{{ url('subject-show') }}" class="nav-link {{ $active }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Subjects</p>
                </a>
              </li>

            </ul>
          </li>

  <li class="nav-item has-treeview menu-open">
                @if (Session::get('page')=="response" || Session::get('page')=="message")
<?php $active ="active"; ?>
@else
<?php $active =""; ?>

@endif
            <a href="#" class="nav-link  {{ $active }}" >
              <i class="nav-icon fas fa-chat-alt"></i>
              <p>
               Chat Section
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">
                          @if (Session::get('page')=="response" )
                            <?php $active ="active"; ?>
                               @else
                             <?php $active =""; ?>
                             @endif
              <li class="nav-item">
                <a href="{{ url('user/respon') }}" class="nav-link {{ $active }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Response</p>
                </a>
              </li>
               @if (Session::get('page')=="message")
                            <?php $active ="active"; ?>
                               @else
                             <?php $active =""; ?>
                             @endif
              <li class="nav-item">

                <a href="{{ url('user/message') }}" class="nav-link {{ $active }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Message</p>
                </a>
              </li>
            </ul>
 <li class="nav-item">
<a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="fa fa-sign-out nav-icon" aria-hidden="true"></i> <p>Logout</p>
                                    </a>
      </li>
    </ul>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
