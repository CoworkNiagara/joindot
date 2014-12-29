<?php

require "vendor/autoload.php";

error_reporting(E_ALL ^ E_NOTICE);

Flight::route("GET /", function() {
    Flight::render("index.php");
});

Flight::start();
