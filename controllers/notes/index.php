<?php

// Connect to the database & fetch results
$db = new Database($configs["database"]);
$notes = $db->query("select * from notes where userId = :userId", ["userId" => 1])->fetchAll();

$pageHeading = "My notes";

require("views/notes/index.view.php");
