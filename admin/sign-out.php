<?php

    session_start();

    if(isset($_SESSION['login'])){
        header("location: login.html");
        session_destroy();
    }

?>