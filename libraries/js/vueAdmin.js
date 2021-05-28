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
            return{
                app: 'app/',
                Helpers: 'Helpers',
                activeName: 'first',
                input: '',
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
                tableDataTeach: [{
                  date: '2021-05-03',
                  fname: 'Hannah',
                  lname: 'Ubaldo',
                  email: 'hannah@email.com',
                }, {
                  date: '2021-05-02',
                  fname: 'Ella',
                  lname: 'Marie',
                  email: 'ella@email.com',
                }, {
                  date: '2021-05-01',
                  fname: 'Alden',
                  lname: 'Lacerna',
                  email: 'alden@email.com',
                }],
                search: '',
                  ruleForm: {
                    pass: '',
                    checkPass: '',
                    email:'',
                    lname:'',
                    fname:'',
                    addTeacher: true,
                    table: 'teacher_insert'
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
                    checkPass:''
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
                  gridData: [{
                    date: '2016-05-02',
                    name: 'John Smith',
                  },
                  ]

            }

            
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
                  alert('submit!');
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
            submitForm() {
                const loading = this.$loading({
                  lock: true,
                  text: 'Verifying. please wait...',
                  spinner: 'el-icon-loading',
                  background: 'rgba(0, 0, 0, 0.7)'
                });
                setTimeout(() => {
                  $.post(this.app + this.Helpers + '/AddTeacherHelpers.php', this.ruleForm, response => {
                    console.log(response);
                });
              }, 2000);
              loading.close();
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
            }
          }
    })
