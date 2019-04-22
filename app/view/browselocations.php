
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="home2">Campus Map</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="home2">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="signup">Preferences</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="browse">Browse Locations<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="report">Report a Barrier</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about">About </a>
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
<form action = "home2">
  <div class="form-group">
    <h4>From </h4>
    <select class="form-control form-control-lg" style = "max-height:150px;" id="buildingFromForm">
      <?php foreach($buildings as $building){?>
        <option data-id = "<?=$building->buildingId?>"><?=$building->name?></option>
      <?php}?>
      <!-- <option data-id="1">Agnew Hall</option>
      <option data-id ="2">Cowgill Hall</option>
      <option data-id = "3">Davidson Hall</option> -->
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
