@extends('layouts.app')


<html>
<head>
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <title> SUITESCAPE</title>
    <link rel="stylesheet" href="{{url('css/sshp.css')}}">
    <script src="https://kit.fontawesome.com/c7d32d1f31.js" crossorigin="anonymous"></script>
 
</head>
<body>
@section('content')
<div class="header">
 
        <div class="container">
            <h1>Find your Stay here in Suitescape</h1>
            <div class="searchbar">
                <form action="#">
                    <div class="search-location">
                        <label>Location</label>
                        <input type="text" placeholder="Where are you going?">
                    </div>
                    <div>
                        <label>Check In</label>
                        <input type="text" placeholder="Choose Date?">
                    </div>
                    <div>
                        <label>Check Out</label>
                        <input type="text" placeholder="Choose Date?">
                    </div>
                    <div>
                        <label>Guest</label>
                        <input type="text" placeholder="Guest?">
                    </div>
                    <div>
                        <button type="submit"><img src="images/search.png"></button>
                    </div>
                </form>

            </div>
        </div>
    </div>




    <div class="container">
        <h2 class="title-sub">Exclusives</h2>
            <div class="exclusive">
                <div>
                    <img src="images/image-1.png">
                    <span>
                        <h4>Tarlac</h4>
                        <p>Price = P1000</p>
                    </span>
                </div>
                <div>
                    <img src="images/image-2.png">
                    <span>
                        <h4>Tarlac</h4>
                        <p>Price = P1000</p>
                    </span>
                </div>
                <div>
                    <img src="images/image-3.png">
                    <span>
                        <h4>Tarlac</h4>
                        <p>Price = P1000</p>
                    </span>
                </div>
                <div>
                    <img src="images/image-4.png">
                    <span>
                        <h4>Tarlac</h4>
                        <p>Price = P1000</p>
                    </span>
                </div>
                <div>
                    <img src="images/image-5.png">
                    <span>
                        <h4>Tarlac</h4>
                        <p>Price = P1000</p>
                    </span>
                </div>
                <div>
                    <img src="images/image-6.png">
                    <span>
                        <h4>Tarlac</h4>
                        <p>Price = P1000</p>
                    </span>
                </div>
                <div>
                    <img src="images/image-7.png">
                    <span>
                        <h4>Tarlac</h4>
                        <p>Price = P1000</p>
                    </span>
                </div>
                <div>
                    <img src="images/image-8.png">
                    <span>
                        <h4>Tarlac</h4>
                        <p>Price = P1000</p>
                    </span>
                </div>
                <div>
                    <img src="images/image-9.png">
                    <span>
                        <h4>Tarlac</h4>
                        <p>Price = P1000</p>
                    </span>
                </div>
                <div>
                    <img src="images/image-10.png">
                    <span>
                        <h4>Tarlac</h4>
                        <p>Price = P1000</p>
                    </span>
                </div>
         </div>
         <h2 class="title-sub">Popular Places</h2>
         <div class="popular">
             <div>
                <img src="images/dubai.png">
                <h3>Dubai</h3>
             </div>
             <div>
                <img src="images/new-york.png">
                <h3>New York</h3>
             </div>
             <div>
                <img src="images/paris.png">
                <h3>Paris</h3>
             </div>
             <div>
                <img src="images/new-delhi.png">
                <h3>New Delhi</h3>
             </div>
         </div>
         <div class="tagl">
             <h3>Make Earnings<br> by Sharing Now</h3>
             <p>Opportunity to have extra place<br> is Opportunity to make money</p>
             <a href="#" class="tagl-btn">Learn More</a>
         </div>
         <a href="#" class="start-now-btn">Start Now</a>
        <div class="about-msg">
            <h2>About Suitescape</h2>
            <p>Suicescape SuitescapeSuicescape SuitescapeSuicescape SuitescapeSuicescape SuitescapeSuicescape SuitescapeSuicescape SuitescapeSuicescape SuitescapeSuicescape SuitescapeSuicescape SuitescapeSuicescape SuitescapeSuicescape SuitescapeSuicescape SuitescapeSuicescape SuitescapeSuicescape SuitescapeSuicescape SuitescapeSuicescape</p>
        </div>
        <div class="footer">
            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#"><i class="fa-brands fa-youtube"></i></a>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
            <a href="#"><i class="fa-brands fa-twitter"></i></a>
            <hr>
            <p>Copyright 2022, Suitescape.inc</p>
        </div>

    </div>

</body>
</html>
@endsection
