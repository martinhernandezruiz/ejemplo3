<body style="color: white;">
<nav class="navbar navbar-expand-lg navbar-light bg-upalt">
  <div class="container-fluid">
    <a class="navbar-brand" href=""><img src="sys/libs/images/logo1.jpg" alt="" width="80" height="50"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="#" onclick="showPortafolio('portfolio')"><h4>Portfolio</h4></a>
        </li>
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="#" onclick="showPortafolio('skillset')"><h4>Skillset</h4></a>
        </li>
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="#" onclick="showPortafolio('experience')"><h4>Experience</h4></a>
        </li>
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="#" onclick="showPortafolio('contact')"><h4>Contact</h4></a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<section>
    <div id="pageView">
        <?php include "app/vistas/Home/Home.php"; ?>
    </div>
</section>
