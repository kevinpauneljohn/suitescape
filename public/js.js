function changeColor(boxId){
    var gBlack=document.getElementById(boxId);
    if (gBlack.className === "inputStyle") {
        gBlack.className += " borderBlack";
    }else{
        gBlack.className="inputStyle";
    }
}




function openfilterBox(){
    $('.showAmeneties-box').slideToggle();
    var dbody=document.getElementById('disableBody').style.display;

    document.getElementById('disableBody').style.display="block";
    document.body.style.overflow="hidden";
    if(dbody=="block"){
        document.getElementById('disableBody').style.display="none";
        document.body.style.overflow="auto";
    }

}
function closefilterBox(){
    document.getElementById('divFilter').style.display="none";
    document.body.style.overflow="auto";
}


function showPayment(){
    document.getElementById('showpaymentbox').style.display="block";
    document.body.style.overflow="hidden";
}

function closeshowpaymentBox(){
    document.getElementById('showpaymentbox').style.display="none";
    document.body.style.overflow="auto";
}

function showImageCell(){
    document.getElementById('imagecell-whole').style.display="block";
    document.body.style.overflow="hidden";
}
function closeshowimagecell(){
    document.getElementById('imagecell-whole').style.display="none";
    document.body.style.overflow="auto";
}



function showAmeneties(){
    var dbody=document.getElementById('disableBody').style.display;
    $('.showAmeneties-box').slideToggle();
    document.getElementById('disableBody').style.display="block";
    document.body.style.overflow="hidden";
    if(dbody=="block"){
        document.getElementById('disableBody').style.display="none";
        document.body.style.overflow="auto";
    }

}


function showallReviews(){
    var dbody=document.getElementById('disableBody').style.display;
    $('.showReview-box').slideToggle();
    document.getElementById('disableBody').style.display="block";
    document.body.style.overflow="hidden";
    if(dbody=="block"){
        document.getElementById('disableBody').style.display="none";
        document.body.style.overflow="auto";
    }

}


function showGuest() {
    $('.addguest').toggle();
}
function showGuestheader() {
    $('.addguestheader').toggle();
}
function showGuestmobile() {
    $('.addguestmobile').toggle();
}

function showguestImagegallery() {
    $('.addguestheader-imagegallery').toggle();
}

function closeaddguest(guestbox){
    if(guestbox == 'addguestheader'){
    document.getElementById('addguestheader').style.display="none";
    }
    else if(guestbox =='guestboxmobile'){
        document.getElementById('addguestmobile').style.display="none";
    }
    else if(guestbox =='addguestheader-imagegallery'){
        document.getElementById('addguestheader-imagegallery').style.display="none";
    }
    else{
    document.getElementById('addguest').style.display="none";
    }
}

// line 99 to 148 --function for adding guest -only for the imagegallery -I tried to use the same function as hoteldetails but it could not read the buttons from imagegallery.
function asd(operation, type){
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
        document.getElementById("childrenQtyheader-imagegallery").value= ++addChildren;
        document.getElementById("guestNumber").value= addGuest+addChildren;
        getchildrenvalue= document.getElementById("childrenQtyheader-imagegallery").value;
        inputchildren=getchildrenvalue;
        document.getElementById("childrenQtyheader-imagegallery").innerHTML = getchildrenvalue;
        document.getElementById('inputchildrenHeader-imagegallery').innerHTML=getchildrenvalue+" children";
    }
    else if(operation == 'minus' && type== 'children' && inputchildren>0){
        document.getElementById("childrenQtyheader-imagegallery").value= --addChildren;
        document.getElementById("guestNumber").value= addGuest+addChildren;
        getchildrenvalue= document.getElementById("childrenQtyheader-imagegallery").value;
        inputchildren=getchildrenvalue;
        document.getElementById("childrenQtyheader-imagegallery").innerHTML = getchildrenvalue;
        document.getElementById('inputchildrenHeader-imagegallery').innerHTML=getchildrenvalue+" children";
        if(inputchildren<=0){
            document.getElementById('inputchildrenHeader-imagegallery').innerHTML="";
        }
    }
    else if(operation == 'add' && type== 'infant'){
        document.getElementById("infantQtyheader-imagegallery").value= ++addInfant;
        getinfantvalue= document.getElementById("infantQtyheader-imagegallery").value;
        inputinfant=getinfantvalue;
        document.getElementById("infantQtyheader-imagegallery").innerHTML = getinfantvalue;
        document.getElementById('inputinfantHeader-imagegallery').innerHTML=getinfantvalue+" infant";
    }
    else if(operation == 'minus' && type== 'infant'&& inputinfant>0){
        document.getElementById("infantQtyheader-imagegallery").value= --addInfant;
        getinfantvalue= document.getElementById("infantQtyheader-imagegallery").value;
        inputinfant=getinfantvalue;
        document.getElementById("infantQtyheader-imagegallery").innerHTML = getinfantvalue;
        document.getElementById('inputinfantHeader-imagegallery').innerHTML=getinfantvalue+" infant";
        if(inputinfant<=0){
            document.getElementById('inputinfantHeader-imagegallery').innerHTML="";
        }
    }
}



