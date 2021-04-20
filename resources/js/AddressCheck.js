import axios from 'axios';
var app = new Vue({
    el: '#root',
    data: {
        query:"",
        searchElement:0,
        filter:[],
        lat:0,
        lon:0,
        checked:true,
    },
    mounted(){
        console.log(this.query);
      
        
    },
    methods:{
        
        searchadrres(){
            this.searchElement=[];
            this.checked=true;
            axios.get('https://api.tomtom.com/search/2/search/'+this.query+'.json?countrySet=IT&extendedPostalCodesFor=Str&entityTypeSet=&key=5lt6BzvANpSqx2GPtFy2UJ3Xye0uTdiS', {
           
            
              })
              .then((result) => {
                this.searchElement=result.data.results;           
                console.log(this.searchElement);
                

              })
              
        },
        filtere(){
            this.filter=this.vie.filter(query=>{
                return query.toLowerCase().startsWith(this.query.toLowerCase());
            })
            console.log(this.filter);
        },
        setstreets(item,index){
            console.log(index);
            this.query=item;
            this.checked=false;
            this.lat=this.searchElement[index].position.lat;
            this.lon=this.searchElement[index].position.lon;
            console.log(this.lat);
            console.log(this.lon);
        },
    }

});