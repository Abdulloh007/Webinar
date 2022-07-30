window.addEventListener('DOMContentLoaded', () => {
    'Use strict';


    const headerTemp = document.querySelector('#header');
    const footerTemp = document.querySelector('#footer');


    fetch('./public/assets/components/header.html').then(res => res.text()).then(data => headerTemp.innerHTML = data);
    fetch('./public/assets/components/footer.html').then(res => res.text()).then(data => footerTemp.innerHTML = data);


})