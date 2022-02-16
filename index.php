<?php
require_once __DIR__ . '/classes/User.php';
require_once __DIR__ . '/classes/PrimeUser.php';


$user = new User('Aldo', 'Baglio', 33, 'aldo.baglio@gmail.com', new Card('Aldo baglio', 123456789, 456, '05-05-2024'));

// var_dump($user->getCard());


$prime = new PrimeUser("prime");
var_dump($prime->getDiscount());
