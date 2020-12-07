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


