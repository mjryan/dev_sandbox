import { fetchPhotoInfo, doSomething } from './lib';

const photos = document.getElementById('photos');


async function checkLocalStorage() {
  if (localStorage.getItem('photoinfo') === null) {
      const response = await fetch ('https://jsonplaceholder.typicode.com/photos');
      const data = await response.json();
      const subset = data.slice(0, 25);

      //console.log(subset);


      localStorage.setItem('photoinfo', JSON.stringify(subset));

      fetchPhotoInfo();
  } else {
      fetchPhotoInfo();
  }
}
checkLocalStorage();
