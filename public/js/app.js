
axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';


var app=new Vue({
	el: '#app',
    data:{
    	name:'',
    	url:'',
    	city:'',
    	element_id:'',
    	lat:'',
    	long:'',
        airports:'',


    },
    created(){
        axios.get('/airports').then(response=>{
            this.airports = response.data;
        });
    },

    methods:{
        save(){

            var obj = {
                name:this.name,
                url:this.url,
                city:this.city,
                element_id:this.element_id,
                lat:this.lat,
                long:this.long
            };

            axios.post('/airports',obj).then((response)=>{ 
                top.location="/airports";
            });

            }
    }
});


