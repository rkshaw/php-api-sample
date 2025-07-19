<?php

declare(strict_types=1);

$localPathArr = explode('\\', trim(__DIR__, '\\'));
$folderPath = str_contains(__DIR__, "xampp\\htdocs\\") ? "/".end($localPathArr) : "";

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

$parts = explode("/", str_replace($folderPath, "", $_SERVER["REQUEST_URI"]));

if ($parts[1] != "products") {
    http_response_code(404);
    echo json_encode(["message" => "Resource not found"]);
    exit;
}

$id = $parts[2] ?? null;

$database = new Database("localhost", "product_db", "root", "");

$gateway = new ProductGateway($database);

$controller = new ProductController($gateway);

$controller->processRequest($_SERVER["REQUEST_METHOD"], $id);

?>
