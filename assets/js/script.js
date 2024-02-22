// Bootstrap Java-Script Form Validation Code Begin

(() => {
    'use strict'
  
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation')
  
    // Loop over them and prevent submission
    Array.from(forms).forEach(form => {
      form.addEventListener('submit', event => {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }
  
        form.classList.add('was-validated')
      }, false)
    })
  })()

  // Bootstrap Java-Script Form Validation Code End


//   Custom Validation Code Begin
const clearErrors = () => {
    errors = document.querySelectorAll('.formerror');
    for(let item of errors){
        item.innerHTML = "";
    }
}
function seterror(id, error){
    let element = document.getElementById(id);
    element.getElementsByClassName("formerror")[0].innerHTML = error;
}

const validate_form = () => {
    let returnvalue = true;
    clearErrors();
    let username = document.forms['myForm']['username'].value;
    let password = document.forms['myForm']['password'].value;

    if(username.length == 0){
        seterror("username", "Username can not be empty..!");
        returnvalue = false;
    }
    if(password.length == 0){
        seterror("password", "Password can not be empty..");
        returnvalue = false;
    }else if(password.length < 8){
        seterror("password", "Password can not less than 8 characters..!");
        returnvalue = false;
    }else if(password.length > 15){
        seterror("password", "password can not be greate than 15 characters");
        returnvalue = false;
    }




    return returnvalue;
}

//   Custom Validation Code End