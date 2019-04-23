  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="home2">Campus Map</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="<?= BASE_URL?>/about">About <span class="sr-only">(current)</span></a>
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

    <div style="background-color: #DCDCDC; width: 90%; margin-left:5%; margin-top:5%; padding:2%;">
      <h2>About Us</h2>
      <p>Our project, Accessibility Map, aims to provide smart routing around the Virginia Tech Campus that take into account accessibility barriers.</p>
      <p>What we are demonstrating, in the context of our Human-Computer Interaction Capstone project, is the design process and resulting graphical user interface. This is part of a larger endeavor of the Assistive Wearable Robotics Lab (ARL) run by Dr. Asbeck, as described below:</p>
      <p>This project will create a wearable system for mapping a university campus like Virginia Tech's.  The focus of the project will be to create tech solutions for annotating point cloud maps with data about barriers and other hazards that could prevent a person with a disability from navigating a corridor or pathway. An algorithm is then to be developed to find the shortest path that meets specified parameters such as when chair dimensions and avoiding high frequency noises. This map would then be used by people with physical disabilities to navigate around the campus.  The map must automatically annotate things like ground type (grass, gravel), slopes, curbs/steps, door and hallway width, door opening devices, and more. The system will be evaluated both analytically and experimentally.</p>
      <p>We would like to thank Dr. McCrickard and Dr. Asbeck for allowing us to tackle this project, and Hani Awni for advising us.</p>
      <p>Credits: Dr. Asbeck, Dr. McCrickard, Hani Awni, Josh Wenger, Yasmine Belghith, Jack Danisewicz, Mahira Sheikh</p>
    </div>
  </body>
</html>
