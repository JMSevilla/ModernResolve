ELEMENT.locale(ELEMENT.lang.en)
    new Vue({
        el:'#admin',
        
        data: function(){
          var validateFname = (rule, value, callback) => {
            if (value === '') {
              callback(new Error('Please input the Firstname'));
            }else {
              callback();
            }
          };
          var validateLname = (rule, value, callback) => {
            if (value === '') {
              callback(new Error('Please input the Lastname'));
            }else {
              callback();
            }
          };

          var validateEmail = (rule, value, callback) => {
            if (value === '') {
              callback(new Error('Please input the email address'));
            }else {
              callback();
            }
          };
            var validatePass = (rule, value, callback) => {
              if (value === '') {
                callback(new Error('Please input the password'));
              } else {
                if (this.ruleForm.checkPass !== '') {
                  this.$refs.ruleForm.validateField('checkPass');
                }
                callback();
              }
            };
            var validatePass2 = (rule, value, callback) => {
              if (value === '') {
                callback(new Error('Please input the password again'));
              } else if (value !== this.ruleForm.pass) {
                callback(new Error('Password Mismatch!'));
              } else {
                callback();
              }
            };
            var validatePassReset = (rule, value, callback) => {
              if (value === '') {
                callback(new Error('Please input the password'));
              } else {
                if (this.reset.checkPass !== '') {
                  this.$refs.reset.validateField('checkPass');
                }
                callback();
              }
            };
            var validatePass2Reset = (rule, value, callback) => {
              if (value === '') {
                callback(new Error('Please input the password again'));
              } else if (value !== this.reset.pass) {
                callback(new Error('Password Mismatch!'));
              } else {
                callback();
              }
            };
            var validatePass1Resetadmin = (rule, value, callback) => {
              if (value === '') {
                callback(new Error('Please input the old password'));
              }else {
                callback();
              }
            };
            var validatePass2Resetadmin = (rule, value, callback) => {
              if (value === '') {
                callback(new Error('Please input the new password'));
              } else {
                if (this.resetadmin.checkPass !== '') {
                  this.$refs.resetadmin.validateField('checkPass');
                }
                callback();
              }
            };
            var validatePass3Resetadmin = (rule, value, callback) => {
              if (value === '') {
                callback(new Error('Please input the password again'));
              } else if (value !== this.resetadmin.newpass) {
                callback(new Error('Password Mismatch!'));
              } else {
                callback();
              }
            };
            var validateProvinceAdmin = (rule, value, callback) => {
              if (value === '') {
                callback(new Error('Please input the province'));
              }else {
                callback();
              }
            };
            var validateMunicipalityAdmin = (rule, value, callback) => {
              if (value === '') {
                callback(new Error('Please input the municipality'));
              }else {
                callback();
              }
            };
            var validateEditProvinceAdmin = (rule, value, callback) => {
              if(value === '') {
                callback(new Error('Please input the province'));
              }else {
                callback();
              }
            };
            var validateEditMunicipalityAdmin = (rull, value, callback) => {
              if(value === '') {
                callback(new Error('Please input the municipality'));
              }else {
                callback();
              }
            };
            return{
              is_activate_indicator: "",
                app: 'app/',
                Helpers: 'Helpers',
                activeName: 'first',
                input: '',
                value1: false,
                value: new Date(),
                activeIndex: '1',
                dialogVisible: false,
                centerDialogvisible: false,
                labelPosition: 'left',
                imageUrl: '',
                resetteachdialogVisible: false,
                resetadmindialogVisible: false,
                provinceDialog: false,
                resetlabelPosition: 'left',
                provincelabelPosition: 'left',
                dialogTableVisible: false,
                provinceModalAd: false,
                tableDataTeach: [],
                search: '',
                tableDataHome:[],
                  ruleForm: {
                    pass: '',
                    checkPass: '',
                    email:'',
                    lname:'',
                    fname:''
                  },
                  rules: {
                    fname: [
                      { validator: validateFname, trigger: 'blur' }
                    ],
                    lname: [
                      { validator: validateLname, trigger: 'blur' }
                    ],
                    email: [
                      { validator: validateEmail, trigger: 'blur' }
                    ],
                    pass: [
                      { validator: validatePass, trigger: 'blur' }
                    ],
                    checkPass: [
                      { validator: validatePass2, trigger: 'blur' }
                    ],                    
                  },  
                  rulesteach:{
                    pass: [
                      { validator: validatePassReset, trigger: 'blur' }
                    ],
                    checkPass: [
                      { validator: validatePass2Reset, trigger: 'blur' }
                    ] 
                  },
                  rulesadmin:{
                    oldpass: [
                      { validator: validatePass1Resetadmin, trigger: 'blur' }
                    ],
                    newpass: [
                      { validator: validatePass2Resetadmin, trigger: 'blur' }
                    ],
                    checkPass: [
                      { validator: validatePass3Resetadmin, trigger: 'blur' }
                    ],    
                  },
                  addaddress:{
                    province1: [
                      { validator: validateProvinceAdmin, trigger: 'blur' }
                    ],
                    municipality: [
                      { validator: validateMunicipalityAdmin, trigger: 'blur' }
                    ]
                  },
                  modaladdress:{
                    province: [
                      { validator: validateEditProvinceAdmin, trigger: 'blur' }
                    ],
                    municipality: [
                      { validator: validateEditMunicipalityAdmin, trigger: 'blur' }
                    ]
                  },
                  profile: {
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
                    zipcode:''
                  },
                  reset: {
                    pass:'',
                    checkPass:'',
                    id: '',
                    updatePass: true,
                    table: 'user'

                  },  
                  resetadmin:{
                    oldpass:'',
                    newpass:'',
                    checkPass:''
                  },
                  add:{
                    province:'',
                    province1:'',
                    municipality:''
                  },
                  tableDataAddress: [],
                  search: '',
                  modal:{
                    provID: '',
                    province:'',
                    municipality:''
                  }

            }

            
        },

            
        created: function() {
          this.getallteacher();
          this.getadminprof();
          this.provMuni();
        },
        
        methods: {
            // handleClick(tab, event) {
            //   console.log(tab, event);
            // },
            // handleSelect(key, keyPath) {
            //   console.log(key, keyPath);
            // },
            // handleClose(done) {
            //   this.$confirm('Are you sure to exit?')
            //     .then(_ => {
            //       done();
            //     })
            //     .catch(_ => {});
            // },
           
            submitForm(formName) {
              this.$refs[formName].validate((valid) => {
                if (valid) {
                  const loading = this.$loading({
                    lock: true,
                    text: 'Verifying. please wait...',
                    spinner: 'el-icon-loading',
                    background: 'rgba(0, 0, 0, 0.7)'
                  });
                  setTimeout(() => {
                    const data = {
                      email: this.ruleForm.email,
                      fname: this.ruleForm.fname,
                      lname: this.ruleForm.lname,
                      pass: this.ruleForm.pass,
                      addTeacher: true,
                      table: 'teacher_insert'
                    }
                    $.post(this.app + this.Helpers + '/AddTeacherHelpers.php', data, response => {
                      console.log(response);
                      let statRes = JSON.parse(response);
                      if(statRes.statusCode === 'invalid') {
                        this.$notify.error({
                          title: 'Oops!',
                          message: 'This email already exists!',
                          offset: 100
                        });
                        loading.close();
                      }
                      else {
                        this.$notify.success({
                          title: 'Yey!',
                          message: 'New teacher added!',
                          offset: 100
                        });
                        this.getallteacher();
                        loading.close();
                        this.formClear();
                      }
                    });
                  }, 3000);
                } else {
                  console.log('error submit!!');
                  return false;
                }
              });
            },
            resetForm(formName) {
              this.$refs[formName].resetFields();
            },
            // Emman
            formClear() {
              this.ruleForm.fname = '';
              this.ruleForm.lname = '';
              this.ruleForm.email = '';
              this.ruleForm.pass = '';
              this.ruleForm.checkPass = '';
            },
            async getallteacher() {
              const data = {
                allT: true
              }
              const response = await $.post(this.app + this.Helpers + '/AddTeacherHelpers.php', data);
              let res = JSON.parse(response);
              this.tableDataTeach = res;
              console.log(res[0][15])
              if(res[0][15] == 1){
                this.value1 = true;
                this.is_activate_indicator = "Deactivate";
                
              }else {
                this.value1 = false;
                this.is_activate_indicator = "Activate";
               
              }
            },
            onactivateordeactivate(id){
              
              if(this.value1 == true){
                this.$confirm('This will activate user. Continue?', 'Warning', {
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
                this.is_activate_indicator = "Deactivate";
                var objActivate = {
                  actT: true,
                  val: 1,
                  uid: id
                }
                $.post(this.app + this.Helpers + '/userActivation.php', objActivate, (response) => {
                  var jsondestroy = JSON.parse(response)
                  if(jsondestroy.statusCode == "success"){
                    loading.close()
                    this.$notify.success({
                      title: 'Success',
                      message: 'user is activated',
                      offset: 100
                    });
                  this.getallteacher()
                  }
                })
                  }, 3000)
                }).catch(() => {
                  this.getallteacher()
                })
                
              }else if(this.value1 == false){
                this.$confirm('This will deactivate user. Continue?', 'Warning', {
                  confirmButtonText: 'OK',
                  cancelButtonText: 'Cancel',
                  type: 'warning'
                }).then(() => {
                  const loading = this.$loading({
                    lock: true,
                    text: 'Deactivating',
                    spinner: 'el-icon-loading',
                    background: 'rgba(0, 0, 0, 0.7)'
                  });
                  setTimeout(() => {
                    this.is_activate_indicator = "Activate";
                var objdeActivate = {
                  actT: true,
                  val: 0,
                  uid: id
                }
                $.post(this.app + this.Helpers + '/userActivation.php', objdeActivate, (response) => {
                  var jsondestroy = JSON.parse(response)
                  if(jsondestroy.statusCode == "success"){
                    loading.close()
                    this.$notify.warning({
                      title: 'Success',
                      message: 'user is Deactivated',
                      offset: 100
                    });
                    this.getallteacher()
                  }
                  
                })
                  }, 3000)
                }).catch(() => {
                  this.getallteacher()
                })
                
              }
            },
            delConfirm(userID) {
              this.$confirm('This will permanently delete the file. Continue?', 'Warning', {
                confirmButtonText: 'OK',
                cancelButtonText: 'Cancel',
                type: 'warning',
                center: true
              }).then(() => {
                const data = {
                  teacherD: true,
                  table: 'user',
                  userID
                }
                $.post(this.app + this.Helpers + '/AddTeacherHelpers.php', data, response => {
                  console.log(response);
                  this.getallteacher();
                });
                this.$notify({
                  type: 'success',
                  message: 'Delete completed',
                  center: true
                });
              }).catch(() => {
                this.$notify({
                  type: 'info',
                  message: 'Delete canceled',
                  center: true
                });
              });
            },
            btnResetPass(id) {
              const data = {
                id,
                getId: true,
                table: 'user'
              }
              $.post(this.app + this.Helpers + '/AddTeacherHelpers.php', data, response => {
                console.log(response);
                let res = JSON.parse(response);
                this.reset.id = res.userID;
              });
            },
            // reset pass teacher
            onConfirmteach(formName) {
              this.$refs[formName].validate((valid) => {
                if (valid) {
                  const loading = this.$loading({
                    lock: true,
                    text: 'Verifying. please wait...',
                    spinner: 'el-icon-loading',
                    background: 'rgba(0, 0, 0, 0.7)'
                  });
                  setTimeout(() => {
                    $.post(this.app + this.Helpers + '/AddTeacherHelpers.php', this.reset, response => {
                      console.log(response);
                      let statRes = JSON.parse(response);
                      if(statRes.statusCode === 'success') {
                        this.$notify.success({
                          title: 'Yey!',
                          message: 'Password updated!',
                          offset: 100
                        });
                        loading.close();
                        this.resetteachdialogVisible = false;
                        this.reset.pass = '';
                        this.reset.checkPass = '';
                      }
                    });
                  }, 3000);
                } else {
                  return false;
                }
              });
            },
            getadminprof() {
              let eml = localStorage.getItem('eml');
              const data = {
                email: eml,
                getadmin: true,
                table: 'user'
              }
              $.post(this.app + this.Helpers + '/AddTeacherHelpers.php', data, response => {
                let res = JSON.parse(response);
                this.profile.fname = res.firstname;
                this.profile.lname = res.lastname;
                this.profile.bdate = res.birth_date;
                this.profile.age = res.age;
                this.profile.sex = res.gender;
                this.profile.contact = res.contact_number;
              });
            },
            updateAdminProf() {
              let eml = localStorage.getItem('eml'); 
              const data = {
                editprofad: true,
                table: 'user',
                email: eml,
                firstname: this.profile.fname,
                lastname: this.profile.lname,
                birthdate: this.profile.bdate,
                age: this.profile.age,
                gender: this.profile.sex,
                contactnumber: this.profile.contact
              }
              $.post(this.app + this.Helpers + '/AddTeacherHelpers.php', data, response => {
                console.log(response);
              })
            },
            onConfirmadmin(formName) {
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
                      chngpss: true,
                      table: 'user',
                      email: eml,
                      oldpass: this.resetadmin.oldpass,
                      password: this.resetadmin.newpass
                    }
                    $.post(this.app + this.Helpers + '/AddTeacherHelpers.php', data, response => {
                      console.log(response);
                      let statRes = JSON.parse(response);
                      if(statRes.statusCode === 'success') {
                        this.$notify.success({
                          title: 'Yey!',
                          message: 'Password updated!',
                          offset: 100
                        });
                        loading.close();
                        this.resetadmindialogVisible = false;
                        this.resetadmin.oldpass = '';
                        this.resetadmin.newpass = '';
                        this.resetadmin.checkPass = '';
                      }
                      else if(statRes.statusCode === 'invalid'){
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
            insertprovinceAdmin(formName) {
              this.$refs[formName].validate((valid) => {
                if (valid) {
                  const loading = this.$loading({
                    lock: true,
                    text: 'Verifying. please wait...',
                    spinner: 'el-icon-loading',
                    background: 'rgba(0, 0, 0, 0.7)'
                  });
                  setTimeout(() => {
                    const data = {
                      province: this.add.province1,
                      municipality: this.add.municipality,
                      addprov: true,
                      table: 'province'
                    }
                    $.post(this.app + this.Helpers + '/AddTeacherHelpers.php', data, response => {
                      console.log(response);
                      let statRes = JSON.parse(response);
                      if(statRes.statusCode === 'success') {
                        this.$notify.success({
                          title: 'Yey!',
                          message: 'New province and municipality added!',
                          offset: 100
                        });
                        loading.close();
                        this.provMuni();
                        this.provinceDialog = false;
                        this.add.province1 = '';
                        this.add.municipality = '';
                      }
                    });
                  }, 3000);
                } else {
                  console.log('error submit!!');
                  return false;
                }
              });
            },
            async provMuni() {
              const data = {
                table: 'province',
                provT: true
              }
              const response = await $.post(this.app + this.Helpers + '/AddTeacherHelpers.php', data);
              let res = JSON.parse(response);
              this.tableDataAddress = res;
            },
            getaddressbyId(id) {
              const data = {
                id,
                table: 'province',
                addressGet: true
              }
              $.post(this.app + this.Helpers + '/AddTeacherHelpers.php', data, response => {
                const res = JSON.parse(response);
                this.modal.provID = res.provinceID;
                this.modal.province = res.province;
                this.modal.municipality = res.municipality;
              });
            },
            editAddressAdmin(formName) {
              this.$refs[formName].validate((valid) => {
                if (valid) {
                  const data = {
                    id: this.modal.provID,
                    province: this.modal.province,
                    municipality: this.modal.municipality,
                    table: 'province',
                    editAd: true
                  }
                  $.post(this.app + this.Helpers + '/AddTeacherHelpers.php', data, response => {
                    let res = JSON.parse(response);
                    if(res.statusCode === 'success') {
                      this.$notify.success({
                        title: 'Yey!',
                        message: 'Updated province and municipality!',
                        offset: 100
                      });
                    }
                    this.provMuni();
                    this.modal.province = '';
                    this.modal.municipality = '';
                    this.provinceModalAd = false;
                  });
                } else {
                  console.log('error submit!!');
                  return false;
                }
              });
              
            },
            deleteAddressAdmin(id) {
              this.$confirm('This will permanently delete the file. Continue?', 'Warning', {
                confirmButtonText: 'OK',
                cancelButtonText: 'Cancel',
                type: 'warning',
                center: true
              }).then(() => {
                const data = {
                  id,
                  deleteAd: true,
                  table: 'province'
                }
                $.post(this.app + this.Helpers + '/AddTeacherHelpers.php', data, response => {
                  this.provMuni();
                });
                this.$notify({
                  type: 'success',
                  message: 'Delete completed',
                  center: true
                });
              }).catch(() => {
                this.$notify({
                  type: 'info',
                  message: 'Delete canceled',
                  center: true
                });
              });
            },
            //hananh
            handleAvatarSuccess(res, file) {
              this.imageUrl = URL.createObjectURL(file.raw);
            },
            beforeAvatarUpload(file) {
              const isJPG = file.type === 'image/jpeg';
              const isLt2M = file.size / 1024 / 1024 < 2;
      
              if (!isJPG) {
                this.$message.error('Avatar picture must be JPG format!');
              }
              if (!isLt2M) {
                this.$message.error('Avatar picture size can not exceed 2MB!');
              }
              return isJPG && isLt2M;
            },
            ondelete(){
              this.$confirm('This will permanently delete the file. Continue?', 'Warning', {
                confirmButtonText: 'OK',
                cancelButtonText: 'Cancel',
                type: 'warning'
              }).then(() => {
                this.$notify({
                  type: 'success',
                  message: 'Delete completed'
                });
              }).catch(() => {
                this.$notify({
                  type: 'info',
                  message: 'Delete canceled'
                });          
              });
            },
          }
    })
