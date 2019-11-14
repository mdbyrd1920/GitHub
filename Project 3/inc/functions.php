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
function add_entries() {
  include("connection.php");

  $sql = 'INSERT INTO entries() VALUE()';

try {
  $results = $db->prepare($sql);
  $results = bindValue ();
  $results = bindValue ();
  $reults->execute();
}catch (Expection $e) {
    echo "Unable to retrieve results" . $e->getMessage() . "</br>";
    return false();


}
