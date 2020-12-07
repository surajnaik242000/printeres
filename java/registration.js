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

// function validate()
// {
//     if(pas.localeCompare(copas)){
//         alert("re-check your password please");}
    
//     if(isNaN(cellno)== false){
//         alert("enter the number properly");
//     }
    
// }
