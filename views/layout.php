<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Become a member - Cowork Niagara</title>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" href="assets/vendor/normalize.css">
    <link rel="stylesheet" href="assets/main.css">
</head>
<body>
    <header>
        <div>
            <a href="http://coworkniagara.com">
                <img src="assets/logo-horizontal.svg" height="60">
            </a>
        </div>
    </header>

    <?= $body_content; ?>

    <script src="assets/vendor/jquery-2.1.3.min.js"></script>
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script type="text/javascript">
        Stripe.setPublishableKey("<?= STRIPE_PUBLIC_KEY ?>");
    </script>
    <script src="assets/vendor/jquery.payment.js"></script>
    <script src="assets/vendor/parsley.min.js"></script>
    <script src="assets/main.js"></script>
</body>
</html>
