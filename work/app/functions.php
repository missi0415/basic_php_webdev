<?php


function h($str)
{
  return htmlspecialchars($str,ENT_QUOTES, "UTF-8");
}

function createToken()
{
  if (!isset($_SESSION["token"])){
    $_SESSION["token"] = bin2hex(random_bytes(32));
    //random_bytes(引数)ランダムな文字列の生成
    
  }
}

function validateToken()
{
  if (
    empty($_SESSION["token"]) ||
    $_SESSION["token"] !== filter_input(INPUT_POST,"token")
  ){
    exit("Invalid post request");
  }
}

session_start();
