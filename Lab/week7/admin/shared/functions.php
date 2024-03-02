<?php

    session_start();

    function setMessage($message, $class){
        $_SESSION['message'] = $message;
        $_SESSION['class'] = $class;
    }

    function getMessage(){

        if (isset($_SESSION['message'])){
            echo '<div class="alert '. $_SESSION['class'] . '" role="alert" > ' . $_SESSION['message'] . '</div>';
            unset($_SESSION['message']);
        }
    }

    