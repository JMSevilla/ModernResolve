
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
            zipcode: '',
            email:'',
            password:'',
            confirm:'',            
            code: "",
            TaskTrigger: 1,
            sex: ''
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
          if(!this.task.classcode || !this.task.fname){
            this.$notify.error({
              title: 'Empty',
              message: 'This is a success message',
              offset: 100
            });
            return false;
          } //else if
          else{
            //this.active++
            // http.buidData_Registration(this.task);
            $.post(this.app + this.Helpers + "/Helpers.php", this.task, (response) => {
              var jsonbreaker = JSON.parse(response);
              if(jsonbreaker.statusCode === 200){
                // this.active++;
                alert(this.task.sex)
              } 
            })
          }
      },
      previous(){
       this.active--;
      },
      
      }
    })