@extends('layouts.master')
@section('content')

<section class="dorne-welcome-area bg-img bg-overlay" style=" background-image: url({{asset('frontend')}}/img/bg-img/hero-1.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center">
            <div class="col-12 col-md-10">
                <div class="hero-content" style="padding-top: 2rem;">
                    <h2>Discover places near you</h2>
                    <h4>This is the best guide of your city</h4>
                </div>
                <!-- Hero Search Form -->
                <div class="hero-search-form">
                    <!-- Tabs -->
                    <div class="nav nav-tabs" id="heroTab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-places-tab" data-toggle="tab" href="#nav-places" role="tab" aria-controls="nav-places" aria-selected="true">Places</a>
                        <a class="nav-item nav-link" id="nav-events-tab" data-toggle="tab" href="#nav-events" role="tab" aria-controls="nav-events" aria-selected="false">Flights</a> -->
                    </div>
                    <!-- Tabs Content -->
                    <div class="tab-content" id="">
                        <div class="tab-pane fade show active" id="nav-places" role="tabpanel" aria-labelledby="nav-places-tab">
                            <h6 >What are you looking for?</h6>

                            <form action="/searchresults" method="get">
                                @csrf
                                <input type="hidden" name="dest_id" id="dest_id" />

                                <div class="flex">
                                    <div class=" ml-0 row">

                                        <input id="search" name="search" type="text" class="col-sm-12 col-lg-3 ml-0 mr-0 custom-input form-control" placeholder="Where to!" style="font-size: inherit" />
                                        <input type="text" name="checkIn"placeholder="Check in" onfocus="(this.type='date')"id="checkIn" class="ah  custom-date col-sm-6 col-lg-1 ml-0 mr-0 " />
                                        <input type="text" name="checkOut"placeholder="Check out" onfocus="(this.type='date')"id="checkOut" class="ah  custom-date col-sm-6 col-lg-1 ml-0 mr-0 " />
                                <select  name="adults" class="ah custom-select col-sm-6 col-lg-1 ml-0 mr-0">
                                    <option selected>adults</option>
                                     @for ($i = 0; $i < 10; $i++)
                                    <option value="{{$i}}">{{$i}}</option>
                                     @endfor
                                </select>
                                <select name="children" class="ah custom-select col-sm-6 col-lg-1 mr-0 ml-0">
                                    <option selected>children</option>
                                    @for ($i = 0; $i < 10; $i++)
                                    <option value="{{$i}}">{{$i}}</option>
                                     @endfor
                                </select>
                                <br class="p-1">
                                <button type="submit" class="btn dorne-btn col-sm-12 col-lg-1 " style="padding-left: 1.5rem;padding-right: 1.5rem;"><i class="fa fa-search pr-2" aria-hidden="true"></i> Search</button>
                            </div>
                            </div>
                            </form>

                        </div>
                        <!--<div class="tab-pane fade" id="nav-events" role="tabpanel" aria-labelledby="nav-events-tab">
                            <h6>What are you looking for?</h6>
                            <form action="#" method="get">
                                <select class="custom-select">
                                    <option selected>Your Destinations</option>
                                    <option value="1">New York</option>
                                    <option value="2">Latvia</option>
                                    <option value="3">Dhaka</option>
                                    <option value="4">Melbourne</option>
                                    <option value="5">London</option>
                                </select>
                                <select class="custom-select">
                                    <option selected>All Catagories</option>
                                    <option value="1">Catagories 1</option>
                                    <option value="2">Catagories 2</option>
                                    <option value="3">Catagories 3</option>
                                </select>
                                <select class="custom-select">
                                    <option selected>Price Range</option>
                                    <option value="1">$100 - $499</option>
                                    <option value="2">$500 - $999</option>
                                    <option value="3">$1000 - $4999</option>
                                </select>
                                <button type="submit" class="btn dorne-btn"><i class="fa fa-search pr-2" aria-hidden="true"></i> Search</button>
                            </form>
                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Social Btn
    <div class="hero-social-btn">
        <div class="social-title d-flex align-items-center">
            <span></span>
        </div>
        <div class="social-btns">
            <a href="#"><i class="fa fa-linkedin" aria-haspopup="true"></i></a>
            <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-twitter" aria-haspopup="true"></i></a>
            <a href="#"><i class="fa fa-facebook" aria-haspopup="true"></i></a>
        </div>
    </div>-->
</section>
<!-- ***** Welcome Area End ***** -->
<!-- ***** About Area Start ***** -->
<section class="dorne-about-area section-padding-0-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="about-content text-center">
                    <h2>Discover your city with <br><span>Hotella.</span></h2>
                    <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce quis tempus elit. Sed efficitur tortor neque, vitae aliquet urna varius sit amet. Ut rhoncus, nunc nec tincidunt volutpat, ex libero.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** About Area End ***** -->
<x-_recommended/>
@endsection

@section('scripts')

<script>
    $(document).ready(function() {
       $( "#search" ).autocomplete({

           source: function(request, response) {
               $.ajax({
               url: "{{url('autocomplete')}}",
               data: {
                       term : request.term
                },
               dataType: "json",
               success: function(data){
                  var resp = $.map(data,function(obj){
                       return {label:obj.name,id:obj.destination_id};
                  });

                  response(resp);
               }
                });
            },
            select: function( event, ui ) {
               console.log(ui.item);
                $( "#dest_id" ).val( ui.item.id );
                $( "#search" ).val( ui.item.label );

                return false;
            },
            minLength: 1
    });
   });
   </script>
   @endsection
