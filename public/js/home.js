
var bgcolor;
var ColorSet;
function setColors () {
   ColorSet = localStorage.getItem("colorset");
    bgcolor = localStorage.getItem("bgcolor");
    
    if (ColorSet=="true") {
        changeColor(bgcolor);
        //window.alert(bgcolor);
    } 
}
window.onload = function() {
    setColors();
   
}

/* Set the width of the side navigation to 250px and the left margin of the page content to 250px and add a black background color to body */
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    //document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
    //document.body.style.backgroundColor = "white";
} 

/*********************************************scroll button *******************/
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        document.getElementById("scrollBtn").style.display = "block";
    } else {
        document.getElementById("scrollBtn").style.display = "none";
    }
}

function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
function changeColor (color) {
    //window.alert(color);
    document.body.style.backgroundColor = color;
    localStorage.removeItem("bgcolor");
    localStorage.setItem("bgcolor", color);
    localStorage.setItem("colorset", "true");
    
    //ColoSet=true;
    //localStorage.bgcolor = color;
    return false;
}


var pressed=false; 
function text () {
    var text=document.getElementById('show');
     if (pressed==false) {
         pressed=true;
         text.innerHTML="Hide Categories";
     }
     else {
         pressed=false;
         text.innerHTML= "Show more categories";
     }
     


 }

 