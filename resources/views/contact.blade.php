@extends('layouts.master')


<x-navigation>

</x-navigation>

@section('contact')

<div class="page contact_page">
    <!-- CONTACT -->
    <section class="contact">

        <div class="map">
            <iframe width="100%" height="500" frameborder="0" scrolling="no" marginheight="0" src="https://maps.google.com/maps?q=Нью-Йорк, Соединенные Штаты Америки, &t=&z=14&ie=UTF8&iwloc=&output=embed" marginwidth="0"><a class="addmaps" href="http://www.embedgooglemap.net"id="get-map-data" mce_href="http://maps.google.com/maps/api/js?sensor=false">embedgooglemap.net</a><style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
            </iframe>
        </div>
        <div class="container">
            <div class="text-center">
                <h2>Contact us</h2>
            </div>
            <form id="contact-form" method="post" action="contact.php" role="form">
                <div class="messages"></div>
                <div class="controls">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="form_name">Firstname *</label>
                                <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="form_lastname">Lastname *</label>
                                <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="form_email">Email *</label>
                                <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="form_phone">Phone</label>
                                <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Please enter your phone">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="form_message">Message *</label>
                                <textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <input type="submit" class="btn btn-primary btn-xl" value="Send message">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <p class="text-muted"><strong>*</strong> These fields are required.</p>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- CONTACT -->
</div>

@endsection
