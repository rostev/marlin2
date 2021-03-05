<?php

    use App\controllers\HomeController;

    require_once "../vendor/autoload.php";
    require_once "../app/includes/functions.php";

    $url = $_SERVER["REQUEST_URI"];

    $controller = [];

    if ($url === "/") {
        $controller = [HomeController::class, "index"];
    } elseif ($url === "/about") {
        $controller = [HomeController::class, "about"];
    }

    if (empty($controller)) {
        dd("404 Page not found");
    } else {
        call_user_func([(new $controller[0]()), $controller[1]]);
    }
