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
                <div class="col-6">
                    <label class="custom-control custom-checkbox mb-3">
                        <input type="checkbox" class="custom-control-input">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">Accepts Credit Cards</span>
                    </label>
                </div>
                <div class="col-6">
                    <label class="custom-control custom-checkbox mb-3">
                        <input type="checkbox" class="custom-control-input">
                        <span class="custom-control-indicator checked"></span>
                        <span class="custom-control-description">Bike Parking</span>
                    </label>
                </div>
                <div class="col-6">
                    <label class="custom-control custom-checkbox mb-3">
                        <input type="checkbox" class="custom-control-input">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">Wireless Internet</span>
                    </label>
                </div>
                <div class="col-6">
                    <label class="custom-control custom-checkbox mb-3">
                        <input type="checkbox" class="custom-control-input">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">Reservations</span>
                    </label>
                </div>
                <div class="col-6">
                    <label class="custom-control custom-checkbox mb-3">
                        <input type="checkbox" class="custom-control-input">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">Privat Parking</span>
                    </label>
                </div>
                <div class="col-6">
                    <label class="custom-control custom-checkbox mb-3">
                        <input type="checkbox" class="custom-control-input">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">Smoking Area</span>
                    </label>
                </div>
                <div class="col-6">
                    <label class="custom-control custom-checkbox mb-3">
                        <input type="checkbox" class="custom-control-input">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">Wheelchair Accesible</span>
                    </label>
                </div>
                <div class="col-6">
                    <label class="custom-control custom-checkbox mb-3">
                        <input type="checkbox" class="custom-control-input">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description">Coupons</span>
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="roomRate" role="tabpanel" aria-labelledby="roomRate-tab">
        <div class="listing-menu-area mt-50">
            <h4>Rooms</h4>
        @foreach ($rooms as $room)

            <!-- Single Listing Menu -->
            <div class="single-listing-menu d-flex justify-content-between">
                <!-- Listing Menu Title -->
                <div class="listing-menu-title">
                    <h6>{{$room->name}}</h6>
                    <p>{{$room->description}}</p>
                </div>
                <!-- Listing Menu Price -->
                <div class="listing-menu-price">
                    <h6>${{$room->price}}</h6>
                </div>
            </div>
            @endforeach
            <a href="#" class="btn dorne-btn mt-50">+ See The Menu</a>
        </div>
    </div>
    <div class="tab-pane fade" id="map" role="tabpanel" aria-labelledby="map-tab">
        <div class="location-on-map mt-50">
            <h4>Location on map</h4>
            <div class="location-map">
                <div id="locationMap"></div>
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
                            <x-_rating :rate="$review->star_rating"></x-_rating>
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

