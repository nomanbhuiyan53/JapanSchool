@extends('frontend.masterfile.index')
@section('section')
    <!-- main contain -->
    <div class="container mainsection">
        <div class="row mt-5">
            <div class="col-md-1"></div>
            <div class="col-md-3">
                <ul class="sideul">
                    <li>
                        <h5>Programs</h5>
                    </li>
                    <li>
                        <a class="programclick" href="{{ route('program.one') }}">
                            STUDY, EARN AND LIVE IN JAPAN PROGRAM</a>
                    </li>
                    <li>
                        <a class="programclick" href="{{ route('program.two') }}">
                            STUDENT INTERNSHIP ABROAD PROGRAM - JAPAN</a>
                    </li>
                    <li>
                        <a class="active" href="{{ route('program.three') }}">
                            FACULTY IMMERSION PROGRAM</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-7 ">
                <p>This program is specifically designed to up- grade faculty qualification, improving delivery of training and classroom teaching practices, through industry visit and immersion in host establishments abroad. The industry immersion program will provide the faculty a deeper understanding of industry practices, systems and management techniques in an international setting with the opportunity of earning possible credits for the graduate program pursued by the faculty.</p>
            </div>
            {{-- col-endcol-md-8 --}} 
           
            









            <div class="col-md-1"></div>
        </div>
      </div>
</div>
@endsection