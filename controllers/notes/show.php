<?php

$pageHeading = "My note";

// Fetching a single note based on the Id
$db = new Database($configs["database"]);
$note = $db->query(
  "select * from notes where id = :id",
  [
    "id" => $_GET["id"]
  ]
)->findOrFail();

// Forbidden note error
authorize($note["userId"] == 1);

require("views/notes/show.view.php");
