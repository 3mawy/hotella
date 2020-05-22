<div id="{{$carouselID}}" class="carousel hotel-carousel slide" data-interval="false" data-ride="{{$carouselID}}">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{$img1}}" class="d-block w-100 carousel-img" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{$img2}}" class="d-block w-100 carousel-img"  alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{$img3}}" class="d-block w-100 carousel-img"  alt="...">
        </div>
    </div>
    <a class="carousel-control-prev" href="#{{$carouselID}}" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#{{$carouselID}}" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
{{--@section('scripts')
    <script>
        let i=0;
        $('#hotel-carousel').each(function(){
            i++;
            let newID='carousel'+i;
            $(this).attr('id',newID);
            $(this).val(i);
        });
    </script>
@endsection--}}
