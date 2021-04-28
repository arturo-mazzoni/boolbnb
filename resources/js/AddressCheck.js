import axios from 'axios';
var map;
var app = new Vue({
    el: '#root',
    data: {
        tomTomKey: '29Yw3wrtYuBnAQmVSmAdChx2WJIlMBcj',
        query:"",
        searchElement:0,
        filter:[],
        lat:0,
        lon:0,
        checked:true,
        coordsResult: '',
        apartmentsList : '',
        finalApartments: [],
        amenityList: '',
        copunt: '',
        posizioni: [],
        storagePath: 'storage/',
        clickedAmenity: false,
        amenitiesFilterList : []
    },
    mounted() {
        axios
        .get('http://127.0.0.1:8000/api/property')
        .then((result) => {
            this.apartmentsList = result.data.response;
            console.log('Lista Originale:');
            console.log(this.apartmentsList);
        });

        axios
            .get('http://127.0.0.1:8000/api/amenity')
            .then((result) => {
                this.amenityList = result.data.response;
                console.log(this.amenityList);
                this.amenityList.forEach(amenity => {
                    this.amenitiesFilterList.push(amenity.service)
                });
                console.log(this.amenitiesFilterList);
            });
        
        const Honolulu = { lng: 12.674297, lat: 42.6384261 };

        map = tt.map({
            key: 'QsQlPfJNdBRGexsuFkmikA9nQAmoUMRp',
            container: 'map-div',
            center: Honolulu,
            zoom: 9.3
        });
       
        console.log(this.appartamentHome);
        var string=$('#data').text();
        $('#data').text("");
        var convert=JSON.parse( string );
       
        this.finalApartments=convert;

        if(this.finalApartments!=0){
            console.log(this.finalApartments);
        console.log("update");
        this.finalApartments.forEach(element => {

            if (!this.posizioni.some(p => p.lat == element.latitude && p.lng == element.longitude)) {
                this.posizioni.push({
                    'lat': element.latitude,
                    'lng': element.longitude
                });
            }

        });
        console.log(this.posizioni);

        //  contatore per ciclarli 
        this.count = 1;
        
        // crea maker per ogni posizioni (latitudine e longitudine)
        this.posizioni.forEach(posizione => {
            
            this.finalApartments.forEach(element => {
               
             var  popup = new tt.Popup({ anchor: 'top' }).setHTML("<b>"+element.title+"</b><br/>"+element.address);
            var marker = new tt.Marker().setLngLat(posizione).addTo(map);

            // makers
            marker.setPopup(popup).togglePopup();
            this.count++; 
            });
              

           

        });}
        
    },
    methods:{
        
        searchadrres(){
            this.checked=true;
            axios.get('https://api.tomtom.com/search/2/search/'+this.query+'.json?countrySet=IT&extendedPostalCodesFor=Str&entityTypeSet=&key=' + this.tomTomKey, {
           
            
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
            $('.drop-home').css('overflow-y', 'hidden');
        },
        // amenityFilter(r) {
        //     this.finalApartments.forEach(a => {
        //         a.amenityList.forEach(amenity => {
        //             r = amenity;
        //         });
        //     });
        //     return r;
        // },
        setAmenity(amenity, i){
            if (this.amenitiesFilterList.length == this.amenityList.length) {
                this.amenitiesFilterList = [];
            }
            if (this.amenitiesFilterList.includes(amenity)) {
                this.amenitiesFilterList.splice(this.amenitiesFilterList.indexOf(amenity), 1);
            } else {
                this.amenitiesFilterList.push(amenity);
            }
            console.log(this.amenitiesFilterList);
        },
        resetAmenity() {
            this.amenitiesFilterList = [];
        },
        distanceCalc(){
            this.finalApartments.forEach(e => {
                e.distance = (e.latitude - this.lat) * (e.latitude - this.lat) + (e.longitude - this.lon) * (e.longitude - this.lon);
            });
        },
        searchApartment() {
            var marker=0;
            var popup=0;
            setTimeout( function () { 
                $('#formsearch').submit();
            }, 300);
            $('.drop-home').css('overflow-y', 'hidden');
            this.apartmentsList.forEach(e => {
                axios
                    .get('https://api.tomtom.com/search/2/search/' + e.address + '.json?' + 'lat=' + this.lat + '&lon=' + this.lon + '&radius=20000' + '&key=' + this.tomTomKey)
                    .then((result) => {
                        this.coordsResult = result.data.results;
                        this.coordsResult.forEach(c => {
                            if (c.position.lat == e.latitude && c.position.lon == e.longitude) {
                                if (!this.finalApartments.includes(e)) {
                                    this.finalApartments.push(e);
                                }

                            }
                        });

                        this.distanceCalc();
                        this.finalApartments.sort(function (a, b) {
                            return a.distance - b.distance;
                        });
                        console.log('Lista Finale Ordinata');
                        console.log(this.finalApartments);


                        console.log("update");
                        this.finalApartments.forEach(element => {
                            element.amenityList = [];
                            element.amenities.forEach(a => {
                                element.amenityList.push(a.service);
                            });
                            if (!this.posizioni.some(p => p.lat == element.latitude && p.lng == element.longitude)) {
                                this.posizioni.push({
                                    'lat': element.latitude,
                                    'lng': element.longitude
                                });
                            }

                        });
                        console.log(this.finalApartments);
                        console.log(this.posizioni);

                        //  contatore per ciclarli 
                        this.count = 1;

                        // crea maker per ogni posizioni (latitudine e longitudine)
                        this.posizioni.forEach(posizione => {

                            // Casella di testo
                             popup = new tt.Popup({ anchor: 'top' }).setText('nome appartamento');

                             marker = new tt.Marker().setLngLat(posizione).addTo(map);

                            // makers
                            marker.setPopup(popup).togglePopup();
                            this.count++;

                        });
                    });
            });
          
            
            
            this.finalApartments = [];
            this.finalCoords = [];
            this.coordsResult = [];
        },
        getdata(data){
            console.log(data);
        }
        
    }

});