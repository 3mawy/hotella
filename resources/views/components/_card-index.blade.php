{{--@foreach ($hotels as $hotel)--}}
<h3 class="pt-2 bb-1 " style="margin-left: -.1rem;">destination</h3>
@for ($i = 0; $i < 10; $i++)
    {{--<x-_hotel-card/>--}}
    @component('components._hotel-card')
        @slot('carouselID')
            carouselID-{{$i}}
        @endslot
        @slot('hotel_name')
            Grand Hotel
        @endslot
        @slot('hotel_destination')
            Manhattan
        @endslot
    @endcomponent
@endfor
{{--@endforeach--}}
