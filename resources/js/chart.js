import axios from 'axios';
import Vue from 'vue';

var app = new Vue({
  el: '#chart-vue',
  data: {
    items: [],
    properties: [],
    viewsNumber: [],
    viewsPerId: []    //visite per id show
  },
  mounted() {
    axios.get('http://127.0.0.1:8000/api/views')
      .then((response) => {
        /* console.log(response.data.response); */
        this.items = (response.data.response);
        /* console.log(this.items); */

        let propertyId = document.getElementById('propertyId').value;   //visite per id show
        console.log(propertyId);
        let propertyName = document.getElementById('propertyName').value;   //visite per id show
        console.log(propertyName);

        this.items.forEach(element => {
          if (!this.properties.includes(element.property_id)) {
            this.properties.push(element.property_id);
          }
        });

        let i = 0;

        while(i < this.properties.length) {
          let tempArray = [];
          this.items.forEach(element => {
            if (element.property_id == (i + 1)) {
              tempArray.push(element);
            }
          });
          this.viewsNumber = [...this.viewsNumber, tempArray.length];
          tempArray = [];
          i++
        }

        this.items.forEach(element => {   //visite per id show
          if (element.property_id == propertyId) {
            this.viewsPerId.push(element);
          }
        });

        console.log(this.viewsPerId);

        let myChart = document.getElementById('myBarChart').getContext('2d');
        let viewChart = new Chart(myChart, {
          type: 'bar',
          data: {
            labels: propertyId,   /* this.properties */   //visite per id show
            datasets: [{
              label: 'Visite' + ' ' + propertyName,   //visite per id show
              data: [
                this.viewsPerId.length    //visite per id show
              ],
              backgroundColor: [
                'coral',
                'cyan'
              ],
              borderWidth: 1,
              borderColor: 'black',
              hoverBorderWidth: 3
            }]
          },
          options: {}
        });
      })
      .catch((error) => console.log(error));
  }
});
