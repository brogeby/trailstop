<!--- Products looper ---->
<div class="_procontainer">
  <div class="brands" onmousemove="showCoords(event)">
    <div class="branding">
    <?php 
    $brand_list= array(
        1    => "../../img/logotypes/scott.png",
        2    => "../../img/logotypes/trek.png",
        3    => "../../img/logotypes/yeti.png",
        4    => "../../img/logotypes/rockymountain.png",
        5    => "../../img/logotypes/specialized.png",
        
    );
  for($brand = 1 ;$brand <= 9; $brand++){
    echo '<div class="brand' . $brand . '">
        <img src="' . $brand_list[$brand] . '" width="100%">
    </div>';
  }
  ?>
    </div>
    </div>
  <div class="pointer"><img id="arrow_y" src="../img/doublearrow.svg" alt="Arrow" width="32"></div>
  <?php 
  for($i_item = 1 ;$i_item <= 9; $i_item++){
    echo '<div class=Item' . $i_item .'>
            <div class="cont" onclick="window.location.href=\'product-page.php\'">
            <div class="img_c"><img src="http://ludvigolausson.se/img/mtn_bike_scott.jpg" width="100%"></div>
            <div class="brand_n">SCOTT</div>
            <div class="title">SCOTT Mountainbike</div>
            <div class="prize">6550kr</div>
        </div>
    </div>';
  }
  ?>
</div>
<!--- Products looper END ---->