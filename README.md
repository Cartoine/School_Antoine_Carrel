Pour lancer la commande :

php -f ./public/index.php

dans index.php
require_once('./vendor/autoload.php');

php -S localhost:8000 -t ./public
require_once('../vendor/autoload.php');
spl_autoload_register(function ($classe) {
include "../src/" . $classe . ".class.php";
});
