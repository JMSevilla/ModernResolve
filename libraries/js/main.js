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
