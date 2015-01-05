<?php
error_reporting(E_ALL ^ E_NOTICE);
date_default_timezone_set("America/New_York");

require "vendor/autoload.php";
// Load local config if available
@include "config.local.php";

use Nette\Mail\Message;
use Nette\Mail\SendmailMailer;

Stripe::setApiKey(STRIPE_SECRET_KEY);

Flight::route("GET /", function() {
    Flight::render("index.php");
});

Flight::route("POST /", function() {
    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    $renderer = new \flight\template\View(__DIR__."/views");

    // Determine values depending on membership type
    switch($_POST["membership_type"]) {
        case "individual":
            $description = "Individual Membership";
            $amount = "12500";
            break;

        case "corporate":
            $description = "Corporate Membership";
            $amount = "25000";
            break;

        default:
            // TODO: raise error
    }

    try {
        /*
        Stripe_Charge::create(array(
            "amount" => $amount,
            "currency" => "CAD",
            "description" => $description,
            "card" => $_POST["stripeToken"]
        ));
         */

        $mailer = new SendmailMailer;

        // Send welcome email
        $mail = new Message;
        $mail->setFrom(MAIL_FROM)
             ->addTo("adam@mediadrive.ca")
             ->setSubject("Welcome to Cowork Niagara")
             ->setHtmlBody($renderer->fetch("welcome_email.php"));

        $mailer->send($mail);

        // Send admin email
        $mail = new Message;
        $mail->setFrom(MAIL_FROM)
             ->addTo(ADMIN_EMAIL)
             ->setSubject("New Cowork Niagara Membership")
             ->setHtmlBody($renderer->fetch("admin_email.php"));

        $mailer->send($mail);

        // Signup newsletter if checked
        Flight::redirect("/welcome");
    }

    catch (Stripe_CardError $e) {
        $body = $e->getJsonBody();
        $stripe_error = $body["error"]["message"];

        Flight::render("index.php", array("stripe_error" => $stripe_error));
    }
});

Flight::route("GET /welcome", function() {
    Flight::render("welcome.php");
});

Flight::start();
