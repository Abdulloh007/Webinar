<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="./public/css/style.css">
    <link rel="stylesheet" href="./public/css/single_product.css">
</head>
<body>
    <!-- HEADER SECTION -->
    <header id="header"></header>

    <!-- MAIN SECTION -->
    <main class="s-main">
        <!-- Bread crumbs Section   -->
        <section class="s-section s-breadcrumbs__section">
            <div class="s-container">
                <div class="s-row">
                    <div class="s-breadcrumbs s-dfw s-alt-center">
                        <a href="/" class="s-bc__item">Главная</a>
                        <p class="s-bc__item">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.64645 5.64645C8.84171 5.45118 9.15829 5.45118 9.35355 5.64645L15.3536 11.6464C15.5488 11.8417 15.5488 12.1583 15.3536 12.3536L9.35355 18.3536C9.15829 18.5488 8.84171 18.5488 8.64645 18.3536C8.45118 18.1583 8.45118 17.8417 8.64645 17.6464L14.2929 12L8.64645 6.35355C8.45118 6.15829 8.45118 5.84171 8.64645 5.64645Z" fill="#414141"/>
                            </svg>
                        </p>
                        <a href="/" class="s-bc__item">Каталог</a>
                        <p class="s-bc__item">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.64645 5.64645C8.84171 5.45118 9.15829 5.45118 9.35355 5.64645L15.3536 11.6464C15.5488 11.8417 15.5488 12.1583 15.3536 12.3536L9.35355 18.3536C9.15829 18.5488 8.84171 18.5488 8.64645 18.3536C8.45118 18.1583 8.45118 17.8417 8.64645 17.6464L14.2929 12L8.64645 6.35355C8.45118 6.15829 8.45118 5.84171 8.64645 5.64645Z" fill="#414141"/>
                            </svg>
                        </p>
                        <p class="s-bc__item">Масло ПРОСТОКВАШИНО сливочное в/с 82% фольга без змж, Россия, 180 г</p>
                    </div>
                </div>
                <div class="s-row">
                    <h2 class="s-section__heading">Масло ПРОСТОКВАШИНО сливочное в/с 82% фольга без змж, Россия, 180 г</h2>
                </div>
            </div>
        </section>
        <!-- Product Full Data Section -->
        <section class="s-section s-product-data__section">
            <div class="s-container">
                <div class="s-row">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">Slide 1</div>
                            <div class="swiper-slide">Slide 2</div>
                            <div class="swiper-slide">Slide 3</div>
                            <div class="swiper-slide">Slide 4</div>
                            <div class="swiper-slide">Slide 5</div>
                            <div class="swiper-slide">Slide 6</div>
                            <div class="swiper-slide">Slide 7</div>
                            <div class="swiper-slide">Slide 8</div>
                            <div class="swiper-slide">Slide 9</div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </section>


      
    </main>

    <!-- FOOTER SECTION -->
    <footer id="footer"></footer>

    <section class="s-popup__section">
        <div data-target="auth" class="s-pop_up">
            <div class="s-pop_up__wrap">
                <div class="s-pop_up__wrap__header">
                    <div class="s-close">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M18.3536 5.64645C18.5488 5.84171 18.5488 6.15829 18.3536 6.35355L6.35355 18.3536C6.15829 18.5488 5.84171 18.5488 5.64645 18.3536C5.45118 18.1583 5.45118 17.8417 5.64645 17.6464L17.6464 5.64645C17.8417 5.45118 18.1583 5.45118 18.3536 5.64645Z" fill="#414141"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M5.64645 5.64645C5.84171 5.45118 6.15829 5.45118 6.35355 5.64645L18.3536 17.6464C18.5488 17.8417 18.5488 18.1583 18.3536 18.3536C18.1583 18.5488 17.8417 18.5488 17.6464 18.3536L5.64645 6.35355C5.45118 6.15829 5.45118 5.84171 5.64645 5.64645Z" fill="#414141"/>
                        </svg>                            
                    </div>
                    <h4>Вход</h4>
                </div>
                <div class="s-pop_up__content">
                    <p class="s-label__text">Телефон</p>
                    <label class="s-label s-border__green s-dfw">
                        <input type="tel" placeholder="+992 92 999 99 99" class="s-inp">                      
                    </label>
                    <button class="s-btn s-pop_up__submit">Вход</button>
                    <div class="s-pop_up__actions s-dfw s-jc-sb s-alt-center">
                        <button class="s-btn s-btn__green invert">Регистрация</button>
                        <a href="#" class="s-section__link">Забыли пароль?</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script type="module" src="./public/js/index.js"></script>
    <script src="./node_modules/swiper/swiper-bundle.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
        direction: "vertical",
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
      });
    </script>
</body>
</html>