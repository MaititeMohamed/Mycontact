  //for Signup validation 
  const UserNameS=document.getElementById("UserNameS");
  const PasswordS=document.getElementById("PasswordS");
  const ConfermPassword=document.getElementById("ConfermPassword");
  const Signup=document.getElementById("Signup");
  // Signup event 
  UserNameS.addEventListener("focusout", validateUserNameS);
  PasswordS.addEventListener("focusout", validatepassS);
  ConfermPassword.addEventListener("focusout", ConfermPasswordS);
  //SignUp function
//userName validte
 var inputValideNum=0;
function validateUserNameS() {
let usernames = UserNameS.value;
if (usernames == "" || !usernames.match(/^[a-zA-Z]{5,}$/)) {
UserNameS.classList.add("Danger");
} 
else {
UserNameS.classList.remove("Danger");
inputValideNum++;

}
}
//pass validte
        function validatepassS() {
        let passS = PasswordS.value;
        if (passS == "" ||!passS.match(/^[a-zA-Z0-9_/.+-@]{6,}$/)) {
        // Med12Rt
        PasswordS.classList.add("Danger");
        } else {
        PasswordS.classList.remove("Danger"); 
        inputValideNum++;
        }




}
//confermpass
function ConfermPasswordS() {

    if(ConfermPassword.value!=PasswordS.value)
    {
        PasswordS.classList.add("Danger");
        
    }
    else{
        PasswordS.classList.remove("Danger");
        inputValideNum++;
    }
    if(inputValideNum==3)
        {
            Signup.disabled = false;
        } 
//
}