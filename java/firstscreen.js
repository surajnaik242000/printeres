var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("consumerid");

btn.onclick = function() {
  modal.style.display = "block";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

var submit = document.getElementById("submit");
 submit.onclick = function f1(){
    localStorage.setItem('username', document.getElementById("usn").value);
}

var gal = document.getElementById("designerid");
gal.onclick = function (){
    gal.target ="_blank";
    window.location.href = "https://surajknaik2000.wixsite.com/capturedright";
    
}