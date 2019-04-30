<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <!-- <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet"> -->
    <!-- <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="<?=BASE_URL ?>/public/browselocations.js"></script>
    <script>
      function exportCookie() {
        /* Get the text field */
        var copyCookie = "<?php echo $_COOKIE['user']; ?>";
        console.log(copyCookie);
        document.getElementById('cookiestuff').innerHTML = copyCookie;
      }
      function preset(disability) {
        if (disability == 'wheelchair') {
          document.getElementById('width').value = "26";
          document.getElementById('length').value = "42";
          document.getElementById('maxslope').value = "45";
          document.getElementById('stairs').checked = true;
          document.getElementById('narrowsteep').checked = true;
          document.getElementById('pushdoors').checked = true;
          document.getElementById('heavydoor').checked = true;
          document.getElementById('loose').checked = true;
          document.getElementById('uneven').checked = true;
        }
        else if (disability == 'ewheelchair') {
          document.getElementById('width').value = "26";
          document.getElementById('length').value = "42";
          document.getElementById('maxslope').value = "45";
          document.getElementById('stairs').checked = true;
          document.getElementById('narrowsteep').checked = true;
          document.getElementById('pushdoors').checked = false;
          document.getElementById('heavydoor').checked = true;
          document.getElementById('loose').checked = true;
          document.getElementById('uneven').checked = true;
        }
        else if (disability == 'armamputee') {
          document.getElementById('width').value = "36";
          document.getElementById('length').value = "33";
          document.getElementById('maxslope').value = "55";
          document.getElementById('stairs').checked = false;
          document.getElementById('narrowsteep').checked = false;
          document.getElementById('pushdoors').checked = false;
          document.getElementById('heavydoor').checked = true;
          document.getElementById('loose').checked = false;
          document.getElementById('uneven').checked = false;
        }
        else if (disability == 'legamputee') {
          document.getElementById('width').value = "25";
          document.getElementById('length').value = "33";
          document.getElementById('maxslope').value = "45";
          document.getElementById('stairs').checked = true;
          document.getElementById('narrowsteep').checked = true;
          document.getElementById('pushdoors').checked = false;
          document.getElementById('heavydoor').checked = true;
          document.getElementById('loose').checked = true;
          document.getElementById('uneven').checked = true;
        }
        else if (disability == 'cane') {
          document.getElementById('width').value = "25";
          document.getElementById('length').value = "39";
          document.getElementById('maxslope').value = "20";
          document.getElementById('stairs').checked = false;
          document.getElementById('narrowsteep').checked = true;
          document.getElementById('pushdoors').checked = false;
          document.getElementById('heavydoor').checked = true;
          document.getElementById('loose').checked = true;
          document.getElementById('uneven').checked = true;
        }
        else if (disability == 'walker') {
          document.getElementById('width').value = "25";
          document.getElementById('length').value = "64";
          document.getElementById('maxslope').value = "25";
          document.getElementById('stairs').checked = true;
          document.getElementById('narrowsteep').checked = true;
          document.getElementById('pushdoors').checked = true;
          document.getElementById('heavydoor').checked = true;
          document.getElementById('loose').checked = true;
          document.getElementById('uneven').checked = true;
        }
        else {
          document.getElementById('width').value = "25";
          document.getElementById('length').value = "35";
          document.getElementById('maxslope').value = "25";
          document.getElementById('stairs').checked = false;
          document.getElementById('narrowsteep').checked = true;
          document.getElementById('pushdoors').checked = false;
          document.getElementById('heavydoor').checked = false;
          document.getElementById('loose').checked = true;
          document.getElementById('uneven').checked = true;
        }
      }
    </script>
    <!-- <link rel = "stylesheet" href = "https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css"> -->
</head>
