ELEMENT.locale(ELEMENT.lang.en)
    new Vue({
        el:'#teacher',
        
        data: function(){
            return{
                dialogVisible: false,
                className: '',
                activeName: 'first',
            }
        },
            
        
        methods: {
              handleClick(tab, event) {
                console.log(tab, event);
              }

          }
    })

    