<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!---------Icons Font Awesome--------->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!---------Fonts--------->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <!---------Styles--------->
    <link rel="stylesheet" href="/assets/css/style.css">

    <!---------Scripts--------->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="/assets/js/script.js"></script>

    <title>Portfolio</title>
</head>
<body>
<!---------Header--------->
<header><?php include_once "parts/header.php" ?></header>
<!---------Projects--------->
<section><?php include_once "parts/projects.php" ?></section>
<!---------About me--------->
<section><?php include_once "parts/about.php" ?></section>
<!---------Blog posts--------->
<section><?php include_once "parts/blog.php" ?></section>
<!---------Contact form--------->
<section><?php include_once "parts/contact.php" ?></section>
<!---------Footer--------->
<footer><?php include_once "parts/footer.php" ?></footer>

</body>
</html>