<div class="_procontainer">
  <div class="brands" onmousemove="showCoords(event)"></div>
  <div class="pointer"><img id="arrow_y" src="../img/doublearrow.svg" alt="Arrow" width="32"></div>
  <?php 
  for($i_item = 1 ;$i_item <= 9; $i_item++){
    echo '<div class=Item' . $i_item .'>
            <div class="cont" onclick="window.location.href="product-page.php">
            <div class="img_c"><img src="http://ludvigolausson.se/img/mtn_bike_scott.jpg" width="100%"></div>
            <div class="brand_n">SCOTT</div>
            <div class="title">SCOTT Mountainbike</div>
            <div class="prize">6550kr</div>
        </div>
    </div>';
  }
  ?>
</div>
