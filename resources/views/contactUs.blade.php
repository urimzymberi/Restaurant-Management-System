@extends('layouts.layout')
@section('content')
<!--==============page header============-->
<div class="page-breadcrumb">
    <div class="container text-center">
        <h1>Na Kontaktoni</h1>
    </div>
</div>
<!--==============end page header============-->
<div class="container-fluid no-padd contact-wrapper">
    <div class="row vertical-align-child no-margin">
        <div class="col-md-8 no-padd">
            <!--Google Map-->
            <div class="google-map-container">
                <div id="markermap" style=" margin-bottom: -8px;" >
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2934.6109252139468!2d21.164943015254945!3d42.648407579168584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13549ec1b5430613%3A0x76c9353194f18686!2sUniversiteti%20i%20Prishtin%C3%ABs!5e0!3m2!1sen!2s!4v1608924141492!5m2!1sen!2s" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>

            </div>
            <!--/Google Map-->
        </div>
        <div class="col-md-4 no-padd address-bg">
            <h3>Lokacioni</h3>
            <ul class="list-unstyled">
                <li>45 Universiteti i Prishtines</li>
                <li>Prishtine, 302012</li>
                <li>Numri i telefonit (123) 123-456 </li>
            </ul>
        </div>
    </div>
</div>
<div class="space-80"></div>
<div class="container mb-3">
    <div class="row">
        <div class="col-lg-8 ml-auto mr-auto">
            <h3 class="text-capitalize text-center margin-b-20">Leni ne mesazh</h3>

            <form method="post" action="#" class="soopcy-contact">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-12 margin-b-20">
                                <input type="text" name="name" class="form-control" placeholder="Full Name....">
                            </div>
                            <div class="col-sm-12 margin-b-20">
                                <input type="text" name="email" class="form-control" placeholder="Email Address....">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 margin-b-20">
                        <textarea name="message" class="form-control" rows="5" placeholder="Message...."></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <div class="data-status"></div> <!-- data submit status -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <button type="submit" name="submit" class="btn btn-rounded btn-primary">Submit</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection
