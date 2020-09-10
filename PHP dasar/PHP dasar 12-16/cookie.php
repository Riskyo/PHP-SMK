<?php

$cookie_name = 'user';
$cookie_value = 'Riskyo';
setcookie($cookie_name, $cookie_value);


$cookie_value = 'octavian';
setcookie($cookie_name, $cookie_value);


echo $_COOKIE[$cookie_name];


Setcookie("user", "Riskyo", time() + 3600);
echo '</br>';

var_dump($_COOKIE);
