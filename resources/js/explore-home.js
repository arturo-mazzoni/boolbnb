import Vue from 'vue';

var app = new Vue({
    el: '#roothome',
    data: {
        explorePlaces : [
            {
                img: 'https://www.viaggi-usa.it/wp-content/uploads/2017/04/Cosa-vedere-a-Honolulu-Hawaii.jpg',
                name: 'Liliuokalani Botanical Gardens',
                address: '123 N.Kuakini St.',
            },
            {
                img: 'https://www.viaggi-usa.it/wp-content/uploads/2017/04/Honolulu-Hawaii-cosa-vedere.jpg',
                name: 'Aliiolani Hale',
                address: '417 S.King St.',
            },
            {
                img: 'https://www.viaggi-usa.it/wp-content/uploads/2017/04/Honolulu-cosa-vedere-2.jpg',
                name: 'Aloha Tower Marketplace',
                address: '',
            },
            {
                img: 'https://www.viaggi-usa.it/wp-content/uploads/2017/04/Honolulu-cosa-vedere-3.jpg',
                name: 'Wakiki',
                address: '',
            },
            {
                img: 'https://www.viaggi-usa.it/wp-content/uploads/2017/04/Attrazioni-Honolulu-1.jpg',
                name: 'Kalakaua Avenue',
                address: '',
            },
            {
                img: 'https://www.viaggi-usa.it/wp-content/uploads/2017/04/Cosa-vedere-a-Honolulu-Hawaii-1.jpg',
                name: 'Diamond Head',
                address: '',
            },
            {
                img: 'https://www.viaggi-usa.it/wp-content/uploads/2017/04/Attrazioni-Honolulu.jpg',
                name: 'Chinatown',
                address: 'Beretania St.',
            },
            {
                img: 'https://www.viaggi-usa.it/wp-content/uploads/2017/04/Cosa-vedere-a-Honolulu-2.jpg',
                name: 'Honolulu Harbor',
                address: '',
            }
        ],
        partners : [
            {
                img: 'https://media-cdn.tripadvisor.com/media/photo-o/1b/64/c4/11/nalu-salad.jpg',
                name: 'Nalu Health Bar & Cafe',
                address: '1170 Auahi St Suite 145, Honolulu, Oahu, HI 96814-4946',
                link: 'https://www.naluhealthbar.com/'
            },
            {
                img: 'https://i.postimg.cc/hvtGLF8m/senia.png',
                name: 'Senia Restaurant',
                address: '75 N King St, Honolulu, Oahu, HI 96817-5108',
                link: 'http://restaurantsenia.com/'
            },
            {
                img: 'https://pbs.twimg.com/profile_images/646801491060064256/zAY9m2XF_400x400.jpg',
                name: 'Duke\'s Waikiki',
                address: '2335 Kalakaua Ave Ste 116, Honolulu, Oahu, HI 96815-2941',
                link: 'http://www.dukeswaikiki.com/'
            }
        ]
    },
});