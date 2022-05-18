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
        <section class="col-xs-14 col-sm-12 col-md-12">
            <div id="name" class="form-group">
                <strong>Name:</strong>
                <p>{{ $staycation->name }}</p>
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