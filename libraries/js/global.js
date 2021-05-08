
var firstname = document.getElementById('txtfirstname');

firstname.addEventListener('keyup' , event => {
  if(event.keyCode === 13){
    $('#onsubmit').click()
  }
})
