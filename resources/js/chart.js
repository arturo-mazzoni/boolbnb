import axios from 'axios';
import Vue from 'vue';

var app = new Vue({
  el: '#chart-vue',
  data: {
    items: [],
    properties: [],
    viewsNumber: [],
    viewsPerId: [],    //visite per id show
    viewsJanuary: [],
    viewsFebraury: [],
    viewsMarch: [],
    viewsApril: [],
    viewsMay: [],
    viewsJune: [],
    viewsJuly: [],
    viewsAugust: [],
    viewsSeptember: [],
    viewsOctober: [],
    viewsNovember: [],
    viewsDecember: [],
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

        this.items.forEach(element => {   //visite per id gennaio
          if (element.property_id == propertyId) {
            let month = element.date.slice(5,7);
            /* console.log(month); */
            if (month == '01') {
              this.viewsJanuary.push(element);
            }
          }
        });

        this.items.forEach(element => {   //visite per id febbraio
          if (element.property_id == propertyId) {
            let month = element.date.slice(5,7);
            /* console.log(month); */
            if (month == '02') {
              this.viewsFebraury.push(element);
            }
          }
        });

        this.items.forEach(element => {   //visite per id marzo
          if (element.property_id == propertyId) {
            let month = element.date.slice(5,7);
            /* console.log(month); */
            if (month == '03') {
              this.viewsMarch.push(element);
            }
          }
        });

        this.items.forEach(element => {   //visite per id aprile
          if (element.property_id == propertyId) {
            let month = element.date.slice(5,7);
            /* console.log(month); */
            if (month == '04') {
              this.viewsApril.push(element);
            }
          }
        });

        this.items.forEach(element => {   //visite per id maggio
          if (element.property_id == propertyId) {
            let month = element.date.slice(5,7);
            /* console.log(month); */
            if (month == '05') {
              this.viewsMay.push(element);
            }
          }
        });

        this.items.forEach(element => {   //visite per id giugno
          if (element.property_id == propertyId) {
            let month = element.date.slice(5,7);
            /* console.log(month); */
            if (month == '06') {
              this.viewsJune.push(element);
            }
          }
        });

        this.items.forEach(element => {   //visite per id luglio
          if (element.property_id == propertyId) {
            let month = element.date.slice(5,7);
            /* console.log(month); */
            if (month == '07') {
              this.viewsJuly.push(element);
            }
          }
        });

        this.items.forEach(element => {   //visite per id agosto
          if (element.property_id == propertyId) {
            let month = element.date.slice(5,7);
            /* console.log(month); */
            if (month == '08') {
              this.viewsAugust.push(element);
            }
          }
        });

        this.items.forEach(element => {   //visite per id settembre
          if (element.property_id == propertyId) {
            let month = element.date.slice(5,7);
            /* console.log(month); */
            if (month == '09') {
              this.viewsSeptember.push(element);
            }
          }
        });

        this.items.forEach(element => {   //visite per id ottobre
          if (element.property_id == propertyId) {
            let month = element.date.slice(5,7);
            /* console.log(month); */
            if (month == '10') {
              this.viewsOctober.push(element);
            }
          }
        });

        this.items.forEach(element => {   //visite per id novembre
          if (element.property_id == propertyId) {
            let month = element.date.slice(5,7);
            /* console.log(month); */
            if (month == '11') {
              this.viewsNovember.push(element);
            }
          }
        });

        this.items.forEach(element => {   //visite per id dicembre
          if (element.property_id == propertyId) {
            let month = element.date.slice(5,7);
            /* console.log(month); */
            if (month == '12') {
              this.viewsDecember.push(element);
            }
          }
        });

        console.log(this.viewsApril);

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
          options: {
            responsive: true
          }
        });

        var ctxL = document.getElementById("lineChart").getContext('2d');
        var myLineChart = new Chart(ctxL, {
          type: 'line',
          data: {
            labels: ["January", "February", "March", "April", "May", "June", "July", 'August', 'September', 'October', 'November', 'December'],
            datasets: [{
                label: "My First dataset",
                data: [
                  this.viewsJanuary.length,
                  this.viewsFebraury.length,
                  this.viewsMarch.length,
                  this.viewsApril.length,
                  this.viewsMay.length,
                  this.viewsJune.length,
                  this.viewsJuly.length,
                  this.viewsAugust.length,
                  this.viewsSeptember.length,
                  this.viewsOctober.length,
                  this.viewsNovember.length,
                  this.viewsDecember.length,
                ],
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
