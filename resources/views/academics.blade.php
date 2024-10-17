@extends('header')
@section('content')
<main>
      
    <!-- course filter start -->
    <section class="tp-course-filter-area tp-course-filter-bg p-relative pt-180 pb-220">
       <div class="container">
          <div class="row">
             <div class="col-lg-12">
                <div class="tp-breadcrumb__content-filter mb-50">
                   <div class="tp-breadcrumb__list">
                      <span><a href="{{ url('/') }}"><svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                         <path fill-rule="evenodd" clip-rule="evenodd" d="M8.07207 0C8.19331 0 8.31107 0.0404348 8.40664 0.114882L16.1539 6.14233L15.4847 6.98713L14.5385 6.25079V12.8994C14.538 13.1843 14.4243 13.4574 14.2225 13.6589C14.0206 13.8604 13.747 13.9738 13.4616 13.9743H2.69231C2.40688 13.9737 2.13329 13.8603 1.93146 13.6588C1.72962 13.4573 1.61597 13.1843 1.61539 12.8994V6.2459L0.669148 6.98235L0 6.1376L7.7375 0.114882C7.83308 0.0404348 7.95083 0 8.07207 0ZM8.07694 1.22084L2.69231 5.40777V12.8994H13.4616V5.41341L8.07694 1.22084Z" fill="currentColor"/>
                      </svg></a></span>
                      <span class="color">All Courses</span>
                   </div>
                   <h3 class="tp-breadcrumb__title">All Courses</h3>
                   <p>We have the largest collection of <span>4650</span> courses</p>
                </div>
                <div class="tp-course-filter-wrap p-relative">
                   <div class="row">
                      <div class="col-lg-6">
                         <div class="tp-course-filter-top-left d-flex align-items-center">
                            <div class="tp-course-filter-top-tab tp-tab mb-20">
                               <ul class="nav nav-tabs" id="filterTab" role="tablist">
                                  <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">
                                      <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.66667 1H1V5.66667H5.66667V1Z" stroke="#031F42" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M12.9997 1H8.33301V5.66667H12.9997V1Z" stroke="#031F42" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M12.9997 8.33337H8.33301V13H12.9997V8.33337Z" stroke="#031F42" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M5.66667 8.33337H1V13H5.66667V8.33337Z" stroke="#031F42" stroke-linecap="round" stroke-linejoin="round" />
                                      </svg>
                                      Grid
                                    </button>
                                  </li>
                                  <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">
                                        <svg width="14" height="14" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                           <path d="M15 7.11108H1" stroke="#031F42" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"></path>
                                           <path d="M15 1H1" stroke="#031F42" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"></path>
                                           <path d="M15 13.2222H1" stroke="#031F42" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                        List
                                    </button>
                                  </li>
                                </ul>
                            </div>
                            <div class="tp-course-filter-top-result mb-20">
                               <p>Showing 1–14 of 26 results</p>
                            </div>
                         </div>
                      </div>
                      <div class="col-lg-6">
                         <div class="tp-course-filter-top-right d-flex align-items-center justify-content-start justify-content-lg-end">
                            <div class="tp-course-filter-top-right-search d-none d-lg-block mb-20">
                               <form action="#">
                                  <input type="text" placeholder="Search for Courses...">
                                  <button class="tp-course-filter-top-right-search-btn" type="submit">
                                     <span>
                                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                           <path d="M12.625 12.625L16 16" stroke="#8B8B8B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M14.5 7.75C14.5 4.02208 11.4779 1 7.75 1C4.02208 1 1 4.02208 1 7.75C1 11.4779 4.02208 14.5 7.75 14.5C11.4779 14.5 14.5 11.4779 14.5 7.75Z" stroke="#8B8B8B" stroke-width="1.5" stroke-linejoin="round"></path>
                                        </svg>
                                     </span>
                                  </button>
                               </form>
                            </div>
                            <div class="tp-course-filter-btn mb-20">
                               <button type="button" class="tp-filter-btn filter-show-dropdown-btn filter-open-btn">
                                  <span>
                                     <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.9998 3.44995H10.7998" stroke="#5169F1" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M3.8 3.44995H1" stroke="#5169F1" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M6.60039 5.9C7.95349 5.9 9.05039 4.8031 9.05039 3.45C9.05039 2.0969 7.95349 1 6.60039 1C5.24729 1 4.15039 2.0969 4.15039 3.45C4.15039 4.8031 5.24729 5.9 6.60039 5.9Z" stroke="#5169F1" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M15.0002 11.15H12.2002" stroke="#5169F1" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M5.2 11.15H1" stroke="#5169F1" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M9.4002 13.6C10.7533 13.6 11.8502 12.503 11.8502 11.15C11.8502 9.79685 10.7533 8.69995 9.4002 8.69995C8.0471 8.69995 6.9502 9.79685 6.9502 11.15C6.9502 12.503 8.0471 13.6 9.4002 13.6Z" stroke="#5169F1" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                      </svg>
                                  </span>
                                  Filter
                               </button>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="tp-filter-dropdown-area tp-filter-dropdown-wrapper d-none d-md-block">
                      <div class="row row-cols-lg-5 row-cols-md-3 row-cols-sm-2 row-cols-1">
                         <div class="col">
                            <h4 class="tp-filter-widget-title">Sort by</h4>
                            <div class="tp-filter-widget-content">
                               <div class="tp-filter-widget-radio">
                                  <ul>
                                     <li>
                                        <div class="form-check">
                                           <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                           <label class="form-check-label" for="flexRadioDefault1">
                                              Latest
                                           </label>
                                         </div>
                                     </li>
                                     <li>
                                        <div class="form-check">
                                           <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                           <label class="form-check-label" for="flexRadioDefault2">
                                              Trending
                                           </label>
                                         </div>
                                     </li>
                                     <li>
                                        <div class="form-check">
                                           <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                                           <label class="form-check-label" for="flexRadioDefault3">
                                              Popularity
                                           </label>
                                         </div>
                                     </li>
                                     <li>
                                        <div class="form-check">
                                           <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
                                           <label class="form-check-label" for="flexRadioDefault4">
                                              Price: low to high
                                           </label>
                                         </div>
                                     </li>
                                     <li>
                                        <div class="form-check">
                                           <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault5">
                                           <label class="form-check-label" for="flexRadioDefault5">
                                              Price: high to low
                                           </label>
                                         </div>
                                     </li>
                                  </ul>
                               </div>
                            </div>
                         </div>
                         <div class="col">
                            <h4 class="tp-filter-widget-title">All categories</h4>
                            <div class="tp-filter-widget-content">
                               <div class="tp-filter-widget-checkbox">
                                  <ul>
                                     <li>
                                        <div class="from-checkbox">
                                           <input id="remeber" type="checkbox">
                                           <label for="remeber">Design (9)</label>
                                        </div>
                                     </li>
                                     <li>
                                        <div class="from-checkbox">
                                           <input id="Business" type="checkbox">
                                           <label for="Business">Business (12)</label>
                                        </div>
                                     </li>
                                     <li>
                                        <div class="from-checkbox">
                                           <input id="Development" type="checkbox">
                                           <label for="Development">Development (10)</label>
                                        </div>
                                     </li>
                                     <li>
                                        <div class="from-checkbox">
                                           <input id="Music" type="checkbox">
                                           <label for="Music">Music (8)</label>
                                        </div>
                                     </li>
                                     <li>
                                        <div class="from-checkbox">
                                           <input id="Marketing" type="checkbox">
                                           <label for="Marketing">Marketing (8)</label>
                                        </div>
                                     </li>
                                     <li>
                                        <div class="from-checkbox">
                                           <input id="Data" type="checkbox">
                                           <label for="Data">Data Science (7)</label>
                                        </div>
                                     </li>
                                     <li>
                                        <div class="from-checkbox">
                                           <input id="Lifestyle" type="checkbox">
                                           <label for="Lifestyle">Lifestyle (9)</label>
                                        </div>
                                     </li>
                                     <li>
                                        <div class="from-checkbox">
                                           <input id="remeber1" type="checkbox">
                                           <label for="remeber1">Music (8)</label>
                                        </div>
                                     </li>
                                     <li>
                                        <div class="from-checkbox">
                                           <input id="remeber2" type="checkbox">
                                           <label for="remeber2">Marketing (8)</label>
                                        </div>
                                     </li>
                                     <li>
                                        <div class="from-checkbox">
                                           <input id="remeber3" type="checkbox">
                                           <label for="remeber3">Data Science (7)</label>
                                        </div>
                                     </li>
                                     <li>
                                        <div class="from-checkbox">
                                           <input id="remeber4" type="checkbox">
                                           <label for="remeber4">Lifestyle (9)</label>
                                        </div>
                                     </li>
                                  </ul>
                               </div>
                            </div>
                         </div>
                         <div class="col">
                            <h4 class="tp-filter-widget-title">Instructors</h4>
                            <div class="tp-filter-widget-content">
                               <div class="tp-filter-widget-checkbox">
                                  <ul>
                                     <li>
                                        <div class="from-checkbox">
                                           <input id="Alex" type="checkbox">
                                           <label for="Alex">Alex Itzel (6)</label>
                                        </div>
                                     </li>
                                     <li>
                                        <div class="from-checkbox">
                                           <input id="Emilee" type="checkbox">
                                           <label for="Emilee">Emilee Logan (12)</label>
                                        </div>
                                     </li>
                                     <li>
                                        <div class="from-checkbox">
                                           <input id="Donald" type="checkbox">
                                           <label for="Donald">Donald Logan (11)</label>
                                        </div>
                                     </li>
                                     <li>
                                        <div class="from-checkbox">
                                           <input id="Oliver" type="checkbox">
                                           <label for="Oliver">Oliver Porter (9)</label>
                                        </div>
                                     </li>
                                     <li>
                                        <div class="from-checkbox">
                                           <input id="Jane" type="checkbox">
                                           <label for="Jane">Jane Cooper( 10)</label>
                                        </div>
                                     </li>
                                     <li>
                                        <div class="from-checkbox">
                                           <input id="Angela" type="checkbox">
                                           <label for="Angela">Angela (9)</label>
                                        </div>
                                     </li>
                                     <li>
                                        <div class="from-checkbox">
                                           <input id="Patrick" type="checkbox">
                                           <label for="Patrick">Patrick( 10)</label>
                                        </div>
                                     </li>
                                     <li>
                                        <div class="from-checkbox">
                                           <input id="remeber8" type="checkbox">
                                           <label for="remeber8">Music (8)</label>
                                        </div>
                                     </li>
                                     <li>
                                        <div class="from-checkbox">
                                           <input id="remeber9" type="checkbox">
                                           <label for="remeber9">Marketing (8)</label>
                                        </div>
                                     </li>
                                     <li>
                                        <div class="from-checkbox">
                                           <input id="remeber10" type="checkbox">
                                           <label for="remeber10">Data Science (7)</label>
                                        </div>
                                     </li>
                                     <li>
                                        <div class="from-checkbox">
                                           <input id="remeber11" type="checkbox">
                                           <label for="remeber11">Lifestyle (9)</label>
                                        </div>
                                     </li>
                                  </ul>
                               </div>
                            </div>
                         </div>
                         <div class="col">
                            <h4 class="tp-filter-widget-title">Price</h4>
                            <div class="tp-filter-widget-content">
                               <div class="tp-filter-widget-radio">
                                  <ul>
                                     <li>
                                        <div class="form-check">
                                           <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault6">
                                           <label class="form-check-label" for="flexRadioDefault6">
                                              All (20)
                                           </label>
                                         </div>
                                     </li>
                                     <li>
                                        <div class="form-check">
                                           <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault7">
                                           <label class="form-check-label" for="flexRadioDefault7">
                                              Free (2)
                                           </label>
                                         </div>
                                     </li>
                                     <li>
                                        <div class="form-check">
                                           <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault8">
                                           <label class="form-check-label" for="flexRadioDefault8">
                                              Paid (18)
                                           </label>
                                         </div>
                                     </li>
                                  </ul>
                               </div>
                            </div>
                         </div>
                         <div class="col">
                            <h4 class="tp-filter-widget-title">Language</h4>
                            <div class="tp-filter-widget-content">
                               <div class="tp-filter-widget-radio">
                                  <ul>
                                     <li>
                                        <div class="form-check">
                                           <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault9">
                                           <label class="form-check-label" for="flexRadioDefault9">
                                              English (21)
                                           </label>
                                         </div>
                                     </li>
                                     <li>
                                        <div class="form-check">
                                           <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault10">
                                           <label class="form-check-label" for="flexRadioDefault10">
                                              Russian (1)
                                           </label>
                                         </div>
                                     </li>
                                     <li>
                                        <div class="form-check">
                                           <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault11">
                                           <label class="form-check-label" for="flexRadioDefault11">
                                              German (5)
                                           </label>
                                         </div>
                                     </li>
                                     <li>
                                        <div class="form-check">
                                           <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault12">
                                           <label class="form-check-label" for="flexRadioDefault12">
                                              Italian (6)
                                           </label>
                                         </div>
                                     </li>
                                  </ul>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- course filter end -->


    <!-- course filter area start -->
    <section class="tp-filter-mt-2">
       <div class="container">
          <div class="tab-content" id="myTabContent">
             <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="row">
                   <div class="col-lg-4 col-md-6">
                      <div class="tp-course-item p-relative fix mb-30">
                         <div class="tp-course-teacher mb-15">
                            <span><img src="assets/img/teacher/teacher-1.png" alt="">Hilary Ouse</span>
                         </div>
                         <div class="tp-course-thumb">
                            <a href=""><img class="course-pink" src="assets/img/course/course-thumb-1.jpg" alt=""></a>
                         </div>
                         <div class="tp-course-content">
                            <div class="tp-course-tag mb-10">
                               <span>Art &amp; Design</span>
                            </div>
                            <div class="tp-course-meta">
                               <span>
                                  <span>
                                     <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.9228 10.0426V2.29411C13.9228 1.51825 13.2949 0.953997 12.5252 1.01445H12.4847C11.1276 1.12529 9.07163 1.82055 7.91706 2.53596L7.80567 2.6065C7.62337 2.71733 7.30935 2.71733 7.11692 2.6065L6.9549 2.50573C5.81046 1.79033 3.75452 1.1152 2.3974 1.00437C1.62768 0.943911 0.999756 1.51827 0.999756 2.28405V10.0426C0.999756 10.6573 1.50613 11.2417 2.12393 11.3122L2.30622 11.3425C3.70386 11.5238 5.87126 12.2392 7.10685 12.9143L7.1372 12.9244C7.30937 13.0252 7.59293 13.0252 7.75498 12.9244C8.99057 12.2393 11.1681 11.5339 12.5758 11.3425L12.7885 11.3122C13.4164 11.2417 13.9228 10.6674 13.9228 10.0426Z" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M7.46118 2.81787V12.4506" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
                                     </svg>
                                  </span>
                                  12 Lessons
                               </span>
                               <span>
                                  <span>
                                     <svg width="13" height="15" viewBox="0 0 13 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.57134 7.5C8.36239 7.5 9.81432 6.04493 9.81432 4.25C9.81432 2.45507 8.36239 1 6.57134 1C4.7803 1 3.32837 2.45507 3.32837 4.25C3.32837 6.04493 4.7803 7.5 6.57134 7.5Z" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M12.1426 14C12.1426 11.4845 9.64553 9.44995 6.57119 9.44995C3.49684 9.44995 0.999756 11.4845 0.999756 14" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
                                     </svg>
                                  </span>
                                  45 Student
                               </span>
                            </div>
                            <h4 class="tp-course-title">
                               <a href="">Interior design concepts <br> Masterclass</a>
                            </h4>
                            <div class="tp-course-rating d-flex align-items-end justify-content-between">
                               <div class="tp-course-rating-star">
                                  <p>5.0<span> /5</span></p>
                                  <div class="tp-course-rating-icon">
                                     <i class="fa-solid fa-star"></i>
                                     <i class="fa-solid fa-star"></i>
                                     <i class="fa-solid fa-star"></i>
                                     <i class="fa-solid fa-star"></i>
                                     <i class="fa-solid fa-star"></i>
                                  </div>
                               </div>
                               <div class="tp-course-pricing">
                                  <span>Free</span>
                               </div>
                            </div>
                         </div>
                         <div class="tp-course-btn">
                            <a href="">Preview this Course</a>
                         </div>
                      </div>
                   </div>
                   <div class="col-lg-4 col-md-6">
                      <div class="tp-course-item p-relative fix mb-30">
                         <div class="tp-course-teacher mb-15">
                            <span><img src="assets/img/teacher/teacher-2.png" alt="">Joss Sticks</span>
                            <span class="discount">-25%</span>
                         </div>
                         <div class="tp-course-thumb">
                            <a href=""><img class="course-lightblue" src="assets/img/course/course-thumb-2.jpg" alt=""></a>
                         </div>
                         <div class="tp-course-content">
                            <div class="tp-course-tag mb-10">
                               <span>Development</span>
                            </div>
                            <div class="tp-course-meta">
                               <span>
                                  <span>
                                     <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.9228 10.0426V2.29411C13.9228 1.51825 13.2949 0.953997 12.5252 1.01445H12.4847C11.1276 1.12529 9.07163 1.82055 7.91706 2.53596L7.80567 2.6065C7.62337 2.71733 7.30935 2.71733 7.11692 2.6065L6.9549 2.50573C5.81046 1.79033 3.75452 1.1152 2.3974 1.00437C1.62768 0.943911 0.999756 1.51827 0.999756 2.28405V10.0426C0.999756 10.6573 1.50613 11.2417 2.12393 11.3122L2.30622 11.3425C3.70386 11.5238 5.87126 12.2392 7.10685 12.9143L7.1372 12.9244C7.30937 13.0252 7.59293 13.0252 7.75498 12.9244C8.99057 12.2393 11.1681 11.5339 12.5758 11.3425L12.7885 11.3122C13.4164 11.2417 13.9228 10.6674 13.9228 10.0426Z" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M7.46118 2.81787V12.4506" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
                                     </svg>
                                  </span>
                                  12 Lessons
                               </span>
                               <span>
                                  <span>
                                     <svg width="13" height="15" viewBox="0 0 13 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.57134 7.5C8.36239 7.5 9.81432 6.04493 9.81432 4.25C9.81432 2.45507 8.36239 1 6.57134 1C4.7803 1 3.32837 2.45507 3.32837 4.25C3.32837 6.04493 4.7803 7.5 6.57134 7.5Z" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M12.1426 14C12.1426 11.4845 9.64553 9.44995 6.57119 9.44995C3.49684 9.44995 0.999756 11.4845 0.999756 14" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
                                     </svg>
                                  </span>
                                  45 Student
                               </span>
                            </div>
                            <h4 class="tp-course-title">
                               <a href="">Starting seo as your home <br> based business</a>
                            </h4>
                            <div class="tp-course-rating d-flex align-items-end justify-content-between">
                               <div class="tp-course-rating-star">
                                  <p>5.0<span> /5</span></p>
                                  <div class="tp-course-rating-icon">
                                     <i class="fa-solid fa-star"></i>
                                     <i class="fa-solid fa-star"></i>
                                     <i class="fa-solid fa-star"></i>
                                     <i class="fa-solid fa-star"></i>
                                     <i class="fa-solid fa-star"></i>
                                  </div>
                               </div>
                               <div class="tp-course-pricing">
                                  <del>$26.00</del>
                                  <span>$54.00</span>
                               </div>
                            </div>
                         </div>
                         <div class="tp-course-btn">
                            <a href="">Preview this Course</a>
                         </div>
                      </div>
                   </div>
                   <div class="col-lg-4 col-md-6">
                      <div class="tp-course-item p-relative fix mb-30">
                         <div class="tp-course-teacher mb-15">
                            <span><img src="assets/img/teacher/teacher-3.png" alt="">Gustav Purpleson</span>
                         </div>
                         <div class="tp-course-thumb">
                            <a href=""><img class="course-sky" src="assets/img/course/course-thumb-3.jpg" alt=""></a>
                         </div>
                         <div class="tp-course-content">
                            <div class="tp-course-tag mb-10">
                               <span>Music</span>
                            </div>
                            <div class="tp-course-meta">
                               <span>
                                  <span>
                                     <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.9228 10.0426V2.29411C13.9228 1.51825 13.2949 0.953997 12.5252 1.01445H12.4847C11.1276 1.12529 9.07163 1.82055 7.91706 2.53596L7.80567 2.6065C7.62337 2.71733 7.30935 2.71733 7.11692 2.6065L6.9549 2.50573C5.81046 1.79033 3.75452 1.1152 2.3974 1.00437C1.62768 0.943911 0.999756 1.51827 0.999756 2.28405V10.0426C0.999756 10.6573 1.50613 11.2417 2.12393 11.3122L2.30622 11.3425C3.70386 11.5238 5.87126 12.2392 7.10685 12.9143L7.1372 12.9244C7.30937 13.0252 7.59293 13.0252 7.75498 12.9244C8.99057 12.2393 11.1681 11.5339 12.5758 11.3425L12.7885 11.3122C13.4164 11.2417 13.9228 10.6674 13.9228 10.0426Z" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M7.46118 2.81787V12.4506" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
                                     </svg>
                                  </span>
                                  12 Lessons
                               </span>
                               <span>
                                  <span>
                                     <svg width="13" height="15" viewBox="0 0 13 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.57134 7.5C8.36239 7.5 9.81432 6.04493 9.81432 4.25C9.81432 2.45507 8.36239 1 6.57134 1C4.7803 1 3.32837 2.45507 3.32837 4.25C3.32837 6.04493 4.7803 7.5 6.57134 7.5Z" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M12.1426 14C12.1426 11.4845 9.64553 9.44995 6.57119 9.44995C3.49684 9.44995 0.999756 11.4845 0.999756 14" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
                                     </svg>
                                  </span>
                                  45 Student
                               </span>
                            </div>
                            <h4 class="tp-course-title">
                               <a href="">Grow personal financial security <br> thinking &amp; principles</a>
                            </h4>
                            <div class="tp-course-rating d-flex align-items-end justify-content-between">
                               <div class="tp-course-rating-star">
                                  <p>5.0<span> /5</span></p>
                                  <div class="tp-course-rating-icon">
                                     <i class="fa-solid fa-star"></i>
                                     <i class="fa-solid fa-star"></i>
                                     <i class="fa-solid fa-star"></i>
                                     <i class="fa-solid fa-star"></i>
                                     <i class="fa-solid fa-star"></i>
                                  </div>
                               </div>
                               <div class="tp-course-pricing">
                                  <span>$86.00</span>
                               </div>
                            </div>
                         </div>
                         <div class="tp-course-btn">
                            <a href="">Preview this Course</a>
                         </div>
                      </div>
                   </div>
                   <div class="col-lg-4 col-md-6">
                      <div class="tp-course-item p-relative fix mb-30">
                         <div class="tp-course-teacher mb-15">
                            <span><img src="assets/img/teacher/teacher-5.png" alt="">Benjamin Evalent</span>
                            <span class="discount">-25%</span>
                         </div>
                         <div class="tp-course-thumb">
                            <a href=""><img class="course-pink" src="assets/img/course/course-thumb-5.jpg" alt=""></a>
                         </div>
                         <div class="tp-course-content">
                            <div class="tp-course-tag mb-10">
                               <span>Data Science</span>
                            </div>
                            <div class="tp-course-meta">
                               <span>
                                  <span>
                                     <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.9228 10.0426V2.29411C13.9228 1.51825 13.2949 0.953997 12.5252 1.01445H12.4847C11.1276 1.12529 9.07163 1.82055 7.91706 2.53596L7.80567 2.6065C7.62337 2.71733 7.30935 2.71733 7.11692 2.6065L6.9549 2.50573C5.81046 1.79033 3.75452 1.1152 2.3974 1.00437C1.62768 0.943911 0.999756 1.51827 0.999756 2.28405V10.0426C0.999756 10.6573 1.50613 11.2417 2.12393 11.3122L2.30622 11.3425C3.70386 11.5238 5.87126 12.2392 7.10685 12.9143L7.1372 12.9244C7.30937 13.0252 7.59293 13.0252 7.75498 12.9244C8.99057 12.2393 11.1681 11.5339 12.5758 11.3425L12.7885 11.3122C13.4164 11.2417 13.9228 10.6674 13.9228 10.0426Z" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M7.46118 2.81787V12.4506" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
                                     </svg>
                                  </span>
                                  12 Lessons
                               </span>
                               <span>
                                  <span>
                                     <svg width="13" height="15" viewBox="0 0 13 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.57134 7.5C8.36239 7.5 9.81432 6.04493 9.81432 4.25C9.81432 2.45507 8.36239 1 6.57134 1C4.7803 1 3.32837 2.45507 3.32837 4.25C3.32837 6.04493 4.7803 7.5 6.57134 7.5Z" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M12.1426 14C12.1426 11.4845 9.64553 9.44995 6.57119 9.44995C3.49684 9.44995 0.999756 11.4845 0.999756 14" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
                                     </svg>
                                  </span>
                                  45 Student
                               </span>
                            </div>
                            <h4 class="tp-course-title">
                               <a href="">The complete guide to build <br> restful API application</a>
                            </h4>
                            <div class="tp-course-rating d-flex align-items-end justify-content-between">
                               <div class="tp-course-rating-star">
                                  <p>5.0<span> /5</span></p>
                                  <div class="tp-course-rating-icon">
                                     <i class="fa-solid fa-star"></i>
                                     <i class="fa-solid fa-star"></i>
                                     <i class="fa-solid fa-star"></i>
                                     <i class="fa-solid fa-star"></i>
                                     <i class="fa-solid fa-star"></i>
                                  </div>
                               </div>
                               <div class="tp-course-pricing">
                                  <span>Free</span>
                               </div>
                            </div>
                         </div>
                         <div class="tp-course-btn">
                            <a href="">Preview this Course</a>
                         </div>
                      </div>
                   </div>
                   <div class="col-lg-4 col-md-6">
                      <div class="tp-course-item p-relative fix mb-30">
                         <div class="tp-course-teacher mb-15">
                            <span><img src="assets/img/teacher/teacher-4.png" alt="">Indigo Violet</span>
                            <span class="discount">-25%</span>
                         </div>
                         <div class="tp-course-thumb">
                            <a href=""><img class="course-sky" src="assets/img/course/course-thumb-4.jpg" alt=""></a>
                         </div>
                         <div class="tp-course-content">
                            <div class="tp-course-tag mb-10">
                               <span>Business</span>
                            </div>
                            <div class="tp-course-meta">
                               <span>
                                  <span>
                                     <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.9228 10.0426V2.29411C13.9228 1.51825 13.2949 0.953997 12.5252 1.01445H12.4847C11.1276 1.12529 9.07163 1.82055 7.91706 2.53596L7.80567 2.6065C7.62337 2.71733 7.30935 2.71733 7.11692 2.6065L6.9549 2.50573C5.81046 1.79033 3.75452 1.1152 2.3974 1.00437C1.62768 0.943911 0.999756 1.51827 0.999756 2.28405V10.0426C0.999756 10.6573 1.50613 11.2417 2.12393 11.3122L2.30622 11.3425C3.70386 11.5238 5.87126 12.2392 7.10685 12.9143L7.1372 12.9244C7.30937 13.0252 7.59293 13.0252 7.75498 12.9244C8.99057 12.2393 11.1681 11.5339 12.5758 11.3425L12.7885 11.3122C13.4164 11.2417 13.9228 10.6674 13.9228 10.0426Z" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M7.46118 2.81787V12.4506" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
                                     </svg>
                                  </span>
                                  12 Lessons
                               </span>
                               <span>
                                  <span>
                                     <svg width="13" height="15" viewBox="0 0 13 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.57134 7.5C8.36239 7.5 9.81432 6.04493 9.81432 4.25C9.81432 2.45507 8.36239 1 6.57134 1C4.7803 1 3.32837 2.45507 3.32837 4.25C3.32837 6.04493 4.7803 7.5 6.57134 7.5Z" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M12.1426 14C12.1426 11.4845 9.64553 9.44995 6.57119 9.44995C3.49684 9.44995 0.999756 11.4845 0.999756 14" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
                                     </svg>
                                  </span>
                                  45 Student
                               </span>
                            </div>
                            <h4 class="tp-course-title">
                               <a href="">Computer science: mathematical and analytical</a>
                            </h4>
                            <div class="tp-course-rating d-flex align-items-end justify-content-between">
                               <div class="tp-course-rating-star">
                                  <p>5.0<span> /5</span></p>
                                  <div class="tp-course-rating-icon">
                                     <i class="fa-solid fa-star"></i>
                                     <i class="fa-solid fa-star"></i>
                                     <i class="fa-solid fa-star"></i>
                                     <i class="fa-solid fa-star"></i>
                                     <i class="fa-solid fa-star"></i>
                                  </div>
                               </div>
                               <div class="tp-course-pricing">
                                  <del>$26.00</del>
                                  <span>$54.00</span>
                               </div>
                            </div>
                         </div>
                         <div class="tp-course-btn">
                            <a href="">Preview this Course</a>
                         </div>
                      </div>
                   </div>
                   <div class="col-lg-4 col-md-6">
                      <div class="tp-course-item p-relative fix mb-30">
                         <div class="tp-course-teacher mb-15">
                            <span><img src="assets/img/teacher/teacher-6.png" alt="">Hanson Deck</span>
                            <span class="discount">-25%</span>
                         </div>
                         <div class="tp-course-thumb">
                            <a href=""><img class="course-lightblue" src="assets/img/course/course-thumb-6.jpg" alt=""></a>
                         </div>
                         <div class="tp-course-content">
                            <div class="tp-course-tag mb-10">
                               <span>Art &amp; Design</span>
                            </div>
                            <div class="tp-course-meta">
                               <span>
                                  <span>
                                     <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.9228 10.0426V2.29411C13.9228 1.51825 13.2949 0.953997 12.5252 1.01445H12.4847C11.1276 1.12529 9.07163 1.82055 7.91706 2.53596L7.80567 2.6065C7.62337 2.71733 7.30935 2.71733 7.11692 2.6065L6.9549 2.50573C5.81046 1.79033 3.75452 1.1152 2.3974 1.00437C1.62768 0.943911 0.999756 1.51827 0.999756 2.28405V10.0426C0.999756 10.6573 1.50613 11.2417 2.12393 11.3122L2.30622 11.3425C3.70386 11.5238 5.87126 12.2392 7.10685 12.9143L7.1372 12.9244C7.30937 13.0252 7.59293 13.0252 7.75498 12.9244C8.99057 12.2393 11.1681 11.5339 12.5758 11.3425L12.7885 11.3122C13.4164 11.2417 13.9228 10.6674 13.9228 10.0426Z" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M7.46118 2.81787V12.4506" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
                                     </svg>
                                  </span>
                                  12 Lessons
                               </span>
                               <span>
                                  <span>
                                     <svg width="13" height="15" viewBox="0 0 13 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.57134 7.5C8.36239 7.5 9.81432 6.04493 9.81432 4.25C9.81432 2.45507 8.36239 1 6.57134 1C4.7803 1 3.32837 2.45507 3.32837 4.25C3.32837 6.04493 4.7803 7.5 6.57134 7.5Z" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M12.1426 14C12.1426 11.4845 9.64553 9.44995 6.57119 9.44995C3.49684 9.44995 0.999756 11.4845 0.999756 14" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
                                     </svg>
                                  </span>
                                  45 Student
                               </span>
                            </div>
                            <h4 class="tp-course-title">
                               <a href="">Machine learning A-Z: <br> hands-on python and java</a>
                            </h4>
                            <div class="tp-course-rating d-flex align-items-end justify-content-between">
                               <div class="tp-course-rating-star">
                                  <p>5.0<span> /5</span></p>
                                  <div class="tp-course-rating-icon">
                                     <i class="fa-solid fa-star"></i>
                                     <i class="fa-solid fa-star"></i>
                                     <i class="fa-solid fa-star"></i>
                                     <i class="fa-solid fa-star"></i>
                                     <i class="fa-solid fa-star"></i>
                                  </div>
                               </div>
                               <div class="tp-course-pricing">
                                  <del>$26.00</del>
                                  <span>$84.00</span>
                               </div>
                            </div>
                         </div>
                         <div class="tp-course-btn">
                            <a href="">Preview this Course</a>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
             <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="tp-course-filter-item mb-25 d-flex">
                   <div class="tp-course-filter-thumb">
                      <a href=""><img class="course-pink" src="assets/img/course/course-list/course-thumb-1.jpg" alt=""></a>
                   </div>
                   <div class="tp-course-filter-content">
                      <div class="tp-course-filter-tag d-flex align-items-center justify-content-between mb-10">
                         <span class="tag-span">Art & Design</span>
                         <div class="tp-course-rating-star">
                            <p>5.0<span> /5</span></p>
                            <div class="tp-course-rating-icon">
                               <i class="fa-solid fa-star"></i>
                               <i class="fa-solid fa-star"></i>
                               <i class="fa-solid fa-star"></i>
                               <i class="fa-solid fa-star"></i>
                               <i class="fa-solid fa-star"></i>
                            </div>
                         </div>
                      </div>
                      <h4 class="tp-course-filter-title">
                         <a href="">Interior design concepts Masterclass</a>
                      </h4>
                      <div class="tp-course-filter-meta">
                         <span><img src="assets/img/teacher/teacher-1.png" alt="">Hilary Ouse</span>
                         <span>
                            <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                               <path d="M13.9228 10.0426V2.29411C13.9228 1.51825 13.2949 0.953997 12.5252 1.01445H12.4847C11.1276 1.12529 9.07163 1.82055 7.91706 2.53596L7.80567 2.6065C7.62337 2.71733 7.30935 2.71733 7.11692 2.6065L6.9549 2.50573C5.81046 1.79033 3.75452 1.1152 2.3974 1.00437C1.62768 0.943911 0.999756 1.51827 0.999756 2.28405V10.0426C0.999756 10.6573 1.50613 11.2417 2.12393 11.3122L2.30622 11.3425C3.70386 11.5238 5.87126 12.2392 7.10685 12.9143L7.1372 12.9244C7.30937 13.0252 7.59293 13.0252 7.75498 12.9244C8.99057 12.2393 11.1681 11.5339 12.5758 11.3425L12.7885 11.3122C13.4164 11.2417 13.9228 10.6674 13.9228 10.0426Z" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                               <path d="M7.46118 2.81787V12.4506" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            12 Lessons
                         </span>
                         <span>
                            <svg width="13" height="15" viewBox="0 0 13 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                               <path d="M6.57134 7.5C8.36239 7.5 9.81432 6.04493 9.81432 4.25C9.81432 2.45507 8.36239 1 6.57134 1C4.7803 1 3.32837 2.45507 3.32837 4.25C3.32837 6.04493 4.7803 7.5 6.57134 7.5Z" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                               <path d="M12.1426 14C12.1426 11.4845 9.64553 9.44995 6.57119 9.44995C3.49684 9.44995 0.999756 11.4845 0.999756 14" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            45 Student
                         </span>
                      </div>
                      <div class="tp-course-filter-p">
                         <p>In this course, We'll learn how to create websites by structuring and styling your pages <br>
                            with HTML and CSS.</p>
                      </div>
                      <div class="tp-course-filter-pricing d-flex align-items-center justify-content-between">
                         <span>Free</span>
                         <div class="tp-course-filter-btn">
                            <a href="">Preview this Course</a>
                         </div>
                      </div>
                   </div>
                </div>

                <div class="tp-course-filter-item mb-25 d-flex">
                   <div class="tp-course-filter-thumb">
                      <a href="">
                         <img class="course-lightblue" src="assets/img/course/course-list/course-thumb-2.jpg" alt="">
                      </a>
                   </div>
                   <div class="tp-course-filter-content">
                      <div class="tp-course-filter-tag d-flex align-items-center justify-content-between mb-10">
                         <span class="tag-span">Business</span>
                         <div class="tp-course-rating-star">
                            <p>5.0<span> /5</span></p>
                            <div class="tp-course-rating-icon">
                               <i class="fa-solid fa-star"></i>
                               <i class="fa-solid fa-star"></i>
                               <i class="fa-solid fa-star"></i>
                               <i class="fa-solid fa-star"></i>
                               <i class="fa-solid fa-star"></i>
                            </div>
                         </div>
                      </div>
                      <h4 class="tp-course-filter-title">
                         <a href="">Master of Business Administration</a>
                      </h4>
                      <div class="tp-course-filter-meta">
                         <span><img src="assets/img/teacher/teacher-5.png" alt="">Benjamin Evalent</span>
                         <span>
                            <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                               <path d="M13.9228 10.0426V2.29411C13.9228 1.51825 13.2949 0.953997 12.5252 1.01445H12.4847C11.1276 1.12529 9.07163 1.82055 7.91706 2.53596L7.80567 2.6065C7.62337 2.71733 7.30935 2.71733 7.11692 2.6065L6.9549 2.50573C5.81046 1.79033 3.75452 1.1152 2.3974 1.00437C1.62768 0.943911 0.999756 1.51827 0.999756 2.28405V10.0426C0.999756 10.6573 1.50613 11.2417 2.12393 11.3122L2.30622 11.3425C3.70386 11.5238 5.87126 12.2392 7.10685 12.9143L7.1372 12.9244C7.30937 13.0252 7.59293 13.0252 7.75498 12.9244C8.99057 12.2393 11.1681 11.5339 12.5758 11.3425L12.7885 11.3122C13.4164 11.2417 13.9228 10.6674 13.9228 10.0426Z" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                               <path d="M7.46118 2.81787V12.4506" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            12 Lessons
                         </span>
                         <span>
                            <svg width="13" height="15" viewBox="0 0 13 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                               <path d="M6.57134 7.5C8.36239 7.5 9.81432 6.04493 9.81432 4.25C9.81432 2.45507 8.36239 1 6.57134 1C4.7803 1 3.32837 2.45507 3.32837 4.25C3.32837 6.04493 4.7803 7.5 6.57134 7.5Z" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                               <path d="M12.1426 14C12.1426 11.4845 9.64553 9.44995 6.57119 9.44995C3.49684 9.44995 0.999756 11.4845 0.999756 14" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            45 Student
                         </span>
                      </div>
                      <div class="tp-course-filter-p">
                         <p>In this course, We'll learn how to create websites by structuring and styling your pages <br>
                            with HTML and CSS.</p>
                      </div>
                      <div class="tp-course-filter-pricing d-flex align-items-center justify-content-between">
                         <div class="price">
                            <del>$100.00</del>
                            <span>$84.00</span>
                         </div>
                         <div class="tp-course-filter-btn">
                            <a href="">Preview this Course</a>
                         </div>
                      </div>
                   </div>
                </div>

                <div class="tp-course-filter-item mb-25 d-flex">
                   <div class="tp-course-filter-thumb">
                      <a href="">
                         <img class="course-sky" src="assets/img/course/course-list/course-thumb-3.jpg" alt="">
                      </a>
                   </div>
                   <div class="tp-course-filter-content">
                      <div class="tp-course-filter-tag d-flex align-items-center justify-content-between mb-10">
                         <span class="tag-span">Data Science</span>
                         <div class="tp-course-rating-star">
                            <p>5.0<span> /5</span></p>
                            <div class="tp-course-rating-icon">
                               <i class="fa-solid fa-star"></i>
                               <i class="fa-solid fa-star"></i>
                               <i class="fa-solid fa-star"></i>
                               <i class="fa-solid fa-star"></i>
                               <i class="fa-solid fa-star"></i>
                            </div>
                         </div>
                      </div>
                      <h4 class="tp-course-filter-title">
                         <a href="">Web Design Training with Elementor</a>
                      </h4>
                      <div class="tp-course-filter-meta">
                         <span><img src="assets/img/teacher/teacher-1.png" alt="">Hilary Ouse</span>
                         <span>
                            <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                               <path d="M13.9228 10.0426V2.29411C13.9228 1.51825 13.2949 0.953997 12.5252 1.01445H12.4847C11.1276 1.12529 9.07163 1.82055 7.91706 2.53596L7.80567 2.6065C7.62337 2.71733 7.30935 2.71733 7.11692 2.6065L6.9549 2.50573C5.81046 1.79033 3.75452 1.1152 2.3974 1.00437C1.62768 0.943911 0.999756 1.51827 0.999756 2.28405V10.0426C0.999756 10.6573 1.50613 11.2417 2.12393 11.3122L2.30622 11.3425C3.70386 11.5238 5.87126 12.2392 7.10685 12.9143L7.1372 12.9244C7.30937 13.0252 7.59293 13.0252 7.75498 12.9244C8.99057 12.2393 11.1681 11.5339 12.5758 11.3425L12.7885 11.3122C13.4164 11.2417 13.9228 10.6674 13.9228 10.0426Z" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                               <path d="M7.46118 2.81787V12.4506" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            12 Lessons
                         </span>
                         <span>
                            <svg width="13" height="15" viewBox="0 0 13 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                               <path d="M6.57134 7.5C8.36239 7.5 9.81432 6.04493 9.81432 4.25C9.81432 2.45507 8.36239 1 6.57134 1C4.7803 1 3.32837 2.45507 3.32837 4.25C3.32837 6.04493 4.7803 7.5 6.57134 7.5Z" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                               <path d="M12.1426 14C12.1426 11.4845 9.64553 9.44995 6.57119 9.44995C3.49684 9.44995 0.999756 11.4845 0.999756 14" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            45 Student
                         </span>
                      </div>
                      <div class="tp-course-filter-p">
                         <p>In this course, We'll learn how to create websites by structuring and styling your pages <br>
                            with HTML and CSS.</p>
                      </div>
                      <div class="tp-course-filter-pricing d-flex align-items-center justify-content-between">
                         <span>Free</span>
                         <div class="tp-course-filter-btn">
                            <a href="">Preview this Course</a>
                         </div>
                      </div>
                   </div>
                </div>

                <div class="tp-course-filter-item mb-25 d-flex">
                   <div class="tp-course-filter-thumb">
                      <a href="">
                         <img src="assets/img/course/course-list/course-thumb-4.jpg" alt="">
                      </a>
                   </div>
                   <div class="tp-course-filter-content">
                      <div class="tp-course-filter-tag d-flex align-items-center justify-content-between mb-10">
                         <span class="tag-span">Finance</span>
                         <div class="tp-course-rating-star">
                            <p>5.0<span> /5</span></p>
                            <div class="tp-course-rating-icon">
                               <i class="fa-solid fa-star"></i>
                               <i class="fa-solid fa-star"></i>
                               <i class="fa-solid fa-star"></i>
                               <i class="fa-solid fa-star"></i>
                               <i class="fa-solid fa-star"></i>
                            </div>
                         </div>
                      </div>
                      <h4 class="tp-course-filter-title">
                         <a href=""> People Making Music with Other</a>
                      </h4>
                      <div class="tp-course-filter-meta">
                         <span><img src="assets/img/teacher/teacher-6.png" alt="">Hilary Ouse</span>
                         <span>
                            <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                               <path d="M13.9228 10.0426V2.29411C13.9228 1.51825 13.2949 0.953997 12.5252 1.01445H12.4847C11.1276 1.12529 9.07163 1.82055 7.91706 2.53596L7.80567 2.6065C7.62337 2.71733 7.30935 2.71733 7.11692 2.6065L6.9549 2.50573C5.81046 1.79033 3.75452 1.1152 2.3974 1.00437C1.62768 0.943911 0.999756 1.51827 0.999756 2.28405V10.0426C0.999756 10.6573 1.50613 11.2417 2.12393 11.3122L2.30622 11.3425C3.70386 11.5238 5.87126 12.2392 7.10685 12.9143L7.1372 12.9244C7.30937 13.0252 7.59293 13.0252 7.75498 12.9244C8.99057 12.2393 11.1681 11.5339 12.5758 11.3425L12.7885 11.3122C13.4164 11.2417 13.9228 10.6674 13.9228 10.0426Z" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                               <path d="M7.46118 2.81787V12.4506" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            12 Lessons
                         </span>
                         <span>
                            <svg width="13" height="15" viewBox="0 0 13 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                               <path d="M6.57134 7.5C8.36239 7.5 9.81432 6.04493 9.81432 4.25C9.81432 2.45507 8.36239 1 6.57134 1C4.7803 1 3.32837 2.45507 3.32837 4.25C3.32837 6.04493 4.7803 7.5 6.57134 7.5Z" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                               <path d="M12.1426 14C12.1426 11.4845 9.64553 9.44995 6.57119 9.44995C3.49684 9.44995 0.999756 11.4845 0.999756 14" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            45 Student
                         </span>
                      </div>
                      <div class="tp-course-filter-p">
                         <p>In this course, We'll learn how to create websites by structuring and styling your pages <br>
                            with HTML and CSS.</p>
                      </div>
                      <div class="tp-course-filter-pricing d-flex align-items-center justify-content-between">
                         <div class="price">
                            <del>$100.00</del>
                            <span>$84.00</span>
                         </div>
                         <div class="tp-course-filter-btn">
                            <a href="">Preview this Course</a>
                         </div>
                      </div>
                   </div>
                </div>

                <div class="tp-course-filter-item mb-25 d-flex">
                   <div class="tp-course-filter-thumb">
                      <a href="">
                         <img src="assets/img/course/course-list/course-thumb-5.jpg" alt="">
                      </a>
                   </div>
                   <div class="tp-course-filter-content">
                      <div class="tp-course-filter-tag d-flex align-items-center justify-content-between mb-10">
                         <span class="tag-span">Web Design</span>
                         <div class="tp-course-rating-star">
                            <p>5.0<span> /5</span></p>
                            <div class="tp-course-rating-icon">
                               <i class="fa-solid fa-star"></i>
                               <i class="fa-solid fa-star"></i>
                               <i class="fa-solid fa-star"></i>
                               <i class="fa-solid fa-star"></i>
                               <i class="fa-solid fa-star"></i>
                            </div>
                         </div>
                      </div>
                      <h4 class="tp-course-filter-title">
                         <a href="">Making Music with Other People</a>
                      </h4>
                      <div class="tp-course-filter-meta">
                         <span><img src="assets/img/teacher/teacher-4.png" alt="">Hilary Ouse</span>
                         <span>
                            <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                               <path d="M13.9228 10.0426V2.29411C13.9228 1.51825 13.2949 0.953997 12.5252 1.01445H12.4847C11.1276 1.12529 9.07163 1.82055 7.91706 2.53596L7.80567 2.6065C7.62337 2.71733 7.30935 2.71733 7.11692 2.6065L6.9549 2.50573C5.81046 1.79033 3.75452 1.1152 2.3974 1.00437C1.62768 0.943911 0.999756 1.51827 0.999756 2.28405V10.0426C0.999756 10.6573 1.50613 11.2417 2.12393 11.3122L2.30622 11.3425C3.70386 11.5238 5.87126 12.2392 7.10685 12.9143L7.1372 12.9244C7.30937 13.0252 7.59293 13.0252 7.75498 12.9244C8.99057 12.2393 11.1681 11.5339 12.5758 11.3425L12.7885 11.3122C13.4164 11.2417 13.9228 10.6674 13.9228 10.0426Z" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                               <path d="M7.46118 2.81787V12.4506" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            12 Lessons
                         </span>
                         <span>
                            <svg width="13" height="15" viewBox="0 0 13 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                               <path d="M6.57134 7.5C8.36239 7.5 9.81432 6.04493 9.81432 4.25C9.81432 2.45507 8.36239 1 6.57134 1C4.7803 1 3.32837 2.45507 3.32837 4.25C3.32837 6.04493 4.7803 7.5 6.57134 7.5Z" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                               <path d="M12.1426 14C12.1426 11.4845 9.64553 9.44995 6.57119 9.44995C3.49684 9.44995 0.999756 11.4845 0.999756 14" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            45 Student
                         </span>
                      </div>
                      <div class="tp-course-filter-p">
                         <p>In this course, We'll learn how to create websites by structuring and styling your pages <br>
                            with HTML and CSS.</p>
                      </div>
                      <div class="tp-course-filter-pricing d-flex align-items-center justify-content-between">
                         <div class="price">
                            <del>$145.00</del>
                            <span>$120.00</span>
                         </div>
                         <div class="tp-course-filter-btn">
                            <a href="">Preview this Course</a>
                         </div>
                      </div>
                   </div>
                </div>

                <div class="tp-course-filter-item mb-25 d-flex">
                   <div class="tp-course-filter-thumb">
                      <a href="">
                         <img src="assets/img/course/course-list/course-thumb-6.jpg" alt="">
                      </a>
                   </div>
                   <div class="tp-course-filter-content">
                      <div class="tp-course-filter-tag d-flex align-items-center justify-content-between mb-10">
                         <span class="tag-span">Data Science</span>
                         <div class="tp-course-rating-star">
                            <p>5.0<span> /5</span></p>
                            <div class="tp-course-rating-icon">
                               <i class="fa-solid fa-star"></i>
                               <i class="fa-solid fa-star"></i>
                               <i class="fa-solid fa-star"></i>
                               <i class="fa-solid fa-star"></i>
                               <i class="fa-solid fa-star"></i>
                            </div>
                         </div>
                      </div>
                      <h4 class="tp-course-filter-title">
                         <a href="">Web Design System in Figma</a>
                      </h4>
                      <div class="tp-course-filter-meta">
                         <span><img src="assets/img/teacher/teacher-3.png" alt="">Hilary Ouse</span>
                         <span>
                            <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                               <path d="M13.9228 10.0426V2.29411C13.9228 1.51825 13.2949 0.953997 12.5252 1.01445H12.4847C11.1276 1.12529 9.07163 1.82055 7.91706 2.53596L7.80567 2.6065C7.62337 2.71733 7.30935 2.71733 7.11692 2.6065L6.9549 2.50573C5.81046 1.79033 3.75452 1.1152 2.3974 1.00437C1.62768 0.943911 0.999756 1.51827 0.999756 2.28405V10.0426C0.999756 10.6573 1.50613 11.2417 2.12393 11.3122L2.30622 11.3425C3.70386 11.5238 5.87126 12.2392 7.10685 12.9143L7.1372 12.9244C7.30937 13.0252 7.59293 13.0252 7.75498 12.9244C8.99057 12.2393 11.1681 11.5339 12.5758 11.3425L12.7885 11.3122C13.4164 11.2417 13.9228 10.6674 13.9228 10.0426Z" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                               <path d="M7.46118 2.81787V12.4506" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            12 Lessons
                         </span>
                         <span>
                            <svg width="13" height="15" viewBox="0 0 13 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                               <path d="M6.57134 7.5C8.36239 7.5 9.81432 6.04493 9.81432 4.25C9.81432 2.45507 8.36239 1 6.57134 1C4.7803 1 3.32837 2.45507 3.32837 4.25C3.32837 6.04493 4.7803 7.5 6.57134 7.5Z" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                               <path d="M12.1426 14C12.1426 11.4845 9.64553 9.44995 6.57119 9.44995C3.49684 9.44995 0.999756 11.4845 0.999756 14" stroke="#94928E" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            45 Student
                         </span>
                      </div>
                      <div class="tp-course-filter-p">
                         <p>In this course, We'll learn how to create websites by structuring and styling your pages <br>
                            with HTML and CSS.</p>
                      </div>
                      <div class="tp-course-filter-pricing d-flex align-items-center justify-content-between">
                         <span>Free</span>
                         <div class="tp-course-filter-btn">
                            <a href="">Preview this Course</a>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>

          <div class="row">
             <div class="col-lg-12">
                <div class="tp-event-inner-pagination pb-100">
                   <div class="tp-dashboard-pagination pt-20">
                      <div class="tp-pagination">
                         <nav>
                            <ul class="justify-content-center">
                               <li>
                                  <a href=""><svg width="15" height="13" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                     <path d="M1.00017 6.77879L14 6.77879" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                     <path d="M6.24316 11.9999L0.999899 6.77922L6.24316 1.55762" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                  </svg></a>
                               </li>
                               <li>
                                  <a href="">1</a>
                               </li>
                               <li>
                                  <span class="current">2</span>
                               </li>
                               <li>
                                  <a href="">3</a>
                               </li>
                               <li>
                                  <a href="" class="next page-numbers">
                                     <svg width="15" height="13" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.9998 6.77883L1 6.77883" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M8.75684 1.55767L14.0001 6.7784L8.75684 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                     </svg>                                     
                                  </a>
                               </li>
                            </ul>
                         </nav>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- course filter area end -->


    <!-- bannner-area-start -->
    <section class="banner-area pb-40">
       <div class="container">
          <div class="row">
             <div class="col-lg-6">
                <div class="tp-banner-sm-2-wrap mb-60">
                   <h3 class="tp-banner-sm-2-title">Earn a <br> 
                      <span>Certificate
                         <img class="tp-underline-shape-11 wow bounceIn" data-wow-duration="1.5s" data-wow-delay=".4s" src="assets/img/unlerline/banner-2-svg-1.svg" alt="">
                      </span>
                   </h3>
                   <div class="tp-banner-sm-2-btn">
                      <a href="">View Programs</a>
                   </div>
                   <div class="tp-banner-sm-2-shape-1">
                      <img src="assets/img/banner/banner-2-thumb-1.png" alt="">
                   </div>
                </div>
             </div>
             <div class="col-lg-6">
                <div class="tp-banner-sm-2-wrap tp-banner-sm-2-bg-2 mb-60">
                   <h3 class="tp-banner-sm-2-title">Best <br>Rated 
                      <span>Courses
                         <img class="tp-underline-shape-11 wow bounceIn" data-wow-duration="1.5s" data-wow-delay=".4s" src="assets/img/unlerline/banner-2-svg-2.svg" alt="">
                      </span>
                   </h3>
                   <div class="tp-banner-sm-2-btn">
                      <a href="">View Programs</a>
                   </div>
                   <div class="tp-banner-sm-2-shape-1">
                      <img src="assets/img/banner/banner-2-thumb-2.png" alt="">
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- bannner-area-end -->
 </main>
@endsection
