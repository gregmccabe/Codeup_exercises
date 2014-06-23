<?php

$dbc = new PDO('mysql:host=127.0.0.1;dbname=codeup_pdo_test_db', 'greg', 'letmein');

// Tell PDO to throw exceptions on error
$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";

// Create the query and assign to var

$national_parks = [
    ['name' => 'Acadia', 'location' => 'Maine', 'date_established' => '1919-02-26', 'acres' => '47389.67', 'park_description' => 'Covering most of Mount Desert Island and other coastal islands, Acadia features the tallest mountain on the Atlantic coast of the United States, granite peaks, ocean shoreline, woodlands, and lakes. There are freshwater, estuary, forest, and intertidal habitats.'],


    ['name' => 'Arches', 'location' => 'Utah', 'date_established' => '1971-11-12', 'acres' => '76518.98', 'park_description' => 'This site features more than 2,000 natural sandstone arches, including the famous Delicate Arch. In a desert climate, millions of years of erosion have led to these structures, and the arid ground has life-sustaining soil crust and potholes, which serve as natural water-collecting basins. Other geologic formations are stone columns, spires, fins, and towers.'],


    ['name' => 'Badlands', 'location' => 'South Dakot', 'date_established' => '1978-11-10', 'acres' => '242755.94', 'park_description' => 'The Badlands are a collection of buttes, pinnacles, spires, and grass prairies. It has the world\'s richest fossil beds from the Oligocene epoch, and the wildlife includes bison, bighorn sheep, black-footed ferrets, and swift foxes.'],


    ['name' => 'Big Bend', 'location' => 'Texas', 'date_established' => '1944-06-12', 'acres' => '801163.21', 'park_description' => 'Named for the prominent bend in the Rio Grande along the US–Mexico border, this park encompasses a large and remote part of the Chihuahuan Desert. Its main attraction is backcountry recreation in the arid Chisos Mountains and in canyons along the river. A wide variety of Cretaceous and Tertiary fossils as well as cultural artifacts of Native Americans also exist within its borders.'],


    ['name' => 'Biscayne', 'location' => 'Florida', 'date_established' => '1980-06-28', 'acres' => '172924.07', 'park_description' => 'Located in Biscayne Bay, this park at the north end of the Florida Keys has four interrelated marine ecosystems: mangrove forest, the Bay, the Keys, and coral reefs. Threatened animals include the West Indian Manatee, American crocodile, various sea turtles, and peregrine falcon.'],


    ['name' => 'Canyonlands', 'location' => 'Utah', 'date_established' => '1964-09-12', 'acres' => '337597.83', 'park_description' => 'This landscape was eroded into a maze of canyons, buttes, and mesas by the combined efforts of the Colorado River, Green River, and their tributaries, which divide the park into three districts. There are rock pinnacles and other naturally sculpted rock formations, as well as artifacts from Ancient Pueblo peoples.'],


    ['name' => 'Capitol Reef', 'location' => 'Utah', 'date_established' => '1971-12-18', 'acres' => '241904.26', 'park_description' => 'The park\'s Waterpocket Fold is a 100-mile (160 km) monocline that exhibits the Earth\'s diverse geologic layers. Other natural features are monoliths, sandstone domes, and cliffs shaped like the United States Capitol.'],


    ['name' => 'Carlsbad Caverns', 'location' => 'New Mexico', 'date_established' => '1930-05-14', 'acres' => '46766.45', 'park_description' => 'Carlsbad Caverns has 117 caves, the longest of which is over 120 miles (190 km) long. The Big Room is almost 4,000 feet (1,200 m) long, and the caves are home to over 400,000 Mexican Free-tailed Bats and sixteen other species. Above ground are the Chihuahuan Desert and Rattlesnake Springs.'],


    ['name' => 'Congaree', 'location' => 'South Carolina', 'date_established' => '2003-11-10', 'acres' => '26545.86', 'park_description' => 'On the Congaree River, this park is the largest portion of old-growth floodplain forest left in North America. Some of the trees are the tallest in the Eastern US. An elevated walkway called the Boardwalk Loop guides visitors through the swamp.'],


    ['name' => 'Crater Lake', 'location' => 'Oregon', 'date_established' => '1902-05-22', 'acres' => '183224.05', 'park_description' => 'Crater Lake lies in the caldera of an ancient volcano called Mount Mazama that collapsed 7,700 years ago. It is the deepest lake in the United States and is famous for its vivid blue color and water clarity. There are two more recent volcanic islands in the lake, and, with no inlets or outlets, all water comes through precipitation.']
];

    $stmt = $dbc->prepare('INSERT INTO national_parks (name, location, date_established, area_in_acres, park_description) VALUES (:name, :location, :date_established, :acres, :park_description)');

foreach ($national_parks as $park) {
    $stmt->bindValue(':name',  $park['name'],  PDO::PARAM_STR);
    $stmt->bindValue(':location', $park['location'], PDO::PARAM_STR);
    $stmt->bindValue(':date_established', $park['date_established'], PDO::PARAM_STR);
    $stmt->bindValue(':acres', $park['acres'], PDO::PARAM_STR);
    $stmt->bindValue(':park_description', $park['park_description'], PDO::PARAM_STR);

    $stmt->execute();
    echo "Inserted ID: " . $dbc->lastInsertId() . PHP_EOL;
}

    // foreach ($national_parks as $park) {
    //     $query = "INSERT INTO national_parks (name, location, date_established, area_in_acres) VALUES ('{$park['name']}', '{$park['location']}','{$park['date_established']}', '{$park['Acers']}')";

    //     $dbc->exec($query);

    // }





// Run query, if there are errors they will be thrown as PDOExceptions
// $dbc->exec($query);
//
// $query = 'CREATE TABLE national_parks (
//     id INT UNSIGNED NOT NULL AUTO_INCREMENT,
//     name VARCHAR(70) NOT NULL,
//     location VARCHAR(100) NOT NULL,
//     date_established DATE NOT NULL,
//     area_in_acres FLOAT NOT NULL,
//     park_description TEXT NOT NULL,
//     PRIMARY KEY (id)
// )';

// $dbc->exec($query);