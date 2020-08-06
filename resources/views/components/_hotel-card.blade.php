
<div  class="search-result " style="font-family: 'Oswald', sans-serif; margin-top: .3rem; cursor: pointer;">
    <div class="single-feature-events-area d-sm-flex align-items-center wow fadeInUpBig card-hotel"
         data-wow-delay="0.01s">
        <div class="flex"  style="width: 100%;height: inherit;">
            <div class="row" style="height: inherit;">
                <div class=" feature-events-thumb col-6 ">
                        <x-_hotel-carousel :carouselID="$hotel->id" :img1="$hotel->thumbnail_url1" :img2="$hotel->thumbnail_url2" :img3="$hotel->thumbnail_url3"></x-_hotel-carousel>
                </div>
                <div onclick="location.href='{{ route('hotel.show', $hotel->id) }}';" class="card-content col-6 ">
                    <h5>{{$hotel->name}}</h5>
                    <h6>{{$hotel->price}}</h6>

                    <p>{{$hotel->motto}}</p>
                </div>
            </div>
            <div class="ratingsfix">
                <x-_rating :rate="$hotel->star_rating" :reviewsCount="$hotel->reviews_count" />
            </div>
            {{--<div class="row">
                <div class="favorite-btn ">
                    <a href="#"><i class="fa fa-heart-o" ></i></a>
                </div>
            </div>--}}

        </div>




    </div>
</div>
