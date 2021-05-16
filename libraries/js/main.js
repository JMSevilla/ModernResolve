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

$('#btnLogin').click(() => {
  const data = {
    loginMethod: true,
    email: email_login.value,
    password: password_login.value,
    table: 'user'
  }

  validateLogin(data);
});

const validateLogin = data => {
  if(!data.email || !data.password) {
    alert('Fields are required!');
    return false;
  }
  else {
    http.build_Login(data);
  }
}
