<?php

$tokens = file_get_contents("tokens.txt");

$token = $_GET['token'];
$eklenecektoken = $_GET['token']."#";

if(!strstr($tokens,$token)){
    file_put_contents("tokens.txt", $eklenecektoken, FILE_APPEND);
}