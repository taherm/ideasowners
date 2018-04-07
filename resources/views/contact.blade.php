@extends('layouts.master')
@section('content')



<section class="page-header">
					<div class="container">
						<div class="row">
							<div class="col">
								<ul class="breadcrumb">
									<li><a href="#">Home</a></li>
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

        <h2 class="mb-3 mt-2"><strong>Contact</strong> Us</h2>

        <form action="/contact-mail" method="POST">
        {{ csrf_field() }}
            <div class="form-row">
                <div class="form-group col-lg-6">
                    <label>Your name *</label>
                    <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required>
                </div>
                <div class="form-group col-lg-6">
                    <label>Your email address *</label>
                    <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label>Subject</label>
                    <input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" id="subject" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label>Message *</label>
                    <textarea maxlength="5000" data-msg-required="Please enter your message." rows="10" class="form-control" name="message" id="message" required></textarea>
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

        <h4 class="heading-primary mt-4">Get in <strong>Touch</strong></h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

        <hr>

        <h4 class="heading-primary">The <strong>Office</strong></h4>
        <ul class="list list-icons list-icons-style-3 mt-4">
            <li><i class="fa fa-map-marker"></i> <strong>Address:</strong> Kuwait City - Sharq</li>
            <li><i class="fa fa-phone"></i> <strong>Phone:</strong>(+965)94958700</li>
            <li><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:info@ideasowners.net">info@ideasowners.net</a></li>
        </ul>

        <hr>

        <h4 class="heading-primary">Business <strong>Hours</strong></h4>
        <ul class="list list-icons list-dark mt-4">
            <li><i class="fa fa-clock-o"></i> Saturday - Thursday - 9am to 9pm</li>
           
            <li><i class="fa fa-clock-o"></i> Friday - Closed</li>
        </ul>

    </div>

</div>

</div>



	@endsection