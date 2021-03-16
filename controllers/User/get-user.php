<?php
# get-user.php

$entityManager = require_once join(DIRECTORY_SEPARATOR, ['doctrine/entity_manager.php']);

use Tuto\Entity\User;

$userRepo = $entityManager->getRepository(User::class);

$user = $userRepo->find(1);
echo "User by primary key:\n";
echo $user;

$allUsers = $userRepo->findAll();
echo "All users:\n";
foreach ($allUsers as $user) {
    echo $user;
}

$usersByRole = $userRepo->findBy(["role" => "admin"]);
echo "Users by role:\n";
foreach ($usersByRole as $user) {
    echo $user;
}

$usersByRoleAndFirstname = $userRepo->findBy(["role" => "user", "firstname" => "First 2"]);
echo "Users by role and firstname:\n";
foreach ($usersByRoleAndFirstname as $user) {
    echo $user;
}