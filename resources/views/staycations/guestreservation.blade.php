@extends('layouts.app')

@section('content')
    <section class="section-pagetop">
        <div class="container clearfix">
            <h2 class="title-page">Request to Book</h2>
        </div>
    </section>
    <section class="section-content bg padding-y">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    @if (Session::has('error'))
                        <p class="alert alert-danger">{{ Session::get('error') }}</p>
                    @endif
                </div>
            </div>
    <form action="{{ route('reservations.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="staycationId" value="{{$staycation->id}}">
        <input type="hidden" name="userId" value="{{ auth()->user()->id }}">
        <input type="hidden" id="price" value="{{$staycation->price}}">
        <input type="hidden" name="totalPrice" id="totalPrices">
        <input type="hidden" name="status" value="Pending">

        <div class="row">
                    <div class="col-md-8 ">
                        <div class="card border-0">
                            <header class="card-header bg-white border-0">
                                <h4 class="card-title mt-2 ">Your Trip</h4>
                            </header>
                            <article class="card-body">
                                <div class="form-row">
                                    <div class="col form-group">
                                        <label><b><h5>Dates</h5></b></label>
                                        <p id="checkIn"></p>
                                    </div>
                                    <div class="col form-group">
                                        <label><b><a href="#" data-toggle="modal" data-target="#exampleModal">Edit</a></b></label>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col form-group">
                                        <label><b><h5>Guests</h5></b></label>
                                        <p id="guests"></p>
                                    </div>
                                    <div class="col form-group">
                                        <label><b><a href="#">Edit</a></b></label>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <header class="card-header">
                                        <h4 class="card-title mt-2">Price details</h4>
                                    </header>
                                    <article class="card-body">
                                        <dl class="dlist-align">
                                            <dt>&#8369; {{number_format($staycation->price)}} X &nbsp<p id="days" style="display: inline-block;"></p>&emsp;&emsp;&emsp;&emsp;&#8369;<p id="totalPrice" style="display: inline-block;"></p></dt>
                                            <dt>Service Fee&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&#8369;</dt>
                                            <dd class="text-right h5 b">&#8369;<p id="sumPrice" style="display: inline-block;"></p> </dd>
                                        </dl>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                                

            

       


    <!-- <table>
    <input type="hidden" value="{{$staycation->numberGuest}}"id="reservenumberGuest">
    <input type="hidden" value="1"id="reserveguestNumber">
    <input type="hidden" value="1"id="numGuest">
    <input type="hidden" value="1"id="numChild">
    <input type="hidden" value="1"id="numInfant">

<tr>

<td><b>Guest</b><p>Age 13+</p></td>
<td><input type="button"value="-"class="qtybutton"onclick="reserve('minus','guest')">
<label id="reserveguestQty"value="1">0</label>
<input type="button"value="+"class="qtybutton"onclick="reserve('add','guest')"></td>
</tr>
<tr>
<td><b>Children</b><p>Ages 2-12</p></td>
<td><input type="button"value="-"class="qtybutton"onclick="reserve('minus','children')">
<b id="reservechildQty"value="0"></b>
<input type="button"value="+"class="qtybutton"onclick="reserve('add','children')"></td>
</tr>
<tr>
<td><b>Infants</b><p>Under 2</p></td>
<td><input type="button"value="-"class="qtybutton"onclick="reserve('minus','infant')">
<b id="reserveinfantQty"value="0">0</b>
<input type="button"value="+"class="qtybutton"onclick="reserve('add','infant')"></td>
</tr>

</table>
        <p>This place has a maximum of # guest.</p>
        <input type="button" onclick="closeaddguest('addguestheader')"value="Close"class="addguest-closebutton">
    </div>
    <table> -->

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


    @if(Auth::user()->id == $staycation->userid)
    <p class="text-danger">It looks like you are the owner of this place</p>
    @else
    <button type="submit" class="requestbutton">Request to book</button>
    @endif
</form>


    <!-- Price details right side -->

    


    <script src="{{ asset( 'js.js')}}"></script>
<!-- javascript for coupon pop up modal -->
<script>



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


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <div class="col-md-4"><h4 id="daysModal" style="display: inline-block;"></h4>
            <p>{{$staycation->numberBed}} beds &#183; {{$staycation->numberBathrooms}} bath</p>
      </div>
      <div class="col-md-4 ml-auto">
        <p>Check In</p><input type="date" name="dateStart" id="reserveCheckIn">

        <p>Check Out</p><input type="date" name="dateEnd" id="reserveCheckOut">
      </div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>


<!-- CSS -->
<style>


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


$(document).ready(function() {
    var getNum = localStorage.getItem("numberContainer");
    var getnumeroG = localStorage.getItem("numerogContainer");
    var getnumeroC = localStorage.getItem("numerocContainer");
    var getnumeroI = localStorage.getItem("numeroiContainer");

    var getcheckIn = localStorage.getItem("dateCheckIn");
    var getcheckOut = localStorage.getItem("dateCheckOut");

    $('#reserveguestNumber').val(getNum);
    $('#numGuest').val(getnumeroG);
    $('#numChild').val(getnumeroC);
    $('#numInfant').val(getnumeroI);
    $('#reserveCheckIn').val(getcheckIn);
    $('#reserveCheckOut').val(getcheckOut);
    
    const monthNames = ["January", "February", "March", "April", "May", "June",
    "July", "August", "September", "October", "November", "December"
    ];
    //check in date
    var checkIn = new Date(getcheckIn);
    var monthIn = monthNames[checkIn.getMonth()];
    var dayIn = checkIn.getUTCDate();

    //check out date
    var checkOut = new Date(getcheckOut);
    var monthOut = monthNames[checkOut.getMonth()];
    var dayOut = checkOut.getUTCDate();

    // number of days
    var time_difference = checkOut.getTime() - checkIn.getTime();
    var result = time_difference / (1000 * 60 * 60 * 24);
    document.getElementById('days').innerHTML=result + " nights";
    document.getElementById('daysModal').innerHTML=result + " nights";

    var price = document.getElementById('price').value;
    var total = price*result;
    document.getElementById('totalPrice').innerHTML=total.toLocaleString('en-US');
    document.getElementById('sumPrice').innerHTML=total.toLocaleString('en-US');
    $('#totalPrices').val(total);


    if(monthOut == monthIn){
        document.getElementById('checkIn').innerHTML=monthIn +" "+ dayIn + " - " + dayOut;
    }
    else{
        document.getElementById('checkIn').innerHTML=monthIn +" "+ dayIn + " - " + monthOut + " " + dayOut;
    }

    // number of guest
    if(getnumeroG > 1){
    document.getElementById('guests').innerHTML=getnumeroG + " guests";
    }
    else{
        document.getElementById('guests').innerHTML=getnumeroG + " guest"; 
    }

    
    document.getElementById('reserveguestQty').innerHTML=getnumeroG;
    document.getElementById('reservechildQty').innerHTML=getnumeroC;
    document.getElementById('reserveinfantQty').innerHTML=getnumeroI;
});



</script>
@endsection


