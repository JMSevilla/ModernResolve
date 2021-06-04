import http from "./http.js";
$('#onsubmit').click(() => {
  var obj = {
    fname: firstname.value,
    Trigger: 1,
    table: "tbdata"
  }
  validate(obj)
})

function validate(obj){
  if(!obj.fname){
    alert("empty fields");
    
    return false;
  } else{
    http.buildData_construct(obj)
  }
}

// Emman
generate_token(10)
function generate_token(length){
  //edit the token allowed characters
  var a = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890".split("");
  var b = [];
  for (var i=0; i<length; i++) {
      var j = (Math.random() * (a.length-1)).toFixed(0);
      b[i] = a[j];
  }
  return token = b.join("");
}

$('#btnLogin').click(() => {
  const data = {
    loginMethod: true,
    email: email_login.value,
    password: password_login.value,
    table: 'user', oauthtoken: token
  }
  localStorage.setItem('eml', data.email)
  validateLogin(data);
});


const validateLogin = data => {
  if(!data.email || !data.password) {
    // alert("Please input data!")
    document.getElementById("email_login").style.boxShadow = "0 0 0 0 #ff0040";
    document.getElementById("email_login").style.border = "1px red solid";
    document.getElementById("error").style.display = "inline";
    document.getElementById("password_login").style.boxShadow = "0 0 0 0 #ff0040";
    document.getElementById("password_login").style.border = "1px red solid";
    document.getElementById("error1").style.display = "inline";

     
  
    return false;
  }
  else {
    http.build_Login(data);
  }
}


 tokenscan()

  function tokenscan() {
  let state = "";
  $.post('app/session/global_token_scanner.php', state={
    token_scanning: true
  }, function(response){
    var jsondestroy = JSON.parse(response)
    if(jsondestroy.teacher === 'exist') {
      window.location.href = "http://localhost/torrestech/modernresolve/teacherdash"
    }
  })
}