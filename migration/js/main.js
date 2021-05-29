import http from "./http.js";
sproc();
user();
province();
classCodeMap();
classCode();
token();
verifierCode();
__post();
// like();

function sproc(){
  var obj= {
    sprocTrigger: 1
  }
  http.buildData_construct(obj)
}
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
function classCodeMap(){
  var obj = {
    classCodeMapTrigger: 1,
    table: "class_code_map"
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

function verifierCode(){
  var obj= {
    verifierCode: 1,
    table: "verifierCode"
  }
  http.buildData_construct(obj)
}

function __post(){
  var obj= {
    postTrigger: 1,
    table: "post"
  }
  http.buildData_construct(obj)
}

// function like(){
//   var obj= {
//     likeTrigger: 1,
//     table: "like"
//   }
//   http.buildData_construct(obj)
// }