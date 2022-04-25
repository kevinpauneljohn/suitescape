function changeColor(boxId){
    var gBlack=document.getElementById(boxId);
    if (gBlack.className === "inputStyle") {
        gBlack.className += " borderBlack";
    }else{
        gBlack.className="inputStyle";
    }
}




function openfilterBox(){
    $(".divFilter").slideToggle();
    document.body.style.overflow="hidden";
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


/*
function closeBox(screenSize) {
    var nodes = document.querySelectorAll('#divFilter, #showpaymentbox');
    if(screenSize.matches){
        for(var i=0;i<2;i++){
            nodes[i].style.display="none";
        }
    }
  }


  // Create a MediaQueryList object
  const mmObj = window.matchMedia("(min-width: 1000px)");

  // Call the match function at run time:
  closeBox(mmObj);

  // Add the match function as a listener for state changes:
  mmObj.addListener(closeBox);
*/
window.addEventListener('resize',function(){
    var nodes = document.querySelectorAll('#divFilter, #showpaymentbox');
    var intFrameWidth = window.innerWidth;
    if(intFrameWidth >= 1000){
        for(var i=0;i<2;i++){
            nodes[i].style.display="none";
        }
    }
})


