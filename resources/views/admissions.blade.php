@extends('header')
@section('content')
<main>

    <!-- admission breadcrumb start -->
    <section class="tp-breadcrumb__area pt-160 pb-150 p-relative z-index-1 fix">
    <div class="tp-breadcrumb__bg overlay" data-background="assets/img/breadcrumb/campus-breadcrumb.jpg"></div>
    <div class="container">
       <div class="row align-items-center">
          <div class="col-sm-12">
             <div class="tp-breadcrumb__content">
                <div class="tp-breadcrumb__list inner-after">
                   <span class="white"><a href=""><svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M8.07207 0C8.19331 0 8.31107 0.0404348 8.40664 0.114882L16.1539 6.14233L15.4847 6.98713L14.5385 6.25079V12.8994C14.538 13.1843 14.4243 13.4574 14.2225 13.6589C14.0206 13.8604 13.747 13.9738 13.4616 13.9743H2.69231C2.40688 13.9737 2.13329 13.8603 1.93146 13.6588C1.72962 13.4573 1.61597 13.1843 1.61539 12.8994V6.2459L0.669148 6.98235L0 6.1376L7.7375 0.114882C7.83308 0.0404348 7.95083 0 8.07207 0ZM8.07694 1.22084L2.69231 5.40777V12.8994H13.4616V5.41341L8.07694 1.22084Z" fill="currentColor"/>
                   </svg></a></span>
                   <span class="white">Admissions Overview</span>
                </div>
                <h3 class="tp-breadcrumb__title color">Admissions Overview</h3>
             </div>
          </div>
       </div>
    </div>
    </section>
    <!-- admission breadcrumb end -->


    <!-- campus choose area start -->
    <section class="tp-campus-choose-area pt-120 pb-30 grey-bg">
       <div class="container">
          <div class="row">
             <div class="col-lg-12">
                <div class="tp-campus-choose-wrapper text-center">
                   <div class="tp-campus-choose-btn admission wow fadeInUp" data-wow-delay=".3s">
                      <p>Financial Aid</p>
                      <a href="#down"><span>
                         <svg width="20" height="123" viewBox="0 0 20 123" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 113C14.4726 113 9.99998 117.473 9.99998 123" stroke="#B1040E" stroke-miterlimit="10"/>
                            <path d="M10 123C10 117.473 5.52736 113 -1.96429e-05 113" stroke="#B1040E" stroke-miterlimit="10"/>
                            <rect x="9.5" width="1" height="120" fill="#B1040E"/>
                         </svg>
                      </span></a>
                      <div class="tp-campus-choose-content mb-10 wow fadeInUp" data-wow-delay=".5s">
                         <h2 class="tp-campus-choose-title fs-50">At Stanford, we practice holistic admission. <br>
                            This means that each piece in your application <br> is reviewed as part of an integrated and <br> comprehensive whole.</h2>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- campus choose area end -->


    <!-- admission counter area start -->
    <section id="down" class="tp-admission-counter-area grey-bg pb-120">
       <div class="container">
          <div class="tp-admission-counter-box wow fadeInUp" data-wow-delay=".3s">
             <div class="row">
                <div class="col-lg-4 col-md-6">
                   <div class="tp-admission-counter-item">
                      <h3 class="tp-admission-counter-title">
                         <span data-purecounter-duration="4" data-purecounter-end="126" class="purecounter">126</span>
                      </h3>
                      <p class="after">Degree & diploma programs <br>
                         offered</p>
                   </div>
                </div>
                <div class="col-lg-4 col-md-6">
                   <div class="tp-admission-counter-item pl-50">
                      <h3 class="tp-admission-counter-title">
                         <span data-purecounter-duration="3" data-purecounter-end="82" class="purecounter">82</span>%
                      </h3>
                      <p class="after">Of undergraduate students <br>
                         receive financial aid</p>
                   </div>
                </div>
                <div class="col-lg-4 col-md-6">
                   <div class="tp-admission-counter-item pl-80">
                      <h3 class="tp-admission-counter-title">
                         <span data-purecounter-duration="3" data-purecounter-end="74" class="purecounter">74</span>% 
                      </h3>
                      <p>Of graduates had two or <br>
                         more internships as students</p>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- admission counter area end -->


    <!-- admission area start -->
    <section class="tp-admission-overview-area grey-bg pb-130">
       <div class="container">
          <div class="row">
             <div class="col-lg-6">
                <div class="tp-admission-overview-heading wow fadeInUp" data-wow-delay=".3s">
                   <h3 class="tp-admission-overview-title">
                      Afford Acadia
                   </h3>
                </div>
             </div>
             <div class="col-lg-6">
                <div class="tp-admission-overview-wrapper wow fadeInUp" data-wow-delay=".5s">
                   <p>At Acadia University, we prepare you to launch your career by providing
                      a supportive, creative, and professional environment from which to learn
                      practical skills, build a network of industry contacts.</p>
                   <p>Acadia is affordable for all admitted students. Financial aid covers all
                      demonstrated need for all students, regardless of citizenship or citizenship
                      status. Families making under <span>$85,000</span> a year pay nothing for their
                      student's education, and families making between <span>$85,000-$150,000
                         pay 0-10% of their incomes.</span></p>
                   <div class="tp-admission-overview-btn mt-50">
                      <a class="tp-btn" href="">Learn more <br>
                         About financial aid <span><svg xmlns="http://www.w3.org/2000/svg" width="7" height="12" viewBox="0 0 7 12" fill="none">
                            <path d="M1 11L6 6L1 1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                          </svg></span>
                      </a>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- admission area end -->


    <!-- admission cta area start -->
    <section class="tp-admission-cta-area grey-bg pb-160">
       <div class="container">
          <div class="tp-admission-cta-box">
             <div class="row">
                <div class="col-lg-6">
                   <div class="tp-admission-cta-heading wow fadeInUp" data-wow-delay=".3s">
                      <h3 class="tp-admission-cta-title">Calculate Your <br> Estimated Scholarship.</h3>
                      <p>How affordable is Harvard? See for yourself with our <br>
                         Net Price Calculator.</p>
                      <div class="tp-admission-cta-btn">
                         <a class="tp-btn" href="">Net Price Calculator <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="7" height="12" viewBox="0 0 7 12" fill="none">
                            <path d="M1 11L6 6L1 1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                          </svg></span>
                         </a>
                      </div>
                   </div>
                </div>
                <div class="col-lg-6">
                   <div class="tp-admission-cta-thumb wow fadeInUp" data-wow-delay=".5s">
                      <img src="assets/img/course/details/admisson-overview-1.jpg" alt="">
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- admission cta area end -->


    <!-- admission apply area start -->
    <section class="tp-admission-apply-area grey-bg pt-40 pb-140">
       <div class="container">
          <div class="row">
             <div class="col-lg-6">
                <div class="tp-admission-apply-thumb p-relative wow fadeInUp" data-wow-delay=".3s">
                   <img src="assets/img/course/details/admisson-overview-2.jpg" alt="">
                </div>
             </div>
             <div class="col-lg-6">
                <div class="tp-admission-apply-heading wow fadeInUp" data-wow-delay=".5s">
                   <h3 class="tp-admission-apply-title">Apply for 2024</h3>
                   <p>We’ll guide you through the Common Application <br>
                      or Coalition Application, Powered by Scoir, and answer <br>
                      any questions you have along the way.</p>
                      <div class="tp-admission-apply-btn">
                         <a class="tp-btn" href="">How To Apply 
                            <span><svg xmlns="http://www.w3.org/2000/svg" width="7" height="12" viewBox="0 0 7 12" fill="none">
                            <path d="M1 11L6 6L1 1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                          </svg></span></a>
                      </div>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- admission apply area end -->
 </main>
@endsection
