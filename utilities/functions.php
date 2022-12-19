<?php

/**
 * Method to dump the value passed and then die.
 * 
 * @param $value
 */
function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die;
}

/**
 * Method to show error page based on the code provided.
 * 
 * @param int $code
 */
function showErrorPage($code = 404)
{
    http_response_code($code);
    require("views/errors/${code}.php");
    die;
}

/**
 * Method to check whether the visited url matches the route path.
 * 
 * @param string $url
 */
function urlIs($url)
{
    return parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH) === $url;
}

/**
 * Method to authorize the user.
 * 
 * @param boolean $condition
 * @param int $code
 */
function authorize($condition, $code = Response::FORBIDDEN)
{
    if (!$condition) {
        showErrorPage($code);
    }
}
