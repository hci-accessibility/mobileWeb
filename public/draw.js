function draw() {

  var canvas = document.getElementById("samplemap");
  var ctx = canvas.getContext("2d");
   var img = document.getElementById("map");
  var width = parseInt(img.width);
  var height = parseInt(img.height);
  canvas.width = width;
  canvas.height = height;
  ctx.drawImage(img, 0, 0, width, height);

  ctx.fillStyle = "#3399FF";
  ctx.fillRect(70.5, 30, 10, 10);

  //drawing straight lines

  // Staring point (50.5,510)


  $.ajax({
    type: "GET",
    url: 'getroute',
    dataType: 'json',
    error: function(data){console.log(data)},
    success: function(data){
        console.log(data);
        //json_decode(data);
        var dat = data.plan;
        var len = dat.length;

        for(var i = 0; i < len - 1; i++){
          var x1 = dat[i]['x'];
          var y1 = dat[i]['y'];
          var x2 = dat[i+1]['x'];
          var y2 = dat[i+1]['y'];
          console.log("x: " + x1 + " y: " + y1 + ", ");
          ctx.beginPath();
          ctx.moveTo(x1,y1);
          // End point (180.5,400)
          ctx.lineTo(x2, y2);
          ctx.strokeStyle = "#3399FF";
          ctx.lineWidth = 5;
          ctx.stroke();

        }
      }
    });






  //resizes the canvas to be the dimensions of the image and raws the image on the canvas

  //  ctx.fillRect(10,10,1,1);
};
