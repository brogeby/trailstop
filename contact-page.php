<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>TrailStop</title>
  <link rel='stylesheet' type='text/css' media='screen' href='css/main.css'>
  <link rel="stylesheet" type='text/css' href="css/contact.css">
</head>
<body>

<script src="js/phone_menu.js"></script>
<?php 
    include "parts/header.php";
    include "parts/phone_menu.php";
?>

  <div class="container">
    <h1 class="brand">Kontakta oss</h1>
    <div class="wrapper">
      <div class="company-info">
        <ul>
          <li>Åsögatan 117</li>
          <li>08-123-4567</li>
          <li>Trailstop@cmeducations.se</li>
        </ul>
        <p class="openings">Våra öppettider är:<br> Mån-Fre 9.00 - 15.00</p>
      </div>
      <div class="contact">
        <h3>Mejla oss</h3>
        <form>
          <p>
            <label>Namn</label>
            <input type="text" name="name">
          </p>
          <p>
            <label>Epostadress</label>
            <input type="email" name="email">
          </p>
          <p>
            <label>Telefon nummer</label>
            <input type="text" name="phone">
          </p>
          <p>
            <label>Ärende</label>
            <select>
              <option>Välj ärende</option>
              <option>Reperation</option>
              <option>Byte och ånger</option>
            </select>
          </p>
          <p class="full">
            <label>Meddelande</label>
            <textarea name="message" rows="5"></textarea>
          </p>
          <p class="full">
            <button>Skicka</button>
          </p>
        </form>
      </div>
    </div>
  </div>
</body>
</html>