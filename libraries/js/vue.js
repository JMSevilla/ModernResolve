import http from "./http.js";
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
      
      /// Dito kayo gawa ng request. same process.
      //kay methods lang kayo gagalaw
      methods: {
        next() {
          if(!this.task.classcode || !this.task.fname || !this.task.lname || !this.task.bdate || !this.task.age || !this.task.contact){
            this.$notify.error({
              title: 'Empty',
              message: 'input all feilds!',
              offset: 100
            });
            return false;
          }
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
          }
      },
      next_2() {
        if(!this.task.address || !this.task.zipcode || !this.task.province || !this.task.city || !this.task.street) {
          this.$notify.error({
            title: 'Empty',
            message: 'input all feilds!',
            offset: 100
          });
          return false;
        }
        else {
          this.active++;
        }
      },
      next_3() {
        if(!this.task.course){
          this.$notify.error({
            title: 'Empty',
            message: 'input all feilds!',
            offset: 100
          });
          return false;
        }
        else {
          this.active++;
        }
      },
      previous(){
       this.active--;
      },
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
