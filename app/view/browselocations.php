
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="home2">Campus Map</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
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
        <li class="nav-item">
          <a class="nav-link" href="<?= BASE_URL?>/about">About </a>
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
<form action = "navigatexy" method="post">
  <div class="form-group">
    <h4>From </h4>
    <h5>Building</h5>
    <select class="form-control form-control-lg" style = "max-height:150px;" name = "buildingFromForm" id="buildingFromForm">
      <option value = "1" >Current Location</option>
      <option value = "2">Agnew Hall</option>
      <option value = "3">Cowgill Hall</option>
    </select>
    <h5>Room</h5>
    <select class="form-control form-control-lg" style = "max-height:150px;" name = "roomFromForm" id="roomFromForm">
      <option value="0">- Select -</option>
    </select>

  </div>
  <div class="form-group" style = "max-height:150px;">
    <h4>To </h4>
    <select class="form-control form-control-lg" name = "buildingToForm" id="buildingToForm">
      <option value = "1" >Current Location</option>
      <option value = "2">Agnew Hall</option>
      <option value = "3">Cowgill Hall</option>
    </select>
    <h5>Room</h5>
    <select class="form-control form-control-lg" style = "max-height:150px;" name = "roomToForm" id="roomToForm">
      <option value="0">- Select -</option>
    </select>
  </div>
  <button type="submit" style = "margin-top: 15px;" class="btn btn-primary btn-lg btn-block mb-2">Navigate</button>

</form>
