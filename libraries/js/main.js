
// modified by Jonathan 05/11/2021

// import http from "./http.js";
// $('#onsubmit').click(() => {
//   var obj = {
//     fname: firstname.value,
//     Trigger: 1,
//     table: "tbdata"
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

function step1btn()
{
  alert("ok");
  // var step1data = {
  //   'data1' :  txtclasscode.value,
  //   'data2' :  txtfname.value,
  //   'data3' :  txtlname.value,
  //   'data4' :  txtlname.value,
  //   'data5' :  age.value,
  //   'data6' :  txtfemale.value,
  //   'data7' :  txtmale.value,
  //   'data8' :  contact.value
    
  // };

  // step1validation(step1data)
}
function step1validation(step1data)
{
  if (!step1data.data1)
  {
      document.getElementById("required").style.display = "block";
      document.getElementById("txtclasscode").style.borderColor = "red";
  }
}
