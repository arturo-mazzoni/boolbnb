const exploreImages = [
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
    },
];

exploreImages.forEach((e, i) => {
    const { img, name, address } = e;
    document.getElementById('explore-list').innerHTML += `
  <div class="explore-object" style="margin-top: 20px;
      width: 25%;
      display: flex;
      align-items: center;">
    <div class="explore-box" style="background-image: url('${img}'); background-size: cover; height: 80px; width: 80px"></div>
    <div class="explore-text" style="width:"70%"; font-size: 14px">
        <div>${name}</div>
        <span>${address}</span>
    </div>
  </div>
  `;
});