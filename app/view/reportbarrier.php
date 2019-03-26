<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="home2">Campus Map</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="about">About </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="home2">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="signup">Preferences</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="browse">Browse Locations</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="report">Report a Barrier<span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>

  <div>
    <h2>Location</h2>
    <form  method="POST" action= "<?= BASE_URL ?>/submitbarrier"> <!--Need to add action later for where the form infomation should go? -->
      <div class="form-group">
        <h4>Building </h4>
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
      <!-- Need this menu to change based on the building selected, (should we even include rooms? Should we have user type in room in the description below?) -->
      <div class="form-group" style = "max-height:150px;">
        <h4>Room (if applicable) </h4>
        <select class="form-control form-control-lg" id="toForm">
          <option>No Room</option>
          <option>Room 110</option>
          <option>Room 110</option>
          <option>Room 110</option>
          <option>Room 110</option>
          <option>Room 110</option>
          <option>Room 110</option>
          <option>Room 110</option>
          <option>Room 110</option>
          <option>Room 110</option>
          <option>Room 110</option>
          <option>Room 110</option>
          <option>Room 110</option>
          <option>Room 110</option>
        </select>
      </div>
      <h2>Issue</h2>
      <textarea id="textArea" name="textArea" placeholder="Please briefly describe the issue here..."></textarea>
      <!-- Need to make this red-->
      <p>*Your report will be sent to the office... and will be processed based on the severity/urgency of the issue, thank you.</p>
      <button type="submit" style = "margin-top: 15px;" class="btn btn-primary btn-lg btn-block mb-2">Submit Report</button>

    </form>
  </div>
</body>
</html>
