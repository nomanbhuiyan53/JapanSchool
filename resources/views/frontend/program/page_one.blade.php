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
                        <a class="active " href="{{ route('program.one') }}">
                            STUDY, EARN AND LIVE IN JAPAN PROGRAM</a>
                    </li>
                    <li>
                        <a class="programclick" href="{{ route('program.two') }}">
                            STUDENT INTERNSHIP ABROAD PROGRAM - JAPAN</a>
                    </li>
                    <li>
                        <a class="programclick" href="{{ route('program.three') }}">
                            FACULTY IMMERSION PROGRAM</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-7 ">
                <!-- story section -->
                <p>The <b>Study, Earn and Live in Japan Program</b> is a 2-year program that focuses on studying the Nihongo language in Japan while having the privilege to earn money at the same time. </p>
                <h3>Study</h3>
                <p>BRYDGE has partnered with Kairin Juku Japanese Language School, an accredited school in Ashikaga, Japan to offer this program.</p>
                <h3>Earn</h3>
                <p>When you are a foreign student in Japan, you are allowed by the Japanese government to train professionally in companies, part-time for 28 hours a week.  Therefore, earn in the process. The earnings you get can help pay for your daily expenses and have some savings for the next semesters of the class.</p>
                <h3>Live</h3>
                <p>The "live in Japan" component is when you want to stay longer in Japan and start a career there and eventually be a resident in Japan. This is possible because if you reach the highest Nihongo (Japanese language) proficiency which is N1 level, you can be offered a job right there in Japan and the hiring company can change your visa from a student visa to a working visa.</p>


                <!-- image gallery part -->
                <div class="row">
                    <div class="col-md-4 "><img class=" galleryOne" src="{{ asset('assets/image/img1.jpeg') }}" alt=""></div>
                    <div class="col-md-4 "><img class="galleryOne " src="{{ asset('assets/image/img2.jpeg') }}" alt=""></div>
                    <div class="col-md-4 "><img class="galleryOne " src="{{ asset('assets/image/img3.jpeg') }}" alt=""></div>
                </div>
                <div class="row">
                    <div class="col-md-4 "><img class="galleryOne " src="{{ asset('assets/image/img4.jpeg') }}" alt=""></div>
                    <div class="col-md-4 "><img class=" galleryOne" src="{{ asset('assets/image/img5.jpeg') }}" alt=""></div>
                    <div class="col-md-4 "><img class=" galleryOne" src="{{ asset('assets/image/img6.jpeg') }}" alt=""></div>
                </div>
                <h3>Who is this program for?</h3>
                <ul>
                    <li>18-28 years old, High school or college students who just graduated or have worked after their graduation</li>
                    <li>Those who want to study Nihongo in Japan, learn its culture, people, ways of life and start a career and eventually be a resident of Japan</li>
                    <li>Those who want a career change</li>
                    <li>For those who are financially capable or with someone to support the application</li>
                    <li>For those willing to stay in a dormitory</li>
                </ul>
                <br> <br>
                <a href="" class="contactBtn"> GET STARTED </a>
                <br> <br> <br>
                <hr>
                <br> <br> <br>
                <h3>Destination: Ashikaga, Japan</h3>
                <p>Ashikaga is a Japanese city just 78 km north of Tokyo and is the 5S mecca of Japan. It’s known for the spring wisteria blooms and seasonally illuminated gardens of Ashikaga Flower Park (picture on left). The Ashikaga Gakko is also known to be the oldest school in Japan (picture on right).</p>
                <div class="row">
                    <div class="col-6">
                        <img class="galleryTwo" src="{{ asset('assets/image/Ashikaga_Ashikaga-School_School_Gate_2.jpeg') }}" alt="">
                    </div>
                    <div class="col-6">
                        <img class="galleryTwo" src="{{ asset('assets/image/Ashikaga_Flower_Park_02.jpeg') }}" alt="">
                    </div>
                </div>
                
                <br><br>
                <hr>
                <br><br>
                <h3>Prerequisites</h3>
                <p style="margin-bottom: 30px">Applicant should have taken at least 150 hours of Nihongo language certified by a Japanese language school OR is a holder of N5 JLPT Certificate.  A refresher course can be taken.</p>
                <a href="" class="contactBtn"> GET STARTED </a>

                <br><br>
                <hr>
                <br><br>
                <h3>Application Steps</h3>
                <ul style="list-style-type: decimal">
                    <li>Admission Inquiry</li>
                    <li>Program Presentation</li>
                    <li>Pre-interview and assessment</li>
                    <li>Fill-up Japanese Language enrollment and application forms and payment of applicable expense.</li>
                    <li>Physical, mental and dental examination</li>
                    <li>Preparation of documents</li>
                    <li>Submission of documents to Japan School. Payment of applicable expenses.</li>
                    <li>Online interview of Japanese Language School partner in Japan</li>
                    <li>Study 150 hours of Japanese Language in the Philippines (pre-requisite)</li>
                    <li>Application for Certificate of Eligibility at the Japan Immigration Bureau</li>
                    <li>Issuance of Certificate of Eligibility from the Japan Immigration Bureau</li>
                    <li>Application of Visa at Japanese Embassy in Manila through accredited agency</li>
                    <li>Once approved, payment of applicable Fees </li>
                    <li>Purchase of 1-way ticket</li>
                    <li>Pre-Departure Orientation for Students</li>
                    <li>Departure</li>
                </ul>
                <br><br>
                <hr>
                <br><br>
                <h3>Documents Needed</h3>
                <ul data-rte-list="default"><li><p class="" style="white-space:pre-wrap;">If the documents are written in English, please attach the Japanese translation.</p></li><li><p class="" style="white-space:pre-wrap;">Documents should be issued (or dated) within September 10th to 28th only! </p></li><li><p class="" style="white-space:pre-wrap;">If you submit a copy, use A4 single sided print</p></li><li><p class="" style="white-space:pre-wrap;">Original form is required except when stated otherwise</p></li><li><p class="" style="white-space:pre-wrap;">Japanese School will not return any original documents except the Diploma and Academic transcript</p></li><li><p class="" style="white-space:pre-wrap;">Applicant may be required to submit other documents after application</p></li></ul>
                <div>
                    <h3 style="white-space:pre-wrap; text-transform: uppercase; font-weight: 700; font-size:16px" >For the Applicant</strong></h3>
                    <ol data-rte-list="default" id="yui_3_17_2_1_1668250933429_629"><li id="yui_3_17_2_1_1668250933429_628"><p class="" style="white-space:pre-wrap;" id="yui_3_17_2_1_1668250933429_627">Application Form</p></li><li><p class="" style="white-space:pre-wrap;">Resume (Certified to be true with Applicant’s signature)</p></li><li><p class="" style="white-space:pre-wrap;">An essay to explain the Applicant’s purpose for studying Japanese Language and studying in Japan (Reason of Admission Form provided)</p></li><li><p class="" style="white-space:pre-wrap;">An essay to describe in detail your planned career after graduating from the Japanese language school</p></li><li><p class="" style="white-space:pre-wrap;">Latest 4 cm×3 cm ID picture (white background)</p></li><li><p class="" style="white-space:pre-wrap;">Diploma</p></li><li><p class="" style="white-space:pre-wrap;">Transcript of Records</p></li><li><p class="" style="white-space:pre-wrap;">Copy of Passport page with your photo and all pages with “stamps” of travel</p></li><li><p class="" style="white-space:pre-wrap;">Employment of Certificate (if currently working)</p></li><li><p class="" style="white-space:pre-wrap;">Birth Certificate (NSO copy)</p></li><li><p class="" style="white-space:pre-wrap;">Marriage Certificate (NSO copy, if applicable)</p></li><li><p class="" style="white-space:pre-wrap;">Japanese Language Study Certificate of 150 hours (stating the learning period, attendance rate, course details, course name, target ending level of the course and teaching materials used)</p></li><li><p class="" style="white-space:pre-wrap;">Copy of JLPT Certificate (If applicable)</p></li><li><p class="" style="white-space:pre-wrap;">Agreement Paper (to be filled up by another person, not the Sponsor)</p></li><li><p class="" style="white-space:pre-wrap;">Document of the “Relevant Person” (explaining if the Sponsor is a relative other than the parents. Explain a) the specific circumstances and circumstances of accepting the expense payment on behalf of the Applicant’s parents and b) specific circumstances in which the Applicant’s parents cannot fulfill the expenses and the circumstances  </p></li><li><p class="" style="white-space:pre-wrap;">Medical, Psychological and Dental Certificate</p></li><li><p class="" style="white-space:pre-wrap;">NBI Certificate</p></li></ol>
                </div>
                <div>
                    <h3 style="white-space:pre-wrap; text-transform: uppercase; font-weight: 700; font-size:16px" >FOR THE FINANCIAL SPONSOR / GUARANTOR</strong></h3>
                    <ol data-rte-list="default"><li><p class="" style="white-space:pre-wrap;">Financial Support Statement (Form provided)</p></li><li><p class="" style="white-space:pre-wrap;">List of family of Financial Supporter (Form provided)</p></li><li><p class="" style="white-space:pre-wrap;">Certificate to prove the family structure of the Sponsor (e.g. Certificate of Family Register, Certificate of Residence)</p></li><li><p class="" style="white-space:pre-wrap;">Certificate to prove the relationship between the Applicant and the Sponsor (e.g. Birth Certificate of the Sponsor and a certified Letter of Affidavit) </p></li><li><p class="" style="white-space:pre-wrap;">Bank Balance Certificate – Issued by the bank</p></li><li><p class="" style="white-space:pre-wrap;">Certification of Employment or </p></li><li><p class="" style="white-space:pre-wrap;">Business Certificates (Copy of Business License and Copy of SEC certificate)</p></li><li><p class="" style="white-space:pre-wrap;">Bank Account Statements or copy of passbook for the last 1 year</p></li><li><p class="" style="white-space:pre-wrap;">Proof of Income for the last 1 year</p></li><li><p class="" style="white-space:pre-wrap;">Certificate of tax payment (BIR Forms, others) for the last 1 year</p></li></ol>
                </div>

                <br><br>
                <hr>
                <br><br>

                <div >

                    <h2 style="white-space:pre-wrap;"><strong>FAQs</strong></h2><p class="" style="white-space:pre-wrap;"><strong>How long does it take to have 150 hours of Nihongo Language? Do I still have time?</strong></p><p class="" style="white-space:pre-wrap;">150 hours of Nihongo class would take around 3 months.  There is still time to study Nihongo.  You can actually start as late as November 2021! There are a lot of ways to study Nihongo and monitor your proficiency.  We will teach you how.  Attend our Orientation! Of course, the sooner you learn Nihongo, the better for you and all.</p><p class="" style="white-space:pre-wrap;"><strong><br>Is there any required course in College that I need to have graduated from to join the program?</strong></p><p class="" style="white-space:pre-wrap;">No.  Any college degree is welcome. As long as they are willing to study the language, culture and tradition of Japan.</p><p class="" style="white-space:pre-wrap;"><br><strong>Why do I have to learn Nihongo in Japan? Why can't I just work or train in Japan?</strong></p><p class="" style="white-space:pre-wrap;">To work in Japan, you have to apply at a licensed Philippine Recruitment Agency and go through POEA.  This program is primarily a STUDY program and the Japan government / Immigration allows you to work part time for 28 hours a week and 8 hours a day during school breaks and holidays if you are a foreign student.</p><p class="" style="white-space:pre-wrap;"><br><strong>How long is the Study Earn and Live Program in Japan?</strong></p><p class="" style="white-space:pre-wrap;">It is a 2 year program. The start of school is in early April 2022. Processing of documents will start on October 2021.</p><p class="" style="white-space:pre-wrap;"><br><strong>What school are we going to? Where is it located?</strong></p><p class="" style="white-space:pre-wrap;">Kairin Juku Japanese Language School in Ashikaga City, Tochigi Prefecture. They have been existing for the last 41 years. They have 94 branches  (Tokyo 31 branches, Tochigi 36 branches, Gunma 11 branches Ibaraki 15 branches) of Japanese Tutorial Centers (Reviewer Schools) to help Japanese pass the Japanese proficiency test needed to enter the University, Junior College and Vocational School. And now they are branching to teach Foreign Students Nihongo.</p><p class="" data-rte-preserve-empty="true" style="white-space:pre-wrap;"></p><p class="" style="white-space:pre-wrap;"><strong>Is there a passing grade in Kairin Juku Japanese Language School?</strong></p><p class="" style="white-space:pre-wrap;">At least 80%.  The Japanese teachers are professionals and will do their best to teach you Nihongo, for you to reach your highest potential.</p><p class="" style="white-space:pre-wrap;"><strong><br>Can I reach N1 Nihongo proficiency after 2 years of study?</strong></p><p class="" style="white-space:pre-wrap;">Of course you can!  It all depends on you, the student!  If you are diligent in your studies, attends your class 100%, practices Nihongo with Japanese you encounter, monitors your progress and prepares well in your class.  If you reach N1 JLPT level, you can be offered a job in Japan and be a resident there! And stay in Japan forever legally.</p><p class="" style="white-space:pre-wrap;"><br><strong>Would the students be given an incentive / award for reaching N1 after they graduate?</strong></p><p class="" style="white-space:pre-wrap;">Yes, Kairin Juku gives monetary award if and when student shows extraordinary traits in studying and reaches N1 after 2 years of Nihongo studies.</p><p class="" style="white-space:pre-wrap;"><strong><br>What if I don't reach the N1 JLPT after 2 years?</strong></p><p class="" style="white-space:pre-wrap;">You can enroll in a vocational or technical school - IT, technical school, fashion design, other courses, and you can stay for another 2 years in Japan.  After your vocational school, Kairin Juku Japanese School offers "night school" for you to continue to study Nihongo to reach N1. You can also proceed to enroll to a Japanese University if you wish.</p><p class="" style="white-space:pre-wrap;"><br><strong>Are there training programs available for engineers?</strong></p><p class="" style="white-space:pre-wrap;">There are a lot of manufacturing and industrial companies at Ashikaga.  Ashikaga City is the "5S MECCA" of Japan! The whole city practices 5S and Kaizen in their home, community and work. ) This is very exciting for engineers!</p><p class="" style="white-space:pre-wrap;"><br><strong>What training programs are available for non-engineers?</strong></p><p class="" style="white-space:pre-wrap;">Ashikaga is a progressive City.  The common professional training grounds for foreign Japanese students are in the retail, restaurant and hotel industry, where they get to practice the Nihongo language, customer service skills and new professional skills for future career growth.</p><p class="" style="white-space:pre-wrap;"><strong><br>How much is the Study Earn and Live in Japan program?</strong></p><p class="" style="white-space:pre-wrap;">Please attend our Orientation to know the answer and other details of the program.</p><p class="" style="white-space:pre-wrap;"><br><strong>If I invest in the program will I have the chance to recoup my investment?</strong></p><p class="" style="white-space:pre-wrap;">Yes, you do.  Because there is a professional training component in the program.  The earnings you get will totally depend on you.  All foreign students are allowed to work for 28 hours a week by Japan Immigration and a full 8 hours a day during school breaks and holidays.</p>
                    <br> <br>
                    <a href="" class="contactBtn"> GET STARTED </a>
                    <br> <br> <br>
                        
                </div>

            </div> {{-- end col-md-8 --}}
            









            <div class="col-md-1"></div>
        </div>
      </div>
</div>
@endsection