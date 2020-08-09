@extends('layouts.master')
@section('content')
    <!-- ***** breadcumb area start ***** -->
    <x-_breadcrumb/>
    <!-- ***** breadcumb area end ***** -->

    <section class="dorne-single-listing-area pt-2">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Single Listing Content -->
                <div class="col-12 col-lg-8">


                    <div class="single-listing-content">

                        <div class="listing-title">
                            <h4>{{$hotel->name}}</h4>
                            <h6>{{$destination}}</h6>

                        </div>
                           <div class="ratingsfix" > <x-_rating  :rate="$hotel->star_rating" :reviewsCount="$hotel->reviews_count"></x-_rating>
                               <div>
                                   <p style="text-align: end;">{{$hotel->reviews->count() ?? '0'}} Reviews</p>
                               </div>
                           </div>



                        <x-_hero-carousel :img1="$hotel->thumbnail_url1" :img2="$hotel->thumbnail_url2" :img3="$hotel->thumbnail_url3"></x-_hero-carousel>
                        <x-_tabs :hotel="$hotel" :rooms="$rooms" :reviews="$reviews"></x-_tabs>


                    </div>
                </div>

                <!-- Listing Sidebar -->
                <div class="col-12 col-md-8 col-lg-4">
                    <div class="listing-sidebar pt-2">

                        <!-- Listing Verify -->
                        <div class="listing-verify">
                            <a href="#" class="btn dorne-btn w-100"><i class="fa fa-check pr-3"></i> Verified
                                Listing</a>
                        </div>

                        <!-- Opening Hours Widget -->
                        <div class="opening-hours-widget mt-50">
                            <form action="{{url()->current()}}" method="post">
                                @csrf
                                <div class="flex ">
                                    <h5>select date</h5>
                                    <div class="row">
                                        <input type="text" name="checkIn"placeholder="Check in" onfocus="(this.type='date')"id="checkIn" class="ah  custom-date col-sm-6   mr-0 " min="2020-08-10"/>
                                        <input type="text" name="checkOut"placeholder="Check out" onfocus="(this.type='date')"id="checkOut" class="ah  custom-date col-sm-6   mr-0 " />
                                        <br class="p-1">
                                        <button type="submit" class="btn dorne-btn " style="width: 100%; margin-top: 1rem;"><i class="fa fa-search pr-2" aria-hidden="true"></i> Search</button>
                                    </div>
                                </div>
                            </form>

                        </div>

                        <!-- Contact Form -->
                        <div class="contact-form contact-form-widget mt-50">
                            <h6>Contact Us</h6>
                            <form method="post" action="{{ route('contacts.store') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <input type="text" name="name" class="form-control" placeholder="Your Name">
                                    </div>
                                    <div class="col-12">
                                        <input type="email" name="email" class="form-control"
                                               placeholder="Email Address">
                                    </div>
                                    <div class="col-12">
                                        <input type="text" name="subject" class="form-control" placeholder="Subject">
                                    </div>
                                    <div class="col-12">
                                        <textarea name="message" class="form-control" id="Message" cols="30" rows="10"
                                                  placeholder="Your Message"></textarea>
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
    </section>

@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            $("#checkIn").change(function () {
                $("#checkOut").attr("min",$("#checkIn").val() )

            })
        });
    </script>
@endsection