//hoteldetails adding guest function
var addGuest=0;
var getgvalue;
var inputguests;

function guestQuantity(operation) {
    var numGuest=document.getElementById('numGuest').value;
    var totalGuest=document.getElementById('totalGuest').value;
    if(operation == 'add' && totalGuest<numGuest){
    document.getElementById("guestQty").value= ++addGuest;
    totalGuest=document.getElementById("totalGuest").value=addGuest+addChildren;
    getgvalue= document.getElementById("guestQty").value;
    /*
    document.getElementById("guestQty").innerHTML = getgvalue;
    document.getElementById("guestQtyheader").innerHTML = getgvalue;
    document.getElementById('inputguest').innerHTML=getgvalue+" guest";
    document.getElementById('guestheaderNum').innerHTML=getgvalue+" guest";
    document.getElementById('inputguest').value=getgvalue;


    document.getElementById("guestQtymobile").innerHTML = getgvalue;
    document.getElementById('inputguestmobile').innerHTML=getgvalue+" guest";
        */

    inputguests=getgvalue;
    var conbutton = document.querySelectorAll('#guestQty, #guestQtyheader, #guestQtymobile, #guestQtygallery');
    var conbox = document.querySelectorAll('#inputguest, #guestheaderNum, #inputguestmobile, #inputguestgallery');

    for(a=0;a<=2;a++){
        conbutton[a].innerHTML=getgvalue;

    }
    for(a=0;a<=2;a++){
        conbox[a].innerHTML=getgvalue+" guest";
    }
    /*
    price = document.getElementById("price").value;

    var prices = price*getgvalue;
    document.getElementById("inputguestss").innerHTML="PHP "+prices.toLocaleString();
    document.getElementById("inputguestsss").innerHTML="PHP "+prices.toLocaleString();
*/




    }else if(operation == 'minus' && inputguests>1){
        document.getElementById("guestQty").value= --addGuest;
        var getgvalue= document.getElementById("guestQty").value;
        totalGuest=document.getElementById("totalGuest").value=addGuest+addChildren;
        /*
        document.getElementById("guestQtyheader").innerHTML = getgvalue;
        document.getElementById("guestQty").innerHTML = getgvalue;
        document.getElementById('inputguest').innerHTML=getgvalue+" guest";
        document.getElementById('guestheaderNum').innerHTML=getgvalue+" guest";
        document.getElementById('inputguest').value=getgvalue;


        document.getElementById("guestQtymobile").innerHTML = getgvalue;
        document.getElementById('inputguestmobile').innerHTML=getgvalue+" guest";
        */
        inputguests=getgvalue;
        var conbutton = document.querySelectorAll('#guestQty, #guestQtyheader, #guestQtymobile');
        var conbox = document.querySelectorAll('#inputguest, #guestheaderNum, #inputguestmobile');
        for(a=0;a<=2;a++){
            conbutton[a].innerHTML=getgvalue;
        }
        for(a=0;a<=2;a++){
            conbox[a].innerHTML=getgvalue+" guest";
        }
        price = document.getElementById("price").value;

    var prices = price*getgvalue;
    document.getElementById("inputguestss").innerHTML="PHP "+prices.toLocaleString();
    document.getElementById("inputguestsss").innerHTML="PHP "+prices.toLocaleString();


    }



}

