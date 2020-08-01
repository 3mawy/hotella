
<div class='ratings'>
    <div style="margin-bottom: 2px;margin-top: 8px;">
        @for($i=0;$i<5;$i++)
            @if($i<$rate)
                <img src="{{asset('frontend')}}/img/clients-img/star-fill.png" alt="">
            @else
                <img src="{{asset('frontend')}}/img/clients-img/star-unfill.png" alt="">
            @endif
        @endfor
    </div>
    <div>
        <p style="text-align: end;">{{$reviewsCount ?? ''}} Reviews</p>
    </div>
</div>
