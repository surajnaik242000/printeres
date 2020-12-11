
function getName() {
  return localStorage.getItem("username");
}

function username()
{
    var name = getName();
    document.getElementById('username').innerHTML = name;
}

function calculate(){
var y = document.getElementById("cuptype").selectedIndex;
  var tsize = document.getElementsByTagName("option")[y].value;
if (tsize == "single"){
     x = 300 + 50;
}
else 
    if (tsize == "dual"){
     x = 300 + 100;
}
push_total(x);
}

function push_total(x){
    localStorage.setItem("cup_total",parseInt(x));
  
   $(document).ready(function () { 
    createCookie("cup_total",x, "10"); 
}); 
   
// Function to create the cookie 
function createCookie(name, value, days) { 
    var expires; 
      
    if (days) { 
        var date = new Date(); 
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000)); 
        expires = "; expires=" + date.toGMTString(); 
    } 
    else { 
        expires = ""; 
    } 
      
    document.cookie = escape(name) + "=" +  
        escape(value) + expires + "; path=/"; 
} 

    //this code pushes data to your php
    $.ajax({
        url:"(enter your php file for cup payment)",
        method: "post",
        data: parseInt(x),
        success: function(res){
            console.log(res);
        }
    })
    /* the data can be accessed by using the command $_POST['x']*/
    localStorage.setItem("cup_occasion",document.getElementById("occasion").value);
    localStorage.setItem("cup_detail",document.getElementById("details").value);
    localStorage.setItem("image_file",document.getElementById("file").value);
}

var lastbtn = document.getElementById("payment");
lastbtn.onclick = function(){
    localStorage.setItem("object", "Coffee Mug");
    calculate();
}
