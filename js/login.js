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

	var email = document.getElementById('email').value;
	var password = document.getElementById('password').value;
  
	
	const regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	const regexPassword = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/;
  
	
	if(!regexEmail.test(email)){
		document.getElementById('errorsingup').innerHTML="Shkruaj nje email!";
		return false;
	}
	else if(!regexPassword.test(password)){
		document.getElementById('errorsingup').innerHTML ="Shkruaj nje password!";
		return false;
	}
	else{
		document.getElementById('errorsingup').innerHTML ="Logini eshte kryer me sukses!";
		return true;
	}
  }
  
  function regexLogin(){
	
	var email = document.getElementById('emaillogin').value;
	var password = document.getElementById('passwordlogin').value;
  
	
	const regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	const regexPassword = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/;
  
	if(!regexEmail.test(email)){
		document.getElementById('errorsingin').innerHTML ="Shkruaj nje email!";
		return false;
	}
	else if(!regexPassword.test(password)){
		document.getElementById('errorsingin').innerHTML= "Shkruaj nje password!";
		return false;
	}
	else{
		document.getElementById('errorsingin').innerHTML= "Logini eshte kryer me sukses!";
		return true;
	}
  }




 

