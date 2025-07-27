<?php

declare(strict_types=1);

$localPathArr = explode('\\', trim(__DIR__, '\\'));
$folderPath = str_contains(__DIR__, "\\htdocs\\") ? "/".end($localPathArr) : "";
define("API_LOCATION", $folderPath);

require __DIR__ . "/api/Model/Exception.php";
require __DIR__ . "/api/ExceptionHandler/ErrorHandler.php";
require __DIR__ . "/api/DataLayer/Database.php";

spl_autoload_register(function ($class) {
    if(str_contains($class, "Gateway"))
        require __DIR__ . "/api/Gateway/$class.php";
    else
        require __DIR__ . "/api/Controller/$class.php";
});

set_error_handler("ErrorHandler::handleError");
set_exception_handler("ErrorHandler::handleException");

header("Content-type: application/json; charset=UTF-8");

$parts = explode("/", str_replace(API_LOCATION, "", $_SERVER["REQUEST_URI"]));

if (count($parts) > 3 && $parts[3] != "products") {
    http_response_code(404);
    echo json_encode(["code" => 404, "message" => "Resource not found"]);
    exit;
}

$id = count($parts) > 4 ? $parts[4] ?? null : null;

$database = new Database("localhost", "product_db", "root", "");

$gateway = new ProductGateway($database);

$controller = new ProductController($gateway);

$controller->processRequest($_SERVER["REQUEST_METHOD"], $id);

?>
