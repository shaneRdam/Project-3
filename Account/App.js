function TogglePassword() {
    var x = document.getElementById("myInput");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }

  var input = document.getElementsByClassName("InputCapslock");
  var text = document.getElementById("TextCapsLock");
  document.getElementById("TextCapsLock").style.display = "none";

  for (i = 0 ; i < input.length; i++) {
  input[i].addEventListener("keyup", function(e) {
    // If "caps lock" is pressed, display the warning text
    if (e.getModifierState("CapsLock")) {
      text.style.display = "block";
    } else {
      text.style.display = "none";
    }
  });
}