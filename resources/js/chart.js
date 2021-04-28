import axios from 'axios';
import Vue from 'vue';

var app = new Vue({
  el: '#chart-vue',
  data: {
    items: [],
    properties: [],
    viewsNumber: [],
    viewsPerId: [],    //visite per id show
    /* mesi */
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
    /* anni */
    viewsTwenty: [],
    viewsTwentyOne: [],
    viewsTwentyTwo: [],
    viewsTwentyThree: [],
    viewsTwentyFour: [],
    viewsTwentyFive: [],
    viewsTwentySix: [],
    viewsTwentySeven: [],
    viewsTwentyEight: [],
    viewsTwentyNine: [],
    viewsThirty: [],
    viewsThirtyOne: []
  },
  mounted() {
    axios.get('http://127.0.0.1:8000/api/views')
      .then((response) => {
        /* console.log(response.data.response); */
        this.items = (response.data.response);
        /* console.log(this.items); */

        let propertyId = document.getElementById('propertyId').value;   //visite per id show
        /* console.log(propertyId); */
        let propertyName = document.getElementById('propertyName').value;   //visite per id show
        /* console.log(propertyName); */

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

        this.items.forEach(element => {
          if (element.property_id == propertyId) {
            let year = element.date.slice(0,4);
            /* console.log(year); */
            if (year == '2020') {
              this.viewsTwenty.push(element);
            } else if (year == '2021') {
              this.viewsTwentyOne.push(element);
            } else if (year == '2022') {
              this.viewsTwentyTwo.push(element);
            } else if (year == '2023') {
              this.viewsTwentyThree.push(element);
            } else if (year == '2024') {
              this.viewsTwentyFour.push(element);
            } else if (year == '2025') {
              this.viewsTwentyFive.push(element);
            } else if (year == '2026') {
              this.viewsTwentySix.push(element);
            } else if (year == '2027') {
              this.viewsTwentySeven.push(element);
            } else if (year == '2028') {
              this.viewsTwentyEight.push(element);
            } else if (year == '2029') {
              this.viewsTwentyNine.push(element);
            } else if (year == '2030') {
              this.viewsThirty.push(element);
            } else if (year == '2032') {
              this.viewsThirtyOne.push(element);
            }
          }
        });

        console.log(this.viewsTwentyOne);

        let myChart = document.getElementById('myBarChart').getContext('2d');
        let viewChart = new Chart(myChart, {
          type: 'bar',
          data: {
            labels: ' ',   /* this.properties */   //visite per id show
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
                label: "Visualizzazioni per mese",
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
            ]
          },
          options: {
            responsive: true
          }
        });

        var ctxLY = document.getElementById("lineChartYear").getContext('2d');
        var myLineChart = new Chart(ctxLY, {
          type: 'line',
          data: {
            labels: ["2020", "2021", "2022", "2023", "2024", "2025", "2026", '2027', '2028', '2029', '2030', '2031'],
            datasets: [{
                label: "Visualizzazioni per anno",
                data: [
                  this.viewsTwenty.length,
                  this.viewsTwentyOne.length,
                  this.viewsTwentyTwo.length,
                  this.viewsTwentyThree.length,
                  this.viewsTwentyFour.length,
                  this.viewsTwentyFive.length,
                  this.viewsTwentySix.length,
                  this.viewsTwentySeven.length,
                  this.viewsTwentyEight.length,
                  this.viewsTwentyNine.length,
                  this.viewsThirty.length,
                  this.viewsThirtyOne.length,
                ],
                backgroundColor: [
                  'rgba(0, 137, 132, .2)',
                ],
                borderColor: [
                  'rgba(0, 10, 130, .7)',
                ],
                borderWidth: 2
              },
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
