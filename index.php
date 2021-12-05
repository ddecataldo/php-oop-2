<?php
    require_once "classes/UserPrime.php";

    $user1 = new User("Davide", "Decataldo", "davidedecataldo92@gmail.com", "Premium");
    
    echo "<pre>";
    var_dump($user1);
    echo "</pre>";

    echo "<br>";

    $userPrime = new UserPrime("Davide", "Decataldo", "davidedecataldo92@gmail.com", "Premium", "");
    echo "<pre>";
    var_dump($userPrime);
    echo "</pre>";

?>