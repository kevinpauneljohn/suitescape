<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
    <script src="/js.js"></script>
</head>
<body>
<!-- Reservation for GUEST -->
    <div class="reservation">
        <h1>Reservation</h1>
    </div>
    <div>
        <h3>Your trip</h3>
    </div>
    <div>
        <b>Dates</b>
        <table class="checkDate">
            <p>Check In</p><input type="date"name="checkIn">

            <p>Check Out</p><input type="date"name="checkOut">
        
    </div>
    <!-- Option for adding guests -->
    <div>
    <b id="inputguest-imagegallery"class="inputguest-imagegallery"placeholder="Guest"onclick="showguestImagegallery()"><span style="font-size:15px;">Guest:</span>
        <div class="addguestheader-guestreservation" id="addguestheader-guestreservation">
<table>
<tr>
<td><b>Guest</b><p>Age 13+</p></td>
<td><input type="button"value="-"class="qtybutton"onclick="asdf('minus','guest')">
<label id="guestQtygallery"value="1">0</label>
<input type="button"value="+"class="qtybutton"onclick="asdf('add','guest')"></td>
</tr>
<tr>
<td><b>Children</b><p>Ages 2-12</p></td>
<td><input type="button"value="-"class="qtybutton"onclick="asdf('minus','children')">
<label id="childrenQtyheader-guestreservation"value="0">0</label>
<input type="button"value="+"class="qtybutton"onclick="asdf('add','children')"></td>
</tr>
<tr>
<td><b>Infants</b><p>Under 2</p></td>
<td><input type="button"value="-"class="qtybutton"onclick="asdf('minus','infant')">
<label id="infantQtyheader-guestreservation"value="0">0</label>
<input type="button"value="+"class="qtybutton"onclick="asdf('add','infant')"></td>
</tr>

</table>
<p>This place has a maximum of # guest.</p>
<input type="button" onclick="closeaddguest('addguestheader-guestreservation')"value="Close"class="addguest-closebutton">
</div>

                </div>

            </div>

    </div>
    <hr>

    <!-- Payment area -->
    <div class="payment">
        <h3>Choose how to pay</h3>
        <div class="payfull">
        <input type="radio" id="full" name="payment" value="full" style="float: right">
        <label for="full"><b>Pay in full</b></label><br>
        <p>Pay the total now and you're all set.</p>
        </div>
        <div class="paypart">
        <input type="radio" id="part" name="payment" value="part" style="float: right">
        <label for="part"><b>Pay part now,pay later</b></label><br>
        <p>Pay part by part.</p>
        </div>
    </div>
    <hr>
    <div>

    <!-- Coupon area -->
        <h3>Pay with</h3>
        <button id="couponbtn">Enter coupon</button>

        <div id="myModal" class="modal">
            <span class="close">&times;</span>
            <div class="modal-content">
                <h3>Coupon</h3>
                <input type="text" id="coupon" name="textcoupon" placeholder="Enter a coupon code">
                <button for="coupon" class="modalcoupon ">Apply</button>
                </div>
        </div>

    <hr>

    <!-- Message area -->
    <div class="message">
        <h3>Required for your trip</h3>
        <b>Message to the host</b>
        <p><button type="submit"class="addbutton">Add</button></p>
        <p>Free cancellation before Jan 18. Cancel before Feb 10 for a partial refund.</p>
        
        <b>Profile photo</b>
        <p><button type="submit"class="addbutton">Add</button></p>
        <p>Our Extenuating Circumstances policy does not cover travel disruptions caused by COVID-19.</p>

    </div>
    <hr>
    <div>
        <b>Your reservation won't be confirmed until the Host accepts your request (within 24 hours).</b>
        <p>You won't be charged until then.</p>
    </div>
    <hr>


    <button type="submit" class="requestbutton">Request to book</button>

    <!-- Price details right side -->

    <div class="reserveBox">
        <p>Price details</p>
        
        
    </div>

<!-- CSS -->
<style>
*{
    margin: auto;
    padding: 0;
    max-width: 900px;
    box-sizing: border-box;
    font-family: 'poppins', sans-serif;
}

/* Coupon area */
#couponbtn{
    margin-top: 10px;
    padding: 5px;
    border-radius: 20px;
    cursor: pointer;
    background-color: white;
}

#couponbtn:hover{
    transform: translate(-5px, -1px)
    
}

.modal {
  display: none; 
  position: fixed; 
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%; 
  overflow: auto;
  background-color: rgb(0,0,0); 
  background-color: rgba(0,0,0,0.4);
}

#coupon{
    padding: 12px;
    border-radius: 5px;
    
}

.modalcoupon{
    margin-top: 10px;
    width:auto;
    padding: 8px;
    border-radius: 50px;
    border:2px solid black;
    cursor: pointer;
    background-color: white;
}

.modalcoupon:hover{
    transform: translate(-5px, -1px)
    
}

.modal-content {
  background-color: #fefefe;
  margin: 15% auto; 
  padding: 20px;
  border: 1px solid #888;
  width: 80%; 
}

.close {
  color: white;
  float: right;
  font-size: 50px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}

/* for payment radio button */
.payfull{
    outline: 0px;
    cursor: pointer;
    padding: 16px;
    border-radius: 8px 8px 0px 0px;
    list-style: none;
    border: none;
    box-shadow: rgb(34 34 34) 0px 0px 0px 2px inset;
}

