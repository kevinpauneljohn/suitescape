<html>
<head>
    <link rel="stylesheet" href="{{ asset( 'style.css')}}">
    <script src="{{ asset( 'js.js')}}"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://maps.googleapis.com/maps/api/js"></script>
</head>
<body>
    <!-- display:none din to --show all reviews  //it will show up once you click the link reviews-->
    <div class="showReview-box"id="showReview-box">

    <div class="searchReview">
        <b>Reviews</b>
        <span class="closebutton-reviews"onclick="showallReviews()">&times;</span>
        <br>
    <input type="text"id="searchboxReview"class="searchboxReview"placeholder="Search Review">
    <button onclick="sortreview()"class="sortreview-button"><i class="fa fa-search"></i></button>
    </div>
    <div class="allReviews">

    <div class="allreviews-each">
        <div class="review-container">
        <div class="each-imagebox">
        <img src="hotelImage1.jpg">
        <p><b>Lester</b></p>
        <p>Date</p>
        </div>
        <div class="comment">
        <p>And daming ipis boss And daming ipis boss And daming ipis boss And daming ipis boss And daming ipis boss
        And daming ipis boss And daming ipis boss And daming ipis boss And daming ipis boss And daming ipis boss</p>
        </div>
        </div>
        </div>

        <div class="allreviews-each">
        <div class="review-container">
        <div class="each-imagebox">
        <img src="hotelImage1.jpg">
        <p><b>Lester</b></p>
        <p>Date</p>
        </div>
        <div class="comment">
        <p>And daming ipis boss And daming ipis boss And daming ipis boss And daming ipis boss And daming ipis boss
        And daming ipis boss And daming ipis boss And daming ipis boss And daming ipis boss And daming ipis boss</p>
        </div>
        </div>
        </div>

        <div class="allreviews-each">
        <div class="review-container">
        <div class="each-imagebox">
        <img src="hotelImage1.jpg">
        <p><b>Lester</b></p>
        <p>Date</p>
        </div>
        <div class="comment">
        <p>And daming ipis boss And daming ipis boss And daming ipis boss And daming ipis boss And daming ipis boss
        And daming ipis boss And daming ipis boss And daming ipis boss And daming ipis boss And daming ipis boss</p>
        </div>
        </div>
        </div>

        <div class="allreviews-each">
        <div class="review-container">
        <div class="each-imagebox">
        <img src="hotelImage1.jpg">
        <p><b>Lester</b></p>
        <p>Date</p>
        </div>
        <div class="comment">
        <p>And daming ipis boss And daming ipis boss And daming ipis boss And daming ipis boss And daming ipis boss
        And daming ipis boss And daming ipis boss And daming ipis boss And daming ipis boss And daming ipis boss</p>
        </div>
        </div>
        </div>

        <div class="allreviews-each">
        <div class="review-container">
        <div class="each-imagebox">
        <img src="hotelImage1.jpg">
        <p><b>Lester</b></p>
        <p>Date</p>
        </div>
        <div class="comment">
        <p>And daming ipis boss And daming ipis boss And daming ipis boss And daming ipis boss And daming ipis boss
        And daming ipis boss And daming ipis boss And daming ipis boss And daming ipis boss And daming ipis boss</p>
        </div>
        </div>
        </div>







    </div>

    </div>


    <!-- display:none din to --show all ameneties  //it will show up once you click the link ameneties-->
    <div class="showAmeneties-box"id="showAmeneties-box">
    <header class="amenetiestitle-box"><span class="closebutton"onclick="showAmeneties()">&times;</span><b>Ameneties</b></header>
    <div class="showameneties-item-box">
        <p><b>What is this place can offer?</b></p>
        <ul>
            <li>Nothing</li>
            <li>Nothing</li>
            <li>Nothing</li>
            <li>Nothing</li>
        </ul>
        <p><b>What is this place can offer?</b></p>
        <ul>
            <li>Nothing</li>
            <li>Nothing</li>
            <li>Nothing</li>
            <li>Nothing</li>
        </ul>
        <p><b>What is this place can offer?</b></p>
        <ul>
            <li>Nothing</li>
            <li>Nothing</li>
            <li>Nothing</li>
            <li>Nothing</li>
        </ul>
        <p><b>What is this place can offer?</b></p>
        <ul>
            <li>Nothing</li>
            <li>Nothing</li>
            <li>Nothing</li>
            <li>Nothing</li>
        </ul>
        <p><b>What is this place can offer?</b></p>
        <ul>
            <li>Nothing</li>
            <li>Nothing</li>
            <li>Nothing</li>
            <li>Nothing</li>
        </ul>


    </div>
    </div>





    <!-- display:none din to --imagecell  //it will show up once you click an image-->
    <div class="imagecell-whole"id="imagecell-whole">
    <span class="closebutton"onclick="closeshowimagecell()">&times;</span>
        <div class="imagecell-each">
        <img src="images/{{$staycation->mainImg}}">
        <img src="hotelImage1.jpg">
        <img src="hotelImage2.jpg">
        <img src="hotelImage2.jpg">
        <img src="hotelImage3.jpg">
        <img src="hotelImage3.jpg">
        <img src="hotelImage3.jpg">
        <img src="hotelImage3.jpg">
        <img src="hotelImage3.jpg">
        <img src="hotelImage3.jpg">
        </div>
    </div>






    <!-- display:none to //this is for the mobile size //it will show up once you click the reserve button-->

    <div class="showPayment" id="showpaymentbox">
    <div class="showpayment-content">
    <button type="button"onclick="closeshowpaymentBox()"class="showpayment-closebutton">Close</button>
    <table class="in-out-table">
    <tr>
        <td>Check In<input type="date"name="checkIn"></td>
        <td>Check Out<Input type="date"name="checkOut"></td>
    </tr>
    <tr>
    <td colspan=2 onclick="showGuestmobile()"style="cursor:pointer;"><p><b>Guest</b></p>
        <b id="inputguestmobile"value="1">1 guest</b>
        <b id="inputchildrenmobile" value="0"></b>
        <b id="inputinfantmobile" value="0"></b>
    </tr>

    </table>
    <div class="addguestmobile" id="addguestmobile">
        <table>
            <tr>
                <td><b>Guest</b><p>Age 13+</p></td>
                <td><input type="button"value="-"class="qtybutton"onclick="guestQuantity('minus')">
                    <label id="guestQtymobile"value="1">1</label>
                <input type="button"value="+"class="qtybutton"onclick="guestQuantity('add',)"></td>
            </tr>
            <tr>
                <td><b>Children</b><p>Ages 2-12</p></td>
                <td><input type="button"value="-"class="qtybutton"onclick="childrenQuantity('minus')">
                    <label id="childrenQtymobile"value="0">0</label>
                    <input type="button"value="+"class="qtybutton"onclick="childrenQuantity('add')"></td>
            </tr>
            <tr>
                <td><b>Infants</b><p>Under 2</p></td>
                <td><input type="button"value="-"class="qtybutton"onclick="infantQuantity('minus')">
                    <label id="infantQtymobile"value="0">0</label>
                    <input type="button"value="+"class="qtybutton"onclick="infantQuantity('add')"></td>
            </tr>

        </table>
        <p>This place has a maximum of # guest.</p>
        <input type="button" onclick="closeaddguest('guestboxmobile')"value="Close"class="addguest-closebutton">
        </div>
    <table class="showpayment-resPrice">
        <tr>
        <td>PHP 1,000 x 20 nights</td>
        <td>PHP 20,000</td>
        </tr>
        <tr>
        <td>Weekly Discount</td>
        <td>-discount</td>
        </tr>
        <tr>
        <td>Cleaning Fee</td>
        <td>PHP 300</td>
        </tr>
        <tr>
        <td>Service Fee</td>
        <td>PHP 300</td>
        </tr>
        <tr style="border-top:1px solid grey;">
        <td><b>Total</b></td>
        <td><b>totalPrice</b></td>
        </tr>
        </table>


    </div>
    <button type="button"class="showpayment-reserveButton">Reserve</button>
    </div>









    <!-- body starts here -->

    <!-- detailsContent is the wrapper of this webpage -->
    <div class="detailsContent">
        <!-- image center box/ include the 5 front hotel image-->
        <div class="imageCenter">
        <p>{{ $staycation->name }}</p>
        <p><span class="glyphicon">&#xe007; Review | Location</span></p>
        <img src="{{ asset('images/'. $staycation->mainImg)}}"width="200"class="imageHead"onclick="showImageCell()">
        <img src="{{ asset('images/'. $staycation->subImg1)}}"width="200"class="imageChild1"onclick="showImageCell()">
        <img src="{{ asset('images/'. $staycation->subImg2)}}"width="200"class="imageChild2"onclick="showImageCell()">
        <img src="{{ asset('images/'. $staycation->subImg2)}}"width="200"class="imageChild3"onclick="showImageCell()">
        <img src="{{ asset('images/'. $staycation->subImg2)}}"width="200"class="imageChild4"onclick="showImageCell()">
        </div>
