
@php
    $routeName = Route::current()->getName();
    $Mdata = MainData();
    
@endphp
@if ($routeName == 'program.one')
<div class=" headerbg mb-4">  
@elseif($routeName == 'program.two')
<div class=" headerbg2 mb-4">  
@elseif($routeName == 'program.three')
<div class=" headerbg4 mb-4">  
@elseif($routeName == 'test.modul')
<div class=" headerbg3 mb-4">  
@endif
{{--  --}}
  <div class="navbg"> 
    <!-- navbar start -->
    <nav class="navbar  navbar-expand-lg ">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img class="logo" src="{{ asset('uploads').'/'.$Mdata->logo }}" alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class=" collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ url('/') }}">HOME</a>
              </li>
              <li class="nav-item">
                <a class="cmhover nav-link leftmarg" href="#">PROGRAMS</a>
                <div class="dropmenu">
                    <ul>
                        <li><a href="{{ route('program.one') }}">STUDY, EARN AND LIVE IN JAPAN PROGRAM</a></li>
                        <li><a href="{{ route('program.two') }}">STUDENT INTERNSHIP ABROAD PROGRAM - JAPAN</a></li>
                        <li><a href="{{ route('program.three') }}">FACULTY IMMERSION PROGRAM</a></li>
                       
                    </ul>
                </div>
              </li>
              <li class="nav-item ">
                <a class="nav-link leftmarg" href="{{ route('test.modul') }}">TESTIMONIAL</a>
              <li class="nav-item">
              <li class="nav-item ">
                <a class="abouthover leftmarg nav-link" href="">ABOUT</a>
                <div class="abouth">
                  <ul>
                      <li><a href="">about one</a></li>
                      <li><a href="">about two</a></li>
                      <li><a href="">about three</a></li>
                      
                  </ul>
              </div>
              <li class="nav-item">
                <a href="" class="btn leftmarg btn-warning">CONTACT</a>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>
      <!-- nav end -->
      <!-- program titel -->
      <div class="container-md text-center titel text-capitalize">
        @if ($routeName == 'program.one')
        <h1>STUDY, EARN AND LIVE IN JAPAN <br>PROGRAM</h1>
        @elseif($routeName == 'program.two')
        <h1>STUDENT INTERNSHIP ABROAD<br>PROGRAM - JAPAN</h1>
        @elseif($routeName == 'program.three')
        <h1>FACULTY IMMERSION PROGRAM</h1>
        @elseif($routeName == 'test.modul')
        <em style="font-size: 23px; font-weight: 300">Student Internship Abroad Program</em>
        <h1>
          TESTIMONIALS</h1>
        @endif
        {{--   --}}
      </div>
  </div>
</div>