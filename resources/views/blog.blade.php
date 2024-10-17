@extends('header')
@section('content')
<main>
      
    <!-- blog stories banner area start -->
    <section class="tp-blog-stories-area fix p-relative pt-120 pb-60">
       <div class="tp-blog-stories-bg" data-background="assets/img/blog/blog-stories/blog-stories-bg.png"></div>
       <div class="container">
          <div class="row align-items-center">
             <div class="col-sm-12">
                <div class="tp-breadcrumb__content">
                   <div class="tp-breadcrumb__list">
                      <span><a href="{{ url('/') }}"><svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                         <path fill-rule="evenodd" clip-rule="evenodd" d="M8.07207 0C8.19331 0 8.31107 0.0404348 8.40664 0.114882L16.1539 6.14233L15.4847 6.98713L14.5385 6.25079V12.8994C14.538 13.1843 14.4243 13.4574 14.2225 13.6589C14.0206 13.8604 13.747 13.9738 13.4616 13.9743H2.69231C2.40688 13.9737 2.13329 13.8603 1.93146 13.6588C1.72962 13.4573 1.61597 13.1843 1.61539 12.8994V6.2459L0.669148 6.98235L0 6.1376L7.7375 0.114882C7.83308 0.0404348 7.95083 0 8.07207 0ZM8.07694 1.22084L2.69231 5.40777V12.8994H13.4616V5.41341L8.07694 1.22084Z" fill="currentColor"/>
                      </svg></a></span>
                      <span class="color">Blog & Stories</span>
                   </div>
                   <h3 class="tp-breadcrumb__title">Blog & Stories</h3>
                   <p class="tp-blog-stories-p">Discover articles and tutorials to help you build better.</p>
                   <div class="tp-blog-stories-btn-box mb-60">
                      <a class="active" href="#">Art & Design</a>
                      <a href="#">Business</a>
                      <a href="#">Data Science</a>
                      <a href="#">Data Science</a>
                      <a href="#">Finance</a>
                      <a href="#">Lifestyle</a>
                      <a href="#">Marketing</a>
                      <span class="tp-search-open-btn">
                         <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.85 11.85L15 15" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M13.6 7.29999C13.6 3.8206 10.7794 1 7.29999 1C3.8206 1 1 3.8206 1 7.29999C1 10.7794 3.8206 13.6 7.29999 13.6C10.7794 13.6 13.6 10.7794 13.6 7.29999Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/>
                         </svg>
                      </span>
                   </div>
                </div>
             </div>
             <div class="col-lg-12">
                <div class="tp-blog-stories-banner-wrap p-relative">
                   <div class="tp-blog-stories-banner-thumb p-relative">
                      <img src="assets/img/blog/blog-stories/blog-stories-banner.jpg" alt="">
                   </div>
                   <div class="tp-blog-stories-banner-content">
                      <a href="#">Art & Design</a>
                      <h3 class="tp-blog-stories-banner-title">The Importance of Intrinsic <br>
                         Motivation for Students</h3>
                      <div class="tp-blog-stories-banner-user d-flex align-items-center">
                         <div class="tp-blog-stories-user-thumb">
                            <img src="assets/img/blog/blog-stories/blog-stories-user.jpg" alt="">
                         </div>
                         <div class="tp-blog-stories-user-content">
                            <h6>Oliver Knight</h6>
                            <span>July 14, 2024</span>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- blog stories banner area end -->


    <!-- blog stories area -->
    <section class="tp-blog-stories-area p-relative pb-120">
       <div class="container">
          <div class="row">
             <div class="col-lg-8">
                <div class="row">
                   <div class="col-lg-6 col-md-6">
                      <div class="tp-blog-stories-item p-relative mb-50">
                         <div class="tp-blog-stories-thumb">
                            <a href=""><img src="assets/img/blog/blog-stories/blog-stories-thumb-1.jpg" alt=""></a>
                         </div>
                         <div class="tp-blog-stories-content">
                            <div class="tp-blog-stories-tag-wrap d-flex">
                               <a href="#">Education</a>
                               <span>August 24, 2023</span>
                            </div>
                            <h4 class="tp-blog-stories-title"><a href="">A better alternative to grading
                               Student writing.</a></h4>
                            <div class="tp-blog-stories-user-box d-flex align-items-center">
                               <div class="tp-blog-stories-user-thumb">
                                  <img src="assets/img/blog/blog-stories/blog-stories-user-1.jpg" alt="">
                               </div>
                               <span>Arlene McCoy</span>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="col-lg-6 col-md-6">
                      <div class="tp-blog-stories-item p-relative mb-50">
                         <div class="tp-blog-stories-thumb">
                            <a href=""><img src="assets/img/blog/blog-stories/blog-stories-thumb-2.jpg" alt=""></a>
                         </div>
                         <div class="tp-blog-stories-content">
                            <div class="tp-blog-stories-tag-wrap d-flex">
                               <a class="sky" href="#">Education</a>
                               <span>August 24, 2023</span>
                            </div>
                            <h4 class="tp-blog-stories-title"><a href="">The definition of synchronous
                               Learning.</a></h4>
                            <div class="tp-blog-stories-user-box d-flex align-items-center">
                               <div class="tp-blog-stories-user-thumb">
                                  <img src="assets/img/blog/blog-stories/blog-stories-user-2.jpg" alt="">
                               </div>
                               <span>Arlene McCoy</span>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="col-lg-6 col-md-6">
                      <div class="tp-blog-stories-item p-relative mb-50">
                         <div class="tp-blog-stories-thumb">
                            <a href=""><img src="assets/img/blog/blog-stories/blog-stories-thumb-3.jpg" alt=""></a>
                         </div>
                         <div class="tp-blog-stories-content">
                            <div class="tp-blog-stories-tag-wrap d-flex">
                               <a class="yeallow" href="#">Education</a>
                               <span>August 24, 2023</span>
                            </div>
                            <h4 class="tp-blog-stories-title"><a href="">Make you love and hate
                               Education System.</a></h4>
                            <div class="tp-blog-stories-user-box d-flex align-items-center">
                               <div class="tp-blog-stories-user-thumb">
                                  <img src="assets/img/blog/blog-stories/blog-stories-user-3.jpg" alt="">
                               </div>
                               <span>Arlene McCoy</span>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="col-lg-6 col-md-6">
                      <div class="tp-blog-stories-item p-relative mb-50">
                         <div class="tp-blog-stories-thumb">
                            <a href=""><img src="assets/img/blog/blog-stories/blog-stories-thumb-4.jpg" alt=""></a>
                         </div>
                         <div class="tp-blog-stories-content">
                            <div class="tp-blog-stories-tag-wrap d-flex">
                               <a class="sky" href="#">Education</a>
                               <span>August 24, 2023</span>
                            </div>
                            <h4 class="tp-blog-stories-title"><a href="">Navigating Higher Education: Tips for Success</a></h4>
                            <div class="tp-blog-stories-user-box d-flex align-items-center">
                               <div class="tp-blog-stories-user-thumb">
                                  <img src="assets/img/blog/blog-stories/blog-stories-user-4.jpg" alt="">
                               </div>
                               <span>Arlene McCoy</span>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="col-lg-6 col-md-6">
                      <div class="tp-blog-stories-item p-relative mb-50">
                         <div class="tp-blog-stories-thumb">
                            <a href=""><img src="assets/img/blog/blog-stories/blog-stories-thumb-5.jpg" alt=""></a>
                         </div>
                         <div class="tp-blog-stories-content">
                            <div class="tp-blog-stories-tag-wrap d-flex">
                               <a class="yeallow" href="#">Education</a>
                               <span>August 24, 2023</span>
                            </div>
                            <h4 class="tp-blog-stories-title"><a href="">Inspiring the Next Generation of Innovators</a></h4>
                            <div class="tp-blog-stories-user-box d-flex align-items-center">
                               <div class="tp-blog-stories-user-thumb">
                                  <img src="assets/img/blog/blog-stories/blog-stories-user-5.jpg" alt="">
                               </div>
                               <span>Arlene McCoy</span>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="col-lg-6 col-md-6">
                      <div class="tp-blog-stories-item p-relative mb-50">
                         <div class="tp-blog-stories-thumb">
                            <a href=""><img src="assets/img/blog/blog-stories/blog-stories-thumb-6.jpg" alt=""></a>
                         </div>
                         <div class="tp-blog-stories-content">
                            <div class="tp-blog-stories-tag-wrap d-flex">
                               <a href="#">Education</a>
                               <span>August 24, 2023</span>
                            </div>
                            <h4 class="tp-blog-stories-title"><a href="">Bridging the Gap in Vocational Education</a></h4>
                            <div class="tp-blog-stories-user-box d-flex align-items-center">
                               <div class="tp-blog-stories-user-thumb">
                                  <img src="assets/img/blog/blog-stories/blog-stories-user-6.jpg" alt="">
                               </div>
                               <span>Arlene McCoy</span>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
             <div class="col-lg-4">
                <div class="tp-sidebar-wrapper pl-55">
                   <div class="tp-sidebar-widgets mb-50">
                      <div class="tp-sidebar-content">
                         <div class="tp-sidebar-search p-relative">
                            <form action="#">
                               <input type="text" placeholder="Search...">
                               <button class="tp-sidebar-search-btn" type="submit">
                                  <span>
                                     <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                        <path d="M13.3994 13.4004L16.9995 17.0005" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M15.3999 8.20019C15.3999 4.22363 12.1763 1 8.1997 1C4.22314 1 0.999512 4.22363 0.999512 8.20019C0.999512 12.1767 4.22314 15.4004 8.1997 15.4004C12.1763 15.4004 15.3999 12.1767 15.3999 8.20019Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"></path>
                                     </svg>
                                  </span>
                               </button>
                            </form>
                         </div>
                      </div>
                   </div>
                   <div class="tp-sidebar-widget mb-50">
                      <div class="tp-sidebar-content">
                         <h5 class="tp-sidebar-widget-title">Categories</h5>
                         <ul>
                         <li><a href="">Articles <span>(8)</span></a></li>
                         <li><a href="">Business <span>(4)</span></a></li>
                         <li><a href="">Family & Divorce <span>(2)</span></a></li>
                         <li><a href="">Web Design <span> (6) </span></a></li>
                         <li><a href="">Software <span>(3)</span></a></li>
                         <li><a href="">Video <span>(8)</span></a></li>
                         </ul>
                      </div>
                   </div>
                   <div class="tp-sidebar-widget mb-50">
                      <h5 class="tp-sidebar-widget-title">Recent Posts</h5>
                      <div class="tp-recent-post-content">
                         <span class="tp-recent-post-span">UI Design</span>
                         <h5 class="tp-recent-post-title"><a href="">Google without having to hire <br>
                         an SEO Expert.</a></h5>
                         <div class="tp-recent-post-tag">
                            <span>14 April, 2024</span>
                            <span>Minute</span>
                         </div>
                      </div>
                      <div class="tp-recent-post-content">
                         <span class="tp-recent-post-span grey">Career</span>
                         <h5 class="tp-recent-post-title"><a href="">Being good cyber citizens in a <br> digital world.</a></h5>
                         <div class="tp-recent-post-tag">
                            <span>14 April, 2024</span>
                            <span>Minute</span>
                         </div>
                      </div>
                      <div class="tp-recent-post-content">
                         <span class="tp-recent-post-span yellow">Software</span>
                         <h5 class="tp-recent-post-title"><a href="">The single biggest reason why <br> startups succeed.</a></h5>
                         <div class="tp-recent-post-tag">
                            <span>14 April, 2024</span>
                            <span>Minute</span>
                         </div>
                      </div>
                   </div>
                   <div class="tp-sidebar-widget mb-50">
                      <div class="tp-sidebar-content">
                         <h5 class="tp-sidebar-widget-title">Tag</h5>
                         <div class="tagcloud">
                            <a href="#">News</a>
                            <a href="#">Counseling</a>
                            <a href="#">Career</a>
                            <a href="#">Software</a>
                            <a href="#">Development</a>
                            <a href="#">Merket</a>
                            <a href="#">Life</a>
                            <a href="#">Research</a>
                            <a href="#">Research</a>
                            <a href="#">UI Design</a>
                            <a href="#">Team</a>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <div class="row">
             <div class="col-lg-12">
                <div class="tp-event-inner-pagination">
                   <div class="tp-dashboard-pagination">
                      <div class="tp-pagination">
                         <nav>
                            <ul class="justify-content-center">
                               <li>
                                  <a href="#"><svg width="15" height="13" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                     <path d="M1.00017 6.77879L14 6.77879" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                     <path d="M6.24316 11.9999L0.999899 6.77922L6.24316 1.55762" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                  </svg></a>
                               </li>
                               <li>
                                  <a href="#">1</a>
                               </li>
                               <li>
                                  <span class="current">2</span>
                               </li>
                               <li>
                                  <a href="#">3</a>
                               </li>
                               <li>
                                  <a href="#" class="next page-numbers">
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
    <!-- blog stories area -->

 </main>
@endsection  
