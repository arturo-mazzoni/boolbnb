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
        apartmentsResult: '',
        apartmentsList : '',
        apartmentAddress: '',
        finalCoords: [],
        finalApartments: [],
        storagePath: 'storage/'
    },
    mounted() {
        axios
        .get('http://127.0.0.1:8000/api/property')
        .then((result) => {
            this.apartmentsList = result.data.response;
            console.log(this.apartmentsList);
        });       
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
        searchApartment() {
            this.apartmentsList.forEach(e => {
                axios
                    .get('https://api.tomtom.com/search/2/search/' + e.address + '.json?' + 'lat=' + this.lat + '&lon=' + this.lon + '&radius=2000' + '&key=5lt6BzvANpSqx2GPtFy2UJ3Xye0uTdiS')
                    .then((result) => {
                        this.apartmentsResult = result.data.results;
                        this.apartmentsResult.forEach(r => {
                            this.finalCoords.push({
                                'lat': r.position.lat + '000',
                                'lon': r.position.lon + '000',
                            });
                                
                        });
                        console.log(this.finalCoords);

                        
                        this.finalCoords.forEach(c => {
                            if (c.lat == e.latitude && c.lon == e.longitude) {
                                this.finalApartments = [];
                                this.finalApartments.push(e);
                            }
                        });
                        console.log(this.finalApartments);
                    });
                });
        },
    }

});


