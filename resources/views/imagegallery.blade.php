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
                <input type="hidden" value="1"id="guestNumber">
                 <b id="inputguestgallery"></b>
                <b id="inputchildrenHeader-imagegallery"></b>
                <b id="inputinfantHeader-imagegallery"></b>
                </b>
                <input type="submit" value="Search" id="searchHotel"class="searchHotel"name="searchHotel"style="float:right">
                </div>
<div class="addguestheader-imagegallery" id="addguestheader-imagegallery">
<table>
<tr>
<td><b>Guest</b><p>Age 13+</p></td>
<td><input type="button"value="-"class="qtybutton"onclick="asd('minus','guest')">
<label id="guestQtygallery"value="1">0</label>
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
                        <li><input type="text"class="inputPrice"name="inputPrice"id="inputPrice"placeholder="Price"></li>
                        <li><select class="selectPlace"id="typeofPlace"name="typeofPlace"onchange="typeofPlace()">
                            <option value="all"id="all">All</option>
                            <option value="Boutique Hotel"id="entirePlace">Boutique Hotel</option>
                            <option value="Bed and Breakfast"id="privateRoom">Bed and Breakfast</option>
                            <option value="Unique Space"id="sharedRoom">Unique Space</option>
                            <option value="Secondary Unit"id="sharedRoom">Secondary Unit</option>
                            <option value="Apartment"id="sharedRoom">Apartment</option>
                            <option value="House"id="sharedRoom">House</option>
                        </select></li>
                        <li><select class="selectPlace"id="privacyType"name="privacyType"onchange="privacyType()">
                            <option value="all"id="all">All</option>
                            <option value="An entire place"id="entirePlace">An entire Place</option>
                            <option value="A private room"id="privateRoom">A private room</option>
                            <option value="A shared room"id="sharedRoom">A shared room</option>
                        </select></li>
                        <b>AMENITIES</b>
                        <li><input type="checkbox"class="amenities"name="amenities"id="amenities"value="Pool">Pool</li>
                        <li><input type="checkbox"class="amenities"name="amenities"id="amenities"value="Hot Tub">Hot Tub</li>
                        <li><input type="checkbox"class="amenities"name="amenities"id="amenities"value="Patio">Patio</li>
                        <b>GUEST FAVORITE</b>
                        <li><input type="checkbox"class="guestFavorite"name="guestFavorite"id="guestFavorite"value="Wifi">Wifi</li>
                        <li><input type="checkbox"class="guestFavorite"name="guestFavorite"id="guestFavorite"value="TV">TV</li>
                        <li><input type="checkbox"class="guestFavorite"name="guestFavorite"id="guestFavorite"value="Kitchen">Kitchen</li>
                        <li><input type="checkbox"class="guestFavorite"name="guestFavorite"id="guestFavorite"value="Washer">Washer</li>
                        <li><input type="checkbox"class="guestFavorite"name="guestFavorite"id="guestFavorite"value="Outdoor Shower">Outdoor Shower</li>

                        <li><label>Bed<input type="number"value=1 min=1 id="numberBed"class="numberBed"></label></li>
                        <li><label>Bedroom<input type="number"value=1 min=1 id="numberBedrooms"class="numberBedrooms"><label></li>
                    </ul>
                </div>

        </div>



        <div class="content">

            @include('staycationFilter');





                  </div>



            </div>



    <script>

    function filter(){
        var guestNumber=document.getElementById('guestNumber').value;
        var numberBed=document.getElementById('numberBed').value;
        var numberBedrooms=document.getElementById('numberBedrooms').value;
        var inputPrice=document.getElementById('inputPrice').value;
        if(guestNumber == 0){
            guestNumber=1;
        }

        var selectedType=$('#privacyType option:selected').val();
        var selectedPlace=$('#typeofPlace option:selected').val();
        var amenities = [];
        $("input[name=amenities]:checked").each(function() {
            amenities.push($(this).val());
        });

        var guestFavorite = [];
        $("input[name=guestFavorite]:checked").each(function() {
            guestFavorite.push($(this).val());
        });
        $.ajax({
            type: "GET",
            data: {
                'selectedType': selectedType,
                'selectedPlace': selectedPlace,
                'amenities': amenities,
                'guestNumber': guestNumber,
                'numberBed' : numberBed,
                'numberBedrooms' : numberBedrooms,
                'guestFavorite' : guestFavorite,
                'inputPrice' : inputPrice,
            },
            url: "{{route('staycations.filter')}}",
            success:function(data){
                $('.hotelWrapper').html(data);
            }

        });
    }
    function typeofPlace(){
        filter();
    }
    function privacyType(){
        filter();
    }
    $('.amenities').click(function(){
        filter();
    })

    $('#searchHotel').click(function(){
        filter();
    })
    $('#numberBed').on('input',function(){
        filter();
    })
    $('#numberBedrooms').on('input',function(){
        filter();
    })
    $('.guestFavorite').click(function(){
        filter();
    })
    $('.inputPrice').keyup(function(){
        filter();
    })

    </script>


    </body>


</html>
