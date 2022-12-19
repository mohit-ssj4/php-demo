<?php

$routes = require("routes.php");

// Gives us just the uri and not the query params
$uri = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

// Route to the correct controller based on the visited uri
if (array_key_exists($uri, $routes)) {
  require($routes[$uri]);
} else {
  showErrorPage();
}
