//varaibles
const Avatar=document.getElementById("Avatar");
const Name=document.getElementById("Name");
const PhoneNumber=document.getElementById("PhoneNumber");
const email=document.getElementById("email");
const Addres=document.getElementById("Addres");
const Edit=document.getElementById("Edit");

//  event 
Avatar.addEventListener("focusout", validateAvatar);
Name.addEventListener("focusout", validateName);
email.addEventListener("focusout", valdateemail);
PhoneNumber.addEventListener("focusout", validatePhoneNumber);
Addres.addEventListener("focusout", validateAddres);
var inputVnum=0;
//function

//validateAvatar
 function validateAvatar(){
   if(Avatar.value=="")
   {
    Avatar.classList.add("Danger");
   }else{
    Avatar.classList.remove("Danger");
    inputVnum++;
   }
 }

 //validateName
 function validateName(){

    let name = Name.value;
    if (name == "" || !name.match(/^[a-z]{5,}$/)) {
        Name.classList.add("Danger");
    } 
    else {
        Name.classList.remove("Danger");
        inputVnum++;
    }
}

//valdateemail 
function valdateemail(){
    let mail = email.value;
    if (mail == "" || !mail.match(/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/)) {
        email.classList.add("Danger");
    } 
    else {
        email.classList.remove("Danger");
        inputVnum++;
    }
}



//validatePhoneNumber
function validatePhoneNumber(){
    let phoneNum = PhoneNumber.value;
    if (phoneNum == "" || !phoneNum.match(/^[0-9]{10}$/)) {
        PhoneNumber.classList.add("Danger");
    } 
    else {
        PhoneNumber.classList.remove("Danger");
        inputVnum++;
    }
}

//validateAddres
function validateAddres(){
    let addres = Addres.value;
    if (addres == "" || !addres.match(/^[0-9a-zA-Z]{10,}$/)) {
        Addres.classList.add("Danger");
    } 
    else {
        Addres.classList.remove("Danger");
        inputVnum++;
    }

    if(inputVnum==6){
        Edit.disabled = false;
    }
}




//#######################################################################
//varaibles
const AvatarA=document.getElementById("AvatarA");
const NameA=document.getElementById("NameA");
const PhoneNumberA=document.getElementById("PhoneNumberA");
const emailA=document.getElementById("emailA");
const AddresA=document.getElementById("AddresA");
const Add=document.getElementById("Add");

//  event 
AvatarA.addEventListener("focusout", validateAvatarA);
NameA.addEventListener("focusout", validateNameA);
emailA.addEventListener("focusout", valdateemailA);
PhoneNumberA.addEventListener("focusout", validatePhoneNumberA);
AddresA.addEventListener("focusout", validateAddresA);
var inputVnumA=0;
//function

//validateAvatar
 function validateAvatarA(){
   if(AvatarA.value=="")
   {
    AvatarA.classList.add("Danger");
   }else{
    AvatarA.classList.remove("Danger");
    inputVnumA++;
   }
 }

 //validateName
 function validateNameA(){

    let nameA = NameA.value;
    if (nameA == "" || !nameA.match(/^[a-z]{5,}$/)) {
        NameA.classList.add("Danger");
    } 
    else {
        NameA.classList.remove("Danger");
        inputVnumA++;
    }
}

//valdateemail 
function valdateemailA(){
    let mailA = emailA.value;
    if (mailA == "" || !mailA.match(/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/)) {
        emailA.classList.add("Danger");
    } 
    else {
        emailA.classList.remove("Danger");
        inputVnumA++;
    }
}



//validatePhoneNumber
function validatePhoneNumberA(){
    let phoneNumA = PhoneNumberA.value;
    if (phoneNumA == "" || !phoneNumA.match(/^[0-9]{10}$/)) {
        PhoneNumberA.classList.add("Danger");
    } 
    else {
        PhoneNumberA.classList.remove("Danger");
        inputVnumA++;
    }
}

//validateAddres
function validateAddresA(){
    let addresA = AddresA.value;
    if (addresA == "" || !addresA.match(/^[0-9a-zA-Z]{10,}$/)) {
        AddresA.classList.add("Danger");
    } 
    else {
        AddresA.classList.remove("Danger");
        inputVnumA++;
    }

    if(inputVnumA==6){
        Add.disabled = false;
    }
}

