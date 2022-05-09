
let mobile_num = document.getElementById("mobile_no");

function validateForm(){
    var phoneno = /^\d{10}$/;

  if((mobile_num.value.match(phoneno))){
      return true;
        }

    else{
        event.preventDefault();
        alert("Mobile number is invalid.");
        return false;
        }

}


