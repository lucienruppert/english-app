<?php
    error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT);
    session_start();
    $_SESSION['language'] = 'esp';
    $lang = 2;
    $mainUrl = "http://www.lingocasa.com/showDailyQuizEsp.php";
    include('showDailyQuiz.php');
?>