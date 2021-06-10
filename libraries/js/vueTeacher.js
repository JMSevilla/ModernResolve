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
                  },

                  post: {
                    userID: '',
                    class_codeID: '',
                    description: '',
                    files: 'filename',
                    writeTrig: true,
                    name: ''
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
                  lock: [
                    {required: true, message: 'Please click the checkbox', trigger: 'change' }
                  ],
                },
                rulesclassTask:{
                  classname: [
                    {  required: true, message: 'Please input class name', trigger: 'blur' },
                  ]
                },
                activeMem: 'first',
                studentTableData: [],
                searchStudent: '',
                ownerTableData: [{
                  Avatar:'',
                  name: 'Juan Dela Cruz  (Class Owner)',
                }], 

                classowner: []

                // teacherTableData: [{
                //   name: 'hello'
                // }, {
                //   name: 'Wanda',
                // }], 

                
            }
        },
            
        created: function(){
          this.getpassTeacherdash();
          this.generate_token(5)
        },
        
        methods: {

          // select class code
          selectCode(userID) {
            this.post.userID = userID;
            const data = {
              userID,
              table: 'class_code_map',
              selectTrig: true
            }
            $.post(this.app + this.Helpers + '/TeacherCodeSelectHelpers.php', data, response => {
              let res = JSON.parse(response);
              console.log(response);
              this.options = res;
            });
          },

          getcodeteacher() {
            const data = {
              classname: this.value,
              table: 'class_code',
              codeTrig: true
            }
            $.post(this.app + this.Helpers + '/TeacherCodeSelectHelpers.php', data, response => {
              let res = JSON.parse(response);
              console.log(response);
              console.log(res.code);
              this.post.class_codeID = res.class_codeID;
              this.teacherclasscode = res.code;
              this.status = res.status;
              this.fetchpost();
              this.teachermembers(res.class_codeID);
            });
          },



          // post 
          writePost() {
            $.post(this.app + this.Helpers + '/PostHelpers.php', this.post, response => {
              console.log(response);
              this.post.description = '';
              this.modalpostdialogVisible = false;
              console.log(this.post.class_codeID);
            });            
          },

          fetchpost() {
            var data = {
              id: this.post.class_codeID,
              fetchTrig: true
            }
            $.post(this.app + this.Helpers + '/PostHelpers.php', data, response => {
              console.log(response);
              let res = JSON.parse(response);
              console.log(res);
              this.fetch = res;
            });
          },

          teachermembers(id) {
            console.log('id:: ' + id);
            var obj = {
              classcode_id: id,
              table: 'class_code_map',
              fetchingTrig: true
            }
            $.post(this.app + this.Helpers + '/teacherMembersHelpers.php', obj, response => {
              console.log(response);
              let res = JSON.parse(response);
              console.log(res);
              this.studentTableData = res;
            });
          },

          locked(id){
            this.$confirm('This will locked class. Continue?', 'Warning', {
              confirmButtonText: 'OK',
              cancelButtonText: 'Cancel',
              type: 'warning'
            }).then(() => {
              const loading = this.$loading({
                lock: true,
                text: 'Activating',
                spinner: 'el-icon-loading',
                background: 'rgba(0, 0, 0, 0.7)'
              });
              setTimeout(() => {
            this.is_activate_indicator = "Unlocked";
            var data = {
              id,
              table: 'class_code',
              status: 'close',
              lockedTrig: true
            }
            $.post(this.app + this.Helpers + '/PostHelpers.php', data, (response) => {
              var jsondestroy = JSON.parse(response)
              if(jsondestroy.statusCode == "success"){
                loading.close()
                this.$notify.success({
                  title: 'Success',
                  message: 'class is locked',
                  offset: 100
                });
                this.getcodeteacher();
              }
            })
              }, 3000)
            })

          },
          unlocked(id){
            this.$confirm('This will unlocked class. Continue?', 'Warning', {
              confirmButtonText: 'OK',
              cancelButtonText: 'Cancel',
              type: 'warning'
            }).then(() => {
              const loading = this.$loading({
                lock: true,
                text: 'Activating',
                spinner: 'el-icon-loading',
                background: 'rgba(0, 0, 0, 0.7)'
              });
              setTimeout(() => {
            this.is_activate_indicator = "Locked";
            var data = {
              id,
              table: 'class_code',
              status: 'open',
              lockedTrig: true
            }
            $.post(this.app + this.Helpers + '/PostHelpers.php', data, (response) => {
              var jsondestroy = JSON.parse(response)
              if(jsondestroy.statusCode == "success"){
                loading.close()
                this.$notify.success({
                  title: 'Success',
                  message: 'Class is unlocked',
                  offset: 100
                });
                this.getcodeteacher();
              }
            })
              }, 3000)
            })

          },

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
                    window.location.href="http://localhost/torrestech/modernresolve"
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
                      this.selectCode(this.post.userID);
                     }
                    })
                  }, 5000)
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
                    classcode_id: this.post.class_codeID,
                    table: 'class_code_map',
                    delMemberTrig: true 
                  }
                  $.post(this.app + this.Helpers + '/TeacherMembersHelpers.php', delstud, response => {
                    console.log(response);
                    this.$notify({
                      type: 'success',
                      message: 'Delete completed'
                    });
                    this.teachermembers(this.post.class_codeID);
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
          }
    })

    