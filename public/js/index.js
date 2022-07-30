window.addEventListener('DOMContentLoaded', () => {
    'Use strict';


    const headerTemp = document.querySelector('#header');
    const footerTemp = document.querySelector('#footer');


    fetch('./public/assets/components/header.php').then(res => res.text()).then(data => {
        headerTemp.innerHTML = data
        //PopUp`s
        let popUpBtns = document.querySelectorAll('.s-pop_up__btn'),
        popUps = document.querySelectorAll('.s-pop_up');
        
        function popUper(elem) {
            popUps.forEach((item) => {
                const closeBtn = item.querySelector('.s-close');
                closeBtn.addEventListener('click', function () {
                    item.classList.remove('active');
                })
            });
            elem.addEventListener('click', function () {
                console.log('pol')
                for (let i = 0; i < popUps.length; i++) {
                    if (elem.id == popUps[i].dataset.target) {
                        popUps[i].classList.add('active');
                    }
                }
            })
        }
        if (popUpBtns != undefined && popUps != undefined) {
            popUpBtns.forEach((item) =>  popUper(item));
        }
    });
    fetch('./public/assets/components/footer.php').then(res => res.text()).then(data => footerTemp.innerHTML = data);


    //Tabination
    const tabination = document.querySelectorAll('.s-tabination');

    function activeTabination(elem) {
        const tabNav = elem.querySelector('.s-tab__nav'),
        tabBtns = elem.querySelectorAll('.s-tn__item'),
        tabs = elem.querySelectorAll('.s-tab');

        tabNav.addEventListener('click', function () {
            for (let i = 0; i < tabBtns.length; i++) {
                if (event.target == tabBtns[i]) {
                    showTab(i);
                }
            }
        })
        showTab(0);
        function showTab(n) {
            tabBtns.forEach((item) => item.classList.remove('active', 's-btn__green'));
            tabs.forEach((item) => item.classList.remove('active'));
            tabBtns[n].classList.add('active', 's-btn__green');
            tabs[n].classList.add('active');
        }
    }
    if (tabination !== undefined && tabination !== null) {
        tabination.forEach(item => activeTabination(item));
    }

})