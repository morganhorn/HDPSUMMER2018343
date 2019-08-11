<?php
$host = "127.0.0.1";
$port = 3306;
$username = "username";
$password = "password";
$database = "shift-planning";

$db = new PDO("mysql:host=$host;port=$port",
               $username,
               $password);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$db->exec("CREATE DATABASE IF NOT EXISTS `$database`");
$db->exec("use `$database`");

function tableExists($dbh, $id)
{
    $results = $dbh->query("SHOW TABLES LIKE '$id'");
    if(!$results) {
        return false;
    }
    if($results->rowCount() > 0) {
        return true;
    }
    return false;
}

$exists = tableExists($db, "person");

if (!$exists) {

  //create the database
  $db->exec("CREATE TABLE IF NOT EXISTS person (
                        id INTEGER PRIMARY KEY,
                        name VARCHAR(200))");

  $db->exec("CREATE TABLE IF NOT EXISTS location (
                        id INTEGER PRIMARY KEY,
                        name VARCHAR(200))");

  $db->exec("CREATE TABLE IF NOT EXISTS assignment (
                        id INTEGER PRIMARY KEY AUTO_INCREMENT,
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