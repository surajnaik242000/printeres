var line = document.getElementById("aline");
var span = document.getElementsByClassName("close")[0];
var pas = document.getElementById("passcode");
var copas = document.getElementById("conpassword");
var cellno = document.getElementById("cell");

line.onclick = function agreement(){
    termcondit.style.display = "block";
}

window.onclick = function(event) {
  if (event.target == termcondit) {
    termcondit.style.display = "none";
  }
}

span.onclick = function() {
  termcondit.style.display = "none";
}
 var flag = 0
function validate(){
    if(pas.value == copas.value){
      flag = 1;
    }
    else{
         alert("re-check your password please");
        window.href.location = "#";
    }
    
    if(isNaN(cellno)== false){
        alert("enter the number properly");
        window.href.location = "#";
    }  
}

//keep this part //
var submit = document.getElementById("submit");
submit.onclick = function f1(){
    validate();
    if(  flag == 1){
    window.location.href = "../html/firstscreen.html";
    }
}
