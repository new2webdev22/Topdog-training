let id = (id) => document.getElementById(id);

let classes = (classes) => document.getElementsByClassName(classes)


let username = id("username"),
email = id("email"),
message = id("message"),
form = id("form"),
errorMsg = classes("error"),
successIcon = classes("success-icon"),
faulureIcon = classes("failure-icon");

form.addEventListener("submit", (e)=>{
   e.preventDefault();

   engine(username, 0, "Name cannot be blank");
   engine(email, 1, "Email cannot be blank");
   engine(message, 2, "Message cannot be blank");
})

let engine = (id, serial, message) =>{
      if(id.value.trim() === ""){
    errorMsg[serial].innerHTML = message;
    faulureIcon[serial].style.opacity = "1";
    successIcon[serial].style.opacity = "0";
   }
   else{
    errorMsg[serial].innerHTML = "";
    faulureIcon[serial].style.opacity = "0"
    successIcon[serial].style.opacity = "1";
   }
}