@extends('Home-Layout.app')

@section('section')

<section class="page-header padding">
    <div class="container">
        <div class="page-content text-center">
            <h2>Project single</h2>
            <p>Construction & Building Html Template.</p>
        </div>
    </div>
</section>
<section class="project-single-section padding">
    <div class="container">
        @if (isset($singleProjcets))
        <div class="row project-single-wrap align-items-center">
            <div class="col-md-6 sm-padding">
                <div id="project-single-carousel" class="project-single-carousel box-shadow owl-carousel">
                    <div class="single-carousel">
                        <img src="{{ asset($singleProjcets->image) }}" alt="img">
                    </div>
                    <div class="single-carousel">
                        <img src="{{ asset($singleProjcets->side_image_1) }}" alt="img">
                    </div>
                    <div class="single-carousel">
                        <img src="{{ asset($singleProjcets->side_image_2) }}" alt="img">
                    </div>
                </div>
            </div>
            <div class="col-md-6 sm-padding">
                <div class="project-single-content">
                    <h2>{{$singleProjcets->title}}</h2>
                    <p>{{$singleProjcets->desc}}</p>
                    <ul class="project-details">
                        <li><span>Architects</span>: {{$singleProjcets->architects}}</li>
                        <li><span>Location</span>: {{$singleProjcets->location}}</li>
                        <li><span>Category</span>: {{$singleProjcets->categories['name']}}</li>
                        <li><span>Area</span>: {{$singleProjcets->area}}</li>
                        <li><span>Project Year</span>: {{$singleProjcets->created_at}}</li>
                        <li><span>Manufactures</span>: {{$singleProjcets->manufactures}}</li>
                    </ul>
                </div>
            </div>
        </div>
        @endif
    </div>
</section>
<div class="sponsor-section bg-grey">
    <div class="dots"></div>
    <div class="container">
        <div id="sponsor-carousel" class="sponsor-carousel owl-carousel">
            <div class="sponsor-item">
                <img src="{{ asset('img/sponsor1.png') }}" alt="sponsor">
            </div>
            <div class="sponsor-item">
                <img src="{{ asset('img/sponsor2.png') }}" alt="sponsor">
            </div>
            <div class="sponsor-item">
                <img src="{{ asset('img/sponsor3.png') }}" alt="sponsor">
            </div>
            <div class="sponsor-item">
                <img src="{{ asset('img/sponsor4.png') }}" alt="sponsor">
            </div>
            <div class="sponsor-item">
                <img src="{{ asset('img/sponsor5.png') }}" alt="sponsor">
            </div>
            <div class="sponsor-item">
                <img src="{{ asset('img/sponsor6.png') }}" alt="sponsor">
            </div>
            <div class="sponsor-item">
                <img src="{{ asset('img/sponsor7.png') }}" alt="sponsor">
            </div>
            <div class="sponsor-item">
                <img src="{{ asset('img/sponsor8.png') }}" alt="sponsor">
            </div>
        </div>
    </div>
</div>


@endsection

@section('script')


<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}"></script>
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