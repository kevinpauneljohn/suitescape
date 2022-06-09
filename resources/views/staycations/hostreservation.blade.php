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

</head>
<body>

<!-- Reservation for host -->
    
    <div class="reservation">
        <h2>Reservation</h2>
        <div class="list">
            <div class="tab">
                <button class="tablinks" onclick="tablist(event, 'Upcoming')" id="defaultOpen">Upcoming</button>
                <button class="tablinks" onclick="tablist(event, 'Complete')">Complete</button>
                <button class="tablinks" onclick="tablist(event, 'Canceled')">Canceled</button>
                <button class="tablinks" onclick="tablist(event, 'All')">All</button>
            </div>

            <div id="Upcoming" class="tabcontent">
                <h3>You have no upcoming reservations</h3>
            </div>

            <div id="Complete" class="tabcontent">
                <h3>No results found</h3>
                <p>Please try a different filter.</p> 
            </div>

            <div id="Canceled" class="tabcontent">
                <h3>No results found</h3>
                <p>Please try a different filters.</p>
            </div>

            <div id="All" class="tabcontent">
                <h3>You have no reservations</h3>
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
</body>
</html>


<style>
*{
    margin: auto;
    padding: 5px;
    max-width: 1000px;
    box-sizing: border-box;
    font-family: 'poppins', sans-serif;
}
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