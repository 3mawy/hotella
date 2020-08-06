<nav class="single-listing-nav">
<ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" id="overview-tab" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Overview</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="roomRate-tab" data-toggle="tab" href="#roomRate" role="tab" aria-controls="roomRate" aria-selected="false">Room Rate</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="map-tab" data-toggle="tab" href="#map" role="tab" aria-controls="map" aria-selected="false">Map</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="reviews-tab" data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Reviews</a>
    </li>
</ul>
</nav>
<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
        <div class="overview-content mt-50">
            <p>{{$hotel->overview}}</p>
            <div class="row mt-5">
                @foreach ($hotel->utilities as $utility)
                <div class="col-6">
                    <label class="custom-control custom-checkbox mb-3">
                        <i class="{{$utility->icon}} pr-2"></i>
                        <span class="custom-control-description ">{{$utility->name}}</span>
                    </label>
                </div>
                @endforeach

            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="roomRate" role="tabpanel" aria-labelledby="roomRate-tab">
        <div class="listing-menu-area mt-50">
            <h4 style="margin-bottom: 25px;">Rooms</h4>
            @foreach ($rooms as $room)
                <div class="row single-listing-menu ">
                    <div class="col-sm-4 col-12">
                        <img style="height: 130px; object-fit: cover" src="{{$room->img}}" alt="room img">
                    </div>
                    <div class="col-sm-5 pt-3 col-12">
                        <div class="listing-menu-title">
                            <h6>{{$room->name}}</h6>
                            <p class="pt-1">{{$room->description}}</p>
                        </div>
                        <div class="listing-menu-price pt-3">
                            <h6>${{$room->price}}</h6>
                        </div>
                    </div>
                    <div class="col-sm-2 col-12">
                        <a  class="btn dorne-btn mt-30" data-toggle="modal" data-target="#bookRoom">Book Now!</a>
                    </div>
                </div>
            @endforeach
            <x-_book-modal></x-_book-modal>

        </div>
    </div>
    <div class="tab-pane fade" id="map" role="tabpanel" aria-labelledby="map-tab">
        <div class="location-on-map mt-50">
            <h4>Location on map</h4>
            <div class="location-map">
                <div id="map"></div>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
        <div class="listing-reviews-area mt-50" role="tabpanel" aria-labelledby="reviews-tab"
             id="review">
            <h4>reviews</h4>

            @foreach ($reviews as $review)
                <div class="single-review-area">
                <div class="reviewer-meta d-flex align-items-center">
                    <img src="{{$review->user->avatar}}" alt="">
                    <div class="reviewer-content">
                        <div class="review-title-ratings d-flex justify-content-between">
                            <h4 class="mb-2">{{$review->header}}</h4>
                            <x-_rating style="padding-top: 220px" :rate="$review->star_rating"></x-_rating>
                        </div>
                        <p>{{$review->review}}</p>
                    </div>
                </div>
                <div class="reviewer-name">
                    <h6>{{$review->user->name}}</h6>
                    <p>{{$review->created_at}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@section('scripts')
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCF2ef9NUXeaomH9IKtR1rcYQiquZ8GOwM&callback=initMap&libraries=&v=weekly"
        defer
    ></script>

    <script>
    "use strict";

    function initMap() {
        const myLatLng = {
            lat: -25.363,
            lng: 131.044
        };
        const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 4,
            center: myLatLng
        });
        new google.maps.Marker({
            position: myLatLng,
            map,
            title: "Hello World!"
        });
    }
</script>
@endsection
