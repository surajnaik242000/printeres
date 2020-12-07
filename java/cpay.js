
function getName() {
  return localStorage.getItem("username");
}

function username()
{
    var name = getName();
    document.getElementById('username').innerHTML = name;
    getdetails();
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

function getdetails(){
    var order = localStorage.getItem("object");
     document.getElementById('object').innerHTML = order;
    var total = localStorage.getItem("case_total");
     document.getElementById('total').innerHTML = total+" "+"rupees";
    var bgcolor = localStorage.getItem("case_bgcolor");
    document.getElementById('bg').innerHTML = bgcolor;
     var cover = localStorage.getItem("case_type");
    document.getElementById('cover').innerHTML = cover;
    var model = localStorage.getItem("case_model");
    document.getElementById('model').innerHTML =model;
    var comp = localStorage.getItem("case_company");
    document.getElementById('comp').innerHTML = comp;
}
