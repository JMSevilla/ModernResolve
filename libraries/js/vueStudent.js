ELEMENT.locale(ELEMENT.lang.en)
    new Vue({
        el:'#student',
        
        data: function(){

          var validatePass1ResetStudent = (rule, value, callback) => {
            if (value === '') {
              callback(new Error('Please input the old password'));
            }else {
              callback();
            }
          };
          var validatePass2ResetStudent = (rule, value, callback) => {
            if (value === '') {
              callback(new Error('Please input the new password'));
            } else {
              if (this.resetstudent.checkPass !== '') {
                this.$refs.resetstudent.validateField('checkPass');
              }
              callback();
            }
          };
          var validatePass3ResetStudent = (rule, value, callback) => {
            if (value === '') {
              callback(new Error('Please input the password again'));
            } else if (value !== this.resetstudent.newpass) {
              callback(new Error('Password Mismatch!'));
            } else {
              callback();
            }
          };

    
            return{
                app: 'app/',
                Helpers: 'Helpers',
                modalpostdialogVisible: false,
                resetstudentdialogVisible: false,
                resetlabelPosition: 'left',
                assignDialogVisible: false,
                assignLabelPosition: 'top',
                resetstudent:{
                    oldpass:'',
                    newpass:'',
                    checkPass:'',
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
                activeMem: 'first',
                activeName: 'first',
                studentTableData: [],
                teacherTableData: [],
                searchStudent: '',
                textarea: '',

                options: [],
                value: '',
                studentclasscode: '',

                post: {
                  userID: '',
                  class_codeID: '',
                  description: '',
                  files: '',
                  writeTrig: true
                },
                studfetch: [],
                rulestudent:{
                  oldpass: [
                    { validator: validatePass1ResetStudent, trigger: 'blur' }
                  ],
                  newpass: [
                    { validator: validatePass2ResetStudent, trigger: 'blur' }
                  ],
                  checkPass: [
                    { validator: validatePass3ResetStudent, trigger: 'blur' }
                  ],    
                },
                //new teacher dash
                studclassname:[],
                studnameclass: localStorage.getItem('name'),
                joinclassdialogVisible: false,
                joinclass: {
                  classcode:'',
                  email: localStorage.getItem("eml"),
                  joinclasstrigger: true,
                },
                tableDataQuiz:[],
                tableDataFetchQuiz:[],
                search: '',
                studassignLabelPosition: 'top',
                quiz: {
                  title: '',
                  instruction: '',
                },
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

                doneQuiz: 'true',
                tableDataAssignment:[{
                  title:'Assignment No. 1',
                  created:'July 13, 2021',
                },
                {
                  title:'Assignment No. 2',
                  created:'July 12, 2021',
                }],
            }        
        },


        created: function() {
          this.getStudentInfo();
          this.studentfetchClass();
          this.studfetchpost();
          this.studentmembers();
          this.studentteacher();
          this.quiztitle();
          this.studquizanswer(localStorage.getItem('qid'));
          this.fetch_assignment_title();
        },

        methods: {

          handleClick(tab, event) {
            console.log(tab, event);
          },
         
          getStudentInfo() {
            let eml = localStorage.getItem('eml');
            const data = {
              email: eml,
              table: 'user',
              getemailT: true
              // old: this.resetteacher.oldpass,
              // pass: this.resetteacher.newpass
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
            
              this.calstudentage();
              this.selectCode(res.userID);
            });
          },

          updateprofStudentdash() {
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
                    message: 'Student profile updated!',
                    offset: 100
                  });
                  loading.close();
                  // this.getpassTeacherdash();
                }
              });
            }, 5000);
          },
          
          calstudentage() {
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

          calagestudentdash() {
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

          updatepassStudentdash(formName) {
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
                    old: this.resetstudent.oldpass,
                    pass: this.resetstudent.newpass
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
                      this.resetstudent.oldpass = '';
                      this.resetstudent.newpass = '';
                      this.resetstudent.checkPass = '';
                      this.resetstudentdialogVisible = false;
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
                // this.discuss = 1;
              });
            },

            getcodestudent() {
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
                this.studentclasscode = res.code;
                // this.status = res.status;
                // this.fetchpost();
                this.studentmembers(res.class_codeID);
                // this.classteacher(res.class_codeID);
              });
            },

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
                    // this.fetchpost();
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


            // studentmembers(id) {
            //   console.log('id:: ' + id);
            //   var obj = {
            //     classcode_id: id,
            //     table: 'class_code_map',
            //     type: '3',
            //     fetchingTrig: true
            //   }
            //   $.post(this.app + this.Helpers + '/teacherMembersHelpers.php', obj, response => {
            //     console.log(response);
            //     let res = JSON.parse(response);
            //     console.log(res);
            //     this.studentTableData = res;
            //   });
            // },


          onlogoutuser(){
            
            var ask = confirm("Are you sure you want to logout ?");
            if(ask == true) {
              
              var logdestroy = {
                logtruncateStudent: true
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

          //Fetching Class in new student dash
          studentfetchClass(){
            const data = {
              table: "user",
              fetchingClass: true,
              email: localStorage.getItem("eml")
            }
            $.post(this.app + this.Helpers + "/FetchingClassHelpers.php", data, response =>{
              let res = JSON.parse(response)
              console.log(res);
              this.studclassname = res
            })
          },

          studbtnclassget(name, ccid, uid){
            localStorage.setItem('name', name)
            localStorage.setItem('ccid', ccid) 
            localStorage.setItem('uid', uid)
           },

           studentjoinclass(){
            $.post(this.app + this.Helpers + "/JoinClassHelpers.php", this.joinclass, response =>{
              // let res = JSON.parse(response)
              console.log(response);
              this.joinclassdialogVisible = false;
              this.studentfetchClass();
            })
           },

           studfetchpost() {
            var data = {
              name: this.studnameclass,
              fetchTrig: true
            }
            $.post(this.app + this.Helpers + '/PostHelpers.php', data, response => {
              console.log(response);
              let res = JSON.parse(response);
              console.log(res);
              this.studfetch = res;
            });
          },

          studentmembers() {
            // console.log('id:: ' + id);
            var obj = {
              classcode_id: localStorage.getItem('ccid'),
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

          studentteacher() {
            // console.log('id:: ' + id);
            var obj = {
              classcode_id: localStorage.getItem('ccid'),
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

          quiztitle(){
            let quizfetchtitle = {
              class_name: localStorage.getItem('name'),
              quiz_fetchTrigger: true,
              table: 'quiz_title_map' 
            }
            $.post(this.app + this.Helpers + '/QuizTitleHelpers.php', quizfetchtitle, response => {
              console.log(response);
              let res = JSON.parse(response);
              console.log(res);
              this.tableDataQuiz = res;
            });
          },

          //student quiz dash
          studquizanswer(titleID){
            localStorage.setItem('qid', titleID);
            let studtakequiz = {
              qid: localStorage.getItem('qid'),
              email: localStorage.getItem('eml'),
              takequiztrigger: true,
              table: 'quiz_title_map'
            }
            $.post(this.app + this.Helpers + '/QuizTitleHelpers.php', studtakequiz, response => {
              console.log(response);
              let res = JSON.parse(response);
              console.log(res);
              this.tableDataFetchQuiz = res;
              this.quiz.title = res[0].title;
              this.quiz.instruction = res[0].instruction;
            });
            // console.log(titleID);
          },
          

          studquizscores(){
            let quizscores = 0;
            this.tableDataFetchQuiz.forEach(e => {
              if(e.quiz_type != 'Short Answer'){
                if(e.studanswer == e.answer){
                  quizscores += parseInt(e.points)
                }
              }
            });
            console.log(quizscores);
            this.quizscores_tb(quizscores);
            // this.studquiz_answer_data();
          },

          quizscores_tb(score){
            let scoredata = {
              titleID: localStorage.getItem('qid'),
              userID: localStorage.getItem('uid'),
              score,
              status:'submitted',
              table: 'student_score',
              scoredataTrigger: true,
              dataAnsTrigger: true, 
              dataAns: JSON.stringify(this.tableDataFetchQuiz)
            }
            $.post(this.app + this.Helpers + '/QuizTitleHelpers.php', scoredata, response => {
              console.log(response);
            });
          },

          fetch_assignment_title() {
            let fetch_title = {
              assignTitle_trig: true,
              class_name: localStorage.getItem('name'),
              table: 'assignment_title_map'
            }
            $.post(this.app + this.Helpers + '/AssignmentHelpers.php', fetch_title, response => {
              // console.log(response);
              let res = JSON.parse(response);
              console.log(res);
              this.tableDataAssignment = res;
            });
          },

          fetch_assignment_question(id) {
            // console.log(id);
            let fetch_question = {
              id,
              table: 'assignment_title_map',
              assignQuestion_trig: true
            }
            $.post(this.app + this.Helpers + '/AssignmentHelpers.php', fetch_question, response => {
              let res = JSON.parse(response);
              console.log(res);
            });
          }
        },
    })