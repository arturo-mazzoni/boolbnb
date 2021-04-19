import axios from 'axios';
var app = new Vue({
    el: '#app',
    data: {
        query:"all",
        elementdb:[],
        categorie:[],
      
        prova:"ciao",
        
    },
    mounted(){
        // axios
        //     .get('http://127.0.0.1:8000/api/property',{})
        //     .then((result) => {
                
        //         this.elementdb=result.data;           
        //        console.log(this.elementdb);
      
               
        //     })
        
            axios.get('http://127.0.0.1:8000/api/property', {
                
            
              })
              .then((result) => {
                this.elementdb=result.data;           
                console.log(this.elementdb);
              })
              

    }

});