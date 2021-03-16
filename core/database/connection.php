<?php

require 'Task.php';

$query = require 'core/bootstrap.php';

$tasks = $query->selectAll('tasks');