.paypart{
    outline: 0px;
    cursor: pointer;
    padding: 16px;
    border-radius: 8px 8px 0px 0px;
    list-style: none ;
    border: none ;
    box-shadow: rgb(34 34 34) 0px 0px 0px 2px inset;
}


.payment input{
    cursor: pointer;
    box-sizing: border-box;
    height: 22px;
    width: 22px;
    margin: 0px;
    display: block;
    flex: 0 0 auto;
}

/* Price detail right box */
.reserveBox{
    width: 35%;
    height:auto;
    position:relative;
    top:-1080px;
    left:70%;
    padding:15px;
    border:1px solid #ddd;
    border-radius:10px;
    box-shadow: 5px 10px 18px #888888;
}

@media (max-width:768px) {
    .reserveBox{
        position: sticky;
        top right:0;
        left: -400px;
        height: 1000vh;
        width: 100%;
        max-width: 300px;
        transition: 0.2s linear;
        

    }
    .reserveBox.is-active{
        left: 0;
    }
    
}

/* Message Css */
.addbutton{
    margin-top: -20px;
    float: right;
    width:auto;
    padding:10px;
    border-radius:10px;
    border:2px solid black;
    cursor: pointer;
    background-color: white;
}

.addbutton:hover{
    transform: translate(-5px, -1px)
}

/* for request button */
.requestbutton{
    background: rgb(227, 28, 95);
    color: white;
    padding: 7px;
    border-radius: 50px;
    transition: transform 0.3 ease;
}

.requestbutton:hover{
    transform: translate(-5px, -1px)
}

</style>



<!-- javascript for coupon pop up modal -->
<script>

function showguestImagegallery() {
    $('.addguestheader-imagegallery').toggle();
}

function asdf(operation, type){
    if(operation == 'add' && type== 'guest'){
        document.getElementById("guestQtygallery").value= ++addGuest;
        document.getElementById("guestNumber").value= addGuest+addChildren;
        getgvalue= document.getElementById("guestQtygallery").value;
        inputguests=getgvalue;
        document.getElementById("guestQtygallery").innerHTML = getgvalue;
        document.getElementById('inputguestgallery').innerHTML=getgvalue+" guest";
    }else if(operation == 'minus' && type== 'guest' && inputguests>0){
        document.getElementById("guestQtygallery").value= --addGuest;
        document.getElementById("guestNumber").value= addGuest+addChildren;
        getgvalue= document.getElementById("guestQtygallery").value;
        inputguests=getgvalue;
        document.getElementById("guestQtygallery").innerHTML = getgvalue;
        document.getElementById('inputguestgallery').innerHTML=getgvalue+" guest";
        if(inputguests<=0){
            document.getElementById('inputguestgallery').innerHTML="";
        }
    }
    else if(operation == 'add' && type== 'children'){
        document.getElementById("childrenQtyheader-guestreservation").value= ++addChildren;
        document.getElementById("guestNumber").value= addGuest+addChildren;
        getchildrenvalue= document.getElementById("childrenQtyheader-guestreservation").value;
        inputchildren=getchildrenvalue;
        document.getElementById("childrenQtyheader-guestreservation").innerHTML = getchildrenvalue;
        document.getElementById('inputchildrenHeader-guestreservation').innerHTML=getchildrenvalue+" children";
    }
    else if(operation == 'minus' && type== 'children' && inputchildren>0){
        document.getElementById("childrenQtyheader-guestreservation").value= --addChildren;
        document.getElementById("guestNumber").value= addGuest+addChildren;
        getchildrenvalue= document.getElementById("childrenQtyheader-guestreservation").value;
        inputchildren=getchildrenvalue;
        document.getElementById("childrenQtyheader-guestreservation").innerHTML = getchildrenvalue;
        document.getElementById('inputchildrenHeader-guestreservation').innerHTML=getchildrenvalue+" children";
        if(inputchildren<=0){
            document.getElementById('inputchildrenHeader-guestreservation').innerHTML="";
        }
    }
    else if(operation == 'add' && type== 'infant'){
        document.getElementById("infantQtyheader-guestreservation").value= ++addInfant;
        getinfantvalue= document.getElementById("infantQtyheader-guestreservation").value;
        inputinfant=getinfantvalue;
        document.getElementById("infantQtyheader-guestreservation").innerHTML = getinfantvalue;
        document.getElementById('inputinfantHeader-guestreservation').innerHTML=getinfantvalue+" infant";
    }
    else if(operation == 'minus' && type== 'infant'&& inputinfant>0){
        document.getElementById("infantQtyheader-guestreservation").value= --addInfant;
        getinfantvalue= document.getElementById("infantQtyheader-guestreservation").value;
        inputinfant=getinfantvalue;
        document.getElementById("infantQtyheader-guestreservation").innerHTML = getinfantvalue;
        document.getElementById('inputinfantHeader-guestreservation').innerHTML=getinfantvalue+" infant";
        if(inputinfant<=0){
            document.getElementById('inputinfantHeader-guestreservation').innerHTML="";
        }
    }
}

var modal = document.getElementById("myModal");

var btn = document.getElementById("couponbtn");

var span = document.getElementsByClassName("close")[0];

btn.onclick = function() {
  modal.style.display = "block";
}

span.onclick = function() {
  modal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

   
  
</body>
</html>