var addChildren=0;
var getchildrenvalue;
var inputchildren;
function childrenQuantity(operation) {
    var numGuest=document.getElementById('numGuest').value;
    var totalGuest=document.getElementById('totalGuest').value;
    if(operation == 'add' && totalGuest<numGuest){
    document.getElementById("childrenQty").value= ++addChildren;
    getchildrenvalue= document.getElementById("childrenQty").value;
    totalGuest=document.getElementById("totalGuest").value=addGuest+addChildren;
    /*
    document.getElementById("childrenQty").innerHTML = getchildrenvalue;
    document.getElementById("childrenQtyheader").innerHTML = getchildrenvalue;
    document.getElementById('inputchildren').innerHTML=getchildrenvalue+" children";
    document.getElementById('inputchildrenHeader').innerHTML=getchildrenvalue+" children";
    document.getElementById('inputchildren').value=getchildrenvalue;
    inputchildren=getchildrenvalue;

    document.getElementById("childrenQtymobile").innerHTML = getchildrenvalue;
    document.getElementById('inputchildrenmobile').innerHTML=getchildrenvalue+" children";
        */
    inputchildren=getchildrenvalue;
    var conbutton = document.querySelectorAll('#childrenQty, #childrenQtyheader, #childrenQtymobile');
    var conbox = document.querySelectorAll('#inputchildren, #inputchildrenHeader, #inputchildrenmobile');
    for(a=0;a<=2;a++){
        conbutton[a].innerHTML=getchildrenvalue;
    }
    for(a=0;a<=2;a++){
        conbox[a].innerHTML=getchildrenvalue+" children";
    }


    }else if(operation == 'minus' && inputchildren>0){
        document.getElementById("childrenQty").value= --addChildren;
        getchildrenvalue= document.getElementById("childrenQty").value;
        totalGuest=document.getElementById("totalGuest").value=addGuest+addChildren;
        /*
        document.getElementById("childrenQty").innerHTML = getchildrenvalue;
        document.getElementById("childrenQtyheader").innerHTML = getchildrenvalue;
        document.getElementById('inputchildren').innerHTML=getchildrenvalue+" children";
        document.getElementById('inputchildrenHeader').innerHTML=getchildrenvalue+" children";
        document.getElementById('inputchildren').value=getchildrenvalue;
        inputchildren=getchildrenvalue;

        document.getElementById("childrenQtymobile").innerHTML = getchildrenvalue;
        document.getElementById('inputchildrenmobile').innerHTML=getchildrenvalue+" children";
        */
        inputchildren=getchildrenvalue;
        var conbutton = document.querySelectorAll('#childrenQty, #childrenQtyheader, #childrenQtymobile');
        var conbox = document.querySelectorAll('#inputchildren, #inputchildrenHeader, #inputchildrenmobile');
        for(a=0;a<=2;a++){
            conbutton[a].innerHTML=getchildrenvalue;
        }
        for(a=0;a<=2;a++){
            conbox[a].innerHTML=getchildrenvalue+" children";
        }
        if(inputchildren<=0){
            document.getElementById('inputchildren').innerHTML="";
            document.getElementById('inputchildrenHeader').innerHTML="";
            document.getElementById('inputchildrenmobile').innerHTML="";
        }
    }
}


