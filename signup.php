<?php include("libraries/includes/links.php") ?>
<?php include("libraries/resources/signupNavbar.php"); ?>
<?php include("views/signup.views.php"); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"
></script>

<script src="https://unpkg.com/vue/dist/vue.js"></script>
<script src="https://unpkg.com/element-ui/lib/index.js"></script>

<script>
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

          value1:{
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
          value: ''},

          value2:{
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
          value: ''},

         } 
      },
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
  </script>

<script src="libraries/js/global.js"></script>
<script type="module" src="libraries/js/http.js"></script>
<script type="module" src="libraries/js/main.js"></script>



