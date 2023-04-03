@extends('Home-Layout.app')

@section('section')

<section class="page-header padding">
    <div class="container">
        <div class="page-content text-center">
            <h2>Our services</h2>
            <p>Construction & Building Your Dreams.</p>
        </div>
    </div>
</section>
<section class="service-section bg-grey padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div id="service-carousel" class="service-carousel box-shadow owl-carousel">
                    @foreach($allServices as $service)
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="flaticon-{{$service->icons['icon_name']}}"></i>
                        </div>
                        <h3>{{$service->title}}</h3>
                        <p>{{$service->desc}}</p>
                        <a href="/allServices" class="read-more">Read More</a>
                        <div class="overlay-icon">
                            <i class="flaticon-{{$service->icons['icon_name']}}"></i>
                        </div>
                    </div>
                    @endforeach
                    <!-- <div class="service-item">
                        <div class="service-icon">
                            <i class="flaticon-industrial-robot"></i>
                        </div>
                        <h3>Building Construction</h3>
                        <p>We are committed a sustainable future fostering a collaborative spirit.</p>
                        <a href="#" class="read-more">Read More</a>
                        <div class="overlay-icon">
                            <i class="flaticon-industrial-robot"></i>
                        </div>
                    </div>
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="flaticon-assembly-line"></i>
                        </div>
                        <h3>Refurbishments</h3>
                        <p>We are committed a sustainable future fostering a collaborative spirit.</p>
                        <a href="#" class="read-more">Read More</a>
                        <div class="overlay-icon">
                            <i class="flaticon-assembly-line"></i>
                        </div>
                    </div>
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="flaticon-conveyor"></i>
                        </div>
                        <h3>Building Renovation</h3>
                        <p>We are committed a sustainable future fostering a collaborative spirit.</p>
                        <a href="#" class="read-more">Read More</a>
                        <div class="overlay-icon">
                            <i class="flaticon-conveyor"></i>
                        </div>
                    </div>
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="flaticon-control-system"></i>
                        </div>
                        <h3>Architectural Plans</h3>
                        <p>We are committed a sustainable future fostering a collaborative spirit.</p>
                        <a href="#" class="read-more">Read More</a>
                        <div class="overlay-icon">
                            <i class="flaticon-control-system"></i>
                        </div>
                    </div> -->
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