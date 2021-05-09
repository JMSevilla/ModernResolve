
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://unpkg.com/element-ui/lib/theme-chalk/index.css">
<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css"
  rel="stylesheet"
/>

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
          input: ''
         }
      },
      methods: {
        next() {
          //0 + 1 = 1 + 1 = 2 + 1 = 3
        if (this.active++ > 2) this.active = 0;
      },
      previous(){
       this.active--;
      }
      }
    })
  </script>

<script src="libraries/js/global.js"></script>
<script type="module" src="libraries/js/http.js"></script>
<script type="module" src="libraries/js/main.js"></script>



