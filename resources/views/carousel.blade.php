<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Logo or Brand Slider Using Slider Jquery Plugin</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <style type="text/css">
        *{
            margin:0;
            padding:0;
            box-sizing: border-box;
            outline:none;
        }


        form{
            position: relative;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            transition: all 1s;
            width: 50px;
            height: 50px;
            background: white;
            box-sizing: border-box;
            border-radius: 25px;
            border: 4px solid white;
            padding: 5px;
        }

        input{
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;;
            height: 42.5px;
            line-height: 30px;
            outline: 0;
            border: 0;
            display: none;
            font-size: 1em;
            border-radius: 20px;
            padding: 0 20px;
        }

        .fa{
            box-sizing: border-box;
            padding: 10px;
            width: 42.5px;
            height: 42.5px;
            position: absolute;
            top: 0;
            right: 0;
            border-radius: 50%;
            color: #07051a;
            text-align: center;
            font-size: 1.2em;
            transition: all 1s;
        }

        form:hover{
            width: 200px;
            cursor: pointer;
        }

        form:hover input{
            display: block;
        }

        form:hover .fa{
            background: #07051a;
            color: white;
        }
        body{
            font-family: Roboto, sans-serif;
            background-color: #f7f7f7;
        }
        .item img{
            height:200px;
            width:200px;
        }
        .container{
            max-width:1040px;
            margin: 100px auto;
        }
        h1{
            font-size:30px;
            font-weight:500;
            text-align: center;
            position:relative;
            margin-bottom:60px;
        }
        h1:after{
            content:'';
            position:absolute;
            width:100px;
            height:4px;
            background-color: #ff8159;
            bottom:-20px;
            left:0;
            right:0;
            margin:0 auto;
        }
        .logo-slider .item{
            background-color: #fff;
            box-shadow:0 4px 5px #cacaca;
            border-radius:8px;
            padding:15px;
            border: 2px solid #111;

        }
        .logo-slider .slick-slide{
            margin:15px;
        }
        .slick-dots li.slick-active button:before{
            color:#ff5722;
        }
        .slick-dots li button.before{
            font-size:12px;
        }
        .slick-next:before,
        .slick-prev:before{
            color:#ff8159;
            font-size: 24px;
        }
        .item:hover{
            display:block;
            transition: all ease 0.3s;
            transform:scale(1.1) translateY(-1px);
        }
    </style>
</head>
<body>
    <form action="">
        <input type="search">
        <i class="fa fa-search"></i>
    </form>
    <div class="container">
        <h1>Featured Products</h1>
        <div class="logo-slider">
            <div class="item">
                <a href="#">
                    <img src="{{asset('images/lays.PNG')}}" alt="">
                </a>
            </div>
            <div class="item">
                <a href="#">
                    <img src="{{asset('images/mars.PNG')}}" alt="">
                </a>
            </div>
            <div class="item">
                <a href="#">
                    <img src="{{asset('images/rice.PNG')}}" alt="">
                </a>
            </div>
            <div class="item">
                <a href="#">
                    <img src="{{asset('images/ruslan.PNG')}}" alt="">
                </a>
            </div>
            <div class="item">
                <a href="#">
                    <img src="{{asset('images/sugar.PNG')}}" alt="">
                </a>
            </div>
            <div class="item">
                <a href="#">
                    <img src="{{asset('images/tuborg.PNG')}}" alt="">
                </a>
            </div>
        </div>
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script>
        $('.logo-slider').slick({
            slidesToShow:4,
            slidesToScroll:1,
            dots:true,
            arrows:true,
            autoplay:true,
            autoplaySpeed:2000,
            infinite: true
        });
    </script>
</body>
</html>
