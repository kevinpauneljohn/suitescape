<html>
    <head>
    <link rel="stylesheet" href="style.css">
    <script src="js.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </head>
    <body>
    <div class="divFilter" id="divFilter">
    <button type="button" onclick="closefilterBox()">Close</button>
    <label class="filter">Wifi<input type="checkbox"name="wifi"></label>
    <label class="filter">Kitchen<input type="checkbox"name="kitchen"></label>
    <label class="filter">Air Conditioning<input type="checkbox"name="aircondition"></label>
    <label class="filter">Washer<input type="checkbox"name="washer"></label>
    <label class="filter">Iron<input type="checkbox"name="iron"></label>
    <label class="filter">Free Parking<input type="checkbox"name="freeparking"></label>
    <label class="filter">Dedicated Workspace<input type="checkbox"name="dedicatedworkspace"></label>
    <label class="filter">Dryer<input type="checkbox"name="dryer"></label>
    </div>

        <!-- it really starts here -->
        <div class="header">
            <div class="headBox1">
                <div class="logo-header">
                    Airdreamhome
                </div>
                <div class="searchbar-header">
                 <input type="text"class="inputlocation"placeholder="Location">
                 <input type="text"class="inputdate"placeholder="CheckIn-CheckOut">
                 <input type="text"class="inputguest"placeholder="Guest">
                </div>
            </div>
            <div class="headBox2">
                    <ul>
                        <li><input type="text"class="selectPrice"placeholder="Price"></li>
                        <li><select class="selectPlace">
                            <option value="place">Place</option>
                            <option value="entirePlace">Entire Place</option>
                            <option value="privateRoom">Private room</option>
                            <option value="shareRoom">Share room</option>
                        </select></li>

                        <li><button type="button" class="selectFilter"onclick="openfilterBox()"id="filterbutton">Filter</button></li>


                        <li><input type="submit" value="Wifi"class="inputStyle"onclick="changeColor('wifi')"id="wifi"></li>
                        <li><input type="submit" value="Kitchen"class="inputStyle"onclick="changeColor('kitchen')"id="kitchen"></li>
                        <li><input type="submit" value="Air Conditioning"class="inputStyle"onclick="changeColor('aircondition')"id="aircondition"></li>
                        <li><input type="submit" value="Washer"class="inputStyle"onclick="changeColor('washer')"id="washer"></li>
                        <li><input type="submit" value="Iron"class="inputStyle"onclick="changeColor('iron')"id="iron"></li>
                        <li><input type="submit" value="Free Parking"class="inputStyle"onclick="changeColor('freeparking')"id="freeparking"></li>
                        <li><input type="submit" value="Dedicated Workspace"class="inputStyle"onclick="changeColor('dworkspace')"id="dworkspace"></li>
                        <li><input type="submit" value="Dryer"class="inputStyle"onclick="changeColor('dryer')"id="dryer"></li>
                    </ul>
                </div>

        </div>




            <div class="content">

                <div class="container">
                    <div id="myCarousel" class="carousel slide itemBox sizeCarousel">
                      <!-- Indicators -->
                      <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                      </ol>

                      <!-- Wrapper for slides -->
                      <div class="carousel-inner">
                        <div class="item active">
                          <img src="hotelImage1.jpg" alt="Image1">
                        </div>

                        <div class="item">
                          <img src="hotelImage2.jpg" alt="Image2"class="carouselImage">
                        </div>

                        <div class="item">
                          <img src="hotelImage3.jpg" alt="Image3"class="carouselImage">
                        </div>
                      </div>


                      <!-- Left and right controls -->
                      <a class="left carousel-control controlVisibility" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="right carousel-control controlVisibility" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>

                    <a href="hotelDetails"target="_blank" ><div class="info">
                        <p>Rental Unit</p>
                        <p><b>Title</b></p>
                        <p>Guest | Studio | Bath</p>
                        <p>Wifi | Air Conditioning | Free Parking</p>
                        <p>Price: </p>
                        <span class="glyphicon">&#xe007; Review</span>
                    </div></a>
                  </div>


                  <!-- copy -->
                  <div class="container">
                    <div id="myCarousel1" class="carousel slide itemBox sizeCarousel">
                      <!-- Indicators -->
                      <ol class="carousel-indicators">
                        <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel1" data-slide-to="1"></li>
                        <li data-target="#myCarousel1" data-slide-to="2"></li>
                      </ol>

                      <!-- Wrapper for slides -->
                      <div class="carousel-inner">
                        <div class="item active">
                          <img src="hotelImage1.jpg" alt="Image1">
                        </div>

                        <div class="item">
                          <img src="hotelImage2.jpg" alt="Image2"class="carouselImage">
                        </div>

                        <div class="item">
                          <img src="hotelImage3.jpg" alt="Image3"class="carouselImage">
                        </div>
                      </div>


                      <!-- Left and right controls -->
                      <a class="left carousel-control controlVisibility" href="#myCarousel1" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="right carousel-control controlVisibility" href="#myCarousel1" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>

                    <a href="hotelDetails"target="_blank" ><div class="info">
                        <p>Rental Unit</p>
                        <p><b>Title</b></p>
                        <p>Guest | Studio | Bath</p>
                        <p>Wifi | Air Conditioning | Free Parking</p>
                        <p>Price: </p>
                        <span class="glyphicon">&#xe007; Review</span>
                    </div></a>
                  </div>

