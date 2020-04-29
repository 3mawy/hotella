@extends('layouts.master')
@section('content')

<section class="dorne-welcome-area bg-img bg-overlay" style="background-image: url({{asset('frontend')}}/img/bg-img/hero-1.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center">
            <div class="col-12 col-md-10">
                <div class="hero-content">
                    <h2>Discover places near you</h2>
                    <h4>This is the best guide of your city</h4>
                </div>
                <!-- Hero Search Form -->
                <div class="hero-search-form">
                    <!-- Tabs -->
                    <div class="nav nav-tabs" id="heroTab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-places-tab" data-toggle="tab" href="#nav-places" role="tab" aria-controls="nav-places" aria-selected="true">Places</a>
                        <!--<a class="nav-item nav-link" id="nav-events-tab" data-toggle="tab" href="#nav-events" role="tab" aria-controls="nav-events" aria-selected="false">Events</a> -->
                    </div>
                    <!-- Tabs Content -->
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-places" role="tabpanel" aria-labelledby="nav-places-tab">
                            <h6>What are you looking for?</h6>

                            <form action="#" method="get">
                                <div class="flex">
                                    <div class="row">

                                        <input id="search" name="search" type="text" class="col-sm-12 col-lg-3 ml-0 mr-0 custom-input form-control" placeholder="Destination" />

                                <select class="ah custom-select col-sm-6 col-lg-1 ml-0 mr-0">
                                    <option selected>Check-in</option>
                                    <option value="1">Catagories 1</option>
                                    <option value="2">Catagories 2</option>
                                    <option value="3">Catagories 3</option>
                                </select>
                                <select class="ah custom-select col-sm-6 col-lg-1 ml-0 mr-0">
                                    <option selected>Check-out</option>
                                    <option value="1">Catagories 1</option>
                                    <option value="2">Catagories 2</option>
                                    <option value="3">Catagories 3</option>
                                </select>
                                <select class="ah custom-select col-sm-6 col-lg-1 ml-0 mr-0">
                                    <option selected>adults</option>
                                     @for ($i = 0; $i < 10; $i++)
                                    <option value="{{$i}}">{{$i}}</option>
                                     @endfor
                                </select>
                                <select class="ah custom-select col-sm-6 col-lg-1 mr-0 ml-0">
                                    <option selected>children</option>
                                    @for ($i = 0; $i < 10; $i++)
                                    <option value="{{$i}}">{{$i}}</option>
                                     @endfor
                                </select>
                                <br class="p-1">
                                <button type="submit" class="btn dorne-btn col-sm-12 col-lg-1 "><i class="fa fa-search pr-2" aria-hidden="true"></i> Search</button>
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
    <!-- Hero Social Btn -->
    <div class="hero-social-btn">
        <div class="social-title d-flex align-items-center">
            <h6>Follow us on Social Media</h6>
            <span></span>
        </div>
        <div class="social-btns">
            <a href="#"><i class="fa fa-linkedin" aria-haspopup="true"></i></a>
            <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-twitter" aria-haspopup="true"></i></a>
            <a href="#"><i class="fa fa-facebook" aria-haspopup="true"></i></a>
        </div>
    </div>
</section>
<!-- ***** Welcome Area End ***** -->
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
                       //console.log(obj.city_name);
                       return obj.name;
                  });

                  response(resp);
               }
           });
       },
       minLength: 1,

    });
   });

   </script>

@endsection
