@extends('layouts.apps')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show StayCation</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('staycations.edit',$staycation->id) }}">Edit</a>
                <a class="btn btn-primary" href="{{ route('staycations.index') }}"> Back </a>
            <hr>
            </div>
        </div>
    </div>
    


    <!-- details -->
    <div class="container">
        <section class="col-xs-12 col-sm-12 col-md-12">
            <div id="details" class="form-group">
                <strong>Type of Listings:</strong>
                <p>{{ $staycation->typeofPlace }}</p>
            </div>
        </section>
        <hr>
        @if(!$staycation->typeofHouse == "null")
        <section class="col-xs-12 col-sm-12 col-md-12">
            <div id="details" class="form-group">
                <strong>Type of House:</strong>
                <p>{{ $staycation->typeofHouse }}</p>
            </div>
        </section>
        <hr>
        @endif
        <section class="col-xs-12 col-sm-12 col-md-12">
            <div id="details" class="form-group">
                <strong>Privacy Type:</strong>
                <p>{{ $staycation->privacyType }}</p>
            </div>
        </section>
        <hr>
        <section class="col-xs-12 col-sm-12 col-md-12">
            <div id="details" class="form-group">
                <strong>Address:</strong>
                <p>{{ $staycation->address }}</p>
            </div>
        </section>
        <hr>
        <section class="col-xs-12 col-sm-12 col-md-12">
            <div id="details" class="form-group">
                <strong>Maximum Number of Guest:</strong>
                <p>{{ $staycation->numberGuest }}</p>
            </div>
        </section>
        <hr>
        <section class="col-xs-12 col-sm-12 col-md-12">
            <div id="details" class="form-group">
                <strong>Number of Bed:</strong>
                <p>{{ $staycation->numberBed }}</p>
            </div>
        </section>
        <hr>
        <section class="col-xs-12 col-sm-12 col-md-12">
            <div id="details" class="form-group">
                <strong>Number of Bedrooms:</strong>
                <p>{{ $staycation->numberBedrooms }}</p>
            </div>
        </section>
        <hr>
        <section class="col-xs-12 col-sm-12 col-md-12">
            <div id="details" class="form-group">
                <strong>Number of Bathrooms:</strong>
                <p>{{ $staycation->numberBathrooms }}</p>
            </div>
        </section>
        <hr>
        <section class="col-xs-14 col-sm-12 col-md-12">
            <div id="name" class="form-group">
                <strong>Amenities:</strong>
                @php $amenitieses = $staycation->amenities ? json_decode($staycation->amenities, true) : []; @endphp
                    @foreach($amenitieses as $amenities)
                    <p>{{$amenities}}</p>
                    @endforeach
            </div>
        </section>
        <hr>
        <section class="col-xs-14 col-sm-12 col-md-12">
            <div id="name" class="form-group">
                <strong>Guest Favorites:</strong>
                @php $guestFavorites = $staycation->guestFavorite ? json_decode($staycation->guestFavorite, true) : []; @endphp
                    @foreach($guestFavorites as $guestFavorite)
                    <p>{{$guestFavorite}}</p>
                    @endforeach
            </div>
        </section>
        <hr>
        <section class="col-xs-14 col-sm-12 col-md-12">
            <div id="name" class="form-group">
                <strong>Safety Items:</strong>
                @php $safetyItems = $staycation->safetyItem ? json_decode($staycation->safetyItem, true) : []; @endphp
                    @foreach($safetyItems as $safetyItem)
                    <p>{{$safetyItem}}</p>
                    @endforeach
            </div>
        </section>
        <hr>
        <section class="col-xs-12 col-sm-12 col-md-12">
            <div id="details" class="form-group">
                <strong>Title:</strong>
                <p>{{ $staycation->name }}</p>
            </div>
        </section>
        <hr>
        <section class="col-xs-14 col-sm-12 col-md-12">
            <div id="name" class="form-group">
                <strong>Highlights:</strong>
                @php $highlights = $staycation->highlight ? json_decode($staycation->highlight, true) : []; @endphp
                    @foreach($highlights as $highlight)
                    <p>{{$highlight}}</p>
                    @endforeach
            </div>
        </section>
        <hr>
        <section class="col-xs-12 col-sm-12 col-md-12">
            <div id="details" class="form-group">
                <strong>Details:</strong>
                <p>{{ $staycation->detail }}</p>
            </div>
        </section>
        <hr>
        <section class="col-xs-12 col-sm-12 col-md-12">
            <div id="price" class="form-group">
                <strong>Price:</strong>
                <p>{{ $staycation->price }}</p>
            </div>
        </section>
        <hr>
        <section class="col-xs-14 col-sm-12 col-md-12">
            <div id="name" class="form-group">
                <strong>Security:</strong>
                @php $securities = $staycation->security ? json_decode($staycation->security, true) : []; @endphp
                    @foreach($securities as $security)
                    <p>{{$security}}</p>
                    @endforeach
            </div>
        </section>
        <hr>
    </div>

    <!-- Sidebar -->
    <nav class="sidebar">
        <h3>{{ $staycation->name }}</h3>
        <label class="button">Listing details</label>
        <ul class="nav">
                <li>
                    <a href="#name">
                        <span>Name</span>
                    </a>
                </li>
            </ul>
            <ul class="nav">
                <li>
                    <a href="#details">
                       <span>Details</span>
                    </a>
            </li>
            </ul>
            <ul class="nav">
                <li>
                    <a href="#price">
                       <span>Price</span>
                    </a>
               </li>
           </ul>
    </nav>

<style>

.container{
    
    transition: 0.2s linear;
}

.sidebar{
    padding: 90px 30px;
    position: fixed;
    width: 190px;
    top: 0;
    left: 0;
    height: 100%;
 
}
nav label{
    
    font-size: 20px;
    font-weight: 500px;
    display: block;
    cursor: pointer;
    position: relative;
    
}
.sidebar ul li {
    margin: 8px 0;
}

.sidebar ul li a{
    color: black;
    padding: 0 15px;

}
.sidebar ul li a:hover{
    color: #000000;
    margin-left: 20px;
    
}
@media (max-width:768px) {
    .sidebar{
        position: fixed;
        top:0;
        left: -400px;
        height: 1000vh;
        width: 100%;
        max-width: 300px;
        transition: 0.2s linear;
          
    }
    .sidebar.is-active{
        left: 0;
    }
    
}

</style>
@endsection