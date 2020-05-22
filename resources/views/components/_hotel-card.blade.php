<div  class="search-result " style="font-family: 'Oswald', sans-serif; margin-top: .3rem; cursor: pointer;">
    <div class="single-feature-events-area d-sm-flex align-items-center wow fadeInUpBig card-hotel"
         data-wow-delay="0.1s">
        <div class="flex"  style="width: 100%;height: inherit;">
            <div class="row" style="height: inherit;">
                <div class=" feature-events-thumb col-6 ">
                    @component('components._hotel-carousel')
                        @slot('carouselID')
                            {{$carouselID}}
                        @endslot
                        @slot('img1')
                            {{asset('frontend')}}/img/bg-img/event-1.jpg
                        @endslot
                        @slot('img2')
                            {{asset('frontend')}}/img/bg-img/event-2.jpg
                        @endslot
                        @slot('img3')
                             {{asset('frontend')}}/img/bg-img/event-3.jpg
                        @endslot
                    @endcomponent
                </div>
                <div onclick="location.href='hotels/{$hotel}';" class="card-content col-6 ">
                    <h5>{{$hotel_name}}</h5>
                    <h6>{{$hotel_destination}}</h6>
                    <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra...</p>
                </div>
            </div>
            <div class="row">
                <div class="favorite-btn ">
                    <a href="#"><i class="fa fa-heart-o" ></i></a>
                </div>
            </div>
        </div>




    </div>
</div>

