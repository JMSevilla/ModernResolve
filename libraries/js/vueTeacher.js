ELEMENT.locale(ELEMENT.lang.en)
    new Vue({
        el:'#teacher',
        
        data: function(){
          var validatePass1ResetTeach = (rule, value, callback) => {
            if (value === '') {
              callback(new Error('Please input the old password'));
            }else {
              callback();
            }
          };
          var validatePass2ResetTeach = (rule, value, callback) => {
            if (value === '') {
              callback(new Error('Please input the new password'));
            } else {
              if (this.resetteacher.checkPass !== '') {
                this.$refs.resetteacher.validateField('checkPass');
              }
              callback();
            }
          };
          var validatePass3ResetTeach = (rule, value, callback) => {
            if (value === '') {
              callback(new Error('Please input the password again'));
            } else if (value !== this.resetteacher.newpass) {
              callback(new Error('Password Mismatch!'));
            } else {
              callback();
            }
          };
          var validateaddclass = (rule, value, callback) => {
            if (value === '') {
              callback(new Error('Please input the Class Name'));
            }else {
              callback();
            }
          };
          var validatePassStudReset = (rule, value, callback) => {
            if (value === '') {
              callback(new Error('Please input the password'));
            } else {
              if (this.resetstudent.checkPass !== '') {
                this.$refs.resetstudent.validateField('checkPass');
              }
              callback();
            }
          };
          var validatePassStudReset1 = (rule, value, callback) => {
            if (value === '') {
              callback(new Error('Please input the password again'));
            } else if (value !== this.resetstudent.pass) {
              callback(new Error('Password Mismatch!'));
            } else {
              callback();
            }
          };
            return{
                app: 'app/',
                Helpers: 'Helpers',
                is_activate_indicator: '',
                dialogVisible: false,
                className: '',
                activeName: 'first',
                resetteacherdialogVisible: false,
                resetlabelPosition:'left',
                EditdialogVisible:false,
                modalpostdialogVisible:false,
                textarea:'',
                commentInput:'',
                assignDialogVisible: false,
                assignLabelPosition: 'top',
                resetStuddialogVisible:false,
                resetStudlabelPosition:'left',
                assignment: {
                  title: '',
                  instructions: '',
                  date: '',
                  time: '',
                  type:[],
                },
                resetteacher:{
                    oldpass:'',
                    newpass:'',
                    checkPass:'',
                  },
                resetstudent:{
                  pass:'',
                  checkPass:'',
                  id: '',
                  updatePass: true,
                  table: 'user'
                },
                labelPosition: 'left',
                addclass:{
                  addclass:'',
                },
                profile: {
                    table: 'user',
                    editprofT: true,
                    email: localStorage.getItem('eml'),
                    fname:'',
                    lname:'',
                    bdate: '',
                    age: '',
                    sex:'',
                    contact:'',
                    address:'',
                    street:'',
                    province:'',
                    municipality:'',
                    zipcode:'',
                    hiName: '',
                    classnameTitle: localStorage.getItem('name')
                  },

                  post: {
                    userID: '',
                    class_codeID: '',
                    description: '',
                    files: '',
                    writeTrig: true,
                    name: '',
                    ccid:localStorage.getItem('ccid'),
                    uid: localStorage.getItem('uid')
                  },

                  fetch: [],
                  
                  chngpss_member: {
                    pass:'',
                    checkPass:'',
                    id: '',
                    updatePass: true,
                    table: 'user'
                  },

                  teacherID: '', //emman
                  teacherclasscode: '',
                  status: '',

                 classTask: {
                  classname:'',
                  generatedClassCode: '',
                  classCodeTrigger: true, currentUser: localStorage.getItem('eml'),
                  editclassname:'',
                },
                value1: true,

                options: [],

                value: '',
                rulesteacher:{
                  oldpass: [
                    { validator: validatePass1ResetTeach, trigger: 'blur' }
                  ],
                  newpass: [
                    { validator: validatePass2ResetTeach, trigger: 'blur' }
                  ],
                  checkPass: [
                    { validator: validatePass3ResetTeach, trigger: 'blur' }
                  ],    
                },
                rulesaddclass:{
                  addclass: [
                    { validator: validateaddclass, trigger: 'blur' }
                  ],    
                },
                rulesresetstudent:{
                  pass: [
                    { validator: validatePassStudReset, trigger: 'blur' }
                  ],
                  checkPass: [
                    { validator: validatePassStudReset1, trigger: 'blur' }
                  ] 
                },
                rulesAssignment: {
                  title: [
                    {  required: true, message: 'Please input data', trigger: 'blur' },
                  ],
                  instructions: [
                    { required: true, message: 'Please input data', trigger: 'change' }
                  ],
                  date: [
                    { type: 'date', required: true, message: 'Please pick a date', trigger: 'change' }
                  ],
                  time: [
                    { type: 'date', required: true, message: 'Please pick a time', trigger: 'change' }
                  ],
                  type: [
                    {type: 'array',required: true, message: 'Please click the checkbox', trigger: 'change' }
                  ],
                },
                rulesclassTask:{
                  classname: [
                    {  required: true, message: 'Please input class name', trigger: 'blur' },
                  ]
                },
                activeMem: 'first',
                studentTableData: [],
                teacherTableData: [],
                searchStudent: '',
                ownerTableData: [{
                  Avatar:'',
                  name: 'Juan Dela Cruz  (Class Owner)',
                }], 

                quiz: {
                  title: '',
                  instruction: '',
                  // quiztitletrigger: true,
                  // table: 'quiz_title_map',
                  // islock: 'open',
                },

               
                classowner: [],
                editclass: '',
                quiztype: [{
                  value: 'True/False',
                  label: 'True/False'
                }, {
                  value: 'Multiple Choice',
                  label: 'Multiple Choice'
                }, {
                  value: 'Short Answer',
                  label: 'Short Answer'
                }, {
                  value: 'Fill in the blanks',
                  label: 'Fill in the blanks'
                },{
                  value: 'Multiple Answer',
                  label: 'Multiple Answer'
                }],
                value: '',
                valueTF:'',
                key: 1,
                valueMC:'',
                valueMA:[],
                num:'',
                num2: '',
                num3:'',
                num4:'',
                num5:'',
                indicator:'',
                mc: '',
                textMc1:'',
                textMc2:'',
                textMc3:'',
                textMc4:'',
                textMc5:'',
                file_upload_assignment: '',

                classname:[],
                nameclass: localStorage.getItem('name'),
                ccid: localStorage.getItem('ccid'),
                uid: localStorage.getItem('uid'),
                t_id: localStorage.getItem('tID'),
                //quiz in new teacher dash
                objTF: [{
                    key: Date.now(),
                    // titleID:localStorage.getItem('tID'),
                    quiztype:'True/False',
                    question:'',
                    choice1:'True',
                    choice2:'False',
                    choice3:'',
                    choice4:'',
                    choice5:'',
                    points:'',
                    answer:'',
                  }],

                objMC: [{
                  key: Date.now(),
                  // titleID:localStorage.getItem('tID'),
                  quiztype:'Multiple Choice',
                  question:'',
                  choice1:'',
                  choice2:'',
                  choice3:'',
                  choice4:'',
                  choice5:'',
                  points:'',
                  answer:'',
                }],

                objSA: [{
                  key: Date.now(),
                  // titleID:localStorage.getItem('tID'),
                  quiztype:'Short Answer',
                  question:'',
                  choice1:'',
                  choice2:'',
                  choice3:'',
                  choice4:'',
                  choice5:'',
                  points:'',
                  answer:'',
                }],

                objFB: [{
                  key: Date.now(),
                  // titleID:localStorage.getItem('tID'),
                  quiztype:'Fill in the Blanks',
                  question:'',
                  choice1:'',
                  choice2:'',
                  choice3:'',
                  choice4:'',
                  choice5:'',
                  points:'',
                  answer:'',
                }],

                objMA: [{
                  key: Date.now(),
                  // titleID:localStorage.getItem('tID'),
                  quiztype:'Multiple Answer',
                  question:'',
                  choice1:'',
                  choice2:'',
                  choice3:'',
                  choice4:'',
                  choice5:'',
                  points:'',
                  answer:'',
                }],
                quizdataTableData:[
                  // {
                  //   Avatar:'',
                  //   fullname:'Hannah',
                  //   status:'Open',
                  //   timesubmitted:'July 7, 2021'  
                  // }
                ],
                searchQuiz:'',
                studassignLabelPosition: 'top',
                // tableDataFetchQuiz:[],
                quizgradeFetchData:[
                //   {
                //   question:'',
                //   studanswer:'',
                //   choice1:'',
                //   choice2:'',
                //   choice3:'',
                //   choice4:'',
                //   choice5:'',
                //   points:''
                // }
              ],
              SApoints:[],

              editclass: '',
              editIDclss: '',
              file:'',
              assignmentdataTableData:[
                {
                  Avatar:'',
                  fullname:'Hannah',
                  status:'Submitted',
                  created:'July 7, 2021'  
                }
              ],
              assignTitle:'',
              assignInstruction:'',
              assignPoints:'',
              assignDuedate:'',
              assignfilename:''
            }
        },
        
            
        created: function(){
          this.getpassTeacherdash();
          this.generate_token(5);
          this.fetchClass();
          this.fetchpost();
          this.teachermembers();
          this.classteacher(); 
          this.fetchquizdatatable(); 
          this.btngrade(localStorage.getItem('scid'));
        },
        
        methods: {

          btnGETclass(name, id) {
            this.editclass = name;
            this.editIDclss = id;
            console.log(this.editclass)
            // let editclss_dt = {
            //   editclssTrig: true,
            //   table: 'class_code',
            //   name
            // }
            // $.post(this.app + this.Helpers + '/FetchingClassHelpers.php', editclss_dt, response => {
            //   console.log(response);
            // });
          },
          btnEDITclass() {
            let editclss_dt = {
              editclssTrig: true,
              table: 'class_code',
              name: this.editclass,
              id: this.editIDclss
            }
            $.post(this.app + this.Helpers + '/FetchingClassHelpers.php', editclss_dt, response => {
              console.log(response);
              this.EditdialogVisible = false;
              this.fetchClass();
            });
          },

          //quiz in new teacher dash
          addTrueFalse(){
            this.objTF.push({
              key: Date.now(),
              // titleID: this.t_id,
              quiztype:'True/False',
              question:'',
              choice1:'True',
              choice2:'False',
              choice3:'',
              choice4:'',
              choice5:'',
              points:'',
              answer:'',
            })
          },

          addMultipleChoice(){
            this.objMC.push({
              key: Date.now(),
              // titleID:localStorage.getItem('tID'),
              quiztype:'Multiple Choice',
              question:'',
              choice1:'',
              choice2:'',
              choice3:'',
              choice4:'',
              choice5:'',
              points:'',
              answer:'',
            })
          },

          addShortAnswer(){
            this.objSA.push({
              key: Date.now(),
              // titleID:localStorage.getItem('tID'),
              quiztype:'Short Answer',
              question:'',
              choice1:'',
              choice2:'',
              choice3:'',
              choice4:'',
              choice5:'',
              points:'',
              answer:'',
            })
          },

          addFillintheBlanks(){
            this.objFB.push({
              key: Date.now(),
              // titleID:localStorage.getItem('tID'),
              quiztype:'Fill in the Blanks',
              question:'',
              choice1:'',
              choice2:'',
              choice3:'',
              choice4:'',
              choice5:'',
              points:'',
              answer:'',
            })
          },

          addMultipleAnswer(){
            this.objMA.push({
              key: Date.now(),
              // titleID:localStorage.getItem('tID'),
              quiztype:'Multiple Answer',
              question:'',
              choice1:'',
              choice2:'',
              choice3:'',
              choice4:'',
              choice5:'',
              points:'',
              answer:'',
            })
          },

          // async requestTrueFalse(){
          //   const requestTF = {
          //     quiztrigger: true,
          //     data: JSON.stringify(this.objTF)
          //   }
          //   await $.post(this.app + this.Helpers + '/RequestHelpers.php', requestTF, response => {
          //     console.log(response);
          //   })
          // },

          // requestMultipleChoice(){
          //   const requestTF = {
          //     quiztrigger: true,
          //     data: JSON.stringify(this.objMC)
          //   }
          //   $.post(this.app + this.Helpers + '/RequestHelpers.php', requestTF, response => {
          //     console.log(response);
          //   })
          // },

          // requestShortAnswer(){
          //   const requestTF = {
          //     quiztrigger: true,
          //     data: JSON.stringify(this.objSA)
          //   }
          //   $.post(this.app + this.Helpers + '/RequestHelpers.php', requestTF, response => {
          //     console.log(response);
          //   })
          // },

          // requestFillintheBlanks(){
          //   const requestTF = {
          //     quiztrigger: true,
          //     data: JSON.stringify(this.objFB)
          //   }
          //   $.post(this.app + this.Helpers + '/RequestHelpers.php', requestTF, response => {
          //     console.log(response);
          //   })
          // },

          quiztitle(){
            let quizdata = {
              title: this.quiz.title,
              class_name: localStorage.getItem('name'),
              instruction: this.quiz.instruction,
              quiztitletrigger: true,
              table: 'quiz_title_map',
              islock: 'open',
              quiztrigger: true,
              data: JSON.stringify([...this.objTF, ...this.objMC, ...this.objSA, ...this.objFB])
            }
            $.post(this.app + this.Helpers + '/QuizTitleHelpers.php', quizdata, response => {
              console.log(response);
              // let res = JSON.parse(response);
              // console.log(res);
              // localStorage.setItem('tID', res.tID);
            })
          },

          // requestData() {
          //   // this.objquiz.selectTF = this.value;
          //   this.objTF['0'].title = this.quiz.title;
          //   this.objTF['0'].instructions = this.quiz.instructions;
          //   $.post(this.app + this.Helpers + '/TeacherMembersHelpers.php', ...this.objTF, response => {
          //     console.log(response);
          //     console.log(this.objquiz['0'].textTF);
          //     this.objquiz['0'].textTF = '';
          //     this.objquiz['0'].valueTF = '';
          //     this.objquiz['0'].gradingTF = '';
          //     this.objquiz['0'].ans1 = '';
          //     this.objquiz['0'].ans2 = '';
              
          //   })
          //   console.log(this.objTF.title);
          //   console.log(this.objTF.instructions);
          // },
          btnsave() {
            this.quiztitle();
            // this.requestTrueFalse();
            // this.requestMultipleChoice();
            // this.requestShortAnswer();
            // this.requestFillintheBlanks();
            localStorage.removeItem('tID');
            // this.requestData();
            // console.log(...this.objquiz);
          },

          // select class code
          // selectCode(userID) {
          //   this.post.userID = userID;
          //   const data = {
          //     userID,
          //     table: 'class_code_map',
          //     selectTrig: true
          //   }
          //   $.post(this.app + this.Helpers + '/TeacherCodeSelectHelpers.php', data, response => {
          //     let res = JSON.parse(response);
          //     console.log(response);
          //     this.options = res;
          //     this.discuss = 1;
          //   });
          // },

          // getcodeteacher() {
          //   const data = {
          //     classname: this.value,
          //     table: 'class_code',
          //     codeTrig: true
          //   }
          //   $.post(this.app + this.Helpers + '/TeacherCodeSelectHelpers.php', data, response => {
          //     let res = JSON.parse(response);
          //     console.log(response);
          //     console.log(res.code);
          //     this.post.class_codeID = res.class_codeID;
          //     this.teacherclasscode = res.code;
          //     this.status = res.status;
          //     // this.fetchpost();
          //     // this.teachermembers(res.class_codeID);
          //     // this.classteacher(res.class_codeID);
          //   });
          // },



          // // post 
          // writePost() {
          //   $.post(this.app + this.Helpers + '/PostHelpers.php', this.post, response => {
          //     console.log(response);
          //     this.post.description = '';
          //     this.modalpostdialogVisible = false;
          //     console.log(this.post.class_codeID);
          //     this.fetchpost();
          //   });            
          // },
             // post 
            writePost() {
              if(this.post.description == '') {
                this.$notify.error({
                  title: 'Oops!',
                  message: 'Description is required!',
                  offset: 100
                });
              }
              else {
                const loading = this.$loading({
                  lock: true,
                  text: 'Verifying. please wait...',
                  spinner: 'el-icon-loading',
                  background: 'rgba(0, 0, 0, 0.7)'
                });
                
                setTimeout(() => {
                  $.post(this.app + this.Helpers + '/PostHelpers.php', this.post, response => {
                    console.log(response);
                    this.post.description = '';        
                    console.log(this.post.class_codeID);
                    
                    this.$notify.success({
                      title: 'Yey!',
                      message: 'Successfully post!',
                      offset: 100
                    });

                    loading.close();
                    this.modalpostdialogVisible = false;
                    this.fetchpost();
                  }); 
                }, 3000); 
              }          
            },

          // fetchpost() {
          //   var data = {
          //     id: this.post.class_codeID,
          //     fetchTrig: true
          //   }
          //   $.post(this.app + this.Helpers + '/PostHelpers.php', data, response => {
          //     console.log(response);
          //     let res = JSON.parse(response);
          //     console.log(res);
          //     this.fetch = res;
          //   });
          // },

          //post in new teacher dash
          fetchpost() {
            var data = {
              name: this.nameclass,
              fetchTrig: true
            }
            $.post(this.app + this.Helpers + '/PostHelpers.php', data, response => {
              console.log(response);
              let res = JSON.parse(response);
              console.log(res);
              this.fetch = res;
            });
          },
          teachermembers() {
            // console.log('id:: ' + id);
            var obj = {
              classcode_id: this.ccid,
              table: 'class_code_map',
              type: '3',
              fetchingTrig: true
            }
            $.post(this.app + this.Helpers + '/teacherMembersHelpers.php', obj, response => {
              console.log(response);
              let res = JSON.parse(response);
              console.log(res);
              this.studentTableData = res;
            });
          },

          classteacher() {
            // console.log('id:: ' + id);
            var obj = {
              classcode_id: this.ccid,
              table: 'class_code_map',
              type: '2',
              fetchingTrig: true
            }
            $.post(this.app + this.Helpers + '/teacherMembersHelpers.php', obj, response => {
              console.log(response);
              let res = JSON.parse(response);
              console.log(res);
              this.teacherTableData = res;
            });
          },

          // editclassname() {
          //   var editclass = {
          //     value: this.value,
          //     c_user: this.classTask.currentUser,
          //     classname: this.editclass,
          //     table: 'class_code',
          //     editclassTrig: true
          //   }
          //   $.post(this.app + this.Helpers + '/teacherdashboardHelpers.php', editclass, response => {
          //     console.log(response);
          //     this.selectCode(this.post.userID);
          //     this.editclass = '';
          //     this.EditdialogVisible = false;
          //   });
          // },

          // locked(id){
          //   this.$confirm('This will locked class. Continue?', 'Warning', {
          //     confirmButtonText: 'OK',
          //     cancelButtonText: 'Cancel',
          //     type: 'warning'
          //   }).then(() => {
          //     const loading = this.$loading({
          //       lock: true,
          //       text: 'Activating',
          //       spinner: 'el-icon-loading',
          //       background: 'rgba(0, 0, 0, 0.7)'
          //     });
          //     setTimeout(() => {
          //   this.is_activate_indicator = "Unlocked";
          //   var data = {
          //     id,
          //     table: 'class_code',
          //     status: 'close',
          //     lockedTrig: true
          //   }
          //   $.post(this.app + this.Helpers + '/PostHelpers.php', data, (response) => {
          //     var jsondestroy = JSON.parse(response)
          //     if(jsondestroy.statusCode == "success"){
          //       loading.close()
          //       this.$notify.success({
          //         title: 'Success',
          //         message: 'class is locked',
          //         offset: 100
          //       });
          //       this.getcodeteacher();
          //     }
          //   })
          //     }, 3000)
          //   })

          // },
          // unlocked(id){
          //   this.$confirm('This will unlocked class. Continue?', 'Warning', {
          //     confirmButtonText: 'OK',
          //     cancelButtonText: 'Cancel',
          //     type: 'warning'
          //   }).then(() => {
          //     const loading = this.$loading({
          //       lock: true,
          //       text: 'Activating',
          //       spinner: 'el-icon-loading',
          //       background: 'rgba(0, 0, 0, 0.7)'
          //     });
          //     setTimeout(() => {
          //   this.is_activate_indicator = "Locked";
          //   var data = {
          //     id,
          //     table: 'class_code',
          //     status: 'open',
          //     lockedTrig: true
          //   }
          //   $.post(this.app + this.Helpers + '/PostHelpers.php', data, (response) => {
          //     var jsondestroy = JSON.parse(response)
          //     if(jsondestroy.statusCode == "success"){
          //       loading.close()
          //       this.$notify.success({
          //         title: 'Success',
          //         message: 'Class is unlocked',
          //         offset: 100
          //       });
          //       this.getcodeteacher();
          //     }
          //   })
          //     }, 3000)
          //   })

          // },

          // editclassname(){
          //   var data = {
          //     classname: this.classTask.classname,
          //     id,
          //     table: 'class_code',
          //     editclassTrig: true
          //   }
          //   $.post(this.app + this.Helpers + '/PostHelpers.php', data, response => {
          //     console.log(response);
          //     this.EditdialogVisible = false;
          //   });
          // },

          onlogoutuser(){
            
            var ask = confirm("Are you sure you want to logout ?");
            if(ask == true) {
              
              var logdestroy = {
                logtruncate: true
              }
              $.post("app/session/global_token_scanner.php", logdestroy, (response) => {
                var jsondestruct = JSON.parse(response)
                if(jsondestruct.logs == "logout"){
                  const loading = this.$loading({
                    lock: true,
                    text: 'Loading',
                    spinner: 'el-icon-loading',
                    background: 'rgba(0, 0, 0, 0.7)'
                  });
                  setTimeout(() => {
                    loading.close()
                    window.location.href="http://localhost/modernresolve"
                  }, 3000)
                  
                } //other dashboards with logout . please replace this jsondestruct logs == logout below
                
              })
              
            }
          },
          onaddclassname(formName){
            this.$refs[formName].validate((valid) => {
              if (valid) {
                  const loading = this.$loading({
                    lock: true,
                    text: 'Loading',
                    spinner: 'el-icon-loading',
                    background: 'rgba(0, 0, 0, 0.7)'
                  });
                  setTimeout(() => {
                    $.post(this.app + this.Helpers + "/classCodexHelpers.php", this.classTask, (response) => {
                     var jsondestroy = JSON.parse(response);
                     if(jsondestroy.class_success === "success"){
                      loading.close()
                      this.$notify.success({
                        title: 'Success',
                        message: 'Successfully Added',
                        offset: 100
                      });
                       this.classTask.classname = '';
                       this.dialogVisible = false;
                      //other actions.
                      this.fetchClass();
                      // this.selectCode(this.post.userID);
                      this.generate_token(5);
                      // this.fetchClass();
                     }
                    })
                  }, 500)
              } else {
                console.log('error submit!!');
                return false;
              }
            });
          },
          generate_token(length){
            //edit the token allowed characters
            var a = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789".split("");
            var b = [];
            for (var i=0; i<length; i++) {
                var j = (Math.random() * (a.length-1)).toFixed(0);
                b[i] = a[j];
            }
            return this.classTask.generatedClassCode = b.join("");
          },
              handleClick(tab, event) {
                console.log(tab, event);
              },

              getpassTeacherdash() {
                let eml = localStorage.getItem('eml');
                const data = {
                  email: eml,
                  table: 'user',
                  getemailT: true,
                  old: this.resetteacher.oldpass,
                  pass: this.resetteacher.newpass
                }
                $.post(this.app + this.Helpers + '/TeacherDashboardHelpers.php', data, response => {
                  console.log(response);
                  let res = JSON.parse(response);
                  this.profile.fname = res.firstname;
                  this.profile.lname = res.lastname;
                  this.profile.bdate = res.birth_date;
                  this.profile.sex = res.gender;
                  this.profile.contact = res.contact_number;
                  this.profile.province = res.province;
                  this.profile.municipality = res.municipality
                  this.profile.street = res.address;
                  this.profile.hiName = res.firstname;
                
                  this.calteacherage();
                  this.selectCode(res.userID);
                });
              },
              updatepassTeacherdash(formName) {
                this.$refs[formName].validate((valid) => {
                  if (valid) {
                    const loading = this.$loading({
                      lock: true,
                      text: 'Verifying. please wait...',
                      spinner: 'el-icon-loading',
                      background: 'rgba(0, 0, 0, 0.7)'
                    });
                    setTimeout(() => {
                      let eml = localStorage.getItem('eml');
                      const data = {
                        email: eml,
                        table: 'user',
                        editpassT: true,
                        old: this.resetteacher.oldpass,
                        pass: this.resetteacher.newpass
                      }
                      $.post(this.app + this.Helpers + '/TeacherDashboardHelpers.php', data, response => {
                        console.log(response);
                        let statRes = JSON.parse(response);
                        if(statRes.statusCode === 'success') {
                          this.$notify.success({
                            title: 'Yey!',
                            message: 'Password updated!',
                            offset: 100
                          });
                          loading.close();
                          this.resetteacher.oldpass = '';
                          this.resetteacher.newpass = '';
                          this.resetteacher.checkPass = '';
                          this.resetteacherdialogVisible = false;
                        }
                        else if(statRes.statusCode === 'not found'){
                          this.$notify.error({
                            title: 'Oops!',
                            message: 'Wrong password!',
                            offset: 100
                          });
                          loading.close();
                          return false;
                        }
                      });
                    }, 3000);
                  } else {
                      return false;
                  }
                });
              },
              
              updateprofTeacherdash() {
                const loading = this.$loading({
                  lock: true,
                  text: 'Verifying. please wait...',
                  spinner: 'el-icon-loading',
                  background: 'rgba(0, 0, 0, 0.7)'
                });
                setTimeout(() => {
                  $.post(this.app + this.Helpers + '/TeacherDashboardHelpers.php', this.profile, response => {
                    console.log(response);
                    let res = JSON.parse(response);
                    if(res.statusCode === 'success') {
                      this.$notify.success({
                        title: 'Yey!',
                        message: 'Teacher profile updated!',
                        offset: 100
                      });
                      loading.close();
                      this.getpassTeacherdash();
                    }
                  });
                }, 5000);
              },
      
              calteacherage() {
                let eml = localStorage.getItem('eml');
                const data = {
                  email: eml,
                  bdate: this.profile.bdate,
                  ageprofcal: true,
                  table: 'user'
                }
                $.post(this.app + this.Helpers + '/AddTeacherHelpers.php', data, response => {
                  let a = JSON.parse(response);
                  console.log(a);
                  this.profile.age = a.age;
                });
              },

              calageteacherdash() {
                const data = {
                  bdate: this.profile.bdate,
                  agecal: true
                }
                $.post(this.app + this.Helpers + '/AgeHelpers.php', data, response => {
                  console.log(response);
                  let a = JSON.parse(response);
                  if(a.age < 18) {
                    this.$notify.error({
                      title: 'Oops',
                      message: 'Please select your birth date',
                      offset: 100
                    });
                    return false;
                  }
                  else {
                    this.profile.age = a.age;
                  }
                });
              },
              confirmAddclass(formName) {
                this.$refs[formName].validate((valid) => {
                  if (valid) {
                    alert('submit!');
                  } else {
                    console.log('error submit!!');
                    return false;
                  }
                });
              },

              resetpass_members(id) {
                const data = {
                  id,
                  getId: true,
                  table: 'user'
                }
                $.post(this.app + this.Helpers + '/AddTeacherHelpers.php', data, response => {
                  console.log(response);
                  let res = JSON.parse(response);
                  this.resetstudent.id = res.userID;
                });
              },
              // hannah reset student front
              resetStudent(formName) {
                this.$refs[formName].validate((valid) => {
                  if (valid) {
                    const loading = this.$loading({
                      lock: true,
                      text: 'Verifying. please wait...',
                      spinner: 'el-icon-loading',
                      background: 'rgba(0, 0, 0, 0.7)'
                    });
                    setTimeout(() => {
                      $.post(this.app + this.Helpers + '/AddTeacherHelpers.php', this.resetstudent, response => {
                        console.log(response);
                        let statRes = JSON.parse(response);
                        if(statRes.statusCode === 'success') {
                          this.$notify.success({
                            title: 'Yey!',
                            message: 'Password updated!',
                            offset: 100
                          });
                          loading.close();
                          this.resetStuddialogVisible = false;
                          this.resetstudent.pass = '';
                          this.resetstudent.checkPass = '';
                        }
                      });
                    }, 3000);
                  } else {
                    return false;
                  }
                });
              },

              // hannah remove student
                deleteStud(id) {
                console.log('id: ' + id);
                console.log('cc: ' + this.post.class_codeID);
                this.$confirm('This will permanently delete the file. Continue?', 'Warning', {
                  confirmButtonText: 'OK',
                  cancelButtonText: 'Cancel',
                  type: 'warning'
                }).then(() => {
                  var delstud = {
                    id,
                    classcode_id: this.ccid,
                    table: 'class_code_map',
                    delMemberTrig: true 
                  }
                  $.post(this.app + this.Helpers + '/TeacherMembersHelpers.php', delstud, response => {
                    console.log(response);
                    this.$notify({
                      type: 'success',
                      message: 'Delete completed'
                    });
                    // this.teachermembers(this.post.class_codeID);
                  });
                }).catch(() => {
                  this.$notify({
                    type: 'info',
                    message: 'Delete canceled'
                  });          
                });
              },

              //assigment
              assignConfirm(formName) {
                this.$refs[formName].validate((valid) => {
                  if (valid) {
                    alert('submit!');
                  } else {
                    console.log('error submit!!');
                    return false;
                  }
                });
              },
              addDomain() {
                this.objquiz.push(
                  {
                    key: Date.now(),
                    textTF: '',
                    valueTF: '',
                    gradingTF: '',
                    selectTF: 'True/False'              
                  }
                  )
                // this.dynamicValidateForm.domains.push({
                //   key: Date.now(),
                //   selectTF: 'True/False',
                //   textTF: '',
                //   valueTF:'',
                //   gradingTF:''
                // });
                // console.log(this.dynamicValidateForm);
              },
              // addDomain1() {
              //   this.dynamicValidateForm.domains1.push({
              //     key: Date.now(),
              //     selectMC: 'Multiple Choice',
              //     textMC: '',
              //     valueMC:'',
              //     gradingMC:''
              //   });
              //   console.log(this.dynamicValidateForm);
              // },
              // addDomain2() {
              //   this.dynamicValidateForm.domains2.push({
              //     key: Date.now(),
              //     selectSA: 'Short Answer',
              //     textSA: '',
              //     valueSA:'',
              //     gradingSA:''
              //   });
              //   console.log(this.dynamicValidateForm);
              // },
              // addDomain3() {
              //   this.dynamicValidateForm.domains3.push({
              //     key: Date.now(),
              //     selectFB: 'Fill in the blanks',
              //     textFill: '',
              //     gradingFill:''
              //   });
              //   console.log(this.dynamicValidateForm);
              // },
              // addDomain4() {
              //   this.dynamicValidateForm.domains4.push({
              //     key: Date.now(),
              //     selectMA: 'Multiple Answer',
              //     textMA: '',
              //     valueMA:[],
              //     gradingMA:''
              //   });
              //   console.log(this.dynamicValidateForm);
              // },
              // removeDomain(item) {
              //   var index = this.dynamicValidateForm.domains.indexOf(item);
              //   if (index !== -1) {
              //     this.dynamicValidateForm.domains.splice(index, 1);
              //   }
              // },
              selQue() {
                this.indicator = this.value;
                this.dynamicValidateForm.domains.selectTF = this.value;
                this.dynamicValidateForm.domains.selectMC = this.value;
              },
                //Fetching Class in new teacher dash
                fetchClass(){
                  const data = {
                    table: "user",
                    fetchingClass: true,
                    email: localStorage.getItem("eml")
                  }
                  $.post(this.app + this.Helpers + "/FetchingClassHelpers.php", data, response =>{
                    let res = JSON.parse(response)
                    console.log(res);
                    this.classname = res
                  })
                },
                btnclassget(name, ccid, uid){
                 localStorage.setItem('name', name)
                 localStorage.setItem('ccid', ccid) 
                 localStorage.setItem('uid', uid)
                },

                fetchquizdatatable(){
                  let quizdatatable = {
                    table: 'student_score',
                    quizdatatableTrigger: true,
                    class_name: localStorage.getItem('name')
                  }
                  $.post(this.app + this.Helpers + "/QuizSubmissionHelpers.php", quizdatatable, response =>{
                    let res = JSON.parse(response)
                    console.log(response);
                    this.quizdataTableData = res;
                  })
                },

                btngrade(scoreID){
                  localStorage.setItem('scid',scoreID)
                  let quizGrade = {
                    scoreID:localStorage.getItem('scid'),
                    table: 'quiz_answer',
                    gradeTrigger: true,
                  }

                  // console.log(scoreID);
                  $.post(this.app + this.Helpers + "/QuizSubmissionHelpers.php", quizGrade, response =>{
                    let res = JSON.parse(response)
                    console.log(response);
                    this.quizgradeFetchData = res;

                  })
                },

                quizgraded(){
                  console.log(this.SApoints);
                  let score = 0;
                  this.quizgradeFetchData.forEach(e => {
                    if(e.quiz_type == 'Short Answer'){
                      score +=parseInt(e.score_points) 
                    }
                  });
                  console.log(score);
                  let quiz_graded = {
                    quizgradedTrigger: true,
                    table: 'student_score',
                    score,
                    scoreID: localStorage.getItem('scid')
                  }
                  $.post(this.app + this.Helpers + "/QuizSubmissionHelpers.php", quiz_graded, response =>{
                    console.log(response);
                  })
                },

                //file attachment
                uploadFile(){

                  this.file = this.$refs.file.files[0];
               
                  var formData = new FormData();
               
                  formData.append('file', this.file);
    
                  axios.post(this.app + this.Helpers + "/UploadFileHelpers.php", formData, {
                   header:{
                    'Content-Type' : 'multipart/form-data'
                   }
                  }).then(function(response){
                   if(response.data.image == '')
                   {
                    console.log(response.data);
                    // this.errorAlert = true;
                    // this.successAlert = false;
                    // this.errorMessage = response.data.message;
                    // this.successMessage = '';
                    // this.uploadedImage = '';
                   }
                   else
                   {
                    console.log(response.data);
                    localStorage.setItem('fn', response.data);
                    //  this.file_upload_assignment = img_file;
                    // this.errorAlert = false;
                    // this.successAlert = true;
                    // this.errorMessage = '';
                    // this.successMessage = response.data.message;
                    // var image_html = "<img src='"+response.data.image+"' class='img-thumbnail' width='200' />";
                    // this.uploadedImage = image_html;
                    // this.$refs.file.value = '';
                   }
                  });
                 },

                assignmentInsert(){
                  let assignmentdata = {
                    class_name: localStorage.getItem('name'),
                    title: this.assignTitle,
                    instruction: this.assignInstruction,
                    points: this.assignPoints,
                    duedate: this.assignDuedate,
                    islock: 'open' ,
                    filename: localStorage.getItem('fn'),
                    assignInsertTrigger: true,
                    table: 'assignment_title_map'
                  }
                  $.post(this.app + this.Helpers + '/AssignmentHelpers.php', assignmentdata, response => {
                    console.log(response);
                  });
                },
          }
    })

    