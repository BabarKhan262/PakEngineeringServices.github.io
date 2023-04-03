@extends('Home-Layout.app')

@section('section')


@if(isset($contactUS))
<div class="mapouter">
    <div class="gmap_canvas"><iframe width="100%" height="350" id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.5595319557037!2d71.96660481464565!3d34.61529799529627!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38dc01c7d45989a1%3A0x81bf0241c0b6761e!2sPak%20Engineering%20Services!5e0!3m2!1sen!2s!4v1679914009940!5m2!1sen!2s&amp;t=&amp;z=11&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.emojilib.com/"></a></div>
    <style>
        .mapouter {
            position: relative;
            text-align: right;
            height: 350px;
            width: 100%;
        }

        .gmap_canvas {
            overflow: hidden;
            background: none !important;
            height: 350px;
            width: 100%;
        }
    </style>
</div>
@endif
<section class="contact-section bg-grey padding">
    <div class="dots"></div>
    <div class="container">
        <div class="contact-wrap d-flex align-items-center row">
            @foreach($contactUS as $contact)
            <div class="col-md-6 padding-15">
                <div class="contact-info">
                    <h2>Get in touch with us & <br>send us message today!</h2>
                    <p>Redison is a different kind of architecture practice. Founded by LoganCee in 1991, we’re an employee-owned firm pursuing a democratic design process that values everyone’s input.</p>
                    <h3>{{$contact->addres}}</h3>
                    <h4><span>Email:</span> {{$contact->email}} <br> <span>Phone:</span> {{$contact->cell_num}} <br>
                        <!-- <span>Fax:</span> +88 (0) 202 0000 001</h4> -->
                </div>
            </div>
            @endforeach
            <div class="col-md-6 padding-15">
                <div class="contact-form">
                    <form action="http://html.dynamiclayers.net/at/indico/contact.php" method="post" id="ajax_form" class="form-horizontal">
                        <div class="form-group colum-row row">
                            <div class="col-sm-6">
                                <input type="text" id="name" name="name" class="form-control" placeholder="Name" required>
                            </div>
                            <div class="col-sm-6">
                                <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <textarea id="message" name="message" cols="30" rows="5" class="form-control message" placeholder="Message" required></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <button id="submit" class="default-btn" type="submit">Send Message</button>
                            </div>
                        </div>
                        <div id="form-messages" class="alert" role="alert"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


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