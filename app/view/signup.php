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
        <li class="nav-item active">
          <a class="nav-link" href="signup">Preferences <span class="sr-only">(current)</span></a>
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
      <h2 style="margin-top:20px; margin-bottom:20px;">Campus Navigation Preferences</h2>

      <div style="background-color: #DCDCDC; padding-top:5px; margin-bottom:20px;">
        <div><h4 style = "background-color: #DCDCDC">If you have already filled this form, you can import your Cookie below</h4></div>
          <form method="POST" action="<?= BASE_URL ?>/cookie/process">
            <input type="text" class="form-control" style="width: 400px; display: inline-block; margin-bottom:10px; margin-left:10px;" name="cookie" id="cookie" placeholder="Paste Cookie"/>
            <input type="submit" name="cookiesubmit" class="btn btn-primary btn-lg btn-block mb-2" value="Import Cookie">
          </form>
      </div>
      <div><h2 style = "margin-bottom:20px">Please select an option to prefill the form (all information will be private to you)</h2></div>
      <div>
        <form method="POST" action="<?= BASE_URL ?>/signup/process">

            <input type ="button" name = "presetbutton" class="btn btn-primary btn-lg btn-block mb-2" value = "Wheelchair User" onclick="return preset('wheelchair')">
            <input type ="button" name = "presetbutton" class="btn btn-primary btn-lg btn-block mb-2" value = "Electric Wheelchair User" onclick="return preset('ewheelchair')">
            <input type ="button" name = "presetbutton" class="btn btn-primary btn-lg btn-block mb-2" value = "Arm Amputee" onclick="return preset('armamputee')">
            <input type ="button" name = "presetbutton" class="btn btn-primary btn-lg btn-block mb-2" value = "Leg Amputee" onclick="return preset('legamputee')">
            <input type ="button" name = "presetbutton" class="btn btn-primary btn-lg btn-block mb-2" value = "Cane User" onclick="return preset('cane')">
            <input type ="button" name = "presetbutton" class="btn btn-primary btn-lg btn-block mb-2" value = "Walker User" onclick="return preset('walker')">
            <input type ="button" name = "presetbutton" class="btn btn-primary btn-lg btn-block mb-2" value = "Dropfoot" onclick="return preset('dropfoot')">


          <!-- <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" name="c[]" value="wheelchair" id="c1">
            <label class="custom-control-label" for="c1">Regular Wheelchair User</label>
          </div>
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" name="c[]" value="ewheelchair" id="c2">
            <label class="custom-control-label" for="c2">Electric Wheelchair User</label>
          </div>
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" name="c[]" value="armamputee" id="c3">
            <label class="custom-control-label" for="c3">Arm Amputee</label>
          </div>
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" name="c[]" value="legamputee" id="c4">
            <label class="custom-control-label" for="c4">Leg Amputee</label>
          </div>
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" name="c[]" value="cane" id="c5">
            <label class="custom-control-label" for="c5">Cane User</label>
          </div>
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" name="c[]" value="walker" id="c6">
            <label class="custom-control-label" for="c6">Walker User</label>
          </div>
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" name="c[]" value="dropfoot" id="c7">
            <label class="custom-control-label" for="c7">Dropfoot</label>
          </div> -->

          <div><h2 style = "background-color: #DCDCDC; padding:10px;">Please review the fields and edit information</h2></div>
          <div style="background-color: #DCDCDC; margin-bottom: 15px;">
            <h5>Body Dimensions (including navigation equipment - e.g. wheelchair)</h5>
            <div style="margin-bottom: 5px;">
              <label for="width" style="display: inline-block; width: 200px; padding-left:5px">width: </label>
              <input type="text" class="form-control" style="width: 200px; display: inline-block;" name="width" id="width" placeholder="insert dimensions in inches"/>
              <p style="display: inline-block;">inches</p>
            </div>
            <div>
              <label for="length" style="display: inline-block; width: 200px; padding-left: 5px">length: </label>
              <input type="text" class="form-control" style="width: 200px; display: inline;" name="length" id="length" placeholder="insert dimensions in inches"/>
              <p style="display: inline-block;">inches</p>
            </div>
            <div>
              <label for="maxslope" style="display: inline-block; width: 200px; padding-left: 2px;">Maximum Traversible Slope: </label>
              <input type="text" class="form-control" style="width: 200px; display: inline;" name="maxslope" id="maxslope" placeholder="insert dimensions in degrees"/>
              <p style="display: inline-block;">degrees</p>
            </div>
          </div>

          <!-- Noise Sensitivity fields not currently used -->
          <!-- <div>
            <h5>Noise Sensitivity</h5>
            <label for="noise">No need to avoid noise: 0</label>
            <label for="noise" style="float: right;">Avoid noisy areas: 100</label>
            <input type="range" class="custom-range" min="0" max="100" name="noiseSensitivity" />

          </div> -->
          <div>
            <h5>Avoid</h5>
            <div style="background-color: #DCDCDC;">
              <label for="stairs" style="width: 250px;">Stairs</label>
              <input type="checkbox" name="stairs" value="stairs" id="stairs" data-size="small">
            </div>
            <div>
              <label for="narrowsteep" style="width: 250px;">Narrow or Steep Stairs</label>
              <input type="checkbox" name="narrowsteep" value="narrowsteep" id="narrowsteep" checked data-toggle="toggle" data-size="small">
            </div>
            <div style="background-color: #DCDCDC;">
              <label for="pushdoors" style="width: 250px;">Non-activated Doors</label>
              <input type="checkbox" name="pushdoors" value="pushdoors" id="pushdoors" checked data-toggle="toggle" data-size="small">
            </div>
            <div>
              <label for="heavydoor" style="width: 250px;">Heavy Doors</label>
              <input type="checkbox" name="heavydoor" value="heavydoor" id="heavydoor" checked data-toggle="toggle" data-size="small">
            </div>
            <div style="background-color: #DCDCDC;">
              <label for="loose" style="width: 250px;">"Loose" Terrain (Shifts Under Foot)</label>
              <input type="checkbox" name="loose" value="loose" id="loose" checked data-toggle="toggle" data-size="small">
            </div>
            <div>
              <label for="uneven" style="width: 250px;">Uneven Terrain</label>
              <input type="checkbox" name="uneven" value="uneven" id="uneven" checked data-toggle="toggle" data-size="small">
            </div>
          </div>
          <input type ="submit" name = "submitbutton" class="btn btn-primary btn-lg btn-block mb-2" value = "Submit and Navigate">
        </form>
        <?php
        if (isset($_COOKIE['user'])) { ?>
          <h4 style="margin-top: 5%;">You can export your Cookie to import it to your other devices</h4>
          <button onclick="exportCookie()" class="btn btn-primary btn-lg btn-block mb-2">Export Cookie</button>
          <div style="margin-top:1%; margin-bottom:1%;"><h3 id="cookiestuff" style="background-color: #DCDCDC; padding-left: 30%;"></h3></div>

        <?php }
        ?>
      </div>

    </div>
  </body>
</html>
