@extends('Admin-Layout.app-login')

@section('section')

<section class="page-header padding">
    <div class="container">
        <div class="page-content text-center">
            <h2>Login</h2>
        </div>
    </div>
</section>

<br><br>
<div class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 header-menu-wrap">
                <ul class="dl-menu">
                    <li><a href="/" style="font-size: 25px;">Home</a>
                    </li>
                    <li class="separator"></li>
                    <li style="font-size: 20px;">Login:</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Page Content-->
<div class="container padding-bottom-3x mb-1">
    <div class="row">
        <div class="col-md-6" style="margin-left: 280px">
            @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </div>
            @endif
            <form class="card" action="{{ action('App\Http\Controllers\AdminController@checkAdmin') }}" method="post" style="margin-top: 10px; margin-bottom: 20px;">
                @csrf
                <!-- <input type="hidden" name="_token" value="mgUIyknYaBqBl3aXpBA4CzCJYKQ3zKumxovggL9U"> -->
                <div class="card-body " style="background: aliceblue">
                    <h4 class="margin-bottom-1x text-center">Login</h4>

                    <div class="form-group input-group">
                        <input class="form-control" type="email" name="email" placeholder="Email" value="" style="margin-right: 23px;"><span class="input-group-addon"><i class="icon-mail"></i></span>
                    </div>

                    <div class="form-group input-group">
                        <input class="form-control" type="password" name="password" placeholder="Password"><span class="input-group-addon"><i class="icon-lock" style="margin-left: 10px; margin-top: 18px;"></i></span>
                    </div>


                    <div class="text-center">
                        <button class="btn btn-primary margin-bottom-none" type="submit"><span>Login</span></button>
                    </div>

                </div>
            </form>
        </div>

    </div>
</div>
<br><br>

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