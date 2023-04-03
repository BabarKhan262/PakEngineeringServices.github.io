@extends('Home-Layout.app')

@section('section')

<section class="page-header padding">
    <div class="container">
        <div class="page-content text-center">
            <h2>About us</h2>
            <p>Construction & Building Your Dreams</p>
        </div>
    </div>
</section>
<section class="about-section padding">
    <div class="container">
        <div class="row about-wrap">
            @foreach($abouts as $about)
            <div class="col-lg-6 sm-padding">
                <div class="about-content wow fadeInLeft">
                    <h2>{{$about->about_title}}</h2>
                    <p>{{$about->about_desc}}</p>
                    <a href="/about-us" class="default-btn">More About Us</a>
                </div>
            </div>
            @endforeach
            <div class="col-lg-6 sm-padding">
                <ul class="about-promo">
                    <li class="about-promo-item wow fadeInUp">
                        <i class="flaticon-factory"></i>
                        <div>
                            <h3>Professional Liability</h3>
                            <p>PES Engineering and construction are committed to building a sustainable future by fostering a collaborative spirit.</p>
                        </div>
                    </li>
                    <li class="about-promo-item wow fadeInUp" data-wow-delay="300ms">
                        <i class="flaticon-worker"></i>
                        <div>
                            <h3>Dedicated To Our Clients</h3>
                            <p>PES Engineering and construction are committed to building a sustainable future by fostering a collaborative spirit.</p>
                        </div>
                    </li>
                    <li class="about-promo-item wow fadeInUp" data-wow-delay="500ms">
                        <i class="flaticon-gear"></i>
                        <div>
                            <h3>Outstanding Services</h3>
                            <p>PES Engineering and construction are committed to building a sustainable future by fostering a collaborative spirit.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="work-pro-section padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6 sm-padding">
                <div class="work-pro-item text-center">
                    <span class="number">1</span>
                    <div class="number-line"></div>
                    <h3>Planning & Research</h3>
                    <p>PES Engineering and Construction company are committed building a sustainable future fostering a collaborative spirit.</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 sm-padding">
                <div class="work-pro-item text-center">
                    <span class="number">2</span>
                    <div class="number-line"></div>
                    <h3>Design & Ideas</h3>
                    <p>PES Engineering and Construction company are committed building a sustainable future fostering a collaborative spirit.</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 sm-padding">
                <div class="work-pro-item text-center">
                    <span class="number">3</span>
                    <div class="number-line"></div>
                    <h3>Specialized Projects</h3>
                    <p>PES Engineering and Construction company are committed building a sustainable future fostering a collaborative spirit.</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 sm-padding">
                <div class="work-pro-item text-center">
                    <span class="number">4</span>
                    <h3>Final Outputs</h3>
                    <p>PES Engineering and Construction company are committed building a sustainable future fostering a collaborative spirit.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="content-section padding">
    <div class="container">
        <div class="row content-wrap">
            <div class="col-lg-6 sm-padding wow fadeInLeft" data-wow-delay="100ms">
                <img class="box-shadow" src="img/content-1.jpg" alt="img">
            </div>
            <div class="col-lg-6 sm-padding">
                <div class="content-info wow fadeInRight" data-wow-delay="300ms">
                    <span>Explore The Features</span>
                    <h2>Offering the most complete integrated package!</h2>
                    <p>PES Engineering and construction are committed to building a sustainable future by fostering a collaborative spirit that creates exceptional experiences, balanced relationships, and community built environment. Building isn’t just job. It's our passion. With every project we undertake, we set the bar high and provide the best industry.</p>
                    <a href="/about-us" class="default-btn">Get Free Quote</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="testimonial-section bg-grey padding">
    <div class="dots"></div>
    <div class="container">
        <div class="section-heading text-center mb-40 wow fadeInUp" data-wow-delay="100ms">
            <span>Testimonial</span>
            <h2>What people says</h2>
        </div>
        <div id="testimonial-carousel" class="testimonial-carousel box-shadow owl-carousel">
            @foreach($testimonials as $testimonial)
            <div class="testi-item d-flex align-items-center">
                <img src="{{ asset($testimonial->image) }}" alt="img">
                <div class="testi-content">
                    <p>"{{$testimonial->desc}}"</p>
                    <h3>{{$testimonial->name}}</h3>
                    <ul class="rattings">
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                    </ul>
                    <span>Director</span>
                </div>
                <i class="fa fa-quote-right"></i>
            </div>
            @endforeach
            <!-- <div class="testi-item d-flex align-items-center">
                <img src="img/testi-2.jpg" alt="img">
                <div class="testi-content">
                    <p>"Thank you for guiding us through the construction process, understanding, and always ready to accommodate our needs. We love our new space and know that it was built by the very best!"</p>
                    <h3>Valentin Lacoste</h3>
                    <ul class="rattings">
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                    </ul>
                    <span>Director</span>
                </div>
                <i class="fa fa-quote-right"></i>
            </div>
            <div class="testi-item d-flex align-items-center">
                <img src="img/testi-3.jpg" alt="img">
                <div class="testi-content">
                    <p>"Thank you for guiding us through the construction process, understanding, and always ready to accommodate our needs. We love our new space and know that it was built by the very best!"</p>
                    <h3>José Carpio</h3>
                    <ul class="rattings">
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                    </ul>
                    <span>Director</span>
                </div>
                <i class="fa fa-quote-right"></i>
            </div> -->
        </div>
    </div>
</section>
<div class="sponsor-section">
    <div class="container">
        <div id="sponsor-carousel" class="sponsor-carousel owl-carousel">
            <div class="sponsor-item">
                <img src="img/sponsor1.png" alt="sponsor">
            </div>
            <div class="sponsor-item">
                <img src="img/sponsor2.png" alt="sponsor">
            </div>
            <div class="sponsor-item">
                <img src="img/sponsor3.png" alt="sponsor">
            </div>
            <div class="sponsor-item">
                <img src="img/sponsor4.png" alt="sponsor">
            </div>
            <div class="sponsor-item">
                <img src="img/sponsor5.png" alt="sponsor">
            </div>
            <div class="sponsor-item">
                <img src="img/sponsor6.png" alt="sponsor">
            </div>
            <div class="sponsor-item">
                <img src="img/sponsor7.png" alt="sponsor">
            </div>
            <div class="sponsor-item">
                <img src="img/sponsor8.png" alt="sponsor">
            </div>
        </div>
    </div>
</div>


@endsection

@section('script')

<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="js/vendor/jquery-1.12.4.min.js"></script>

<script src="js/vendor/bootstrap.min.js"></script>

<script src="js/vendor/tether.min.js"></script>

<script src="js/vendor/headroom.min.js"></script>

<script src="js/vendor/owl.carousel.min.js"></script>

<script src="js/vendor/smooth-scroll.min.js"></script>

<script src="js/vendor/venobox.min.js"></script>

<script src="js/vendor/jquery.ajaxchimp.min.js"></script>

<script src="js/vendor/slick.min.js"></script>

<script src="js/vendor/waypoints.min.js"></script>

<script src="js/vendor/odometer.min.js"></script>

<script src="js/vendor/wow.min.js"></script>

<script src="js/main.js"></script>


@endsection