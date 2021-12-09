<?php
    require_once "classes/UserPrime.php";
    require_once "classes/ProductTech.php";

    $user1 = new User("Davide", "Decataldo", "davidedecataldo92@gmail.com", "Premium");
    
    echo "<pre>";
    var_dump($user1);
    echo "</pre>";

    echo "<br>";

    $userPrime = new UserPrime("Davide", "Decataldo", "davidedecataldo92@gmail.com", "Premium", "");
    echo "<pre>";
    var_dump($userPrime);
    echo "</pre>";

    $productTech = new ProductTech("Tech", "Computer", "10.00", "Apple", "250GB");
    echo "<pre>";
    var_dump($productTech);
    echo "</pre>";

?>