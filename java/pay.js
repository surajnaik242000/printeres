
function getName() {
  return localStorage.getItem("username");
}

function username()
{
    var name = getName();
    document.getElementById('username').innerHTML = name;
    getdetails();
}

function getdetails(){
    var order = localStorage.getItem("object");
     document.getElementById('object').innerHTML = order;
    var total = localStorage.getItem("cup_total");
     document.getElementById('total').innerHTML = total+" "+"rupees";
    var occasion = localStorage.getItem("cup_occasion");
    document.getElementById('occasion').innerHTML = occasion;
    
    if(total == 350)
        {
            document.getElementById('type').innerHTML = "single color";
        }
    if( total == 400)
        {
            document.getElementById('type').innerHTML = "dual color";
        }
}
 
var done = document.getElementById("done");
done.onclick = function (){
    alert("your order has been placed and contact to 986532xxxx in five days.");
    myPrint();
}

function myPrint() {
            var printdata = document.getElementById("slip");
            newwin = window.open("");
            newwin.document.write(printdata.outerHTML);
            newwin.print();
            newwin.close();
        }