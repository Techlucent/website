@extends('frontView.master')

@section('title','Skills')

@section('content')
    <!-- ***** Call to Action Start ***** -->
    <section class="section section-bg" id="call-to-action" style="background-image: url({{ asset('frontend') }}/images/banner-image-1-1920x500.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2>Our <em>Skills</em></h2>
                        <p>Ut consectetur, metus sit amet aliquet placerat, enim est ultricies ligula</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->

    <!-- ***** Fleet Starts ***** -->
    <section class="section" id="trainers">
        <div class="container">
            <br>
            <br>

            <div class="row">
                <!-- <div class="col-lg-4">
                    <form action="#">
                         <h5 style="margin-bottom: 15px">Type</h5>

                         <div>
                              <label>
                                   <input type="checkbox">

                                   <span>Contract (5)</span>
                              </label>
                         </div>

                         <div>
                              <label>
                                   <input type="checkbox">

                                   <span>Full time (5)</span>
                              </label>
                         </div>

                         <div>
                              <label>
                                   <input type="checkbox">

                                   <span>Internship (5)</span>
                              </label>
                         </div>

                         <br>

                         <h5 style="margin-bottom: 15px">Category</h5>

                         <div>
                              <label>
                                   <input type="checkbox">

                                   <span>Accounting / Finance / Insurance Jobs (5)</span>
                              </label>
                         </div>

                         <div>
                              <label>
                                   <input type="checkbox">

                                   <span>Accounting / Finance / Insurance Jobs (5)</span>
                              </label>
                         </div>

                         <div>
                              <label>
                                   <input type="checkbox">

                                   <span>Accounting / Finance / Insurance Jobs (5)</span>
                              </label>
                         </div>

                         <br>

                         <h5 style="margin-bottom: 15px">Career levels</h5>

                         <div>
                              <label>
                                   <input type="checkbox">

                                   <span>Entry Level (5)</span>
                              </label>
                         </div>

                         <div>
                              <label>
                                   <input type="checkbox">

                                   <span>Entry Level (5)</span>
                              </label>
                         </div>

                         <div>
                              <label>
                                   <input type="checkbox">

                                   <span>Entry Level (5)</span>
                              </label>
                         </div>

                         <br>

                         <h5 style="margin-bottom: 15px">Education levels</h5>

                         <div>
                              <label>
                                   <input type="checkbox">

                                   <span>Associate Degree (5)</span>
                              </label>
                         </div>

                         <div>
                              <label>
                                   <input type="checkbox">

                                   <span>Associate Degree (5)</span>
                              </label>
                         </div>

                         <div>
                              <label>
                                   <input type="checkbox">

                                   <span>Associate Degree (5)</span>
                              </label>
                         </div>

                         <br>


                         <h5 style="margin-bottom: 15px">Years of experience</h5>

                         <div>
                              <label>
                                   <input type="checkbox">

                                    <span>&lt; 1 (5)</span>
                              </label>
                         </div>

                         <div>
                              <label>
                                   <input type="checkbox">

                                    <span>&lt; 1 (5)</span>
                              </label>
                         </div>

                         <div>
                              <label>
                                   <input type="checkbox">

                                    <span>&lt; 1 (5)</span>
                              </label>
                         </div>
                    </form>
                    
                    <br>
                </div> -->

                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="trainer-item">
                                <div class="image-thumb">
                                    <img src="{{ asset('frontend') }}/images/product-1-720x480.jpg" alt="">
                                </div>
                                <div class="down-content">
                                    <!-- <span> <sup>$</sup>70 000 </span> -->

                                    <h4>Lorem ipsum dolor sit amet, consectetur</h4>

                                    <p>Medical &nbsp;/&nbsp; Health Jobs</p>

                                    <!-- <ul class="social-icons">
                                        <li><a href="job-details.html">+ View More</a></li>
                                    </ul> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="trainer-item">
                                <div class="image-thumb">
                                    <img src="{{ asset('frontend') }}/images/product-2-720x480.jpg" alt="">
                                </div>
                                <div class="down-content">
                                    <!-- <span> <sup>$</sup>70 000 </span> -->

                                    <h4>Lorem ipsum dolor sit amet, consectetur</h4>

                                    <p>Medical &nbsp;/&nbsp; Health Jobs</p>

                                    <!-- <ul class="social-icons">
                                        <li><a href="job-details.html">+ View More</a></li>
                                    </ul> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="trainer-item">
                                <div class="image-thumb">
                                    <img src="{{ asset('frontend') }}/images/product-3-720x480.jpg" alt="">
                                </div>
                                <div class="down-content">
                                    <!-- <span> <sup>$</sup>70 000 </span> -->

                                    <h4>Lorem ipsum dolor sit amet, consectetur</h4>

                                    <p>Medical &nbsp;/&nbsp; Health Jobs</p>

                                    <!-- <ul class="social-icons">
                                        <li><a href="job-details.html">+ View More</a></li>
                                    </ul> -->
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="trainer-item">
                                <div class="image-thumb">
                                    <img src="{{ asset('frontend') }}/images/product-4-720x480.jpg" alt="">
                                </div>
                                <div class="down-content">
                                    <!-- <span> <sup>$</sup>70 000 </span> -->

                                    <h4>Lorem ipsum dolor sit amet, consectetur</h4>

                                    <p>Medical &nbsp;/&nbsp; Health Jobs</p>

                                    <!-- <ul class="social-icons">
                                        <li><a href="job-details.html">+ View More</a></li>
                                    </ul> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="trainer-item">
                                <div class="image-thumb">
                                    <img src="{{ asset('frontend') }}/images/product-5-720x480.jpg" alt="">
                                </div>
                                <div class="down-content">
                                    <!-- <span> <sup>$</sup>70 000 </span> -->

                                    <h4>Lorem ipsum dolor sit amet, consectetur</h4>

                                    <p>Medical &nbsp;/&nbsp; Health Jobs</p>

                                    <!-- <ul class="social-icons">
                                        <li><a href="job-details.html">+ View More</a></li>
                                    </ul> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="trainer-item">
                                <div class="image-thumb">
                                    <img src="{{ asset('frontend') }}/images/product-6-720x480.jpg" alt="">
                                </div>
                                <div class="down-content">
                                    <!-- <span> <sup>$</sup>70 000 </span> -->

                                    <h4>Lorem ipsum dolor sit amet, consectetur</h4>

                                    <p>Medical &nbsp;/&nbsp; Health Jobs</p>

                                    <!-- <ul class="social-icons">
                                        <li><a href="job-details.html">+ View More</a></li>
                                    </ul> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            

            <!-- <br>
                
            <nav>
              <ul class="pagination pagination-lg justify-content-center">
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                  </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                  </a>
                </li>
              </ul>
            </nav> -->

        </div>
    </section>
    <!-- ***** Fleet Ends ***** -->

    
@endsection