<!-- all info box / from info1 to 5 wrapper -->
        <div class="allinfoBox">
        <div class="hotelInfo1">
        <img src="hotelImage1.jpg" class="profLogo"width="300">
        <p><b>{{ $staycation->privacyType }} Hosted by {{$user->fname}}</b></p>
        <span>{{ $staycation->numberGuest }} Guest | {{ $staycation->typeofPlace }} | {{ $staycation->numberBed }} Bed | {{ $staycation->numberBathrooms }} Bath</span>


        <input type="hidden" id="numGuest"class="numGuest"value="{{$staycation->numberGuest}}">
        <input type="hidden" id="totalGuest"class="totalGuest"value="0">
        </div>
        <div class="hotelInfo2">
        <p><i class="fa fa-wifi"></i> Fast Wifi</p>
        <p class="hotelInfo2-details">At 93 Mbps, you can take video calls and stream videos for your whole group.</p>
        <p><i class='fa fa-bed'></i> Self Check in</p>
        <p class="hotelInfo2-details">You can check in with the doorman.</p>
        <p><i class="fa fa-book"></i> Free Cancellation for 48 Hours</p>
        <p class="hotelInfo2-details">Guests often search for this popular amenity</p>
        </div>
        <div class="hotelInfo3">
        <p>Close to the great bar district. A private unit within my apartment building for to enjoy. Walking distance (5 minutes) to Fields, supermarkets, shops and the best nightlife in Asia.</p>

        <p>I have multiple units and a hotel, so bring your friends</p>
        </div>
        <div class="hotelInfo4">
            <p><b>What this place offers</b></p>
            <div class="offerLeft">
            @php $amenitieses = $staycation->amenities ? json_decode($staycation->amenities, true) : []; @endphp
                    @foreach($amenitieses as $amenities)
                    <p>{{$amenities}}</p>
                    @endforeach
            </div>
            <div class="offerRight">
            <p><i class="fa fa-car"></i> Free parking</p>
            <p><i class="fa fa-tv"></i> TV</li></p>
            <p>Kitchen</p>
            <p>Air Condition</p>
            <p>Crib</p>
            <button type="button"class="showallamenetiesStyle"onclick="showAmeneties()">Show all ameneties</button>
        </div>

        </div>

        <div class="clearfix"></div>


        <div class="hotelInfo5">
        <p><b># Night in Location</b></p>
        <p>Check In Date - Check Out Date</p>
        <table class="checkDate">
        <tr>
            <td><p>Check In</p><input type="date"name="checkIn"></td>
            <td><p>Check Out</p><input type="date"name="checkOut"></td>
        </tr>
        </table>
        </div>

        <div class="clearfix"></div>

        </div>

