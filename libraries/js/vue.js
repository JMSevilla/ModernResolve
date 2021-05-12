<<<<<<< HEAD
import http from "./http.js";
=======

// import http from "./http.js";

>>>>>>> b4a68d04b8b16d3d07767440cbca8b796cd81998
ELEMENT.locale(ELEMENT.lang.en)
    new Vue({
      el: '#app',
      data: function() {
        return { 
          app: 'app/',
          Helpers: 'Helpers',
          active: 0,
          task:{
            classcode: '',
            fname: '',
            lname: '' ,
            bdate: '',
            age: '',
            contact:'',
            address: '',
            province: '',
            city: '',
            street: '',
            zipcode: '',
            email:'',
            password:'',
            confirm:'',            
            code: "",
            TaskTrigger: 1,
            sex: '',
            course: ''
          },
<<<<<<< HEAD
          

=======
          codeverification: '',
>>>>>>> b4a68d04b8b16d3d07767440cbca8b796cd81998

          value1: '' ,
          
          value: '',
          options: [{
            value: 'Option1',
            label: 'Option1'
          }, {
            value: 'Option2',
            label: 'Option2'
          }, {
            value: 'Option3',
            label: 'Option3'
          }, {
            value: 'Option4',
            label: 'Option4'
          }],
          options: [{
            value: 'Option1',
            label: 'Option1'
          }, {
            value: 'Option2',
            label: 'Option2'
          }, {
            value: 'Option3',
            label: 'Option3'
          }, {
            value: 'Option4',
            label: 'Option4'
          }],
         } 
      },
      created(){
        this.makeverificationcode(9);
      },
      /// Dito kayo gawa ng request. same process.
      //kay methods lang kayo gagalaw
      methods: {
        next() {
<<<<<<< HEAD
          if(!this.task.classcode || !this.task.fname || !this.task.lname || !this.task.bdate || !this.task.age || !this.task.contact){
            this.$notify.error({
              title: 'Empty',
              message: 'input all feilds!',
=======
          
          if(!this.task.classcode || !this.task.fname || !this.task.lname || !this.task.bdate || !this.task.age || !this.task.contact){
            this.$notify.error({
              title: 'Empty',
              message: 'fields are required!',
>>>>>>> b4a68d04b8b16d3d07767440cbca8b796cd81998
              offset: 100
            });
            return false;
          }
<<<<<<< HEAD
          else if(this.task.contact.length > 10)
          {
            this.$notify.error
            ({
              title: 'Empty',
              message: 'Invalid No.',
              offset: 100
            });
            return false;
          
          }        
          else{
            //this.active++
            // http.buidData_Registration(this.task);
            // $.post(this.app + this.Helpers + "/Helpers.php", this.task, (response) => {
            //   var jsonbreaker = JSON.parse(response);
            //   if(jsonbreaker.statusCode === 200){
                this.active++;
                
              // } 
            // })
=======
          else{
                // this.active++;
                this.classcodeChecker()
>>>>>>> b4a68d04b8b16d3d07767440cbca8b796cd81998
          }
      },
      next_2() {
        if(!this.task.address || !this.task.zipcode || !this.task.province || !this.task.city || !this.task.street) {
          this.$notify.error({
            title: 'Empty',
<<<<<<< HEAD
            message: 'input all feilds!',
=======
            message: 'This is a success message',
>>>>>>> b4a68d04b8b16d3d07767440cbca8b796cd81998
            offset: 100
          });
          return false;
        }
        else {
          this.active++;
        }
      },
      next_3() {
<<<<<<< HEAD
        if(!this.task.course){
          this.$notify.error({
            title: 'Empty',
            message: 'input all feilds!',
=======
        if(!this.task.course) {
          this.$notify.error({
            title: 'Empty',
            message: 'This is a success message',
>>>>>>> b4a68d04b8b16d3d07767440cbca8b796cd81998
            offset: 100
          });
          return false;
        }
        else {
          this.active++;
        }
<<<<<<< HEAD
=======
      },
      next_4() {
        if(!this.task.email || !this.task.password || !this.task.confirm){
          this.$notify.error({
            title: 'Empty',
            message: 'This is a success message',
            offset: 100
          });
          return false;
        } else if(this.task.password != this.task.confirm){
          this.$notify.warning({
            title: 'Uh oh!',
            message: 'Password not match. Please try again.',
            offset: 100
          });
          return false;
        }
        else{
          const loading = this.$loading({
            lock: true,
            text: 'Sending email. please wait...',
            spinner: 'el-icon-loading',
            background: 'rgba(0, 0, 0, 0.7)'
          });
         setTimeout(() => {
          this.makeverificationcode(9);
          var objectListener={
            email: this.task.email,
            table: 'codeverifier',
            verifyuserTrigger: 1,
            sendcode: this.codeverification
          }
          $.post(this.app + this.Helpers + '/VerificationHelper.php',objectListener, (response) => {
            console.log(response)
             var jsondestroyer = JSON.parse(response);
             if(jsondestroyer.limit == "limit"){
              loading.close();
              this.$notify.warning({
                title: 'Uh oh!',
                message: "You've reached the maximum send email.",
                offset: 100
              });
              this.active++;
             } else {
              loading.close();
              this.$notify.success({
                title: 'Yey!',
                message: "Successfully Sent Verification Code.",
                offset: 100
              });
              this.active++;
             }
          })
         }, 5000)
        }
      },
      
      makeverificationcode(length){
        var result           = [];
          var characters       = '0123456789';
          var charactersLength = characters.length;
          for ( var i = 0; i < length; i++ ) {
            result.push(characters.charAt(Math.floor(Math.random() * 
      charactersLength)));
        }
        return this.codeverification = result.join('');
      },
      next2(){
        
        this.active++
>>>>>>> b4a68d04b8b16d3d07767440cbca8b796cd81998
      },
      previous(){
       this.active--;
      },
<<<<<<< HEAD
      next_4() {
        alert("try");
        // if(!this.task.email || !this.task.password || this.task.confirm) {
        //   this.$notify.error({
        //     title: 'Empty',
        //     message: 'input all feilds!',
        //     offset: 100
        //   });
        //   return false;
        // }
        // else if(!this.task.password != this.task.confirm)
        // {
        //   this.$notify.error({
        //     title: 'Empty',
        //     message: 'Password not match!',
        //     offset: 100
        //   });
        //   return false;
        // }
        // else {
        //   this.active++;
        // }
      // },
      // previous(){
      //  this.active--;
      // },
    }
  
  }
})
=======
      
      ///class code checker
      classcodeChecker(){
        var obj = {
          table: 'class_code',
          classCodeTrigger: 1,
          classcode: this.task.classcode
        };
        // console.log(obj)
        $.post(this.app + this.Helpers + '/BackendHelper.php', obj, (response) => {
          console.log(response)
          var jsonbreak = JSON.parse(response);
          if(jsonbreak.notexist === "not exist"){
            this.$notify.error({
              title: 'Oops',
              message: 'It seems like the code doesnt exist',
              offset: 100
            });
            return false;
          }else{
            this.active++;
          }
        })
      }
      }
    })
>>>>>>> b4a68d04b8b16d3d07767440cbca8b796cd81998
