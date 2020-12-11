
function calculate(){
var y = document.getElementById("size").selectedIndex;
  var tsize = document.getElementsByTagName("option")[y].value;
    var x = 150;
if (tsize == "small"){
    var x = 150 + 50;
    alert(x);
}
else 
    if (tsize == "medium"){
    var x = 150 + 80;
    alert(x);
}
else
    if (tsize == "large"){
    var x = 150 + 100;
    alert(x);
}
else
   if (tsize == "extra-large"){
        var x = 150 + 120;
    alert(x);
    }
push_total(x);
}

function push_total(x){
    localStorage.setItem("tshirt_total",parseInt(x));
    $(document).ready(function () { 
    createCookie("tshirt_total",x, "10"); 
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
    $.ajax({
        url:"/printeres/tpay.php",
        method: "post",
        data: parseInt(x),
        success: function(res){
            console.log(res);
        }
    })
    /* the data can be accessed by using the command $_POST['x']*/
    localStorage.setItem("size", document.getElementById("size").value);
    localStorage.setItem("shir_details", document.getElementById('details').value);
}


function getName() {
  return localStorage.getItem("username");
}

function username()
{
    var name = getName();
    document.getElementById('username').innerHTML = name;
}
var lastbtn = document.getElementById("payment");
lastbtn.onclick = function(){
    localStorage.setItem("object", "Tshirt");
    
    calculate();
}