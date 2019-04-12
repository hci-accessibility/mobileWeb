<!DOCTYPE html>
<!--html lang="en">
  <head>
    <title><?php echo $pageTitle; ?></title>
    <link rel = "stylesheet" href = "https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">

    <!--script src = "https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src = "https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    <link rel = "stylesheet" href = "<?= BASE_URL ?>/public/css/<?php echo $styleSheet; ?>">
  </head-->

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <script>
    function exportCookie() {
      /* Get the text field */
      var copyCookie = "<?php echo $_COOKIE['user']; ?>";
      console.log(copyCookie);

      /* Select the text field */
      //copyCookie.select();
      document.body.append(copyCookie);
      //copyCookie.setAttribute('value', text);
      copyCookie.select();


      /* Copy the text inside the text field */
      document.execCommand("copy");
      //document.body.removeChild(copyCookie);

      /* Alert the copied text */
      alert("Copied the Cookie: " + copyCookie.value);

    }
    </script>
    <!-- <link rel = "stylesheet" href = "https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css"> -->
</head>
