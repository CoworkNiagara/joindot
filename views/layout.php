<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Become a member - Join Cowork Niagara</title>
    <meta name="description" content="Join Cowork Niagara - a community for Niagara's independent workforce.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:url" content="https://<?= $_SERVER["HTTP_HOST"] ?><?= $_SERVER["REQUEST_URI"] ?>">
    <meta property="og:image" content="https://<?= $_SERVER["HTTP_HOST"] ?>/assets/logo-horizontal.svg">
    <meta property="og:description" content="Join Cowork Niagara - a community for Niagara's independent workforce.">
    <meta property="og:title" content="Become a Member - Join Cowork Niagara">

    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans">
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

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-51684825-2', 'auto');
      ga('send', 'pageview');
    </script>
</body>
</html>
