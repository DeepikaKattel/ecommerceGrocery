<!DOCTYPE html>
<html lang="en">
<head>
    <link href="{{asset('css/carousel.css')}}" rel="stylesheet">
</head>
<body>
<div class="slider">
    <div class="slide-track">
        @foreach ($featured as $f)
        <div class="slide">
            <img alt="" src="assets/images/blank.gif" data-echo="/storage/images/products/{{$f->image}}" height="20px" width="20px"/>
            <p>Price 205</p>
        </div>
        @endforeach

    </div>
</div>
</body>
</html>
