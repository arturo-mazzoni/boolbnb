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

        var ctxL = document.getElementById("lineChart").getContext('2d');
        var myLineChart = new Chart(ctxL, {
          type: 'line',
          data: {
            labels: ["January", "February", "March", "April", "May", "June", "July", 'August', 'September', 'October', 'November', 'December'],
            datasets: [{
                label: "My First dataset",
                data: [65, 59, 80, 81, 56, 55, 40],
                backgroundColor: [
                  'rgba(105, 0, 132, .2)',
                ],
                borderColor: [
                  'rgba(200, 99, 132, .7)',
                ],
                borderWidth: 2
              },
              {
                label: "My Second dataset",
                data: [28, 48, 40, 19, 86, 27, 90],
                backgroundColor: [
                  'rgba(0, 137, 132, .2)',
                ],
                borderColor: [
                  'rgba(0, 10, 130, .7)',
                ],
                borderWidth: 2
              }
            ]
          },
          options: {
            responsive: true
          }
        });
      })
      .catch((error) => console.log(error));
  }
});
