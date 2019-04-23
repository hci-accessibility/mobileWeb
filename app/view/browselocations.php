<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.53.1/mapbox-gl.js'></script>
  <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v0.53.1/mapbox-gl.css' rel='stylesheet' />

  <title>Campus Accessibility Map</title>
</head>


<body>
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
        <li class="nav-item active">
          <a class="nav-link" href="<?= BASE_URL?>/browse">Browse Locations<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= BASE_URL?>/report">Report a Barrier</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- <div class="container-fluid" style = "margin-top: 15px;">
  <div class="row">
  <div class="col-auto">
  <h4>From</h4>
</div>
<div class="col-auto">
<button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off">
Current Location
</button>
</div>
</div>
</div>
<ul class="list-group" style = "max-height: 150px; margin-bottom: 10px; margin-top: 10px; overflow:scroll; -webkit-overflow-scrolling: touch;">
<button type="button" class="list-group-item list-group-item-action" data-toggle="button" aria-pressed="false" autocomplete="off">Agnew Hall</button>
<button type="button" class="list-group-item list-group-item-action" data-toggle="button" aria-pressed="false" autocomplete="off">Agnew Hall</button>
<button type="button" class="list-group-item list-group-item-action" data-toggle="button" aria-pressed="false" autocomplete="off">Cheatham Hall</button>
<button type="button" class="list-group-item list-group-item-action">Cowgill Hall</button>
<button type="button" class="list-group-item list-group-item-action">Davidson Hall</button>
<button type="button" class="list-group-item list-group-item-action">Derring Hall</button>
<button type="button" class="list-group-item list-group-item-action">Durham Hall</button>
<button type="button" class="list-group-item list-group-item-action">Goodwin Hall</button>
<button type="button" class="list-group-item list-group-item-action">Hahn Hall</button>
<button type="button" class="list-group-item list-group-item-action">Holden Hall</button>
<button type="button" class="list-group-item list-group-item-action">Latham Hall</button>
<button type="button" class="list-group-item list-group-item-action">Lavery Hall</button>
<button type="button" class="list-group-item list-group-item-action">Major Williams Hall</button>
<button type="button" class="list-group-item list-group-item-action">Mcbryde Hall</button>
</ul> -->
<form action = "navigate">
  <div class="form-group">
    <h4>From </h4>
    <select class="form-control form-control-lg" style = "max-height:150px;" id="fromForm">
      <option>Current Location</option>
      <option>Agnew Hall</option>
      <option>Cowgill Hall</option>
      <option>Davidson Hall</option>
      <option>Derring Hall</option>
      <option>Durham Hall</option>
      <option>Goodwin Hall</option>
      <option>Hahn Hall</option>
      <option>Holden Hall</option>
      <option>Latham Hall</option>
      <option>Lavery Hall</option>
      <option>Major Williams Hall</option>
      <option>Mcbryde Hall</option>
      <option>Turner Hall</option>

    </select>
  </div>
  <div class="form-group" style = "max-height:150px;">
    <h4>To </h4>
    <select class="form-control form-control-lg" id="toForm">
      <option>Current Location</option>
      <option>Agnew Hall</option>
      <option>Cowgill Hall</option>
      <option>Davidson Hall</option>
      <option>Derring Hall</option>
      <option>Durham Hall</option>
      <option>Goodwin Hall</option>
      <option>Hahn Hall</option>
      <option>Holden Hall</option>
      <option>Latham Hall</option>
      <option>Lavery Hall</option>
      <option>Major Williams Hall</option>
      <option>Mcbryde Hall</option>
      <option>Turner Hall</option>
    </select>
  </div>
  <button type="submit" style = "margin-top: 15px;" class="btn btn-primary btn-lg btn-block mb-2">Navigate</button>

</form>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
