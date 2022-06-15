
<!-- Reservation for host -->
@extends('layouts.apps')

@section('content')
    <div class="reservation">
        <h2>Reservation</h2>
        <div class="list">
            <div class="tab">
                <button class="tablinks" onclick="tablist(event, 'Pending')" id="defaultOpen">Pending</button>
                <button class="tablinks" onclick="tablist(event, 'Upcoming')">Upcoming</button>
                <button class="tablinks" onclick="tablist(event, 'On-going')">On-going</button>
                <button class="tablinks" onclick="tablist(event, 'Complete')">Complete</button>
                <button class="tablinks" onclick="tablist(event, 'Cancelled')">Cancelled</button>
            </div>

            <div id="Pending" class="tabcontent">
                @if($pendcount>=1)
                <table class="table table-bordered">
                    <tr>
                        <th>Guest Name</th>
                        <th>Staycation Name</th>
                        <th>Check-In</th>
                        <th>Check-Out</th>
                        <th>Price</th>
                    </tr>
                    @foreach($reservations as $reservation)
                        @if($reservation->status == 'Pending')
                        @if ((date('Y-m-d') <= $reservation->dateStart))
                        <tr onclick="window.location='{{ route('reservations.show', $reservation->id) }}'" style="cursor: pointer;">
                            @foreach($users as $user)
                                @if($user->id == $reservation->userId)
                                    <td>{{ $user->fname}} {{ $user->lname}}</td>
                                @endif
                            @endforeach
                            @foreach($staycations as $staycation)
                                @if($staycation->id == $reservation->staycationId)
                                    <td>{{ $staycation->name }}</td>
                                @endif
                            @endforeach
                                    <td>{{ $reservation->dateStart}}</td>
                                    <td>{{ $reservation->dateEnd}}</td>
                                    <td>PHP {{ number_format($reservation->totalPrice) }}</td>
                        @endif
                        @endif
                        
                    @endforeach
                    </table>
               
                @else
                <h3>You have no upcoming reservations</h3>
                @endif
            </div>

            <div id="Upcoming" class="tabcontent">
                @if($upComing>=1)
                <table class="table table-bordered">
                    <tr>
                        <th>Guest Name</th>
                        <th>Staycation Name</th>
                        <th>Check-In</th>
                        <th>Check-Out</th>
                        <th>Price</th>
                    </tr>
                    @foreach($reservations as $reservation)
                        @if($reservation->status == 'Confirm')
                        @if ((date('Y-m-d') < $reservation->dateStart))
                        <tr>
                            @foreach($users as $user)
                                @if($user->id == $reservation->userId)
                                    <td>{{ $user->fname}} {{ $user->lname}}</td>
                                @endif
                            @endforeach
                            @foreach($staycations as $staycation)
                                @if($staycation->id == $reservation->staycationId)
                                    <td>{{ $staycation->name }}</td>
                                @endif
                            @endforeach
                                    <td>{{ $reservation->dateStart}}</td>
                                    <td>{{ $reservation->dateEnd}}</td>
                                    <td>PHP {{ number_format($reservation->totalPrice) }}</td>
                        @endif
                        @endif
                        
                    @endforeach
                    </table>
               
                @else
                <h3>You have no upcoming reservations</h3>
                @endif
            </div>

            <div id="On-going" class="tabcontent">
            @if($goingCount>=1)
            
                <table class="table table-bordered">
                    <tr>
                        <th>Guest Name</th>
                        <th>Staycation Name</th>
                        <th>Check-In</th>
                        <th>Check-Out</th>
                        <th>Price</th>
                    </tr>
                    @foreach($reservations as $reservation)
                        @if($reservation->status == 'Confirm')
                        @if ((date('Y-m-d') >= $reservation->dateStart) && (date('Y-m-d') <= $reservation->dateEnd))
                        <tr>
                            @foreach($users as $user)
                                @if($user->id == $reservation->userId)
                                    <td>{{ $user->fname}} {{ $user->lname}}</td>
                                @endif
                            @endforeach
                            @foreach($staycations as $staycation)
                                @if($staycation->id == $reservation->staycationId)
                                    <td>{{ $staycation->name }}</td>
                                @endif
                            @endforeach
                                    <td>{{ $reservation->dateStart}}</td>
                                    <td>{{ $reservation->dateEnd}}</td>
                                    <td>PHP {{ number_format($reservation->totalPrice) }}</td>
                        @endif
                        @endif
                        
                    @endforeach
                    </table>
               
                @else
                <h3>No results found</h3>
                <p>Please try a different filter.</p>
                @endif 
                 
            </div>

            <div id="Complete" class="tabcontent">
            @if($compCount>=1)
            
            <table class="table table-bordered">
                <tr>
                    <th>Guest Name</th>
                    <th>Staycation Name</th>
                    <th>Check-In</th>
                    <th>Check-Out</th>
                    <th>Price</th>
                </tr>
                @foreach($reservations as $reservation)
                    @if($reservation->status == 'Confirm')
                    @if ((date('Y-m-d') >= $reservation->dateStart) && (date('Y-m-d') >= $reservation->dateEnd))
                    <tr>
                        @foreach($users as $user)
                            @if($user->id == $reservation->userId)
                                <td>{{ $user->fname}} {{ $user->lname}}</td>
                            @endif
                        @endforeach
                        @foreach($staycations as $staycation)
                            @if($staycation->id == $reservation->staycationId)
                                <td>{{ $staycation->name }}</td>
                            @endif
                        @endforeach
                                <td>{{ $reservation->dateStart}}</td>
                                <td>{{ $reservation->dateEnd}}</td>
                                <td>PHP {{ number_format($reservation->totalPrice) }}</td>
                    @endif
                    @endif
                    
                @endforeach
                </table>
           
            @else
                <h3>No results found</h3>
                <p>Please try a different filters.</p>
            @endif
            </div>

            <div id="Cancelled" class="tabcontent">
            @if(($cancelled>=1) || ($overdue>=1))
            
            <table class="table table-bordered">
                <tr>
                    <th>Guest Name</th>
                    <th>Staycation Name</th>
                    <th>Check-In</th>
                    <th>Check-Out</th>
                    <th>Price</th>
                </tr>
                @foreach($reservations as $reservation)
                    @if(($reservation->status == 'Pending')&&(date('Y-m-d') >= $reservation->dateStart) || ($reservation->status == 'Cancelled'))
                    <tr>
                        @foreach($users as $user)
                            @if($user->id == $reservation->userId)
                                <td>{{ $user->fname}} {{ $user->lname}}</td>
                            @endif
                        @endforeach
                        @foreach($staycations as $staycation)
                            @if($staycation->id == $reservation->staycationId)
                                <td>{{ $staycation->name }}</td>
                            @endif
                        @endforeach
                                <td>{{ $reservation->dateStart}}</td>
                                <td>{{ $reservation->dateEnd}}</td>
                                <td>PHP {{ number_format($reservation->totalPrice) }}</td>
                    @endif
                @endforeach
                </table>
           
            @else
                <h3>You have no reservations</h3>
            @endif
            </div>

</div>
</div>
 

<script>
    function tablist(evt, tabName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(tabName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" 
document.getElementById("defaultOpen").click();


</script>


<style>

.list{
    padding: 10px;
}
.reservation button{
    margin-top: -20px;
    width:auto;
    padding:10px;
    border:0px solid black;
    cursor: pointer;
    background-color: white;
}

.reservation button:hover{
    color: #008489 ;
    transform: translate(-5px, -1px)
   
}

/* Style the buttons inside the tab */
.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
    margin-top: -20px;
    width:auto;
    
    border:0px solid black;
    cursor: pointer;
   
}

.tab button:hover {
    background-color: #ddd;
}

.tab button.active {
    background-color: #ccc;
}

.tabcontent {
    display: none;
    margin-top: 50px;
    padding: 10px;
    border-top: none;
}

</style>
@endsection