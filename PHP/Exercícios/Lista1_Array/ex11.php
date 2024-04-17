<?php


$user_agent = $_SERVER['HTTP_USER_AGENT'];


$navegador = "Navegador desconhecido!";


switch (true) {
    case strpos($user_agent, 'Firefox') !== false:
        $navegador = "Firefox";
        break;
    case strpos($user_agent, 'Chrome') !== false:
        $navegador = "Chrome";
        break;
    case strpos($user_agent, 'Safari') !== false:
        $navegador = "Safari";
        break;
    case strpos($user_agent, 'MSIE') !== false:
        $navegador = "Internet Explorer";
        break;
}


echo "Você está usando o navegador: $navegador";

?>