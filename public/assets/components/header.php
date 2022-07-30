<?php
    session_start();
    include('../../../db.php');
    $number = $_SESSION['number'];
    $select = "select * from user where number = '$number'";
    $run = mysqli_query($con,$select);
    $row = mysqli_fetch_array($run);
        $id = $row['id'];
    $_SESSION['id'] = $id;
        $name = $row['name'];
        $image = $row['image'];
?>
<nav class="s-nav">
    <div class="s-container">
        <div class="s-row">
            <div class="s-logo s-dfw s-alt-center">
                <img src="./public/assets/img/logo.png" alt="Logo">
            </div>
            <div class="s-shop__actions s-dfw s-alt-center">
                <button class="s-btn s-btn__green s-dfw">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15.3536 5.64645C15.5488 5.84171 15.5488 6.15829 15.3536 6.35355L9.70711 12L15.3536 17.6464C15.5488 17.8417 15.5488 18.1583 15.3536 18.3536C15.1583 18.5488 14.8417 18.5488 14.6464 18.3536L8.64645 12.3536C8.45118 12.1583 8.45118 11.8417 8.64645 11.6464L14.6464 5.64645C14.8417 5.45118 15.1583 5.45118 15.3536 5.64645Z" fill="#414141"/>
                    </svg>
                    <span>Каталог</span>
                </button>
                <label class="s-label s-border__green s-dfw">
                    <input type="text" placeholder="Найти товар" class="s-inp">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2.5 10.5C2.5 6.08172 6.08172 2.5 10.5 2.5C14.9183 2.5 18.5 6.08172 18.5 10.5C18.5 14.9183 14.9183 18.5 10.5 18.5C6.08172 18.5 2.5 14.9183 2.5 10.5ZM10.5 3.5C6.63401 3.5 3.5 6.63401 3.5 10.5C3.5 14.366 6.63401 17.5 10.5 17.5C14.366 17.5 17.5 14.366 17.5 10.5C17.5 6.63401 14.366 3.5 10.5 3.5Z" fill="#414141"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15.4472 15.4463C15.6425 15.251 15.9591 15.251 16.1543 15.4463L21.3543 20.6463C21.5496 20.8415 21.5496 21.1581 21.3543 21.3534C21.1591 21.5486 20.8425 21.5486 20.6472 21.3534L15.4472 16.1534C15.252 15.9581 15.252 15.6415 15.4472 15.4463Z" fill="#414141"/>
                    </svg>                        
                </label>
                <div class="s-hot-links s-dfw s-alt-center">
                    <div class="s-hl__item">
                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.2046 4.25632C14.3299 3.13054 15.8564 2.49805 17.4482 2.49805C19.0399 2.49805 20.5664 3.13051 21.6916 4.25624C22.8174 5.38152 23.45 6.90816 23.45 8.49987C23.45 10.0916 22.8175 11.6181 21.6917 12.7434C21.6917 12.7435 21.6917 12.7434 21.6917 12.7434L12.8517 21.5834C12.6565 21.7787 12.3399 21.7787 12.1446 21.5834L3.30461 12.7434C0.960963 10.3998 0.960963 6.59997 3.30461 4.25632C5.64826 1.91267 9.44807 1.91267 11.7917 4.25632L12.4982 4.96277L13.2046 4.25632C13.2046 4.25635 13.2046 4.25629 13.2046 4.25632ZM17.4482 3.49805C16.1217 3.49805 14.8496 4.02515 13.9118 4.96334L12.8517 6.02343C12.758 6.11719 12.6308 6.16987 12.4982 6.16987C12.3656 6.16987 12.2384 6.11719 12.1446 6.02343L11.0846 4.96343C9.13149 3.0103 5.96484 3.0103 4.01172 4.96343C2.05859 6.91655 2.05859 10.0832 4.01172 12.0363L12.4982 20.5228L20.9846 12.0363C21.9228 11.0986 22.45 9.82636 22.45 8.49987C22.45 7.17338 21.9229 5.90126 20.9847 4.96351C20.0469 4.02532 18.7747 3.49805 17.4482 3.49805Z" fill="#414141"/>
                        </svg>
                        <span>Избранное</span>                            
                    </div>
                    <div class="s-hl__item">
                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.2046 4.25632C14.3299 3.13054 15.8564 2.49805 17.4482 2.49805C19.0399 2.49805 20.5664 3.13051 21.6916 4.25624C22.8174 5.38152 23.45 6.90816 23.45 8.49987C23.45 10.0916 22.8175 11.6181 21.6917 12.7434C21.6917 12.7435 21.6917 12.7434 21.6917 12.7434L12.8517 21.5834C12.6565 21.7787 12.3399 21.7787 12.1446 21.5834L3.30461 12.7434C0.960963 10.3998 0.960963 6.59997 3.30461 4.25632C5.64826 1.91267 9.44807 1.91267 11.7917 4.25632L12.4982 4.96277L13.2046 4.25632C13.2046 4.25635 13.2046 4.25629 13.2046 4.25632ZM17.4482 3.49805C16.1217 3.49805 14.8496 4.02515 13.9118 4.96334L12.8517 6.02343C12.758 6.11719 12.6308 6.16987 12.4982 6.16987C12.3656 6.16987 12.2384 6.11719 12.1446 6.02343L11.0846 4.96343C9.13149 3.0103 5.96484 3.0103 4.01172 4.96343C2.05859 6.91655 2.05859 10.0832 4.01172 12.0363L12.4982 20.5228L20.9846 12.0363C21.9228 11.0986 22.45 9.82636 22.45 8.49987C22.45 7.17338 21.9229 5.90126 20.9847 4.96351C20.0469 4.02532 18.7747 3.49805 17.4482 3.49805Z" fill="#414141"/>
                        </svg>
                        <span>Заказы</span>                            
                    </div>
                    <div class="s-hl__item">
                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.2046 4.25632C14.3299 3.13054 15.8564 2.49805 17.4482 2.49805C19.0399 2.49805 20.5664 3.13051 21.6916 4.25624C22.8174 5.38152 23.45 6.90816 23.45 8.49987C23.45 10.0916 22.8175 11.6181 21.6917 12.7434C21.6917 12.7435 21.6917 12.7434 21.6917 12.7434L12.8517 21.5834C12.6565 21.7787 12.3399 21.7787 12.1446 21.5834L3.30461 12.7434C0.960963 10.3998 0.960963 6.59997 3.30461 4.25632C5.64826 1.91267 9.44807 1.91267 11.7917 4.25632L12.4982 4.96277L13.2046 4.25632C13.2046 4.25635 13.2046 4.25629 13.2046 4.25632ZM17.4482 3.49805C16.1217 3.49805 14.8496 4.02515 13.9118 4.96334L12.8517 6.02343C12.758 6.11719 12.6308 6.16987 12.4982 6.16987C12.3656 6.16987 12.2384 6.11719 12.1446 6.02343L11.0846 4.96343C9.13149 3.0103 5.96484 3.0103 4.01172 4.96343C2.05859 6.91655 2.05859 10.0832 4.01172 12.0363L12.4982 20.5228L20.9846 12.0363C21.9228 11.0986 22.45 9.82636 22.45 8.49987C22.45 7.17338 21.9229 5.90126 20.9847 4.96351C20.0469 4.02532 18.7747 3.49805 17.4482 3.49805Z" fill="#414141"/>
                        </svg>
                        <span>Корзина</span>                            
                    </div>
                    <div class="s-hl__item avatar s-dfw s-alt-center">

                        <?php
                            if(!isset($_SESSION['number'])){
                        ?>
                        <label for="auth">Вход</label>
                        <a id="auth" class="s-pop_up__btn">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.64645 5.64645C8.84171 5.45118 9.15829 5.45118 9.35355 5.64645L15.3536 11.6464C15.5488 11.8417 15.5488 12.1583 15.3536 12.3536L9.35355 18.3536C9.15829 18.5488 8.84171 18.5488 8.64645 18.3536C8.45118 18.1583 8.45118 17.8417 8.64645 17.6464L14.2929 12L8.64645 6.35355C8.45118 6.15829 8.45118 5.84171 8.64645 5.64645Z" fill="#414141"/>
                            </svg>                            
                        </a>
                        <? }else{ ?>
                       <img src="<?= $image; ?>" alt="Avatar">
                        <h4><?= $name; ?></h4>
                        <a id="auth" class="s-pop_up__btn">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.64645 5.64645C8.84171 5.45118 9.15829 5.45118 9.35355 5.64645L15.3536 11.6464C15.5488 11.8417 15.5488 12.1583 15.3536 12.3536L9.35355 18.3536C9.15829 18.5488 8.84171 18.5488 8.64645 18.3536C8.45118 18.1583 8.45118 17.8417 8.64645 17.6464L14.2929 12L8.64645 6.35355C8.45118 6.15829 8.45118 5.84171 8.64645 5.64645Z" fill="#414141"/>
                            </svg>                            
                        </a>
                        <? } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>