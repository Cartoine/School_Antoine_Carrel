<?php
spl_autoload_register(function ($classe) {
    include "../src/" . $classe . ".class.php";
});

// use App\School;
// require_once('../vendor/autoload.php');

try {
    $school = new School("rue de l'ecole", 20, 12, ["salut"]);

    echo $school;
} catch (Exception $e) {
    echo $e->getMessage();
}

try {
    $meuble = new Meuble(50, 50, 50, "tabouret");

    echo $meuble;
} catch (Exception $e) {
    echo $e->getMessage();
}