<!-- reserve box sa right side -->
        <div class="reserveBox">
        <p><b>PHP PRICE</b> /night</p>
        <table class="checkDate">
        <tr>
            <td><p>Check In</p><input type="date"name="checkIn"></td>
            <td><p>Check Out</p><input type="date"name="checkOut"></td>
        </tr>
        <tr>
            <td colspan=2 onclick="showGuest()"style="cursor:pointer;"><p><b>Guest</b></p>
            <b id="inputguest"value=0></b>
            <b id="inputchildren" value=0></b>
            <b id="inputinfant" value=0></b>

        </td>
        </tr>
        </table>
        <!-- add guest -display:none -->
        <div class="addguest" id="addguest">
        <table>
            <tr>
                <td><b>Guest</b><p>Age 13+</p></td>
                <td><input type="button"value="-"class="qtybutton"onclick="guestQuantity('minus')">
                    <label id="guestQty"value="0">0</label>
                <input type="button"value="+"class="qtybutton"onclick="guestQuantity('add')"></td>
            </tr>
            <tr>
                <td><b>Children</b><p>Ages 2-12</p></td>
                <td><input type="button"value="-"class="qtybutton"onclick="childrenQuantity('minus')">
                    <label id="childrenQty"value="0">0</label>
                    <input type="button"value="+"class="qtybutton"onclick="childrenQuantity('add')"></td>
            </tr>
            <tr>
                <td><b>Infants</b><p>Under 2</p></td>
                <td><input type="button"value="-"class="qtybutton"onclick="infantQuantity('minus')">
                    <label id="infantQty"value="0">0</label>
                    <input type="button"value="+"class="qtybutton"onclick="infantQuantity('add')"></td>
            </tr>

        </table>
        <p>This place has a maximum of # guest.</p>
        <input type="button" onclick="closeaddguest('guestbox')"value="Close"class="addguest-closebutton">
        </div>



        <button type="submit"class="buttonReserve">Reserve</button>
        <p style="text-align:center;padding:5px;">You won't be charged yet</p>

        <table class="resPrice">
        <input type="hidden" name="price" id="price" value="{{$staycation->price}}">
        <tr>
        <td>Price </td>

        <td id="inputguestss" value="1">PHP {{number_format($staycation->price)}}</td>
        </tr>
        <tr>
        <td>Weekly Discount</td>
        <td>-discount</td>
        </tr>
        <tr>
        <td>Cleaning Fee</td>
        <td>PHP 0</td>
        </tr>
        <tr>
        <td>Service Fee</td>
        <td>PHP 0</td>
        </tr>
        <tr style="border-top:1px solid grey;">
        <td><b>Total</b></td>
        <td><b id="inputguestsss" value="1">PHP {{number_format($staycation->price)}}</b></td>
        </tr>
        </table>
        </div>



        <!-- review section -->
        <div class="reviewSection">
        <div>
        <span class="glyphicon">&#xe007;<b>4.65 | 43 Reviews</b></span>
        </div>
        <div class="profilecommentBox">
        <div class="profile">
        <img src="hotelImage1.jpg">
        <p><b>Lester</b></p>
        <p>Date</p>
        </div>
        <div class="comment">
        And daming ipis boss And daming ipis boss And daming ipis boss And daming ipis boss And daming ipis boss
        And daming ipis boss And daming ipis boss And daming ipis boss And daming ipis boss And daming ipis boss
        </div>
        </div>

        <div class="profilecommentBox">
        <div class="profile">
        <img src="hotelImage1.jpg">
        <p><b>Lester</b></p>
        <p>Date</p>
        </div>
        <div class="comment">
        And daming ipis boss
        </div>
        </div>

        <div class="profilecommentBox">
        <div class="profile">
        <img src="hotelImage1.jpg">
        <p><b>Lester</b></p>
        <p>Date</p>
        </div>
        <div class="comment">
        And daming ipis boss
        </div>
        </div>

        <div class="profilecommentBox">
        <div class="profile">
        <img src="hotelImage1.jpg">
        <p><b>Lester</b></p>
        <p>Date</p>
        </div>
        <div class="comment">
        And daming ipis boss
        </div>
        </div>
        <button type="button"class="buttonreviewStyle"onclick="showallReviews()">Show all reviews</button>


        </div>
