<?php
    session_start();

    sleep(1);

    session_destroy();

    header('Location:../index_back.php');




