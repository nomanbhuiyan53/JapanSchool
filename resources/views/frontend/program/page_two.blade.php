@extends('frontend.masterfile.index')
@section('section')
    <!-- main contain -->
    <div class="container mainsection">
        <div class="row">
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
                        <a class="active" href="{{ route('program.two') }}">
                            STUDENT INTERNSHIP ABROAD PROGRAM - JAPAN</a>
                    </li>
                    <li>
                        <a class="programclick" href="{{ route('program.three') }}">
                            FACULTY IMMERSION PROGRAM</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-7">
                <p>The <strong>Student Internship Abroad Program (SIAP) </strong>aims to provide student interns the opportunity to acquire practical knowledge, skills and desirable attitudes in a multicultural work environment. The program allows interns to experience applied learning and cross-cultural training exposure in the promotion of global competitiveness. By immersing in another culture, interns broaden their interpersonal skills and cultural understanding, which are relevant to succeed in a global community.</p>

                <div class="imagegrid">
                    <div><img class="pimage" src="{{ asset('assets/image/pimg1.jpeg') }}" alt=""></div>
                    <div><img class="pimage" src="{{ asset('assets/image/pimg2.jpeg') }}" alt=""></div>
                    <div><img class="pimage" src="{{ asset('assets/image/pimg3.jpeg') }}" alt=""></div>
                    <div><img class="pimage" src="{{ asset('assets/image/pimg4.jpeg') }}" alt=""></div>
                    <div><img class="pimage" src="{{ asset('assets/image/pimg5.jpeg') }}" alt=""></div>
                    <div><img class="pimage" src="{{ asset('assets/image/pimg6.jpeg') }}" alt=""></div>
                    <div><img class="pimage" src="{{ asset('assets/image/pimg7.jpeg') }}" alt=""></div>
                    <div><img class="pimage" src="{{ asset('assets/image/pimg8.jpeg') }}" alt=""></div>
                </div>

                <div class="mt-5">
                    <h3 style="white-space:pre-wrap;"><strong>Destination: Japan</strong></h3>
                    <p class="mt-3" style="white-space:pre-wrap;">A 3-12 month internship program for 3rd or 4th year college students, in world-renowned establishments in Japan.</p>
                    <br> <br>
                <a href="" class="contactBtn"> Apply Now </a>
                <br> <br>    
                </div>
                {{-- card view one --}}
                <div class=" cardGrid">
                    <div class="">
                        
                            <img src="{{ asset('assets/image/cardImag1.jpeg') }}" class="card-img-top" alt="...">
                           <br>
                            <strong>GREEN PLAZA JOETSU</strong><br><br>
                              <p>
                                Green Plaza Joetsu is a large hotel located in Niigata prefecture. The number of rooms is 634, and 16 people have participated in the internship for 3 months from December last year. You can try skiing for free at this hotel. So far, some students have experienced skiing more than 50 times in three months.</p>
                          
                          
                    </div>

                    <div>                      
                            <img src="{{ asset('assets/image/cardImag2.jpeg') }}" class="card-img-top" alt="...">
                            <br>
                            <strong>NASPA NEW OTANI</strong><br><br>
                              <p>
                                NASPA New Otani is also located in Niigata Prefecture. It is a luxury hotel in Japan. You can also experience skiing at this hotel. The hot springs are nearby, so you can enjoy it everyday. You can choose and eat your favorite meal with a buffet even on holidays.</p>
                           
                    </div>
                </div>
                {{-- card view two --}}
                <div class=" cardGrid">
                    <div class="">
                        
                            <img src="{{ asset('assets/image/cardImag3.jpeg') }}" class="card-img-top" alt="...">
                           <br>
                            <strong>NAKAYA</strong><br><br>
                              <p>
                                Nakaya is located in Chiba prefecture. It's about 2 hours from Tokyo, so you can go to Tokyo on your days off. It faces the sea and the climate is warm, so it doesn't snow like the hotel I mentioned earlier. Japan has four seasons, and since it is a long
                                country from north to south, the climate varies greatly depending on the location, but winter is cold. </p>
                    </div>

                    <div>                      
                            <img src="{{ asset('assets/image/cardImag4.jpeg') }}" class="card-img-top" alt="...">
                            <br>
                            <strong>AURA TACHIBANA</strong><br><br>
                              <p>
                                Aura Tachibana is located in Hakone Town, Kanagawa Prefecture. It is an hour by train from Tokyo. Hakone is close to Mt. Fuji and is one of the best tourist destinations in the world, so you can study sightseeing. Currently, we are focusing on conducting internships in Hakone. It is an international tourist destination where people from all over the world work, so it is a place where you can interact a lot.</p>
                           
                    </div>
                </div>

                <br> <br>
                <a href="" class="contactBtn"> Apply Now </a>
                <br> <br>  
                <hr>
                <br><br>

                <div>

                    <ul data-rte-list="default" ><li id="yui_3_17_2_1_1668335830939_618"><p class="" style="white-space:pre-wrap;" id="yui_3_17_2_1_1668335830939_617">Affords a rewarding “Learning while Earning” experience to suitable and highly qualified university students through its international practicum program.</p></li><li><p class="" style="white-space:pre-wrap;">Provides competent and professional industry training at a world-class work environment, greatly increasing the opportunities for regular overseas employment after the program.</p></li><li><p class="" style="white-space:pre-wrap;">Properly installed and efficient feedback and monitoring system to guarantee the participants’ welfare and protection at all times , thereby ensuring the student trainees’ sound development as a professional and resulting in more opportunities for them to pursue their chosen career path in the industry.</p></li><li><p class="" style="white-space:pre-wrap;">The student interns have 24/7 access to assistance provided by trusted host establishment partners.</p></li><li><p class="" style="white-space:pre-wrap;">The BRYDGE (Better Road for Youth Development and Gainful Employment)&nbsp;Program provides Quality Assurance to the University and future employers by the end of the training program, that all of its participants are thoroughly trained and equipped with highly competitive qualifications and skills most sought after in the hospitality industry.</p></li><li><p class="" style="white-space:pre-wrap;">Facilitation fee payable to BRYDGE (Better Road for Youth Development and Gainful Employment)&nbsp;for its assistance in the processing of documents with the Commission on Higher Education (CHED), Bureau of Immigration, Embassy of the host country, visa application, host country program fees, bank fees, transfer fees, accommodation arrangements, scheduled visitations at the host country for feedback and monitoring, and other miscellaneous expenses.</p></li><li><p class="" style="white-space:pre-wrap;">Our partner training hotels and establishments shoulder the expenses related to the student trainees’ stay at the host country, including:</p><ul data-rte-list="default"><li><p class="" style="white-space:pre-wrap;">Free accommodation </p></li><li><p class="" style="white-space:pre-wrap;">3 meals a day will be provided</p></li><li><p class="" style="white-space:pre-wrap;">Utilities are no-charge (electricity and water)</p></li><li><p class="" style="white-space:pre-wrap;">Students will be visited and checked upon 3 times if internship is 6 months; 4 times if their internship is 8 months and longer to ensure their wellbeing and the proper progress of their internship training</p></li><li><p class="" style="white-space:pre-wrap;">Free skiing experience, if the student is assigned to a ski resort</p></li><li><p class="" style="white-space:pre-wrap;">An internship training allowance will be given every month</p></li></ul></li></ul>
                    
                    
                    </div>

                <br> <br>
                <a href="" class="contactBtn"> Apply Now </a>
                <br> <br>  
                <hr>
                <br><br>
                <h3>Requirements</h3>
                <p>180 hours of Japanese language class , including business manners and work ethics, certified by a Japanese language school or an N5 JLPT certificate.</p>

                <br> <br>  
                <hr>
                <br><br>

                <div class="sqs-block-content">

                    <h2 style="white-space:pre-wrap;"><strong>FAQs</strong></h2><p class="" style="white-space:pre-wrap;"><strong>Who are the students qualified for SIAP Japan?</strong></p><ul data-rte-list="default"><li><p class="" style="white-space:pre-wrap;">3rd or 4th year students from the Hotel and Restaurant Management, Tourism and related courses</p></li><li><p class="" style="white-space:pre-wrap;">3rd or 4th year students from the International Language course, major in Nihongo</p></li></ul><p class="" style="white-space:pre-wrap;"><strong><br>What is the Nihongo proficiency required for Hotel and Restaurant Management and Tourism students to qualify for the SIAP Japan?</strong></p><p class="" style="white-space:pre-wrap;">Minimum of 180 hours of Japanese language class, including business manners and work ethics, certified by a Japanese Language School or N5 JLPT certificate holder</p><p class="" style="white-space:pre-wrap;"><strong><br>What is the Nihongo proficiency required for International Language students?</strong></p><p class="" style="white-space:pre-wrap;">Minimum N4 JLPT certificate holder</p><p class="" style="white-space:pre-wrap;"><strong><br>How long is the student internship in Japan?</strong></p><p class="" style="white-space:pre-wrap;">Minimum of 3 months, maximum of 12</p><p class="" style="white-space:pre-wrap;"><br><strong>What if our school only allows 6 months student internship abroad?</strong></p><p class="" style="white-space:pre-wrap;">Your parents can make an appeal to the SIAP Director of your University. If you and your parents are willing to delay your graduation for an extended internship abroad, that is a family decision to make.  A longer training period means more acquired skills to be globally competitive and more training allowance received by the student.  The student can also improve their Nihongo skills when they stay longer in Japan. </p><p class="" style="white-space:pre-wrap;"><strong><br>Why is it important to improve the Nihongo skills of a student in Japan while doing internship?</strong></p><p class="" style="white-space:pre-wrap;">If the student wants to work in Japan after he/she comes back to the Philippines to graduate, the minimum Nihongo proficiency required is N4 level.</p><p class="" style="white-space:pre-wrap;"><strong><br>What are the benefits given to the students by the hotel partner?</strong></p><ul data-rte-list="default"><li><p class="" style="white-space:pre-wrap;">Free accommodation </p></li><li><p class="" style="white-space:pre-wrap;">3 meals a day will be provided</p></li><li><p class="" style="white-space:pre-wrap;">Utilities are no-charge (electricity and water)</p></li><li><p class="" style="white-space:pre-wrap;">Students will be visited and checked upon 3 times if internship is 6 months; 4 times if their internship is 8 months and longer to ensure their wellbeing and the proper progress of their internship training</p></li><li><p class="" style="white-space:pre-wrap;">Free skiing experience, if the student is assigned to a ski resort</p></li><li><p class="" style="white-space:pre-wrap;">An internship training allowance will be given every month</p></li></ul><p class="" style="white-space:pre-wrap;"><strong><br>Every when do the hotel partners accept international student interns from the Philippines?</strong></p><p class="" style="white-space:pre-wrap;">Every March, April, May, July, August, September, October and December</p><p class="" style="white-space:pre-wrap;"><br><strong>Every when is the deployment of Filipino students for international internship? </strong></p><p class="" style="white-space:pre-wrap;">Around February – March and September – October</p><p class="" style="white-space:pre-wrap;"><br><strong>There seems to be a lot of missed opportunity for the Filipino students when Japan hotels accept 8 deployments versus the Philippine’s 2 deployment.  What can be done?</strong></p><p class="" style="white-space:pre-wrap;">It may take a long process and a lot of adjustments, but Autonomous Universities qualified to do SIAP in the hotel industry may want to accommodate these opportunities for their students.  Please contact BRYDGE if you are willing to do this so we can schedule more deployments from your school.  We have plenty hotel partners and they need a good cycle of student interns all year round.  About 200 per year.</p>
                    
                    
                    </div>

                <br> <br>
                <a href="" class="contactBtn"> Apply Now </a>
                <br> <br> 

            </div> {{-- col-endcol-md-8 --}} 
           
            









            <div class="col-md-1"></div>
        </div>
      </div>
</div>
@endsection