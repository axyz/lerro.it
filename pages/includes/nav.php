<nav class="top-bar fixed">
  <ul>
    <li class="name"><h1><?php if($_GET['lang'] == "en") { ?><a href="<?php echo $basedir;?>?lang=en"><?php } else { ?><a href="<?php echo $basedir;?>"><?php } ?><img src="images/logo.png" id="logo2" /></a></h1></li>
    <li class="toggle-topbar"><a href="#"></a></li>
  </ul>
  <section>
    <ul class="right" id="main-menu">
      <?php if($_GET['lang'] == "en") { ?>
      <li><a href="<?php echo $basedir;?>?lang=en">HOME</a></li>
      <li><a href="profilo.php?lang=en">PROFILE</a></li>
      <li><a href="attivita.php?lang=en">ACTIVITIES</a></li>
      <li><a href="esperienza.php?lang=en">STORIES</a></li>
      <li><a href="costi.php?lang=en">COSTS</a></li>
      <li><a href="http://avvocati.net">BLOG</a></li>
      <li><a href="contatti.php?lang=en">CONTACTS</a></li>
      <li><a href="<?php echo parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);?>"><img src="http://www.difesa.it/_layouts/MdDEvoluzione-Layouts/images/flag-italiano.png" /></a></li>
      <?php } else { ?>
      <li><a href="<?php echo $basedir;?>">HOME</a></li>
      <li><a href="profilo.php">PROFILO</a></li>
      <li><a href="attivita.php">ATTIVIT&Agrave;</a></li>
      <li><a href="esperienza.php">STORIE</a></li>
      <li><a href="costi.php">COSTI</a></li>
      <li><a href="http://avvocati.net">BLOG</a></li>
      <li><a href="contatti.php">CONTATTI</a></li>
      <li><a href="<?php echo parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);?>?lang=en"><img src="http://www.memoriaexpo.it/images/flag-en.png" /></a></li>
      <?php } ?>
    </ul>
  </section>
</nav>