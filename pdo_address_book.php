<?php

$dbc = new PDO('mysql:host=127.0.0.1;dbname=address_book_db', 'greg', 'letmein');

$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";


$query = 'CREATE TABLE name (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(20) NOT NULL,
    phone VARCHAR(15),
    PRIMARY KEY (id)
)';
$dbc->exec($query);

$query = 'CREATE TABLE address (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    address VARCHAR(100) NOT NULL,
    city VARCHAR(50) NOT NULL,
    state VARCHAR(20) NOT NULL,
    zip VARCHAR(5) NOT NULL,
    PRIMARY KEY (id)
)';
$dbc->exec($query);

$query = 'CREATE TABLE name_address_mapping (
    name_id INT(20) UNSIGNED DEFAULT NULL,
    address_id INT(100) UNSIGNED DEFAULT NULL,
    FOREIGN KEY (name_id) REFERENCES name (id),
    FOREIGN KEY (address_id) REFERENCES address (id)
)';
$dbc->exec($query);