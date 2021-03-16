
<?php
# create-users.php

$entityManager = require_once join(DIRECTORY_SEPARATOR, ['doctrine/entity_manager.php']);

use Tuto\Entity\User;

foreach (range(1, 10) as $index) {
    $user = new User();
    $user->setFirstname("First ".$index);
    $user->setLastname("LAST ".$index);
    $user->setRole("user");
    $entityManager->persist($user);
}

$entityManager->flush();