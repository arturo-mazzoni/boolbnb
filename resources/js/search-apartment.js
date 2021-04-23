import axios from 'axios';
import Vue from 'vue';

var app = new Vue({
    el: '#root',
    data: {
        apartmentResults: [],
    },
    methods: {
        searchApartment() {
            axios
                .get('http://127.0.0.1:8000/api/property')
                .then((result) => {
                    this.apartmentResults = result.data.results;
                });
        }
    }
});