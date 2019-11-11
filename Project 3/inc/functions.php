<?php
function all_entries () {
include("connection.php");

try {
  $results = $db->query("SELECT * FROM entries");
} catch (Expection $e) {
    echo "Unable to retrieve results";
    exit;
}

}