var addInfant=0;
var getinfantvalue;
var inputinfant;
function infantQuantity(operation) {
    if(operation == 'add'){
    document.getElementById("infantQty").value= ++addInfant;
    getinfantvalue= document.getElementById("infantQty").value;

    /*
    document.getElementById("infantQty").innerHTML = getinfantvalue;
    document.getElementById("infantQtyheader").innerHTML = getinfantvalue;
    document.getElementById('inputinfant').innerHTML=getinfantvalue+" infants";
    document.getElementById('inputinfantHeader').innerHTML=getinfantvalue+" infants";
    document.getElementById('inputinfant').value=getinfantvalue;
    */
    inputinfant=getinfantvalue;



    var conbutton = document.querySelectorAll('#infantQty, #infantQtyheader, #infantQtymobile');
    var conbox = document.querySelectorAll('#inputinfant, #inputinfantHeader, #inputinfantmobile');
    for(a=0;a<=2;a++){
        conbutton[a].innerHTML=getinfantvalue;
    }
    for(a=0;a<=2;a++){
        conbox[a].innerHTML=getinfantvalue+" infants";
    }

    }else if(operation == 'minus' && inputinfant>0){
        document.getElementById("infantQty").value= --addInfant;
        getinfantvalue= document.getElementById("infantQty").value;
        /*
        document.getElementById("infantQty").innerHTML = getinfantvalue;
        document.getElementById("infantQtyheader").innerHTML = getinfantvalue;
        document.getElementById('inputinfant').innerHTML=getinfantvalue+" infants";
        document.getElementById('inputinfantHeader').innerHTML=getinfantvalue+" infants";
        document.getElementById('inputinfant').value=getinfantvalue;
        inputinfant=getinfantvalue;

        document.getElementById("infantQtymobile").innerHTML = getinfantvalue;
        document.getElementById('inputinfantmobile').innerHTML=getinfantvalue+" children";
        */
        inputinfant=getinfantvalue;
        var conbutton = document.querySelectorAll('#infantQty, #infantQtyheader, #infantQtymobile');
        var conbox = document.querySelectorAll('#inputinfant, #inputinfantHeader, #inputinfantmobile');
        for(a=0;a<=2;a++){
            conbutton[a].innerHTML=getinfantvalue;
        }
        for(a=0;a<=2;a++){
            conbox[a].innerHTML=getinfantvalue+" infants";
        }
        if(inputinfant<=0){
            document.getElementById('inputinfant').innerHTML="";
            document.getElementById('inputinfantHeader').innerHTML="";
            document.getElementById('inputinfantmobile').innerHTML="";
        }
    }

}







window.addEventListener('resize',function(){
    var nodes = document.querySelectorAll('#divFilter, #showpaymentbox');
    var intFrameWidth = window.innerWidth;
    if(intFrameWidth >= 1000){
        for(var i=0;i<2;i++){
            nodes[i].style.display="none";
        }
    }
})





/*
$(document).on('change','#typeofPlace',function(e){
    e.preventDefault();
    e.disabled = true;
    var selectedType = $(this).val();
    $.ajax({
        method:"GET",
        url: "{{route('staycations.indexess')}}",
        cache:false,
        data:{
            $pType: selectedType
        },

    });


});
*/

$(document).ready(function(){
    $('#typeofPlace').on('change', function(){

        var value=$(this).val();
        alert(value);
    });


});

/*
.done(function(response) {
        console.log(response)
    });
*/
/*
    $(document).ready(function(){
        $('#typeofPlace').on('change', function(){

        var value=$(this).val();
        //alert(value);
        $.ajax({
            url:"{{route('staycations.indexess')}}",
            type: "POST",
            data: {value:value},
            beforeSend:function(){
                $('.content').html("<span>Working...</span>");
            },
            success:function(data){
                $('.content').html(data);
            }



        });
    });


    });
    */
/*
    function filter(){
        var selectedType=$('#typeofPlace option:selected').val();

        $.ajax({
            type: "GET",
            data: {
                'selectedType': selectedType
            },
            url: "{{route('users.indexess')}}",
            success:function(data){
                $('.content').html(data);
            }

        });
    }

    function hehe(){
        filter();
    }
*/
