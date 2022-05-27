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
</head>
    <body>
        <!--- display:none din to guyss -->
    <div class="divFilter" id="divFilter">
    <span class="closebutton"onclick="closefilterBox()">&times;</span>
    <div class="filterBox">
    <label class="filter">Wifi<input type="checkbox"name="wifi"></label>
    <label class="filter">Kitchen<input type="checkbox"name="kitchen"></label>
    <label class="filter">Air Conditioning<input type="checkbox"name="aircondition"></label>
    <label class="filter">Washer<input type="checkbox"name="washer"></label>
    <label class="filter">Iron<input type="checkbox"name="iron"></label>
    <label class="filter">Free Parking<input type="checkbox"name="freeparking"></label>
    <label class="filter">Dedicated Workspace<input type="checkbox"name="dedicatedworkspace"></label>
    <label class="filter">Dryer<input type="checkbox"name="dryer"></label>
    <label class="filter">Dryer<input type="checkbox"name="dryer"></label>
    <label class="filter">Dryer<input type="checkbox"name="dryer"></label>
    <label class="filter">Dryer<input type="checkbox"name="dryer"></label>
    <label class="filter">Dryer<input type="checkbox"name="dryer"></label>
    <label class="filter">Dryer<input type="checkbox"name="dryer"></label>
    <label class="filter">Dryer<input type="checkbox"name="dryer"></label>
    <label class="filter">Dryer<input type="checkbox"name="dryer"></label>
    <label class="filter">Dryer<input type="checkbox"name="dryer"></label>
    <label class="filter">Dryer<input type="checkbox"name="dryer"></label>
    <label class="filter">Dryer<input type="checkbox"name="dryer"></label>
    <label class="filter">Dryer<input type="checkbox"name="dryer"></label>
    <label class="filter">Dryer<input type="checkbox"name="dryer"></label>
    <label class="filter">Dryer<input type="checkbox"name="dryer"></label>
    <label class="filter">Dryer<input type="checkbox"name="dryer"></label>
    <label class="filter">Dryer<input type="checkbox"name="dryer"></label>
    <label class="filter">Dryer<input type="checkbox"name="dryer"></label>
    <label class="filter">Dryer<input type="checkbox"name="dryer"></label>
    <label class="filter">Dryer<input type="checkbox"name="dryer"></label>
    <label class="filter">Dryer<input type="checkbox"name="dryer"></label>
    </div>
    </div>

        <!-- it really starts here -->
        <div class="header">
            <div class="headBox1">
                <div class="logo-header">
                    Airdreamhome
                </div>
                <div class="searchbar-header">
                 <input type="text"class="inputlocation"placeholder="Location">
                 <input type="date"class="inputdate"name="checkIn">
                 <input type="date"class="inputdate"name="checkOut">
                 <b id="inputguest-imagegallery"class="inputguest-imagegallery"placeholder="Guest"onclick="showguestImagegallery()"><span style="font-size:15px;">Guest:</span>
                <b id="inputguestgallery">1guest</b>
                <b id="inputchildrenHeader-imagegallery"></b>
                <b id="inputinfantHeader-imagegallery"></b>
                </b>
                </div>
<div class="addguestheader-imagegallery" id="addguestheader-imagegallery">
<table>
<tr>
<td><b>Guest</b><p>Age 13+</p></td>
<td><input type="button"value="-"class="qtybutton"onclick="asd('minus','guest')">
<label id="guestQtygallery"value="1">1</label>
<input type="button"value="+"class="qtybutton"onclick="asd('add','guest')"></td>
</tr>
<tr>
<td><b>Children</b><p>Ages 2-12</p></td>
<td><input type="button"value="-"class="qtybutton"onclick="asd('minus','children')">
<label id="childrenQtyheader-imagegallery"value="0">0</label>
<input type="button"value="+"class="qtybutton"onclick="asd('add','children')"></td>
</tr>
<tr>
<td><b>Infants</b><p>Under 2</p></td>
<td><input type="button"value="-"class="qtybutton"onclick="asd('minus','infant')">
<label id="infantQtyheader-imagegallery"value="0">0</label>
<input type="button"value="+"class="qtybutton"onclick="asd('add','infant')"></td>
</tr>

</table>
<p>This place has a maximum of # guest.</p>
<input type="button" onclick="closeaddguest('addguestheader-imagegallery')"value="Close"class="addguest-closebutton">
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
        
                <div class="hotelWrapper">
                @foreach ($staycations as $staycation)
                <a href="{{ route('staycations.display',$staycation->id) }}" target="_blank">
                <div class="carousel-info-box">
                
                <div class="carouselBox">
                    <div id="{{'myCarousel' . $num = ++$i}}" class="carousel slide itemBox">
                      <!-- Indicators -->
                      <ol class="carousel-indicators">
                        <li data-target="{{'#myCarousel' . $num}}" data-slide-to="0" class="active"></li>
                        <li data-target="{{'#myCarousel' . $num}}" data-slide-to="1"></li>
                        <li data-target="#{{'#myCarousel' . $num}}" data-slide-to="2"></li>
                      </ol>

                      <!-- Wrapper for slides -->
                      <div class="carousel-inner">
                        <div class="item active">
                          <img src="images/{{$staycation->mainImg}}" style="height: 200px;" alt="Image1">
                        </div>

                        <div class="item">
                          <img src="images/{{$staycation->subImg1}}" style="height: 200px;" alt="Image2">
                        </div>

                        <div class="item">
                          <img src="images/{{$staycation->subImg2}}" style="height: 200px;" alt="Image3">
                        </div>
                      </div>


                      <!-- Left and right controls -->
                      <a class="left carousel-control controlVisibility" href="{{'#myCarousel' . $num}}" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="right carousel-control controlVisibility" href="{{'#myCarousel' . $num}}" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                  </div>
                    <div class="info">
                        <p>Rental Unit</p>
                        <p><b>{{$staycation->name}}</b></p>
                        <p>Guest | Studio | Bath</p>
                        <p>Wifi | Air Conditioning | Free Parking</p>
                        <p>Price: </p>
                        <span class="glyphicon">&#xe007; Review</span>
                    </div>
                  </div>
                  </a>
                 

                  @endforeach





                  </div>




            </div>








    </body>


</html>
