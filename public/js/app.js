var app=new Vue({
	el: '#app',
    data:{
    	name:'',
    	url:'',
    	city:'',
    	element_id:'',
    	lat:'',
    	long:'',


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

            axios.post('/airports',obj).then((response)=>{ console.log(response); });

            }
    }
});


