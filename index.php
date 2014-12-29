<?php
error_reporting(E_ALL ^ E_NOTICE);

require "vendor/autoload.php";
// Load local config if available
@include "config.local.php";

Stripe::setApiKey(STRIPE_SECRET_KEY);

Flight::route("GET /", function() {
    Flight::render("index.php");
});

Flight::start();
