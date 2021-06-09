ELEMENT.locale(ELEMENT.lang.en)
    new Vue({
        el:'#student',
        
        data: function(){

       
            return{
                resetstudentdialogVisible: false,
                resetlabelPosition: 'left',
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
                activeName: 'first',
                studentTableData: [{
                    Avatar:'',
                    name: 'John Doe',
                    email:'johndoe@email.com'
                  },
                  {
                    Avatar:'',
                    name: 'me',
                    email:'me@email.com'
                  },
                  {
                    Avatar:'',
                    name: 'test',
                    email:'iba@email.com'
                  }],
                  searchStudent: '',
                  ownerTableData: [{
                    Avatar:'',
                    name: 'Juan Dela Cruz  (Class Owner)',
                  }],
            }        
        },
        methods: {

          
          },
        
    })

    