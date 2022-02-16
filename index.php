<?php
require_once __DIR__ . '/classes/User.php';
require_once __DIR__ . '/classes/PrimeUser.php';


$user = new User('Aldo', 'Baglio', 33, 'aldo.baglio@gmail.com', new Card('Aldo baglio', 123456789, 456, '05-05-2024'));

// var_dump($user->getCard());


$prime = new PrimeUser("prime");
var_dump($prime->getDiscount());

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <li><?= $user->getName() ?></li>
        <li><?= $user->getLast_name() ?></li>
        <li><?= $user->getEta() ?></li>
        <li><?= $user->getMail() ?></li>
        <li>sconto: <?= $prime->getDiscount() ?>%</li>
    </ul>
</body>

</html>