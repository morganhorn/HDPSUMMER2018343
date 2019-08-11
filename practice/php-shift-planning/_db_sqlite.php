<?php

$db_exists = file_exists("daypilot.sqlite");

$db = new PDO('sqlite:daypilot.sqlite');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (!$db_exists) {
    //create the database
    $db->exec("CREATE TABLE IF NOT EXISTS person (
                        id INTEGER PRIMARY KEY,
                        name VARCHAR(200))");

    $db->exec("CREATE TABLE IF NOT EXISTS location (
                        id INTEGER PRIMARY KEY,
                        name VARCHAR(200))");

    $db->exec("CREATE TABLE IF NOT EXISTS assignment (
                        id INTEGER PRIMARY KEY AUTOINCREMENT,
                        person_id INTEGER,
                        location_id INTEGER,
                        assignment_start DATETIME,
                        assignment_end DATETIME)");

    $people = array(
        array('id' => 1,
            'name' => 'Adam'),
        array('id' => 2,
            'name' => 'Cheryl'),
        array('id' => 3,
            'name' => 'Emily'),
        array('id' => 4,
            'name' => 'Eva'),
        array('id' => 5,
            'name' => 'Eliah'),
        array('id' => 6,
            'name' => 'John'),
        array('id' => 7,
            'name' => 'Sally'),
    );

    $insert = "INSERT INTO person (id, name) VALUES (:id, :name)";
    $stmt = $db->prepare($insert);

    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':name', $name);

    foreach ($people as $item) {
        $id = $item['id'];
        $name = $item['name'];
        $stmt->execute();
    }

  $locations = array(
      array('id' => 1,
          'name' => 'Major Service'),
      array('id' => 2,
          'name' => 'Annual Service'),
      array('id' => 3,
          'name' => 'Major Repair'),
      array('id' => 4,
          'name' => 'Repair/Fault'),
  );

  $insert = "INSERT INTO location (id, name) VALUES (:id, :name)";
  $stmt = $db->prepare($insert);

  $stmt->bindParam(':id', $id);
  $stmt->bindParam(':name', $name);

  foreach ($locations as $item) {
    $id = $item['id'];
    $name = $item['name'];
    $stmt->execute();
  }

}
