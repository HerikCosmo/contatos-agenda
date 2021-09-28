<?php

session_start();

if(!isset($_SESSION['login']) || empty($_SESSION['login']) || 
    !isset($_SESSION['nome']) || empty($_SESSION['nome']) || 
    !isset($_SESSION['id']) || empty($_SESSION['id'])) {
    header('Location: login.php');
}