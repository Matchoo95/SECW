// TODO get this validation for the register form working and add more
function validateRegisterForm(){
  var x = document.forms["username"]["password"]["email"]["firstname"]["lastname"].value;
  if (x == ""){
    alert("All Fields Must Be Filled In");
    return false;
  }
}
