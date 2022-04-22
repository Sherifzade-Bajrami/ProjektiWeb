const loginForm = document.querySelector("form.login");
const registerForm = document.querySelector("form.register");
const loginBtn = document.querySelector("label.login");
const registerBtn = document.querySelector("label.register");
const registerLink = document.querySelector(".register-link a");
const loginText = document.querySelector(".title-text .login");
const registerText = document.querySelector(".title-text .register");
registerBtn.onclick = (()=>{
   loginForm.style.marginLeft = "-50%";
   loginText.style.marginLeft = "-50%";
});
loginBtn.onclick = (()=>{
    loginForm.style.marginLeft = "0%";
    loginText.style.marginLeft = "0%";
 });
 registerLink.onclick = (()=>{
    registerBtn.click();
    return false;
 });
function regex(){
   
   const regexEmail = /^\w+([\.-]?\w+)@\w+([\.-]?\w+)(\.\w{2,3})+$/;
   var input= document.getElementById('email').value;
   var testo = regexEmail.test(input);

   var passwordRegex=/^[A-Z]{1} [a-z]{8}\d{1}$ /;
   var input= document.getElementById('password').value;
   var testo = passwordRegex.test(input);
   
   
   if(testo){
       console.log('Te dhenat jane shenuar mire');
   }
   else{
       console.log('Te dhenat nuk jane shenuar mire');
   }
}



 

