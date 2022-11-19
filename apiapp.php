<!DOCTYPE html> 
<html> 
<head> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<style> 
 
 
@import url('https://fonts.googleapis.com/css2?family=Almarai:wght@800&display=swap'); 
 
* { 
  box-sizing: border-box; 
} 
 
.topleft { 
    position: absolute; 
    bottom: 37px; 
    right: 2px; 
    font-size: 15px; 
    background: #000000a1; 
    padding: 6px; 
    color: #FFFFFF; 
    BORDER-RADIUS: 10px 0 6px 0; 
} 
 
 
body { 
  background-color: #151515; 
  padding: 0px 10px 0px 10px; 
  font-family: 'Almarai', sans-serif; 
  text-align: center; 
} 
 
/* Center website */ 
.main { 
  max-width: 1280px; 
  margin: auto; 
} 
 
h3 { 
font-size: 16px; 
    margin-block-start: 0.4em; 
    margin-block-end: 0.4em; 
    margin-inline-start: 0px; 
    margin-inline-end: 0px;     
} 
 
h2 { 
color: #d5ffc4; 
font-size: 18px; 
    margin-block-start: 0.4em; 
    margin-block-end: 0.4em; 
    margin-inline-start: 0px; 
    margin-inline-end: 0px;     
} 
 
.row { 
  margin: -7px -18px; 
} 
 
/* Add padding BETWEEN each column */ 
.row, 
.row > .column { 
  padding: 4px; 
} 
 
/* Create four equal columns that floats next to each other */ 
.column { 
  float: right; 
  width: 20%; 
} 
 
/* Clear floats after rows */  
.row:after { 
  content: ""; 
  display: table; 
  clear: both; 
} 
 
/* Content */ 
.content { 
  background-color: #4c4c4c; 
  padding: 2px; 
  border-radius: 8px; 
    position: relative; 
 
} 
 
 
/* Responsive layout TV */ 
@media screen and (max-width: 1920px) { 
  .column { 
    width: 50%; 
  } 
} 
 
/* Responsive layout Mobile */ 
@media screen and (max-width: 600px) { 
  .column { 
    width: 100%; 
  } 
} 

.holds-the-iframe {
      background:url("https://upload.wikimedia.org/wikipedia/commons/b/b9/Youtube_loading_symbol_1_(wobbly).gif") center center no-repeat;
    }
 
</style> 
</head> 
<body> 
 
<!-- MAIN (Center website) --> 
<div class="main"> 

   
 
<!-- Portfolio Gallery Grid --> 
<div class="row"> 
      <h2></h2> 
 
   <div class="column"> 
    <div class="content">
  
      <audio id="myAudio">
  <source src="https://raw.githubusercontent.com/exaile/exaile-test-files/master/click.mp3" allow="autoplay" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>
     
    <img src="https://telegra.ph/file/a36579afa57a3f9182861.png"  style="border-radius:6px;width:100%" onclick="displayIframe()" ></a> 
    </div> 
  </div> 
  
  <div id="iframeDisplay" >
 </div> 
 
 
 
 
 
         
 
 
 
 
 
   
<!-- END GRID --> 
</div>




<script>
 
 function audiolunch() 
 {
  var x = document.getElementById("myAudio"); 
   function playAudio() 
   { 
    x.play(); 
   } 
    playAudio();
     
      
   
 }

function myFunction() 
 {
  
    let element = document.getElementById("frame");
     element.setAttribute("hidden", "hidden");
      document.getElementById('iframeDisplay').innerHTML = " <img src=\"https://techplanet.today/storage/posts/2022/10/28/71/ZYeH7xla0ZjvwrZhIIkodMQUI7H8eLRdzXmJZ6uw.png\"  style=\"border-radius:6px;width:100%\" onclick=\"audiolunch() \" >"
      
   
 }


 
function displayIframe() {
  document.getElementById('iframeDisplay').innerHTML = " <iframe id=\"frame\" onload=\"myFunction()\" class=\"holds-the-iframe\"  src=\"https://daddyhd.com/embed/stream-1.php\" height=\"300\" width=\"100%\"></iframe>"
    }
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
 </body>
</html>
