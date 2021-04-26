var app = new Vue({
    el: '#sponsor',
    data: {
        test: 'null',
        counter: -1,
        sponsors: [
            {
                id: 1,
                title: 'bronze',
                duration: '1',
                amount: 2.99
            },
            {
                id: 2,
                title: 'silver',
                duration: '3',
                amount: 5.99
            },
            {
                id: 3,
                title: 'gold',
                duration: '6',
                amount: 9.99
            }
        ]
    },
    methods: {
        // enter(index){
        //   this.counter = index;
        //   console.log(this.counter);
        // },
        // leave(index){
        //   this.counter = -1;
        // },
        selection(sponsor, index) {
            if (this.counter == index) {
                this.counter = -1;
                document.getElementById("sel").removeAttribute("value");
            }
            else {
                this.counter = index;
                document.getElementById("sel").setAttribute("value", sponsor.id);
            }
        }
    }
});