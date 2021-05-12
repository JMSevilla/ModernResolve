//modified by jonathan 05/11/2021

// for practice porpuse only
// var oninputdata = document.getElementById('oninputdata')
// $('#ontestsubmit').click(function(){
//   alert(oninputdata.value);
// })


// var firstname = document.getElementById('txtfirstname');

// firstname.addEventListener('keyup' , event => {
//   if(event.keyCode === 13){
//     $('#onsubmit').click()
//   }
// })

//personalinformation variables
let txtclasscode = document.getElementById("txtclasscode");
let txtfname = document.getElementById("txtfname");
let txtlname = document.getElementById("txtlname");
let txtbdate = document.getElementById("txtbdate");
let age = document.getElementById("age");
let txtfemale = document.getElementById("txtfemale");
let txtmale = document.getElementById("txtmale");
let contact = document.getElementById("contact");

txtclasscode.addEventListener("keyup" , event =>{
  if (event.keyCode == 13)
  {
    $('#step1btn').click();
  }
})