<!-- google map -->
        <div class="gmap">
        <p><b>Where you will be</b></p>
        <div id="map" style="width:100%;height:400px"></div>
        <p><b>Mabalacat City, Pampanga</b></p>
        <p>Its safe and closeby. Everything you need, 24 hours service and a gated building!</p>
        </div>

<!-- hostprofile-->
        <div class="hostProfile">
        <div class="profile">
        <img src="hotelImage1.jpg">
        <p class="hostName">Hosted by Lester</p>
        <p>Joined in April 2022</p>
        </div>
        <div class="clearfix"></div>
        <div class="hostInfo1">
        <p><span class="glyphicon">&#xe007; 400 Reviews</span></p>
        <p><b>mywebsite.com</b></p>
        <p><b>Identity Verified</b></p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos aspernatur, quis quos doloremque autem, ex iure quasi odit tempora consectetur necessitatibus aliquam eligendi facere corrupti et? Recusandae, omnis placeat. Sunt!</p>
        <p><b>During your stay</b></p>
        <p>That is up to the guest</p>
        </div>
        <div class="hostInfo1">
        <p><b>Languages:</b> Filipino, English, Tagalog, Kapampangan</p>
        <p><b>Response rate:</b> 95%</p>
        <p><b>Response time:</b> within an hour</p>
        <button type="button"class="contacthostButton">Contact Host</button>
        </div>
        <div class="clearfix"></div>
        </div>

        <!-- things to know -->
        <div class="thingstoKnow">
        <h3>Things to know</h3>
        <div class="col-Know">
        <p><b>House rules</b></p>
        <ul>
            <li>Check-in: After 12:00 PM</li>
            <li>Checkout: 11:00 AM</li>
            <li>Self check-in with building staff</li>
            <li>No parties or events</li>
            <li>Pets are allowed</li>
            <li>Smoking is allowed</li>
        </ul>
        </div>

        <div class="col-Know">
        <p><b>Health and safety</b></p>
        <ul>
            <li>Committed to Airbnb's enhanced cleaning process. Show more</li>
            <li>Airbnb's social-distancing and other COVID-19-related guidelines apply</li>
            <li>Carbon monoxide alarm</li>
            <li>Smoke alarm</li>
        </ul>
        </div>

        <div class="col-Know">
        <p><b>Cancellation policy</b></p>
        <p>This reservation is non-refundable because the check-in date has passed.</p>
        </div>

        </div>






