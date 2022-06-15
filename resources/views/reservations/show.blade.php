@extends('layouts.apps')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Reservation</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('reservations.index') }}"> Back </a>
            <hr>
            </div>
        </div>
    </div>
    


    <!-- details -->
    <div class="container">
        <section class="col-xs-12 col-sm-12 col-md-12">
            <div id="details" class="form-group">
                <strong>Guest Name:</strong>
                @foreach ($users as $user)
                @if ($user->id == $reservation->userId)
                <p>{{ $user->fname }} {{ $user->lname }}</p>
                @endif
                @endforeach
            </div>
        </section>
        <hr>

        <section class="col-xs-12 col-sm-12 col-md-12">
            <div id="details" class="form-group">
                <strong>Staycation Name:</strong>
                @foreach ($staycations as $staycation)
                @if ($staycation->id == $reservation->staycationId)
                <p>{{ $staycation->name }}</p>
                @endif
                @endforeach
            </div>
        </section>
        <hr>
        <section class="col-xs-12 col-sm-12 col-md-12">
        <div id="details" class="form-group">
                <strong>Check-In:</strong>
                <p>{{ $reservation->dateStart }}</p>
            </div>
        </section>
        <hr>

        <section class="col-xs-12 col-sm-12 col-md-12">
        <div id="details" class="form-group">
                <strong>Check-Out:</strong>
                <p>{{ $reservation->dateEnd }}</p>
            </div>
        </section>
        <hr>

        <section class="col-xs-12 col-sm-12 col-md-12">
        <div id="details" class="form-group">
                <strong>Price:</strong>
                <p>PHP {{ number_format($reservation->totalPrice) }}</p>
            </div>
        </section>
        <hr>

        <section class="col-xs-12 col-sm-12 col-md-12">
        <div id="details" class="form-group">
        <form action="{{ route('reservations.update',$reservation->id) }}" method="POST">
    	@csrf
        @method('PUT')
                <input type="hidden" name="status" value="Confirm">
                <button class="btn btn-success" type="submit">Confirm</button>
        </form>
        <form action="{{ route('reservations.update',$reservation->id) }}" method="POST">
    	@csrf
        @method('PUT')
                <input type="hidden" name="status" value="Cancelled">
                <button class="btn btn-danger" type="submit">Reject</button>
        </form>
            </div>
        </section>
        <hr>
    </div>


    
@endsection