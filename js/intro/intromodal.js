// Get the modal
var myIntromodal = document.getElementById("myIntroModal");

// Get the button that opens the modal
//var btn = document.getElementById("Btn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
window.onload = function() {
 myIntromodal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
myIntromodal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
//window.onclick = function(event) {
 // if (event.target == modal) {
   // modal.style.display = "none";
  //}
//}
