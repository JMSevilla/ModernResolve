ELEMENT.locale(ELEMENT.lang.en)
    new Vue({
        el:'#teacher',
        
        data: function(){
            return{
                app: 'app/',
                Helpers: 'Helpers',
                dialogVisible: false,
                className: '',
                activeName: 'first',
                resetteacherdialogVisible: false,
                resetlabelPosition:'left',
                resetteacher:{
                    oldpass:'',
                    newpass:'',
                    checkPass:'',
                  },
                labelPosition: 'left',
                
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
                    hiName: ''
                  },
                 classTask: {
                  classname:'',
                  generatedClassCode: '',
                  classCodeTrigger: true, currentUser: localStorage.getItem('eml')
                 },
                value1: true,

                options: [{
                  value: 'Option1',
                  label: 'Information technology'
                }, {
                  value: 'Option2',
                  label: 'Option2'
                },],
                value: ''
              
            }
        },
            
        created: function(){
          this.getpassTeacherdash();
          this.generate_token(5)
        },
        
        methods: {
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
                  
                }
              })
              
            }
          },
          onaddclassname(){
            if(!this.classTask.classname){
              this.$notify.warning({
                title: 'Oops',
                message: 'Empty fields.',
                offset: 100
              });
              return false;
            }
            else {
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
                  //other actions.
                 }
                })
              }, 5000)
              
            }
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
                  this.profile.street = res.address;
                  this.profile.hiName = res.firstname;
                  this.calteacherage();
                });
              },
              updatepassTeacherdash() {
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
              }
          }
    })

    