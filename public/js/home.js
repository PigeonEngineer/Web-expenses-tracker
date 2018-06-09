
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
    addCat(); 
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

function addCat() {
     
    // create a new div element 
        // var newDiv = document.createElement("div");
        // var newDiv2 = document.createElement("div"); 
        // // and give it some content 
        // newDiv.className='Jumbotron';
        // newDiv2.className='Jumbotron';
        // var newContent = document.createTextNode("Hi there and greetings!"); 
        // // add the text node to the newly created div
        // newDiv.appendChild(newContent);  
      
        // // add the newly created element and its content into the DOM 
        // var element = document.getElementById("inserthere");
        // element.appendChild(newDiv);   
      
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

 