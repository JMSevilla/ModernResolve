
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
<!-- hannah-5/6/21:Add footer-starts here-->
<?php include("libraries/resources/footer.php"); ?>
<!-- hannah-5/6/21:Add footer-ends here-->
</body>
</html>
