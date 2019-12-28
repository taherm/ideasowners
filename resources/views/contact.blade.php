@extends('layouts.master') @section('content')



<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col">
                <ul class="breadcrumb">
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li class="active">Contact Us</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h1>Contact Us</h1>
            </div>
        </div>
    </div>
</section>



<div class="container">

    <div class="row">
        <div class="col-lg-6">

            <div class="alert alert-success d-none mt-4" id="contactSuccess">
                <strong>Success!</strong> Your message has been sent to us.
            </div>

            <div class="alert alert-danger d-none mt-4" id="contactError">
                <strong>Error!</strong> There was an error sending your message.
                <span class="text-1 mt-2 d-block" id="mailErrorMessage"></span>
            </div>

            <h2 class="mb-3 mt-2">
                <strong>Contact</strong> Us</h2>

            <form action="{{url('/contact-mail')}}" method="POST">
                {{ csrf_field() }}
                <div class="form-row">
                    <div class="form-group col-lg-6">
                        <label>Your name *</label>
                        <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name"
                            id="name" required>
                    </div>
                    <div class="form-group col-lg-6">
                        <label>Your email address *</label>
                        <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address."
                            maxlength="100" class="form-control" name="email" id="email" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col">
                        <label>Subject</label>
                        <input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject"
                            id="subject" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col">
                        <label>Message *</label>
                        <textarea maxlength="5000" data-msg-required="Please enter your message." rows="10" class="form-control" name="message" id="message"
                            required></textarea>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col">
                        <input type="submit" value="Send Message" class="btn btn-primary btn-lg" data-loading-text="Loading...">
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-6">


            <hr>

            <h4 class="heading-primary">The
                <strong>Office</strong>
            </h4>
            <ul class="list list-icons list-icons-style-3 mt-4">
                <li>
                    <i class="fa fa-map-marker"></i>
                    <strong>Address:</strong> Kuwait City - Sharq</li>
                <li>
                    <i class="fa fa-phone"></i>
                    <strong>Phone:</strong>
                    <a href="{{url('https://api.whatsapp.com/send?phone=96598824010')}}">(+965)98824010</a>
                </li>
                <li>
                    <i class="fa fa-phone"></i>
                    <strong>Phone:</strong>(+965)94978803</li>

                <li>
                    <i class="fa fa-envelope"></i>
                    <strong>Email:</strong>
                    <a href="mailto:info@ideasowners.net">info@ideasowners.net</a>
                </li>
            </ul>

            <hr>

            <h4 class="heading-primary">Business
                <strong>Hours</strong>
            </h4>
            <ul class="list list-icons list-dark mt-4">
                <li>
                    <i class="fa fa-clock-o"></i> Saturday - Thursday - 9am to 9pm</li>

                <li>
                    <i class="fa fa-clock-o"></i> Friday - Closed</li>
            </ul>


        </div>

        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3476.7637540973074!2d47.98250041509965!3d29.37720578213006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3fcf849441e71957%3A0x5917ce3248898c70!2sSAWABER+6+Building!5e0!3m2!1sen!2skw!4v1517997257932"
                width="1140" height="606" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>

    </div>

</div>



@endsection