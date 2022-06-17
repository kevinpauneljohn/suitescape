@extends('layouts.apps')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New StayCation</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('staycations.index') }}"> Back </a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Something went wrong.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('staycations.store') }}" method="POST" enctype="multipart/form-data">
	<input type="hidden" name="userid" value="{{ auth()->user()->id }}">
    	@csrf
		
		<div class="row">
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
                <label for="typeofPlace">Kind Of Listing</label>
    			<select class="form-control" name="typeofPlace" id="typeofPlace">
     			<option value="Boutique Hotel">Boutique Hotel</option>
      			<option value="Bed and Breakfast">Bed and Breakfast</option>
      			<option value="Unique Space">Unique Space</option>
      			<option value="Secondary Unit">Secondary Unit</option>
      			<option value="Apartment">Apartment</option>
      			<option value="House">House</option>
    			</select>
		        </div>
		    </div>

		    <div class="col-xs-12 col-sm-12 col-md-12" style="display: none;" id="typeofHouse">
		        <div class="form-group">
                <label for="typeofHouse">Type of House</label>
    			<select class="form-control" name="typeofHouse">
				<option value="null" style="display: none;" checked></option>
     			<option value="Home">Home</option>
      			<option value="Cabin">Cabin</option>
      			<option value="Villa">Villa</option>
      			<option value="Townhouse">Townhouse</option>
      			<option value="Cottage">Cottage</option>
      			<option value="Bungalow">Bungalow</option>
      			<option value="Earthen Home">Earthen Home</option>
      			<option value="Houseboat">Houseboat</option>
      			<option value="Hut">Hut</option>
      			<option value="Farm Stay">Farm Stay</option>
      			<option value="Dome">Dome</option>
      			<option value="Cycladic Home">Cycladic Home</option>
      			<option value="Chalet">Chalet</option>
      			<option value="Dammuso">Dammuso</option>
      			<option value="Lighthouse">Lighthouse</option>
      			<option value="Shepherd">Shepherd's hut</option>
      			<option value="Tiny Home">Tiny Home</option>
      			<option value="Trullo">Trullo</option>
      			<option value="Casa Particular">Casa Particular</option>
      			<option value="Pension">Pension</option>
      			<option value="Vacation Home">Vacation Home</option>
      			
    			</select>
		        </div>
		    </div>

			<div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
                <label for="privacyType">Privacy Type</label>
    			<select class="form-control" name="privacyType">
     			<option value="An entire place">An entire place</option>
      			<option value="A private room">A private room</option>
      			<option value="A shared room">A shared room</option>
    			</select>
		        </div>
		    </div>

		 <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Address:</strong>
		            <textarea class="form-control" style="height:150px" name="address" placeholder="Address" required autocomplete="address" autofocus></textarea>
		        </div>
		    </div>

			<div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Floor Plan:</strong><br>
					<label for="numberGuest">Guests</label>
		            <input type="number" name="numberGuest" required autocomplete="numberGuest" autofocus>

					<label for="numberBed">Beds</label>
		            <input type="number" name="numberBed" required autocomplete="numberBed" autofocus>

					<label for="numberBedrooms">Bedrooms</label>
		            <input type="number" name="numberBedrooms" required autocomplete="numberBedrooms" autofocus>

					<label for="numberBathrooms">Bathrooms</label>
		            <input type="number" name="numberBathrooms" required autocomplete="numberBathrooms" autofocus>
		        </div>
		    </div>

		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Do you have any standout amenities?</strong><br>
		            <label><input type="checkbox" name="amenities[]" value="Pool"> Pool</label>
		            <label><input type="checkbox" name="amenities[]" value="Hot Tub"> Hot Tub</label>
		            <label><input type="checkbox" name="amenities[]" value="Patio"> Patio</label>
		            <label><input type="checkbox" name="amenities[]" value="BBQ Grill"> BBQ Grill</label>
		            <label><input type="checkbox" name="amenities[]" value="Fire Pit"> Fire Pit</label>
		            <label><input type="checkbox" name="amenities[]" value="Pool Table"> Pool Table</label>
		            <label><input type="checkbox" name="amenities[]" value="Indoor Fireplace"> Indoor Fireplace</label>
		            <label><input type="checkbox" name="amenities[]" value="Outdoor Dining Area"> Outdoor Dining Area</label>
		            <label><input type="checkbox" name="amenities[]" value="Exercise Equipment"> Exercise Equipment</label>
		        </div>
		    </div>

			<div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>What about these guest favorites?</strong><br>
		            <label><input type="checkbox" name="guestFavorite[]" value="Wifi"> Wifi</label>
		            <label><input type="checkbox" name="guestFavorite[]" value="TV"> TV</label>
		            <label><input type="checkbox" name="guestFavorite[]" value="Kitchen"> Kitchen</label>
		            <label><input type="checkbox" name="guestFavorite[]" value="Washer"> Washer</label>
		            <label><input type="checkbox" name="guestFavorite[]" value="Free Parking on Premises"> Free Parking on Premises</label>
		            <label><input type="checkbox" name="guestFavorite[]" value="Paid Parking on Premises"> Paid Parking on Premises</label>
		            <label><input type="checkbox" name="guestFavorite[]" value="Air Conditioning"> Air Conditioning</label>
		            <label><input type="checkbox" name="guestFavorite[]" value="Dedicated Workspace"> Dedicated Workspace</label>
		            <label><input type="checkbox" name="guestFavorite[]" value="Outdoor Shower"> Outdoor Shower</label>
		        </div>
		    </div>

			<div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Have any of these safety items?</strong><br>
		            <label><input type="checkbox" name="safetyItem[]" value="Smoke Alarm"> Smoke Alarm</label>
		            <label><input type="checkbox" name="safetyItem[]" value="First Aid Kit"> First Aid Kit</label>
		            <label><input type="checkbox" name="safetyItem[]" value="Carbon Monoxide Alarm"> Carbon Monoxide Alarm</label>
		            <label><input type="checkbox" name="safetyItem[]" value="Fire Extinguisher"> Fire Extinguisher</label>
		        </div>
		    </div>

			
            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Main Image:</strong>
		            <input type="file" name="mainImg" class="form-control" required autocomplete="mainImg" autofocus>
		        </div>
		    </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Sub Image 1:</strong>
		            <input type="file" name="subImg1" class="form-control" required autocomplete="subImg1" autofocus>
		        </div>
		    </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Sub Image 2:</strong>
		            <input type="file" name="subImg2" class="form-control" required autocomplete="subImg2" autofocus>
		        </div>
		    </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Sub Image 3:</strong>
		            <input type="file" name="subImg3" class="form-control" required autocomplete="subImg3" autofocus>
		        </div>
		    </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Sub Image 4:</strong>
		            <input type="file" name="subImg4" class="form-control" required autocomplete="subImg4" autofocus>
		        </div>
		    </div>
			<div class="col-xs-12 col-sm-12 col-md-12" style="display: none;">
		        <div class="form-group">
		            <strong>Sub Image 5:</strong>
		            <input type="file" name="subImg5" class="form-control" required autocomplete="subImg5" autofocus>
		        </div>
		    </div>

			<div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <button type="submit" class="btn btn-primary">Add more Image</button>
		        </div>
		    </div>

			<div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Title:</strong>
		            <input type="text" name="name" class="form-control" placeholder="Title" required autocomplete="name" autofocus>
		        </div>
		    </div>

			<div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Choose up to 2 highlights</strong><br>
		            <label><input type="checkbox" class="highlight" name="highlight[]" value="Peaceful"> Peaceful</label>
		            <label><input type="checkbox" class="highlight" name="highlight[]" value="Unique"> Unique</label>
		            <label><input type="checkbox" class="highlight" name="highlight[]" value="Family-friendly"> Family-friendly</label>
		            <label><input type="checkbox" class="highlight" name="highlight[]" value="Stylish"> Stylish</label>
		            <label><input type="checkbox" class="highlight" name="highlight[]" value="Central"> Central</label>
		            <label><input type="checkbox" class="highlight" name="highlight[]" value="Spacious"> Spacious</label>
		        </div>
		    </div>

		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Detail:</strong>
		            <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail" required autocomplete="detail" autofocus></textarea>
		        </div>
		    </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Price:</strong>
		            <input type="number" name="price" class="form-control" placeholder="Price" required autocomplete="price" autofocus>
		        </div>
		    </div>

			<div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Do you have any of these at your place?</strong><br>
		            <label><input type="checkbox" class="security" name="security[]" value="Security Camera"> Security Camera(s)</label>
		            <label><input type="checkbox" class="security" name="security[]" value="Weapons"> Weapons</label>
		            <label><input type="checkbox" class="security" name="security[]" value="Dangerous Animals"> Dangerous Animals</label>
		        </div>
		    </div>

		    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
		            <button type="submit" class="btn btn-primary">Submit</button>
		    </div>
		</div>

    </form>

<script>
	document.getElementById('typeofPlace').addEventListener("change", function (e) {
    if (e.target.value === 'House') {
        document.getElementById('typeofHouse').style.display = 'block';
    } else {
        document.getElementById('typeofHouse').style.display = 'none';
    }
});
</script>
<script>
	document.getElementById('addImage').addEventListener("add", function (a){
		
	})
</script>




<<script type="text/javascript"> 
var max_limit = 2; // Max Limit
$(document).ready(function (){
    $(".highlight:input:checkbox").each(function (index){
        this.checked = (".highlight:input:checkbox" < max_limit);
    }).change(function (){
        if ($(".highlight:input:checkbox:checked").length > max_limit){
            this.checked = false;
        }
    });
});
</script>

@endsection