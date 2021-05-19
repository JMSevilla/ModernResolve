ELEMENT.locale(ELEMENT.lang.en)
    new Vue({
        el:'#admin',
        data: function(){
            return{
                activeName: 'first',
                input: '',
                value: new Date(),
                tableData: [{
                    date: '2016-05-03',
                    name: 'Tom',
                    state: 'California',
                    city: 'Los Angeles',
                    address: 'No. 189, Grove St, Los Angeles',
                    zip: 'CA 90036',
                    tag: 'Home'
                  },{
                    date: '2016-05-01',
                    name: 'Tom',
                    state: 'California',
                    city: 'Los Angeles',
                    address: 'No. 189, Grove St, Los Angeles',
                    zip: 'CA 90036',
                    tag: 'Office'
                  }],
                        
            }
        },
        methods: {
            handleClick(tab, event) {
              console.log(tab, event);
            }
          }
    })