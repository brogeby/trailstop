<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Trailstop</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/cart.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/main.css'>
</head>
<body>
    <script src="js/phone_menu.js"></script>
<?php 
    include "parts/header.php";
    include "parts/phone_menu.php";
?> 

<div class="wrapper">

<div class="cell-2">
    <div class="content">
        <h1><u>Din Kundvagn</u></h1>
        <h2>TREK ROSCOE 7</h2>
        <h3>11.200kr</h3>
        <p class="lager">I lager. Leverans 3-5 dagar.</p> 
        <img class="trek" src="img/trek.jpg" height="100%" width="auto">
    </div>
    <div class="content">
    <h3>Faktura Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Namn</label>
            <input type="text" id="fname" name="firstname" placeholder="Anna Paleologos">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="anna@example.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="Märsta">
            <label for="city"><i class="fa fa-institution"></i>Stad</label>
            <input type="text" id="city" name="city" placeholder="Stockholm">
              <label for="state">Ort</label>
                <input type="text" id="state" name="state" placeholder="Sverige">
                <label for="zip">Postadress</label>
                <input type="text" id="zip" name="zip" placeholder="10001">
           </div>
        <div class="col-50">
            <h3>Betalning</h3>
            <label for="cname">Namn på kort</label>
            <input type="text" id="cname" name="cardname" placeholder="Anna Paleologos">
            <label for="ccnum">Kreditkort nummer</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Månad</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September">
            <div class="row">
              <div class="col-50">
                <label for="expyear">År</label>
                <input type="text" id="expyear" name="expyear" placeholder="2020">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="000">
              </div>
            </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Leverans adress samma som faktura adress
        </label>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Jag vill få erbjundande via email
        </label>
        <input type="submit" value="Gå Vidare" class="btn">
      </form>
      <h1>Total</h1><br>
      <h1>11200kr</h1>
    </div>
  </div>
   </div>
  </div>
</div>
</div>
<div class="cell-3">Main</div>
<div class="cell-4">
<div class="cell-5">9</div>
<div class="cell-6">10</div>
<div class="cell-7">11</div>
<div class="cell-8">12</div>
</div>
</div>
    
</body>
</html>