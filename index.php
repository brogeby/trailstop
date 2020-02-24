<!--- All included code is written by Ludvig Olausson --->
<!DOCTYPE html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <meta charset='utf-8'>
    <title>Trailstop</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/main.css'>
    <link rel="stylesheet" href="css/slider.css">
    <link rel="stylesheet" href="css/bar.css">
    <link rel="stylesheet" href="css/front-page-products.css">
    <link rel="stylesheet" href="css/recommended.css">
    <script src="js/phone_menu.js"></script>
    <style>#arrow_y{transition: .5s; margin: 0 auto;}</style>
</head>
<body>
<?php 
    include "parts/header.php";
    include "parts/phone_menu.php";
    include "parts/front-page/slider.php";
    include "parts/front-page/bar.php";
    include "parts/front-page/front-page-products.php";
    include "parts/front-page/bar-rec.php";
    include "parts/front-page/recommended.php";
    include "parts/footer.php";
    
?>
    <script src="js/slider.js"></script>
    <script src="js/arrow_position.js"></script>
</body>
</html> 