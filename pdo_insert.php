<?php

$dbc = new PDO('mysql:host=127.0.0.1;dbname=codeup_pdo_test_db', 'greg', 'letmein');

// Tell PDO to throw exceptions on error
$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";

$national_parks = [
    ['name' => 'Acadia', 'location' => 'Maine', 'date_established' => '1919-02-26', 'Acers' => '47389.67'],
    ['name' => 'Arches', 'location' => 'Utah', 'date_established' => '1971-11-12', 'Acers' => '76518.98 '],
    ['name' => 'Badlands', 'location' => 'South Dakot', 'date_established' => '1978-11-10', 'Acers' => '242755.94 '],
    ['name' => 'Big Bend', 'location' => 'Texas', 'date_established' => '1944-06-12', 'Acers' => '801163.21 '],
    ['name' => 'Biscayne', 'location' => 'Florida', 'date_established' => '1980-06-28', 'Acers' => '172924.07 '],
    ['name' => 'Canyonlands', 'location' => 'Utah', 'date_established' => '1964-09-12', 'Acers' => '337597.83'],
    ['name' => 'Capitol Reef', 'location' => 'Utah', 'date_established' => '1971-12-18', 'Acers' => '241904.26'],
    ['name' => 'Carlsbad Caverns', 'location' => 'New Mexico', 'date_established' => '1930-05-14', 'Acers' => '46766.45'],
    ['name' => 'Congaree', 'location' => 'South Carolina', 'date_established' => '2003-11-10', 'Acers' => '26545.86'],
    ['name' => 'Crater Lake', 'location' => 'Oregon', 'date_established' => '1902-05-22', 'Acers' => '183224.05']
];

    foreach ($national_parks as $park) {
        $query = "INSERT INTO national_parks (name, location, date_established, area_in_acres) VALUES ('{$park['name']}', '{$park['location']}','{$park['date_established']}', '{$park['Acers']}')";

        $dbc->exec($query);

        echo "Inserted ID: " . $dbc->lastInsertId() . PHP_EOL;
    }




// Create the query and assign to var
// $query = 'CREATE TABLE national_parks (
//     id INT UNSIGNED NOT NULL AUTO_INCREMENT,
//     name VARCHAR(70) NOT NULL,
//     location VARCHAR(100) NOT NULL,
//     date_established DATE NOT NULL,
//     area_in_acres INT NOT NULL,
//     PRIMARY KEY (id)
// )';

// Run query, if there are errors they will be thrown as PDOExceptions
// $dbc->exec($query);