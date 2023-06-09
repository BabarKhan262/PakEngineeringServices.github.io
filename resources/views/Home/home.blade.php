@extends('Home-Layout.app')

@section('section')

<div id="main-slider" class="dl-slider">
    <div class="single-slide">
        <div class="bg-img kenburns-top-right" style="background-image: url(img/slider-1.jpg);"></div>
        <div class="overlay"></div>
        <div class="slider-content-wrap d-flex align-items-center text-left">
            <div class="container">
                <div class="slider-content">
                    <div class="dl-caption medium">
                        <div class="inner-layer">
                            <div data-animation="fade-in-right" data-delay="1s">Residencial</div>
                        </div>
                    </div>
                    <div class="dl-caption big">
                        <div class="inner-layer">
                            <div data-animation="fade-in-left" data-delay="2s">Pak Engineering Services provide outstanding</div>
                        </div>
                    </div>
                    <div class="dl-caption big">
                        <div class="inner-layer">
                            <div data-animation="fade-in-left" data-delay="2.5s">construction services.</div>
                        </div>
                    </div>
                    <div class="dl-caption small">
                        <div class="inner-layer">
                            <div data-animation="fade-in-left" data-delay="3s">The PES Engineering and construction has provided complete remodeling and construction <br>solutions for residential and commercial properties in cities.</div>
                        </div>
                    </div>
                    <div class="dl-btn-group">
                        <div class="inner-layer">
                            <a href="/allProjects" class="dl-btn" data-animation="fade-in-left" data-delay="3.5s">View Projects <i class="arrow_right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="single-slide">
        <div class="bg-img kenburns-top-right" style="background-image: url(img/slider-2.jpg);"></div>
        <div class="overlay"></div>
        <div class="slider-content-wrap d-flex align-items-center text-center">
            <div class="container">
                <div class="slider-content">
                    <div class="dl-caption medium">
                        <div class="inner-layer">
                            <div data-animation="fade-in-top" data-delay="1s">Residencial</div>
                        </div>
                    </div>
                    <div class="dl-caption big">
                        <div class="inner-layer">
                            <div data-animation="fade-in-bottom" data-delay="2s">Pak Engineering Services are professional</div>
                        </div>
                    </div>
                    <div class="dl-caption big">
                        <div class="inner-layer">
                            <div data-animation="fade-in-bottom" data-delay="2.5s">in building construction.</div>
                        </div>
                    </div>
                    <div class="dl-caption small">
                        <div class="inner-layer">
                            <div data-animation="fade-in-bottom" data-delay="3s">The PES Engineering and construction has provided complete remodeling and construction <br>solutions for residential and commercial properties in cities.</div>
                        </div>
                    </div>
                    <div class="dl-btn-group">
                        <div class="inner-layer">
                            <a href="/allProjects" class="dl-btn" data-animation="fade-in-bottom" data-delay="3.5s">View Projects <i class="arrow_right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="single-slide">
        <div class="bg-img kenburns-top-right" style="background-image: url(img/slider-3.jpg);"></div>
        <div class="overlay"></div>
        <div class="slider-content-wrap d-flex align-items-center text-right">
            <div class="container">
                <div class="slider-content">
                    <div class="dl-caption medium">
                        <div class="inner-layer">
                            <div data-animation="fade-in-left" data-delay="1s">Residencial</div>
                        </div>
                    </div>
                    <div class="dl-caption big">
                        <div class="inner-layer">
                            <div data-animation="fade-in-right" data-delay="2s">Pak Engineering Services will be happy to take care</div>
                        </div>
                    </div>
                    <div class="dl-caption big">
                        <div class="inner-layer">
                            <div data-animation="fade-in-right" data-delay="2.5s">of your construction work.</div>
                        </div>
                    </div>
                    <div class="dl-caption small">
                        <div class="inner-layer">
                            <div data-animation="fade-in-right" data-delay="3s">The PES Engineering and construction has provided complete remodeling and construction <br>solutions for residential and commercial properties in cities.</div>
                        </div>
                    </div>
                    <div class="dl-btn-group">
                        <div class="inner-layer">
                            <a href="/allProjects" class="dl-btn" data-animation="fade-in-right" data-delay="3.5s">View Projects <i class="arrow_right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="about-section padding">
    <div class="container">
        <div class="row about-wrap">
            <div class="col-lg-6 sm-padding">
                @if(isset($abouts))
                <div class="about-content wow fadeInLeft">
                    <h2>Pak Engineering Services Construction company</h2>
                    <p>{{$abouts['about_desc']}}</p>
                    <a href="/about-us" class="default-btn">More About Us</a>
                </div>
                @endif
            </div>
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
<section class="service-section bg-grey padding">
    <div class="dark-bg"></div>
    <div class="section-heading dark-background text-center mb-40 wow fadeInUp" data-wow-delay="100ms">
        <span>Services</span>
        <h2>Take the world’s best <br> services for you</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div id="service-carousel" class="service-carousel box-shadow owl-carousel">
                    @foreach($services as $service)
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
                </div>
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
<section class="projects-section padding">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-lg-8 col-md-6">
                <div class="section-heading mb-40">
                    <span>Projects</span>
                    <h2>Discover the most fascinating <br>projects for our clients</h2>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 text-right">
                <a href="/allProjects" class="default-btn">View All Projects</a>
            </div>
        </div>
        <div id="projects-carousel" class="projects-carousel box-shadow owl-carousel">
            @foreach($projcets as $projcet)
            <div class="project-item">
                <img src="{{asset($projcet->image)}}" alt="projects">
                <div class="overlay"></div>
                <a href="{{asset($projcet->image)}}" class="view-icon img-popup" data-gall="project"> <i class="fas fa-expand"></i></a>
                <div class="projects-content">
                    <a href="/project-single/{{ $projcet['p_id'] }}" class="category">{{$projcet->categories['name']}}</a>
                    <h3><a href="/project-single/{{ $projcet['p_id'] }}" class="tittle">{{$projcet->title}}</a></h3>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<div class="cta-section padding">
    <div class="container">
        <div class="cta-content text-center">
            <span class="wow fadeInUp">Explore The Features</span>
            <h2 class="wow fadeInUp" data-wow-delay="300ms">The best constructions <br>company since 2016</h2>
            <a href="/" class="default-btn wow fadeInUp" data-wow-delay="500ms">Get Free Quote</a>
        </div>
    </div>
