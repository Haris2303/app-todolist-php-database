<?php

use Config\Database;

require_once __DIR__ . '/Database.php';

Database::getConnection();

echo "Sukses terkonek ke database" . PHP_EOL;
