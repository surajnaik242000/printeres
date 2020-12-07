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
    var total = localStorage.getItem("tshirt_total");
     document.getElementById('total').innerHTML = total+" "+"rupees";
    var occasion = localStorage.getItem("size");
    document.getElementById('size').innerHTML = occasion;
}