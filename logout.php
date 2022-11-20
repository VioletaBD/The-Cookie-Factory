<?php 

if(empty($_SESSION['username'])){
    session_start();
    session_unset();

    header('Location: /');
} else {
    header('Location: /');
}