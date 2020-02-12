<!--- Header file ----->
<link rel="stylesheet" href="../css/header.css">
<div class="container">
    <div class="Logo"></div>  
    <div class="Basket">
        <img src="img/basket.svg" alt="Basket">
    </div>
    <div class="Hamburger">
        <div id="ham_menu" onclick="outside()" class="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</div>
<?php if(basename($_SERVER['SCRIPT_FILENAME'])==="index.php"){
  echo '<div class="shipping">
    <div class="midc">
        <img src="img/checkbox.png" alt="checkbox" height="17px" width="17px">
        <p>Gratis frakt över 800kr</p>
    </div>
  </div>';
}?>

<!--- Header file ends ----->