<!-- <!DOCTYPE html>
<html>
  <head>
    <link rel = "stylesheet" href = "https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">

    <script src = "https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src = "https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    <link rel = "stylesheet" href = "styles.css">
  </head> -->

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
          <a class="nav-link active" href="signup">Preferences <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="browse">Browse Locations</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="report">Report a Barrier</a>
        </li>
      </ul>
    </div>
  </nav>

    <div data-role="page" id = "pageone">
      <h2>Campus Navigation Preferences</h2>
      <div><h2 style = "background-color: 0000FF">Please check all that applies (it will be private to you)</h2></div>
      <div>
        <form>
          <fieldset data-role="controlgroup">
            <input type="checkbox" name="c1" id="c1">
            <label for="c1">Wheelchair User</label>
            <input type="checkbox" name="c2" id="c2">
            <label for="c2">Crohn's Disease</label>
            <input type="checkbox" name="c3" id="c3">
            <label for="c3">ALS</label>
            <input type="checkbox" name="c4" id="c4">
            <label for="c4">Arthritis</label>
            <input type="checkbox" name="c5" id="c5">
            <label for="c5">Arm Amputee</label>
            <input type="checkbox" name="c6" id="c6">
            <label for="c6">Leg Amputee</label>
            <input type="checkbox" name="c7" id="c7">
            <label for="c7">Cane User</label>
            <input type="checkbox" name="c8" id="c8">
            <label for="c8">Walker User</label>
            <input type="checkbox" name="c9" id="c9">
            <label for="c9">Muscle Weakness</label>
            <input type="checkbox" name="c10" id="c10">
            <label for="c10">Noise Sensitivity</label>
            <!-- <input type ="button" name = submitbutton id = "submitbutton" value = "Submit"> -->

          </fieldset>
          <div><h2 style = "background-color: 0000FF">Please review the fields and edit information</h2></div>
          <div>
            <h5>Body Dimensions (including navigation equipment - e.g. wheelchair)</h5>
            <label for="width">width: </label>
            <input type="text" name="width" id="width"/>
            <label for="depth">depth: </label>
            <input type="text" name="depth" id="depth"/>

          </div>
          <div>
            <h5>Noise Sensitivity</h5>
            <label for="noise">No need to avoid noise: 0</label>
            <label for="noise">Avoid noisy areas: 100</label>
            <input type="range" min="1" max="100" value="50" class="slider" name="noise" id="noise">

          </div>
          <div>
            <h5>Avoid</h5>
            <label for="stairs">Stairs</label>
            <input type="checkbox" name="stairs" id="stairs" checked data-toggle="toggle" data-size="small">
            <label for="handrails">Stairs without handrails</label>
            <input type="checkbox" name="handrails" id="handrails" checked data-toggle="toggle" data-size="small">

          </div>
          <input type ="submit" name = "submitbutton" class="btn btn-primary btn-lg btn-block mb-2" value = "Submit and Navigate">
        </form>
      </div>

    </div>
  </body>
</html>
