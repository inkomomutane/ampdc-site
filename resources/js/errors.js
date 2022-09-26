
import feather from 'feather-icons';
feather.replace();
function getImageUrl(name) {
    return new URL(`../img/${name}`, import.meta.url).href
  }
document.addEventListener('DOMContentLoaded', function () {
    const links = document.querySelectorAll('.media_data_image');

    links.forEach(element => {
        let method = element.getAttribute('data-image');
        element.src = getImageUrl(method);
         console.log(link.src);
    });

});

