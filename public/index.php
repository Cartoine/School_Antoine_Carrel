<?php
spl_autoload_register(function ($classe) {
    include "../src/" . $classe . ".class.php";
});


require_once('../vendor/autoload.php');

try {
    $school = new School("rue de l'ecole", 20, 12, ["Nom des classe"]);

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


try {
    $classRooms = new ClassRooms("S_001", 20, 12, ["tous les meubles"]);

    // $meuble->getNom()]
    echo $classRooms;
} catch (Exception $e) {
    echo $e->getMessage();
}
