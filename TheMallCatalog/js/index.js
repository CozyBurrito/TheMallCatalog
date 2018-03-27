$('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});

function validate_login() {
  
  var x = document.getElementsByClassName("login-form");
  
  if(x[0].username.value == "" || x[0].password.value == "") {
	window.alert('login invalid');
    return false;
  }
  
}

function validate_register() {
  
  var x = document.getElementsByClassName("register-form");
  
  if(x[0].username.value == "" || x[0].password.value == "" || x[0].name.value == "" || x[0].email.value == "") {
	window.alert('registration invalid');
    return false;
  }
  
}