
<h3 class="pt-2 bb-1 " style="margin-left: -.1rem;">{{$destination}}</h3>
@foreach ($hotels as $hotel)
<x-_hotel-card :hotel="$hotel"/>

@endforeach
