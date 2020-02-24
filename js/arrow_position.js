function showCoords(event) {
    var y = event.clientY;
    
  }

  $(document).ready(function(){
    $("#brand1").hover(function(){
      var testDiv = document.getElementById("brand1");
      document.getElementById("arrow_y").style.transform = "translateY("+testDiv.offsetTop+"px)";
    });
    $("#brand2").hover(function(){
      var testDiv = document.getElementById("brand2");
      document.getElementById("arrow_y").style.transform = "translateY("+testDiv.offsetTop+"px)";
    });
 
    $("#brand3").hover(function(){
      var testDiv = document.getElementById("brand3");
      document.getElementById("arrow_y").style.transform = "translateY("+testDiv.offsetTop+"px)";
    });

    $("#brand4").hover(function(){
      var testDiv = document.getElementById("brand4");
      document.getElementById("arrow_y").style.transform = "translateY("+testDiv.offsetTop+"px)";
    });

    $("#brand5").hover(function(){
      var testDiv = document.getElementById("brand5");
      document.getElementById("arrow_y").style.transform = "translateY("+testDiv.offsetTop+"px)";
    });
  });