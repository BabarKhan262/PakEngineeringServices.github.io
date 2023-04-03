@extends('Home-Layout.app')

@section('section')

<section class="page-header padding">
    <div class="container">
        <div class="page-content text-center">
            <h2>Specialized team</h2>
            <p>Construction & Building Your Dreams.</p>
        </div>
    </div>
</section>
<section class="team-section bg-gray padding">
    <div class="dots"></div>
    <div class="container">
        <div class="row team-wrap box-shadow">
            @foreach($ourTeam as $team)
            <div class="col-lg-3 col-sm-6 padding-15">
                <div class="team-item">
                    <div class="overlay"></div>
                    <img src="{{ asset($team->image) }}" alt="team">
                    <div class="team-content">
                        <h3>{{$team->name}}</h3>
                        <span>{{$team->designation}}</span>
                    </div>
                    <ul class="team-social">
                        <li><a href="https://web.facebook.com/people/Pak-Engineering-Services/100063584965688/"><i class="ti-facebook"></i></a></li>
                        <li><a href="#"><i class="ti-twitter"></i></a></li>
                        <li><a href="#"><i class="ti-instagram"></i></a></li>
                        <li><a href="#"><i class="ti-youtube"></i></a></li>
                    </ul>
                </div>
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