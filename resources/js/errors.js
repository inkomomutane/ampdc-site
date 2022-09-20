
import feather from 'feather-icons';
feather.replace();
function getImageUrl(name) {
    return new URL(`../img/svg/${name}`, import.meta.url).href
  }
document.addEventListener('DOMContentLoaded', function () {
    const link = document.querySelector('#svg_error_image');
    let method = link.getAttribute('data-image');
    link.src = getImageUrl(method);
    console.log(link.src);
});

