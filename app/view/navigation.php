<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="home2">Campus Map</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="<?= BASE_URL?>/about">About </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= BASE_URL?>/home2">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= BASE_URL?>/signup">Preferences</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= BASE_URL?>/browse">Browse Locations</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= BASE_URL?>/report">Report a Barrier</a>
      </li>
    </ul>
  </div>
</nav>


<h1>Navigation</h1>

<!--
<p>This will be the hardest obstacle on this route:</p>
<div class="barrierpic" style = 'background-image:"<?= BASE_URL ?>/public/road.jpg"; style="background-size: 100% 100%"'>

<img src= "<?= BASE_URL ?>/public/road.jpg" alt="dangerous road" style="background-size: 100% 100%"--><!--source: https://www.google.com/url?sa=i&source=images&cd=&cad=rja&uact=8&ved=2ahUKEwiXyZiX1KDhAhVCiFkKHfrpCiIQjRx6BAgBEAU&url=https%3A%2F%2Fwww.tripadvisor.co.nz%2FLocationPhotoDirectLink-g154972-d186150-i154850860-Cabot_Trail-Cape_Breton_Island_Nova_Scotia.html&psig=AOvVaw0nA6X6G9AvlhLRM3U6QlpC&ust=1553718905259933-->
<!--
</div>
<button type="submit" style = "margin-top: 15px;" class="btn btn-primary btn-lg btn-block mb-2">Let's go!</button>
<button type="submit" style = "margin-top: 15px;" class="btn btn-primary btn-lg btn-block mb-2">Try Alternative Route</button>

<div class="timeestimate" style="background-color:  lightgreen">
  <p>time to arrive:  </p>
  <p>Arrive at:  </p>
</div>

-->
<!--
Response:
{
path:[
{x: ,
 y: ,
map_id: },
{x: ,
 y: ,
map_id: },
{x: ,
 y: ,
map_id: },
...]
}
-->

<p>Here is the route to your destination:</p>

<!-- create a canvas with a defualt size to put the image in -->
<canvas id="samplemap" width = "900" height= "900" border= "1px solid red" float="center">
<img id= "map" src= "<?= BASE_URL ?>/public/McBryde_01.jpg" alt="map">
</canvas>
<!--img id= "map2" src= "<?= BASE_URL ?>/public/map_sample.JPG" alt="map"-->

<!--style> canvas { width: 800px; height: 800px; border: 1px solid red; }</style-->

<script type="text/javascript">

window.onload = draw();

function draw() {

  //JSON.parse(data);

  
  //resizes the canvas to be the dimensions of the image and raws the image on the canvas
  var canvas = document.getElementById("samplemap");
  var ctx = canvas.getContext("2d");
   var img = document.getElementById("map");
  var width = parseInt(img.width);
 var height = parseInt(img.height);
 canvas.width = width;
 canvas.height = height;
 ctx.drawImage(img, 0, 0, width, height);
  // var hRatio = canvas.width / img.width;
  // var vRatio = canvas.height / img.height;
  // var ratio  = Math.min ( hRatio, vRatio );
  //ctx.drawImage(img, 0, 0, width, height);
  //ctx.drawImage(img, 0,0, img.width, img.height, 0,0,img.width*ratio, img.height*ratio);
 //ctx.drawImage(img, 0, 0, img.width,    img.height,     // source rectangle
  //                   0, 0, canvas.width, canvas.height); // destination

// var centerShift_x = ( canvas.width - img.width*ratio ) / 2;
//    var centerShift_y = ( canvas.height - img.height*ratio ) / 2;
   //ctx.clearRect(0,0,canvas.width, canvas.height);
  //ctx.drawImage(img, 0,0, img.width, img.height,
  //                   centerShift_x,centerShift_y,img.width*ratio, img.height*ratio);

//if we want rectangle points instead of solid strokes
ctx.fillStyle = "#3399FF";
 ctx.fillRect(70.5, 30, 10, 10);

 //drawing straight lines
  ctx.beginPath();
  // Staring point (50.5,510)
    ctx.moveTo(50.5,510);
    // End point (180.5,400)
  ctx.lineTo(180.5,400);
    // Make the line visible
    // Staring point (50.5,510)
      ctx.moveTo(50.5,510);
      // End point (180.5,400)
    ctx.lineTo(300.5,580);
      // Make the line visible
    ctx.strokeStyle = "#3399FF";
    ctx.lineWidth = 5;
    ctx.stroke();
  //  ctx.fillRect(10,10,1,1);
};



</script>
