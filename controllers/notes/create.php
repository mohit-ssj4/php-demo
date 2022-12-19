<?php

$pageHeading = "Create new note";

require("utilities/Validator.php");

$db = new Database($configs["database"]);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $errors = [];

  // If title length is empty
  if (!Validator::string($_POST["title"], 1, 1000)) {
    $errors["message"] = "Note title is empty or exceeds a 1000 characters";
  }

  if (empty($errors)) {
    $db->query(
      "INSERT INTO notes(title, userId) VALUES(:title, :userId)",
      [
        "title" => $_POST["title"],
        "userId" => 1
      ]
    );
  }
}

require("views/notes/create.view.php");
