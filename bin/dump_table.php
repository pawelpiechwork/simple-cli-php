#!/usr/bin/env php
<?php

require __DIR__ . '/../src/sqlite_db.php';
require __DIR__ . '/../src/table_printer.php';

$dbFile = __DIR__ . '/../data.sqlite';
$table = $argv[1] ?? 'users';

$db = new SqliteDb($dbFile);
$printer = new TablePrinter();

$rows = $db->query("SELECT * FROM " . $table);
$printer->print($rows);
