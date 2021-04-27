 require('./bootstrap');
 require('./explore-home');



import Vue from 'vue';

var last_scroll = 0;
window.onscroll = function () {
    if (!document.getElementById("loader")) {
        close_all_menu();
        var header = document.getElementsByTagName("header")[0];
        if (Math.abs(last_scroll - this.scrollY) <= 5) return;
        (this.scrollY < last_scroll) ? header.style.top = "0" : header.style.top = "-" + header.clientHeight + "px";
        last_scroll = this.scrollY;
    }
}
var app = new Vue({
    el: '#header',
    data: {
        load: false,
        state: "close"
    },
    methods: {
        display_menu: function () {
            var body = document.getElementsByTagName("body")[0];
            (!body.classList.contains("display_menu")) ? body.classList.add("display_menu") : body.classList.remove("display_menu");
        }
    }
});
function close_all_menu() {
    var lis = document.getElementById("menu").getElementsByTagName("li");
    Array.from(lis).forEach(function (e) {
        e.style.marginTop = 0;
    });
}



var appp = new Vue ({
    el: '#appp',
    data: {
       counter: 0,
       title: 0
    },
    methods: {

        check(message){
             this.counter = message;
             console.log(this.counter);
         },

        check2(title){
            this.title = title;
            console.log(this.title);
        }
    },

});
