<?php
$user = "funsite";
$password = "Admin123$";
$database = "funsite";
$table = "todo_list";

try {
  $db = new PDO("mysql:host=127.0.0.1;dbname=$database", $user, $password);
  echo "<h2>TODO</h2><ol>"; 
  foreach($db->query("SELECT content FROM $table") as $row) {
    echo "<li>" . $row['content'] . "</li>";
  }
  echo "</ol>";
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
