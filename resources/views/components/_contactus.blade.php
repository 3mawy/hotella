@extends('layouts.master')
@section('content')
    <div class="container-fluid bg-img bg-overlay" style="background-image: url(http://hotella.test/frontend/img/bg-img/hero-1.jpg);">
        <div class="dorne-contact-area d-md-flex" id="contact">
            <!-- Contact Form Area -->
            <div class=" equal-height">
                <div class="row pl-4 pr-4" style="padding-top: 9rem">
                    <div class="col-12 col-md-6 pb-4 color-overlay">
                        <div class="contact-text">
                            <h4 style="color: antiquewhite;">Hello, Get in touch with us</h4>
                            <p style="color: antiquewhite;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac nibh sed mi ullamcorper rhoncus. Curabitur pulvinar vel augue sit amet vestibulum. Proin tempus lacus porta lorem blandit aliquam eget quis ipsum. Vivamus accumsan consequat ligula non volutpat. Sed mollis orci non cursus vestibulum. Pellentesque vitae est a augue laoreet venenatis sed eu felis. Sed cursus magna nec turpis ullamcorper, eget rutrum felis egestas. Nunc odio ex, fermentum efficitur nunc vitae, efficitur hendrerit diam. Lorem ipsum dolor sit amet, consectetur.</p>
                            <div class="contact-info d-lg-flex">
                                <div class="single-contact-info">
                                    <h6 style="color: antiquewhite;"><i class="fa fa-map-signs" aria-hidden="true"></i> A SCU graduation project</h6>
                                    <h6 style="color: antiquewhite;"><i class="fa fa-map-signs" aria-hidden="true"></i> Faculty of computer and informatics</h6>
                                </div>
                                <div class="single-contact-info">
                                    <h6 style="color: antiquewhite;"><i class="fa fa-envelope-o" aria-hidden="true"></i> contact@Hotella.com</h6>
                                    <h6 style="color: antiquewhite;"><i class="fa fa-phone" aria-hidden="true"></i> +20 1062971122</h6>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-12 col-md-6 pb-4">
                        <div class="contact-form">
                            <div class="contact-form-title">
                                <h6>Contact Business</h6>
                            </div>
                            <form method="post" action="{{ route('contacts.store') }}">
                                @csrf

                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <input type="text" name="name" class="form-control" placeholder="Your Name">
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <input type="email" name="email" class="form-control" placeholder="Email Address">
                                    </div>
                                    <div class="col-12">
                                        <input type="text" name="subject" class="form-control" placeholder="Subject">
                                    </div>
                                    <div class="col-12">
                                        <textarea name="message" class="form-control" id="Message" cols="30" rows="10" placeholder="Your Message"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn dorne-btn">Send</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
    </div>


</div>
@endsection
