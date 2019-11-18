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

function add_entry($id, $title, $date, $time_spent, $learned, $resources) {
  include("connection.php");

  $sql = 'INSERT INTO
          entries(id, title, date, time_spent, learned, resources)
          VALUES(?, ?, ?, ?, ?, ?)';

try {
  $results = $db->prepare($sql);
  $results = bindValue (1, $id, PDO::PARAM_INT);
  $results = bindValue (2, $title, PDO::PARAM_STR);
  $results = bindValue (3, $date, PDO::PARAM_STR);
  $results = bindValue (4, $time_spent, PDO::PARAM_STR);
  $results = bindValue (5, $learned, PDO::PARAM_STR);
  $results = bindValue (6, $resources, PDO::PARAM_STR);
  $reults->execute();
}catch (Expection $e) {
    echo "Unable to retrieve results" . $e->getMessage() . "</br>";
    return false;
}
    return true;
}
