<?php

$dbc = new PDO('mysql:host=127.0.0.1;dbname=todo_db', 'greg', 'letmein');

$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";


$query = 'CREATE TABLE todo_list (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    add_todo VARCHAR(250) NOT NULL,
    PRIMARY KEY (id)
)';

$dbc->exec($query);