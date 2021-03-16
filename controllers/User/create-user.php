<?php
# create-user.php

$entityManager = require_once 'doctrine/entity_manager.php';

use Tuto\Entity\User;

$admin = new User();
$admin->setFirstname("First");
$admin->setLastname("LAST");
$admin->setRole("admin");

$entityManager->persist($admin);
$entityManager->flush();

echo "Identifiant de l'utilisateur créé : ", $admin->getId();