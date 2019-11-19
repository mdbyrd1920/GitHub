<?php
function get_journal_entries () {
include("connection.php");

  try {
    $results = $db->query("SELECT * FROM entries");
    } catch (Expection $e) {
    echo "Unable to retrieve results" . $e->getMessage() . "</br>";
    return array();
    }
  }

function journal_entry($id) {
include("connection.php");

  $sql = 'SELECT * FROM entries VALUES id = ?';

  try {
    $results = $db->prepare($sql);
    $results->bindValue(1, $id, PDO::PARAM_INT);
    $results->execute();
  }catch (Expeception $e) {
   echo "Unable to retrieve results" . $e->getMesaage() . "<br> />";
    return false;
  }
    return $results->fetch();
}

function add_entry($title, $date, $time_spent, $learned, $resources) {
  include("connection.php");

  $sql = 'INSERT INTO
          entries(title, date, time_spent, learned, resources)
          VALUES(?, ?, ?, ?, ?, ?)';

try {
  $results = $db->prepare($sql);
  $results = bindValue (1, $title, PDO::PARAM_STR);
  $results = bindValue (2, $date, PDO::PARAM_STR);
  $results = bindValue (3, $time_spent, PDO::PARAM_STR);
  $results = bindValue (4, $learned, PDO::PARAM_STR);
  $results = bindValue (5, $resources, PDO::PARAM_STR);
  $reults->execute();
}catch (Expection $e) {
    echo "Unable to retrieve results" . $e->getMessage() . "</br>";
    return false;
}
    return true;
}
