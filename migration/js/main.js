import http from "./http.js";

user();
province();
course();
classCode();
token();
codeverifier();
function user(){
  var obj = {
    userTrigger: 1,
    table: "user"
  }
  http.buildData_construct(obj)
}
function province(){
  var obj = {
    provinceTrigger: 1,
    table: "province"
  }
  http.buildData_construct(obj)
}
function course(){
  var obj = {
    courseTrigger: 1,
    table: "course"
  }
  http.buildData_construct(obj)
}
function classCode(){
  var obj = {
    classCodeTrigger: 1,
    table: "class_code"
  }
  http.buildData_construct(obj)
}
function token(){
  var obj = {
    tokenTrigger: 1,
    table: "token"
  }
  http.buildData_construct(obj)
}

function codeverifier(){
  var obj= {
    verifierCode: 1,
    table: "codeverifier"
  }
  http.buildData_construct(obj)
}