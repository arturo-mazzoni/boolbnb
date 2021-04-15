

var app = new Vue({
    el: '#app',
    data: {
        query:"all",
        elementdb:[],
        categorie:[],
        apikey:"cmYIsL9C64Xxn9NR6ZkAaGiSCSYZWdlyyEfF4Yc5IgmHkcsi28",
    },
    mounted(){
        // axios
        //     .get('http://127.0.0.1:8000/api/property',{})
        //     .then((result) => {
                
        //         this.elementdb=result.data;           
        //        console.log(this.elementdb);
      
               
        //     })
        
            axios.get('http://127.0.0.1:8000/api/property', {
                
                header: {
                  'authorization':  this.apikey
                }
              })
              .then((result) => {
                this.elementdb=result.data;           
                console.log(this.elementdb);
              })
              

    }

});