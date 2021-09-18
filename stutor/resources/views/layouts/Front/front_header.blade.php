  <div class="header-top">
      <div class="header">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xl-2 col-lg-4 col-md-4 col-sm-3 col logo_section">
              <div class="full">
                <div class="center-desk">
                  <div class="logo">
                    <a href="index.html"><img src="mind/images/khan.png"  style="width:130px; height:80px;" alt="#" /></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-10 col-lg-8 col-md-8 col-sm-9">
              <div class="header_information">
               <div class="menu-area">
                <div class="limit-box">
                  <nav class="main-menu ">
                    <ul class="menu-area-main">

                      <li class={{ Request::is('index')? 'active' : '' }}>
                          <a href="/index">Home</a> </li>
                           <li class={{ Request::is('show')? 'active' : '' }}>
                          <a href="/show" >Teachers</a> </li>
                      <li a class={{ Request::is('about-us')? 'active' : '' }}>
                           <a href="/about-us">About us</a> </li>
 <li class={{ Request::is('contact-us')? 'active' : '' }}>

                          <a href="/contact-us" >Contact us</a> </li>
                               <li class={{ Request::is('register')? 'active' : '' }}>
                                     <a href="/register" >Register</a> </li>
                      <li class={{ Request::is('login')? 'active' : '' }}>
                          <a href="/login" >Login</a> </li>
                      <li class={{ Request::is('register')? 'active' : '' }}>
                      <a href="/register"></a> </li>


                     </ul>
                   </nav>
                 </div>
               </div>
               <div class="mean-last" >
                   @if (Auth::check())



<a class="nav-link" id="test" style="background:green" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="fa fa-sign-out nav-icon" aria-hidden="true"></i> Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
@else
                       <a href="#"></a> <a href="/login" id="test" style="background:green" >login </a>  <a href="/register" id="color2" style="background:rgb(28, 79, 172) " >sing up</a></div>
@endif

                    </div>
           </div>
         </div>
       </div>
     </div>
     <!-- end header inner -->

     <!-- end header -->