</div>
<section class="content-section padding">
    <div class="container">
        <div class="row content-wrap">
            <div class="col-lg-6 sm-padding wow fadeInLeft" data-wow-delay="100ms">
                <img class="box-shadow" class="box-shadow" src="img/content-1.jpg" alt="img">
            </div>
            <div class="col-lg-6 sm-padding">
                <div class="content-info wow fadeInRight" data-wow-delay="300ms">
                    <span>Explore The Features</span>
                    <h2>Offering the most complete integrated package!</h2>
                    <p>PES Engineering and construction are committed to building a sustainable future by fostering a collaborative spirit that creates exceptional experiences, balanced relationships, and community built environment. Building isn’t just job. It's our passion. With every project we undertake, we set the bar high and provide the best industry.</p>
                    <a href="#" class="default-btn">Get Free Quote</a>
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

<div class="sponsor-section bg-grey">
    <div class="dots"></div>
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

<script data-cfasync="false" src="{{ asset('../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}"></script>
<script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }}"></script>

<script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>

<script src="{{ asset('js/vendor/tether.min.js') }}"></script>

<script src="{{ asset('js/vendor/headroom.min.js') }}"></script>

<script src="{{ asset('js/vendor/owl.carousel.min.js') }}"></script>

<script src="{{ asset('js/vendor/smooth-scroll.min.js') }}"></script>

<script src="{{ asset('js/vendor/venobox.min.js') }}"></script>

<script src="{{ asset('js/vendor/jquery.ajaxchimp.min.js') }}"></script>

<script src="{{ asset('js/vendor/slick.min.js') }}"></script>

<script src="{{ asset('js/vendor/waypoints.min.js') }}"></script>

<script src="{{ asset('js/vendor/odometer.min.js') }}"></script>

<script src="{{ asset('js/vendor/wow.min.js') }}"></script>

<script src="{{ asset('js/main.js') }}"></script>


@endsection