</div>
<div class="clearfix"></div>

        <!-- footer of this webpage -->
        <div class="footer1">
        <div class="cityOption">
        <h3>Explore other options in and around Mabalacat City</h3>

        <div class="col-cityOption">
        <p>Tarlac City</p>
        </div>
        <div class="col-cityOption">
        <p>Tarlac City</p>
        </div>
        <div class="col-cityOption">
        <p>Tarlac City</p>
        </div>
        <div class="col-cityOption">
        <p>Tarlac City</p>
        </div>
        <div class="col-cityOption">
        <p>Tarlac City</p>
        </div>
        <div class="col-cityOption">
        <p>Tarlac City</p>
        </div>
        <div class="col-cityOption">
        <p>Tarlac City</p>
        </div>
        <div class="col-cityOption">
        <p>Tarlac City</p>
        </div>
        <div class="col-cityOption">
        <p>Tarlac City</p>
        </div>
        <div class="col-cityOption">
        <p>Tarlac City</p>
        </div>
        <div class="col-cityOption">
        <p>Tarlac City</p>
        </div>
        <div class="col-cityOption">
        <p>Tarlac City</p>
        </div>
        <a href="#">Airdreamhome</a><span> > </span><a href="#">Philippines</a><span> > </span><a href="#">Pampanga</a>
        </div>


        </div>
        <div class="clearfix"></div>

        <!-- footer 2 -->
        <div class="footer2">
        <div class="footer2-info">

        <div class="col-footer2">
        <p><b>Support</b><p>
        <a>Help Center</a>
        <a>Safety information</a>
        <a>Cancellation options</a>
        <a>Our COVID-19 Response</a>
        <a>Supporting people with disabilities</a>
        <a>Report a neighborhood concern</a>
        </div>

        <div class="col-footer2">
        <p><b>Community</b><p>
        <a>Help Center</a>
        <a>Safety information</a>
        <a>Cancellation options</a>
        <a>Our COVID-19 Response</a>
        <a>Supporting people with disabilities</a>
        <a>Report a neighborhood concern</a>
        </div>
        <div class="col-footer2">
        <p><b>Hosting</b><p>
        <a>Help Center</a>
        <a>Safety information</a>
        <a>Cancellation options</a>
        <a>Our COVID-19 Response</a>
        <a>Supporting people with disabilities</a>
        <a>Report a neighborhood concern</a>
        </div>
        <div class="col-footer2">
        <p><b>About Us</b><p>
        <a>Help Center</a>
        <a>Safety information</a>
        <a>Cancellation options</a>
        <a>Our COVID-19 Response</a>
        <a>Supporting people with disabilities</a>
        <a>Report a neighborhood concern</a>
        </div>

        </div>
        </div>

        <div class="footer3">

        <div class="footer-dreamhome">

        <div class="footer3-left">

        <ul>
            <li><b>2022 Airdreamhome, Inc</li>
            <li><a href="">Privacy</a></li>
            <li><a href="">Terms</a></li>
            <li><a href="">Sitemap</a></li>
        </ul>
        </div>
        <div class="footer3-right">

        <ul>
            <li><a href="">English(US)</a></li>
            <li><a href="">PHP </a></li>
            <li><a href="">Facebook Page</a></li>
        </ul>
        </div>

        </div>

        </div>



        <div class="reservebutton-hidden">

            <button type="button"onclick="showPayment()">Reserve</button>
            <p>PHP 900 / night</p>
            <p>Check In Date - Check Out Date</p>
        </div>







<div class="disableBody" id="disableBody">
</div><!--- end of disableBody class -->
<script>
    var mapCanvas = document.getElementById("map");
    var mapOptions = {
    center: new google.maps.LatLng(15.2229, 120.5744), zoom: 12
    }
    var map = new google.maps.Map(mapCanvas, mapOptions);


</script>


</body>
</html>
