@include('frontend/header')

    <!--====== SEARCH BOX PART ENDS ======-->

    <!--====== SLIDER PART START ======-->

    <section id="page-banner" class="pt-105 pb-130 bg_cover" data-overlay="8" style="background-image: url(images/page-banner-7.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>Login</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Login</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== PAGE BANNER PART ENDS ======-->

    <!--====== CONTACT PART START ======-->

    <section id="contact-page" class="pt-90 pb-120 gray-bg">
        <div class="container">
            <div class="row">
                    <div class="col-lg-8">
                            <div class="teachers-right mt-50">

                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                                            <div class="contact-from mt-30">
                                                    <div class="section-title">
                                                        <h5>Login</h5>
                                                        <h2></h2>
                                                    </div> <!-- section title -->
                                                    <div class="main-form pt-45">
                                                        <form  action="{{ route('login') }}" method="post">
                                                            @csrf
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="singel-form form-group">
                                                                        <input name="email" type="text" value="{{ old('email') }}" placeholder="Your email" data-error="email is required." required="required">
                                                                        @error('email')
                                                                        <div class="help-block with-errors">{{ $message }}</div>
                                                                        @enderror
                                                                    </div> <!-- singel form -->
                                                                </div>
                                                                <div class="col-md-6">
                                                                        <div class="singel-form form-group">
                                                                            <input name="password" type="password" placeholder="Your Password" data-error="password is required." required="required">
                                                                            @error('password')

                                                                            <div class="help-block with-errors"></div>
                                                                            @enderror
                                                                        </div> <!-- singel form -->
                                                                    </div>

                                                                <p class="form-message"></p>
                                                                <div class="col-md-12">
                                                                    <div class="singel-form">
                                                                        <button type="submit" class="main-btn">Login</button>
                                                                    </div> <!-- singel form -->
                                                                </div>
                                                            </div> <!-- row -->
                                                        </form>
                                                    </div> <!-- main form -->
                                                </div>
                                    </div>
                                    <div class="tab-pane fade" id="courses" role="tabpanel" aria-labelledby="courses-tab">
                                        <div class="courses-cont pt-20">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="singel-course mt-30">
                                                        <div class="thum">
                                                            <div class="image">
                                                                <img src="images/course/cu-2.jpg" alt="Course">
                                                            </div>
                                                            <div class="price">
                                                                <span>$10</span>
                                                            </div>
                                                        </div>
                                                        <div class="cont border">
                                                            <ul>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                            </ul>
                                                            <span>(20 Reviws)</span>
                                                            <a href="#"><h4>Learn basis javascirpt from start for beginner</h4></a>
                                                            <div class="course-teacher">
                                                                <div class="thum">
                                                                    <a href="#"><img src="images/course/teacher/t-2.jpg" alt="teacher"></a>
                                                                </div>
                                                                <div class="name">
                                                                    <a href="#"><h6>Mark anthem</h6></a>
                                                                </div>
                                                                <div class="admin">
                                                                    <ul>
                                                                        <li><a href="#"><i class="fa fa-user"></i><span>31</span></a></li>
                                                                        <li><a href="#"><i class="fa fa-heart"></i><span>10</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> <!-- singel course -->
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="singel-course mt-30">
                                                        <div class="thum">
                                                            <div class="image">
                                                                <img src="images/course/cu-3.jpg" alt="Course">
                                                            </div>
                                                            <div class="price">
                                                                <span>$30</span>
                                                            </div>
                                                        </div>
                                                        <div class="cont border">
                                                            <ul>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                            </ul>
                                                            <span>(20 Reviws)</span>
                                                            <a href="#"><h4>Learn basis javascirpt from start for beginner</h4></a>
                                                            <div class="course-teacher">
                                                                <div class="thum">
                                                                    <a href="#"><img src="images/course/teacher/t-2.jpg" alt="teacher"></a>
                                                                </div>
                                                                <div class="name">
                                                                    <a href="#"><h6>Mark anthem</h6></a>
                                                                </div>
                                                                <div class="admin">
                                                                    <ul>
                                                                        <li><a href="#"><i class="fa fa-user"></i><span>31</span></a></li>
                                                                        <li><a href="#"><i class="fa fa-heart"></i><span>10</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> <!-- singel course -->
                                                </div>
                                            </div> <!-- row -->
                                        </div> <!-- courses cont -->
                                    </div>
                                    <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                                        <div class="reviews-cont">
                                            <div class="title">
                                                <h6>Student Reviews</h6>
                                            </div>
                                            <ul>
                                               <li>
                                                   <div class="singel-reviews">
                                                        <div class="reviews-author">
                                                            <div class="author-thum">
                                                                <img src="images/review/r-1.jpg" alt="Reviews">
                                                            </div>
                                                            <div class="author-name">
                                                                <h6>Bobby Aktar</h6>
                                                                <span>April 03, 2019</span>
                                                            </div>
                                                        </div>
                                                        <div class="reviews-description pt-20">
                                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which.</p>
                                                            <div class="rating">
                                                                <ul>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                </ul>
                                                                <span>/ 5 Star</span>
                                                            </div>
                                                        </div>
                                                    </div> <!-- singel reviews -->
                                               </li>
                                               <li>
                                                   <div class="singel-reviews">
                                                        <div class="reviews-author">
                                                            <div class="author-thum">
                                                                <img src="images/review/r-2.jpg" alt="Reviews">
                                                            </div>
                                                            <div class="author-name">
                                                                <h6>Humayun Ahmed</h6>
                                                                <span>April 13, 2019</span>
                                                            </div>
                                                        </div>
                                                        <div class="reviews-description pt-20">
                                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which.</p>
                                                            <div class="rating">
                                                                <ul>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                </ul>
                                                                <span>/ 5 Star</span>
                                                            </div>
                                                        </div>
                                                    </div> <!-- singel reviews -->
                                               </li>
                                               <li>
                                                   <div class="singel-reviews">
                                                        <div class="reviews-author">
                                                            <div class="author-thum">
                                                                <img src="images/review/r-3.jpg" alt="Reviews">
                                                            </div>
                                                            <div class="author-name">
                                                                <h6>Tania Aktar</h6>
                                                                <span>April 20, 2019</span>
                                                            </div>
                                                        </div>
                                                        <div class="reviews-description pt-20">
                                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which.</p>
                                                            <div class="rating">
                                                                <ul>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                </ul>
                                                                <span>/ 5 Star</span>
                                                            </div>
                                                        </div>
                                                    </div> <!-- singel reviews -->
                                               </li>
                                            </ul>
                                            <div class="title pt-15">
                                                <h6>Leave A Comment</h6>
                                            </div>
                                            <div class="reviews-form">
                                                <form action="#">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-singel">
                                                                    <input type="text" placeholder="Fast name">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-singel">
                                                                    <input type="text" placeholder="Last Name">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <div class="form-singel">
                                                                    <div class="rate-wrapper">
                                                                        <div class="rate-label">Your Rating:</div>
                                                                        <div class="rate">
                                                                            <div class="rate-item"><i class="fa fa-star" aria-hidden="true"></i></div>
                                                                            <div class="rate-item"><i class="fa fa-star" aria-hidden="true"></i></div>
                                                                            <div class="rate-item"><i class="fa fa-star" aria-hidden="true"></i></div>
                                                                            <div class="rate-item"><i class="fa fa-star" aria-hidden="true"></i></div>
                                                                            <div class="rate-item"><i class="fa fa-star" aria-hidden="true"></i></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <div class="form-singel">
                                                                    <textarea placeholder="Comment"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <div class="form-singel">
                                                                    <button type="button" class="main-btn">Post Comment</button>
                                                                </div>
                                                            </div>
                                                        </div> <!-- row -->
                                                    </form>
                                            </div>
                                        </div> <!-- reviews cont -->
                                    </div>
                                </div> <!-- tab content -->
                            </div> <!-- teachers right -->
                        </div>

            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== CONTACT PART ENDS ======-->

    <!--====== FOOTER PART START ======-->
@include('frontend.footer')
