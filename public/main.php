<? include('db.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="./public/css/style.css">
    <link rel="stylesheet" href="./public/css/main.css">
</head>
<body>
    <!-- HEADER SECTION -->
    <header id="header"></header>

    <!-- MAIN SECTION -->
    <main class="s-main">
      <!-- Banner Section   -->
      <section class="s-section s-banner__section">
        <div class="s-container">
            <div class="s-row">
                <img class="s-banner__img" src="./public/assets/img/header__img.png" alt="">
                <h2 class="s-banner__headimg s-dfw s-alt-center">Доставка бесплатно от 1000 ₽</h2>
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
      <!-- NEw PRODUCTS Section -->
      <section class="s-section s-new-products__section">
        <div class="s-container">
            <div class="s-row">
                <h4 class="s-section__heading">Новинки</h4>
                <a href="#" class="s-section__link s-dfw">
                    <span>Все новинки</span>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.64645 5.64645C8.84171 5.45118 9.15829 5.45118 9.35355 5.64645L15.3536 11.6464C15.5488 11.8417 15.5488 12.1583 15.3536 12.3536L9.35355 18.3536C9.15829 18.5488 8.84171 18.5488 8.64645 18.3536C8.45118 18.1583 8.45118 17.8417 8.64645 17.6464L14.2929 12L8.64645 6.35355C8.45118 6.15829 8.45118 5.84171 8.64645 5.64645Z" fill="#414141"/>
                    </svg>                        
                </a>
            </div>
            <div class="s-row s-jc-sb">
            <?php
                $select = "SELECT * FROM `products` where sales_id != '0' order by title DESC limit 4";
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
                                <h4 class="s-pcipt__price"><?= $price_without_card?> ₽</h4>
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
      <!-- TOP SALES Section -->
      <section class="s-section s-new-products__section">
        <div class="s-container">
            <div class="s-row">
                <h4 class="s-section__heading">ТОП Продаж</h4>
                <a href="#" class="s-section__link s-dfw">
                    <span>Все продукты</span>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.64645 5.64645C8.84171 5.45118 9.15829 5.45118 9.35355 5.64645L15.3536 11.6464C15.5488 11.8417 15.5488 12.1583 15.3536 12.3536L9.35355 18.3536C9.15829 18.5488 8.84171 18.5488 8.64645 18.3536C8.45118 18.1583 8.45118 17.8417 8.64645 17.6464L14.2929 12L8.64645 6.35355C8.45118 6.15829 8.45118 5.84171 8.64645 5.64645Z" fill="#414141"/>
                    </svg>                        
                </a>
            </div>
            <div class="s-row s-jc-sb">
            <?php
                $select = "SELECT * FROM `products` order by id ASC limit 4";
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
      <!-- Special Offers Section -->
      <section class="s-section s-special_offers__section">
        <div class="s-container">
            <div class="s-row">
                <h4 class="s-section__heading">ТОП Продаж</h4>
            </div>
            <div class="s-row s-jc-sb">
                <div class="s-so__card s-dfw">
                    <div class="s-soc__text-wrap">
                        <h3>Оформите карту «Северяночка»</h3>
                        <p>И получайте бонусы при покупке в магазинах и на сайте</p>
                    </div>
                </div>
                <div class="s-so__card s-dfw">
                    <div class="s-soc__text-wrap">
                        <h3>Покупайте акционные товары</h3>
                        <p>И получайте вдвое больше бонусов</p>
                    </div>
                </div>
            </div>
        </div>
      </section>
      <!-- OUR SHOPS Location Section -->
      <section class="s-section s-osl__section">
        <div class="s-container">
            <div class="s-row">
                <h4 class="s-section__heading">Наши магазины</h4>
            </div>
            <div class="s-row">
                <div class="s-tabination">
                    <div class="s-tab__nav">
                        <button class="s-btn s-tn__item">п.Щельяюр</button>
                        <button class="s-btn s-tn__item">д.Вертеп</button>
                        <button class="s-btn s-tn__item">с.Краснобор</button>
                        <button class="s-btn s-tn__item">д.Диюр</button>
                    </div>
                    <div class="s-tab">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d97392.32463258074!2d69.6369266!3d40.28663055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38b1b2ddc3ab3e0d%3A0x1f4cdc45cf4fee37!2z0KXRg9C00LbQsNC90LQ!5e0!3m2!1sru!2s!4v1659167310595!5m2!1sru!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="s-tab"></div>
                    <div class="s-tab"></div>
                    <div class="s-tab"></div>
                </div>
            </div>
        </div>
      </section>
      <!-- NEWS Section -->
      <section class="s-section s-news__section">
        <div class="s-container">
            <div class="s-row">
                <h4 class="s-section__heading">Статьи</h4>
                <a href="#" class="s-section__link s-dfw">
                    <span>Все статьи</span>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.64645 5.64645C8.84171 5.45118 9.15829 5.45118 9.35355 5.64645L15.3536 11.6464C15.5488 11.8417 15.5488 12.1583 15.3536 12.3536L9.35355 18.3536C9.15829 18.5488 8.84171 18.5488 8.64645 18.3536C8.45118 18.1583 8.45118 17.8417 8.64645 17.6464L14.2929 12L8.64645 6.35355C8.45118 6.15829 8.45118 5.84171 8.64645 5.64645Z" fill="#414141"/>
                    </svg>                        
                </a>
            </div>
            <div class="s-row s-jc-sb">
                <div class="s-news__card s-col-4">
                    <div class="s-nc__banner">
                        <img src="./public/assets/img/n_1.png" alt="">
                    </div>
                    <div class="s-datas s-dfw">
                        <p class="s-data__item">05.03.2021</p>
                    </div>
                    <h4 class="s-news__title">Режим использования масок и перчаток на территории магазинов</h4>
                    <p class="s-news__excerpt">
                        Подробная информация о режимах использования масок и перчаток на территории магазинов "ЛЕНТА". Информация обновляется каждый будний день.
                    </p>
                    <button class="s-btn s-btn__transparent-green">Подробнее</button>
                </div>
                <div class="s-news__card s-col-4">
                    <div class="s-nc__banner">
                        <img src="./public/assets/img/n_2.png" alt="">
                    </div>
                    <div class="s-datas s-dfw">
                        <p class="s-data__item">05.03.2021</p>
                    </div>
                    <h4 class="s-news__title">Режим использования масок и перчаток на территории магазинов</h4>
                    <p class="s-news__excerpt">
                        Подробная информация о режимах использования масок и перчаток на территории магазинов "ЛЕНТА". Информация обновляется каждый будний день.
                    </p>
                    <button class="s-btn s-btn__transparent-green">Подробнее</button>
                </div>
                <div class="s-news__card s-col-4">
                    <div class="s-nc__banner">
                        <img src="./public/assets/img/n_3.png" alt="">
                    </div>
                    <div class="s-datas s-dfw">
                        <p class="s-data__item">05.03.2021</p>
                    </div>
                    <h4 class="s-news__title">Режим использования масок и перчаток на территории магазинов</h4>
                    <p class="s-news__excerpt">
                        Подробная информация о режимах использования масок и перчаток на территории магазинов "ЛЕНТА". Информация обновляется каждый будний день.
                    </p>
                    <button class="s-btn s-btn__transparent-green">Подробнее</button>
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
                    <form action="actions/sign-in.php" method="post">
                        <p class="s-label__text">Телефон</p>
                        <label class="s-label s-border__green s-dfw">
                            <input type="tel" name="number" placeholder="+992 92 999 99 99" class="s-inp">                      
                        </label>
                        <button class="s-btn s-pop_up__submit" type="submit" name="enter">Вход</button>
                        <div class="s-pop_up__actions s-dfw s-jc-sb s-alt-center">
                            <button class="s-btn s-btn__green invert">Регистрация</button>
                            <a href="#" class="s-section__link">Забыли пароль?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script type="module" src="./public/js/index.js"></script>
    <script src="./public/js/main.js"></script>
</body>
</html>