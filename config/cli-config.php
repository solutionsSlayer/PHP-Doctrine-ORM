
<?php
# cli-config.php

$entityManager = require_once 'doctrine/entity_manager.php';
use Doctrine\ORM\Tools\Console\ConsoleRunner;

return ConsoleRunner::createHelperSet($entityManager);