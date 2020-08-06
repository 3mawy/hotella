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
                                   <p style="text-align: end;">{{$hotel->reviews_count ?? ''}} Reviews</p>
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

                        <!-- Book A Table Widget
                        <div class="book-a-table-widget mt-50">
                            <h6>Book A Table</h6>
                            <form action="#" method="get">
                                <select class="custom-select" id="destinations">
                                    <option selected>Who will be arriving</option>
                                    <option value="1">New York</option>
                                    <option value="2">Latvia</option>
                                    <option value="3">Dhaka</option>
                                    <option value="4">Melbourne</option>
                                    <option value="5">London</option>
                                </select>
                                <select class="custom-select" id="catagories">
                                    <option selected>Guest 1</option>
                                    <option value="1">Guest 2</option>
                                    <option value="3">Guest 3</option>
                                    <option value="3">Guest 4</option>
                                </select>
                                <button type="submit" class="btn dorne-btn"><i class="fa fa-search pr-2"
                                                                               aria-hidden="true"></i> Search
                                </button>
                            </form>
                        </div>
-->
                        <!-- Opening Hours Widget -->
                        <div class="opening-hours-widget mt-50">
                            <h6>Opening Hours</h6>
                            <ul class="opening-hours">
                                <li>
                                    <p>Monday</p>
                                    <p>Closed</p>
                                </li>
                                <li>
                                    <p>Tuesday</p>
                                    <p>9 AM - 1 PM</p>
                                </li>
                                <li>
                                    <p>Wednesday</p>
                                    <p>9 AM - 1 PM</p>
                                </li>
                                <li>
                                    <p>Thursday</p>
                                    <p>9 AM - 1 PM</p>
                                </li>
                                <li>
                                    <p>Friday</p>
                                    <p>9 AM - 1 PM</p>
                                </li>
                                <li>
                                    <p>Saturday</p>
                                    <p>9 AM - 1 PM</p>
                                </li>
                                <li>
                                    <p>Sunday</p>
                                    <p>9 AM - 1 PM</p>
                                </li>
                            </ul>
                        </div>

                        <!-- Author Widget -->
                        <div class="author-widget mt-50 d-flex align-items-center">
                            <img src="{{asset('frontend')}}/img/clients-img/1.jpg" alt="">
                            <div class="authors-name">
                                <a href="#">James Smith</a>
                                <p>The Author</p>
                            </div>
                        </div>

                        <!-- Contact Form -->
                        <div class="contact-form contact-form-widget mt-50">
                            <h6>Contact Business</h6>
                            <form action="#">
                                <div class="row">
                                    <div class="col-12">
                                        <input type="text" name="name" class="form-control" placeholder="Your Name">
                                    </div>
                                    <div class="col-12">
                                        <input type="email" name="email" class="form-control"
                                               placeholder="Email Address">
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
