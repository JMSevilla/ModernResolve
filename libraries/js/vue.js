

ELEMENT.locale(ELEMENT.lang.en)
    new Vue({
      el: '#app',
      data: function() {
        return { 
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
          },
          radio:{
            input: '1' 
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
          //0 + 1 = 1 + 1 = 2 + 1 = 3
        if (this.active++ > 4) this.active = 0;
      },
      previous(){
       this.active--;
      },
      
      }
    })