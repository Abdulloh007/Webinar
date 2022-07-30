<?php 
    include('db.php');
    $id = $_GET['product'];
        $select = "select * from products where id = '$id'";
        $run = mysqli_query($con, $select);
        $row = mysqli_fetch_array($run);
            extract($row);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="./public/css/style.css">
    <link rel="stylesheet" href="./public/css/single_product.css">
    <link rel="stylesheet" href="./node_modules/swiper/swiper-bundle.css">
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
                        <p class="s-bc__item"><?= $title; ?></p>
                    </div>
                </div>
                <div class="s-row">
                    <h2 class="s-section__heading"><?= $title; ?></h2>
                </div>
            </div>
        </section>
        <!-- Product Full Data Section -->
        <section class="s-section s-product-data__section">
            <div class="s-container">
                <div class="s-row">
                    <div class="swiper product-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img class="s-product__img" src="<?= $image; ?>" alt="">
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                    <div class="s-product__info">
                        <div class="s-pi_prices s-dfw s-jc-sb">
                            <div class="s-pip__item">
                                <h4><?= $price_with_card; ?> ₽</h4>
                                <p>С картой</p>
                            </div>
                            <div class="s-pip__item bold">
                                <h4><?= $price_without_card; ?> ₽</h4>
                                <p class="s-dfw ">
                                    <span>Обычная цена</span>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M1.5 12C1.5 6.20101 6.20101 1.5 12 1.5C17.799 1.5 22.5 6.20101 22.5 12C22.5 17.799 17.799 22.5 12 22.5C6.20101 22.5 1.5 17.799 1.5 12ZM12 2.5C6.75329 2.5 2.5 6.75329 2.5 12C2.5 17.2467 6.75329 21.5 12 21.5C17.2467 21.5 21.5 17.2467 21.5 12C21.5 6.75329 17.2467 2.5 12 2.5Z" fill="#414141"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 11.5C12.2761 11.5 12.5 11.7239 12.5 12V16C12.5 16.2761 12.2761 16.5 12 16.5C11.7239 16.5 11.5 16.2761 11.5 16V12C11.5 11.7239 11.7239 11.5 12 11.5Z" fill="#414141"/>
                                        <path d="M13 8C13 8.55228 12.5523 9 12 9C11.4477 9 11 8.55228 11 8C11 7.44772 11.4477 7 12 7C12.5523 7 13 7.44772 13 8Z" fill="#414141"/>
                                    </svg> 
                                </p>
                            </div>
                        </div>
                        <a href="/addtocart?product=<?= $id; ?>" class="s-btn s-btn__orange s-dfw s-jc-sb">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.33203 27.9998C7.33203 26.1589 8.82442 24.6665 10.6654 24.6665C12.5063 24.6665 13.9987 26.1589 13.9987 27.9998C13.9987 29.8408 12.5063 31.3332 10.6654 31.3332C8.82442 31.3332 7.33203 29.8408 7.33203 27.9998ZM10.6654 25.9998C9.56079 25.9998 8.66536 26.8953 8.66536 27.9998C8.66536 29.1044 9.56079 29.9998 10.6654 29.9998C11.7699 29.9998 12.6654 29.1044 12.6654 27.9998C12.6654 26.8953 11.7699 25.9998 10.6654 25.9998Z" fill="white"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M23.332 27.9998C23.332 26.1589 24.8244 24.6665 26.6654 24.6665C28.5063 24.6665 29.9987 26.1589 29.9987 27.9998C29.9987 29.8408 28.5063 31.3332 26.6654 31.3332C24.8244 31.3332 23.332 29.8408 23.332 27.9998ZM26.6654 25.9998C25.5608 25.9998 24.6654 26.8953 24.6654 27.9998C24.6654 29.1044 25.5608 29.9998 26.6654 29.9998C27.7699 29.9998 28.6654 29.1044 28.6654 27.9998C28.6654 26.8953 27.7699 25.9998 26.6654 25.9998Z" fill="white"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.33464 0.666504C0.966446 0.666504 0.667969 0.964981 0.667969 1.33317C0.667969 1.70136 0.966446 1.99984 1.33464 1.99984H6.10865C7.11841 7.7218 8.13907 13.4189 9.00038 19.161C9.24514 20.7927 10.6468 21.9998 12.2968 21.9998H25.8142C27.4031 21.9998 28.7712 20.8783 29.0828 19.3202L31.0018 9.7254C31.2493 8.48782 30.3027 7.33317 29.0406 7.33317H9.54859C9.14464 7.33317 8.77193 7.45186 8.46045 7.65441L7.32449 1.21731C7.26827 0.898742 6.99146 0.666504 6.66797 0.666504H1.33464ZM8.8893 9.43206C8.82884 9.029 9.14101 8.6665 9.54859 8.6665H29.0406C29.4613 8.6665 29.7768 9.05139 29.6943 9.46392L27.7754 19.0587C27.5884 19.9936 26.7676 20.6665 25.8142 20.6665H12.2968C11.3068 20.6665 10.4658 19.9422 10.319 18.9632L8.8893 9.43206Z" fill="white"/>
                            </svg>
                            <span>В корзину</span>
                        </a>
                        <div class="s-u__will s-dfw s-jc-center s-alt-center">
                            <svg width="24" height="12" viewBox="0 0 24 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M23.1883 0.666504H0.811961C0.343143 0.666504 -0.0396916 1.05813 0.0033005 1.5204C0.494639 7.01119 5.67826 11.3332 12.0001 11.3332C18.322 11.3332 23.5056 7.01321 23.997 1.5204C24.0379 1.05813 23.6571 0.666504 23.1883 0.666504Z" fill="#70C05B"/>
                            </svg>
                            <span>Вы получаете <b>10</b> бонусов</span>
                        </div>
                        <ul class="s-table">
                            <li class="s-tr s-dfw">
                                <p>Бренд</p>
                                <p>ПРОСТОКВАШИНО</p>
                            </li>
                            <li class="s-tr s-dfw">
                                <p>Страна производителя</p>
                                <p>Россия</p>
                            </li>
                            <li class="s-tr s-dfw">
                                <p>Упаковка</p>
                                <p>180 г</p>
                            </li>
                        </ul>
                    </div>
                    <div class="s-similar__products">
                        <p class="s-sp__title">Похожие</p>
                        <div class="s-sp__item">
                            <img src="./public/assets/img/spi_1.png" alt="">
                            <p class="s-spi__text">157,50 ₽</p>
                        </div>
                        <div class="s-sp__item">
                            <img src="./public/assets/img/spi_2.png" alt="">
                            <p class="s-spi__text">157,50 ₽</p>
                        </div>
                        <div class="s-sp__item">
                            <img src="./public/assets/img/spi_3.png" alt="">
                            <p class="s-spi__text">157,50 ₽</p>
                        </div>
                        <div class="s-sp__item">
                            <img src="./public/assets/img/spi_1.png" alt="">
                            <p class="s-spi__text">157,50 ₽</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- exist Section -->
      <section class="s-section s-sale__section">
        <div class="s-container">
            <div class="s-row">
                <h4 class="s-section__heading">С этим товаров мокупают</h4>
            </div>
            <div class="s-row s-jc-sb">
            <?php
                $select = "SELECT * FROM `products` where sales_id != '0' order by id DESC limit 4";
                $run = mysqli_query($con,$select);
                while($row = mysqli_fetch_array($run)){
                    extract($row);
                    if($sales_id != 0){
                        $sales_give ="select * from sales where id = '$sales_id'";
                        $run1 = mysqli_query($con,$sales_give);
                        $row1 = mysqli_fetch_array($run1);
                            extract($row1, EXTR_PREFIX_ALL, 'sales');
                    }
            ?>
                <div class="s-col-3 s-product__card">
                    <div class="s-pc__banner">
                        <img class="s-pcb__img" src="<?= $image; ?>" alt="">
                        <a href="#" class="s-pcb__link s-dfw s-jc-center s-alt-center">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.64645 5.64645C8.84171 5.45118 9.15829 5.45118 9.35355 5.64645L15.3536 11.6464C15.5488 11.8417 15.5488 12.1583 15.3536 12.3536L9.35355 18.3536C9.15829 18.5488 8.84171 18.5488 8.64645 18.3536C8.45118 18.1583 8.45118 17.8417 8.64645 17.6464L14.2929 12L8.64645 6.35355C8.45118 6.15829 8.45118 5.84171 8.64645 5.64645Z" fill="#414141"/>
                            </svg>                                
                        </a>
                        <h5 class="s-bage s-pcb__bage"><?= $sales_title; ?></h5>
                    </div>
                    <div class="s-pc__info">
                        <div class="s-pci__price s-dfw s-jc-sb">
                            <div class="s-pcip__item bold">
                                <h4 class="s-pcipt__price"><?= $price_with_card; ?> ₽</h4>
                                <p class="s-pcipt__price-type">С картой</p>
                            </div>
                            <div class="s-pcip__item">
                                <h4 class="s-pcipt__price"><?= $price_without_card; ?> ₽</h4>
                                <p class="s-pcipt__price-type">Обычный</p>
                            </div>
                        </div>
                        <h4 class="s-pc__title"><?= $title; ?></h4>
                       
                        <a href="/addtocart?product=<?= $id; ?>" class="s-btn s-btn__green invert">В корзину</a>
                    </div>
                </div>                
                <? } ?>                
            </div>
        </div>
      </section>

        <!-- SALE Section -->
      <section class="s-section s-sale__section">
        <div class="s-container">
            <div class="s-row">
                <h4 class="s-section__heading">Акции</h4>
                <a href="#" class="s-section__link s-dfw">
                    <span>Все акции</span>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.64645 5.64645C8.84171 5.45118 9.15829 5.45118 9.35355 5.64645L15.3536 11.6464C15.5488 11.8417 15.5488 12.1583 15.3536 12.3536L9.35355 18.3536C9.15829 18.5488 8.84171 18.5488 8.64645 18.3536C8.45118 18.1583 8.45118 17.8417 8.64645 17.6464L14.2929 12L8.64645 6.35355C8.45118 6.15829 8.45118 5.84171 8.64645 5.64645Z" fill="#414141"/>
                    </svg>                        
                </a>
            </div>
            <div class="s-row s-jc-sb">
            <?php
                $select = "SELECT * FROM `products` where sales_id != '0' order by id DESC limit 4";
                $run = mysqli_query($con,$select);
                while($row = mysqli_fetch_array($run)){
                    extract($row);
                    if($sales_id != 0){
                        $sales_give ="select * from sales where id = '$sales_id'";
                        $run1 = mysqli_query($con,$sales_give);
                        $row1 = mysqli_fetch_array($run1);
                            extract($row1, EXTR_PREFIX_ALL, 'sales');
                    }
            ?>
                <div class="s-col-3 s-product__card">
                    <div class="s-pc__banner">
                        <img class="s-pcb__img" src="<?= $image; ?>" alt="">
                        <a href="#" class="s-pcb__link s-dfw s-jc-center s-alt-center">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.64645 5.64645C8.84171 5.45118 9.15829 5.45118 9.35355 5.64645L15.3536 11.6464C15.5488 11.8417 15.5488 12.1583 15.3536 12.3536L9.35355 18.3536C9.15829 18.5488 8.84171 18.5488 8.64645 18.3536C8.45118 18.1583 8.45118 17.8417 8.64645 17.6464L14.2929 12L8.64645 6.35355C8.45118 6.15829 8.45118 5.84171 8.64645 5.64645Z" fill="#414141"/>
                            </svg>                                
                        </a>
                        <h5 class="s-bage s-pcb__bage"><?= $sales_title; ?></h5>
                    </div>
                    <div class="s-pc__info">
                        <div class="s-pci__price s-dfw s-jc-sb">
                            <div class="s-pcip__item bold">
                                <h4 class="s-pcipt__price"><?= $price_with_card; ?> ₽</h4>
                                <p class="s-pcipt__price-type">С картой</p>
                            </div>
                            <div class="s-pcip__item">
                                <h4 class="s-pcipt__price"><?= $price_without_card; ?> ₽</h4>
                                <p class="s-pcipt__price-type">Обычный</p>
                            </div>
                        </div>
                        <h4 class="s-pc__title"><?= $title; ?></h4>
                       
                        <a href="/addtocart?product=<?= $id; ?>" class="s-btn s-btn__green invert">В корзину</a>
                    </div>
                </div>                
                <? } ?>                
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
        var swiper = new Swiper(".product-slider", {
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        loop: true,
        autoplay: true
      });
    </script>
</body>
</html>