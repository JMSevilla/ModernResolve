import http from "./http.js";

user();

function user(){
  var obj = {
    userTrigger: 1,
    table: "user"
  }
  http.buildData_construct(obj)
}

// $('#onsubmit').click(() => {
//   var obj = {
//     Trigger: 1,
//     table: "test"
//   }
//   validate(obj)
// })

// function validate(obj){
//   if(!obj.fname){
//     alert("empty fields");
//     return false;
//   } else{
//     http.buildData_construct(obj)
//   }
// }
