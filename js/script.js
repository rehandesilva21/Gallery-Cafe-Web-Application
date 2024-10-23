var modal = document.getElementById('id01');
var model2 = document.getElementById('id02');
    
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
    model2.style.display="block";
  }
}
function showPassword() {
    var x = document.getElementById("password");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }

  
    var input = document.getElementById("text");
    var text = document.getElementById("password");
    
    input.addEventListener("keyup", function(event) {

if (event.getModifierState("CapsLock")) {
    text.style.display = "block";
  } else {
    text.style.display = "none"
  }
});

function showSignUp() {
    var x = document.getElementById("id02");
    var y = document.getElementById("id01");
    if (x.style.display === "none") {
      x.style.display = "block";
      y.style.display ="block";
    } else {
      x.style.display = "block";
      y.style.display ="block";
      if (x.style.display === "block") {
        x.style.display = "none";
        y.style.display ="block";
      } else {
        x.style.display = "none";
        y.style.display ="none";
  
      }

    }
  }
  function showmessage(){
    var msg = document.getElementById('id03');
    if (msg.style.display=="block"){
        x.style.display="none";
    }
    else{}
    
 
  }
  function error(){
    var msg1 = document.getElementById('id03');
    if (msg1.style.display=="none"){
      msg1.style.display == "block";
  }
  else{}



  }
 