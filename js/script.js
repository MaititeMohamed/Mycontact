//variables

//for login validation 
const UserNamel=document.getElementById("UserNamel");
const Passwordl=document.getElementById("Passwordl");
const SignInbtn=document.getElementById("SignInbtn");

 
//event 
// login event 
UserNamel.addEventListener("focusout", validateUserName);
Passwordl.addEventListener("focusout", validatepass);
//function


//login function
//userName validte
   var inputvalid=0;
  function validateUserName() {
    let username = UserNamel.value;
    if (username == "" || !username.match(/^[a-z]{5,}$/)) {
        UserNamel.classList.add("Danger");
    } 
    else {
        UserNamel.classList.remove("Danger");
        inputvalid++;
        
     }
  }
  //pass validte
  function validatepass() {
    let pass = Passwordl.value;
    if (pass == "" ||!pass.match(/^[a-zA-Z0-9_/.+-@]{6,}$/)) {
        Passwordl.classList.add("Danger");
    } else {
        Passwordl.classList.remove("Danger"); 
        inputvalid++; 
     }
     if(inputvalid==2){
        SignInbtn.disabled = false;
     }

  }
  