ELEMENT.locale(ELEMENT.lang.en)
    new Vue({
        el:'#teacher',
        
        data: function(){
            return{
                dialogVisible: false,
                className: '',
                activeName: 'first',
                resetteacherdialogVisible: false,
                resetteacher:{
                    oldpass:'',
                    newpass:'',
                    checkPass:'',
                  },
                labelPosition: 'left',
                
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
            
        
        methods: {
              handleClick(tab, event) {
                console.log(tab, event);
              }

          }
    })

    