<!-- copy -->
                <div class="container">
                    <div id="myCarousel2" class="carousel slide itemBox sizeCarousel">
                      <!-- Indicators -->
                      <ol class="carousel-indicators">
                        <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel2" data-slide-to="1"></li>
                        <li data-target="#myCarousel2" data-slide-to="2"></li>
                      </ol>

                      <!-- Wrapper for slides -->
                      <div class="carousel-inner">
                        <div class="item active">
                          <img src="hotelImage1.jpg" alt="Image1">
                        </div>

                        <div class="item">
                          <img src="hotelImage2.jpg" alt="Image2"class="carouselImage">
                        </div>

                        <div class="item">
                          <img src="hotelImage3.jpg" alt="Image3"class="carouselImage">
                        </div>
                      </div>


                      <!-- Left and right controls -->
                      <a class="left carousel-control controlVisibility" href="#myCarousel2" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="right carousel-control controlVisibility" href="#myCarousel2" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>

                    <a href="hotelDetails"target="_blank" ><div class="info">
                        <p>Rental Unit</p>
                        <p><b>Title</b></p>
                        <p>Guest | Studio | Bath</p>
                        <p>Wifi | Air Conditioning | Free Parking</p>
                        <p>Price: </p>
                        <span class="glyphicon">&#xe007; Review</span>
                    </div></a>
                  </div>

                  <!-- copy -->
                  <div class="container">
                    <div id="myCarousel3" class="carousel slide itemBox sizeCarousel">
                      <!-- Indicators -->
                      <ol class="carousel-indicators">
                        <li data-target="#myCarousel3" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel3" data-slide-to="1"></li>
                        <li data-target="#myCarousel3" data-slide-to="2"></li>
                      </ol>

                      <!-- Wrapper for slides -->
                      <div class="carousel-inner">
                        <div class="item active">
                          <img src="hotelImage1.jpg" alt="Image1">
                        </div>

                        <div class="item">
                          <img src="hotelImage2.jpg" alt="Image2"class="carouselImage">
                        </div>

                        <div class="item">
                          <img src="hotelImage3.jpg" alt="Image3"class="carouselImage">
                        </div>
                      </div>


                      <!-- Left and right controls -->
                      <a class="left carousel-control controlVisibility" href="#myCarousel3" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="right carousel-control controlVisibility" href="#myCarousel3" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>

                    <a href="hotelDetails"target="_blank" ><div class="info">
                        <p>Rental Unit</p>
                        <p><b>Title</b></p>
                        <p>Guest | Studio | Bath</p>
                        <p>Wifi | Air Conditioning | Free Parking</p>
                        <p>Price: </p>
                        <span class="glyphicon">&#xe007; Review</span>
                    </div></a>
                  </div>

                  <!-- copy -->
                  <div class="container">
                    <div id="myCarousel4" class="carousel slide itemBox sizeCarousel">
                      <!-- Indicators -->
                      <ol class="carousel-indicators">
                        <li data-target="#myCarousel4" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel4" data-slide-to="1"></li>
                        <li data-target="#myCarousel4" data-slide-to="2"></li>
                      </ol>

                      <!-- Wrapper for slides -->
                      <div class="carousel-inner">
                        <div class="item active">
                          <img src="hotelImage1.jpg" alt="Image1">
                        </div>

                        <div class="item">
                          <img src="hotelImage2.jpg" alt="Image2"class="carouselImage">
                        </div>

                        <div class="item">
                          <img src="hotelImage3.jpg" alt="Image3"class="carouselImage">
                        </div>
                      </div>


                      <!-- Left and right controls -->
                      <a class="left carousel-control controlVisibility" href="#myCarousel4" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="right carousel-control controlVisibility" href="#myCarousel4" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>

                    <a href="hotelDetails"target="_blank" ><div class="info">
                        <p>Rental Unit</p>
                        <p><b>Title</b></p>
                        <p>Guest | Studio | Bath</p>
                        <p>Wifi | Air Conditioning | Free Parking</p>
                        <p>Price: </p>
                        <span class="glyphicon">&#xe007; Review</span>
                    </div></a>
                  </div>




            </div>

            <div class="clearfix"></div>

            <div class="rightContent">
            <div id="map" style="width:100%;height:100%"></div>
            </div>





            <script>

            var mapCanvas = document.getElementById("map");
            var mapOptions = {
            center: new google.maps.LatLng(15.2229, 120.5744), zoom: 12
            }
            var map = new google.maps.Map(mapCanvas, mapOptions);



        </script>
    </body>


</html>
