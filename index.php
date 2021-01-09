<!DOCTYPE html>
<!--
Template Name: Trealop
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Copyright: OS-Templates.com
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->
<html lang="el">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>Υπουργείο Εργασίας</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <div id="topbar" class="hoc clear">
    <div class="fl_right"> 
      <!-- ################################################################################################ -->
      
      <ul class="nospace">
        <?php 
          $cookie_name = 'user';
          if(!isset($_COOKIE[$cookie_name])) {        
              echo '<li><a style="color: #0026ff" href="pages/login.html?header=index.php" title="Σύνδεση">Σύνδεση <i class="fas fa-sign-in-alt"></i></a></li>';
              echo '<li><a style="color: #0026ff" href="pages/register.html?header=index.php" title="Εγγραφή">Εγγραφή <i class="fas fa-edit"></i></a></li>';
          } else {
              echo '<li><a style="color: #0026ff" href="pages/edit_profile.php" title="Προφίλ Χρήστη">Προφίλ Χρήστη <i class="fas fa-user"></i></a></li>';
              echo '<li><a style="color: #0026ff" href="pages/actions/logout.php" title="Αποσύνδεση">Αποσύνδεση <i class="fas fa-sign-out-alt"></i></a></li>';
          }
        ?>
        
        <li id="searchform">
          <div>
            <form action="pages/dead_page.php" method="post">
              <label for="search_term">Aναζητήστε: </label>
              <input type="text" id="search_term" name="search_term">
            </form>
          </div>
        </li>
      </ul>
      <!-- ################################################################################################ -->
    </div>
  </div>
</div>


<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="hoc clear">
  <div style="float: left; position: relative; left: -30px; top: 20px">
  <a href="index.php"><img src="images/logo.jpeg"></a>
  </div>
  <div id="logo" class="fl_left"> 
      <!-- ################################################################################################ -->
      <h1><a href="index.php">Υπουργείο Εργασίας</a></h1>
      <!-- ################################################################################################ -->
    </div>
    <nav id="mainav" class="fl_right"> 
      <!-- ################################################################################################ -->
      <ul class="clear">
        <li><a class="drop" href="#">COVID-19</a>
          <ul>
            <li><a href="pages/metra_prolipsis.php">Μέτρα προστασίας στον χώρο εργασίας</a></li>
            <li><a href="pages/antimetwpisi_krousmatos.php">Αντιμετώπιση κρούσματος στον χώρο εργασίας</a></li>    
            <li><a href="pages/tilergasia_info.php">Τηλεργασία-άδεια-ειδικού σκοπού-αναστολή σύμβαση</a></li>
          </ul>
        </li>
        <li><a class="drop" href="#">Εργαζόμενος</a>
          <ul>
            <li><a class="drop" href="#">COVID-19 και Εργασία</a>
              <ul>
                <li><a href="pages/adeia_eidikou_skopou.php"> Φόρμα για άδεια ειδικού σκοπού </a></li>
                <li><a href="pages/dead_page.php">Μετακινήσεις και απαραίτητα έγγραφα</a></li>
              </ul>
            </li>
            <li><a href="pages/dead_page.php">Εργασιακά δικαιώματα</a></li>
            <li><a href="pages/dead_page.php">Κατάρτιση και σεμινάρια</a></li>
            <li><a href="pages/dead_page.php">Προκυρήξεις</a></li>
          </ul>
        </li>
        <li><a class="drop" href="#">Εργοδότης</a>
          <ul>
            <li><a class="drop" href="#">COVID-19 και Εργασία</a>
              <ul>
                <li><a href="pages/anastoli_symvasis.php"> Φόρμα για δήλωση εξ αποστάσεως εργασίας-αναστολή σύμβασης</a></li>    
                <li><a href="pages/dead_page.php">Διαθέσιμες θέσεις εργασίας (COVID-19)</a></li>
              </ul>
            </li>
            <li><a href="pages/lista_ergazomenwn.php">Λίστα Εργαζομένων</a></li>
            <li><a href="pages/dead_page.php">Υποχρεώσεις προς εργαζομένους</a></li>
            <li><a href="pages/dead_page.php">Υποχρεώσεις προς το κράτος</a></li>
            <li><a href="pages/dead_page.php">Απασχόληση αλλοδαπων-ανηλίκων</a></li>
          </ul>
        </li>
        <li><a class="drop" href="#">Επικοινωνία</a>
          <ul>
            <li><a href="pages/epikoinwnia.php">Πληροφορίες για τις υπερησίες του Υπουργείου</a></li>
            <li><a href="pages/kleisimo_rantevou.php">Κλεισιμό Ραντεβού</a></li>
            <li><a href="pages/dead_page.php">Αποστολή emai ερωτησέων</a></li>
          </ul>
        </li>
        <li><a href="#">Ανακοινώσεις</a></li>
      </ul>
	  </nav>
	  </header>
      <!-- ################################################################################################ -->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img style="position: relative; left: 137px; width: 1000px; height: 500px" src="images/giousef.jpg"  alt="Chania">
      <div class="carousel-caption">
        <h2>Los Angeles</h2>
        <p>LA is always so much fun!</p>
      </div>
    </div>

    <div class="item">
      <img style="position: relative; left: 137px; width: 1000px; height: 500px" src="images/covid.jpg" alt="Chicago">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>
    </div>

    <div class="item">
      <img style="position: relative; left: 137px; width: 1000px; height: 500px" src="images/asteri.jpg" alt="New York">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <section id="introblocks">
      <div class="sectiontitle">
        <h4 class="heading">Γρήγορη Πρόσβαση</h4>
      </div>
      <ul class="nospace group">
        <li class="one_third first">
          <article><a href="#"><i class="#"></i></a>
		  <img style="width: 100%;" src="images/asteri.jpg" alt="" />
            <h5 class="heading">Covid-19</h5>
            <a href="https://www.w3schools.com/">BALE KATI ALLO</a><br>
			<a href="https://www.w3schools.com/">BALE KATI ALLO</a><br>	
			<a href="https://www.w3schools.com/">BALE KATI ALLO</a>
            <footer><a class="btn" href="pages/kleisimo_rantevou.php">BALE KATI ALLO</a></footer>
          </article>
        </li>
        <li class="one_third">
          <article><a href="#"><i class="#"></i></a>
		  <img style="width: 100%;" src="images/asteri.jpg" alt="" />
            <h5 class="heading">Εργαζόμενος</h5>
            <a href="pages/kleisimo_rantevou.php">Μέτρα Προστασίας</a><br>
			<a href="https://www.w3schools.com/">Εξ' αποστάσεως εργασία</a><br>	
			<a href="https://www.w3schools.com/">Μετακινήσεις</a>
            <footer><a class="btn" href="pages/kleisimo_rantevou.php">BALE KATI ALLO</a></footer>
          </article>
        </li>
        <li class="one_third">
          <article><a href="#"><i class="#"></i></a>
		  <img style="width: 100%;" src="images/asteri.jpg" alt="" />
            <h5 class="heading">Εργοδότης</h5>
            <a href="https://www.w3schools.com/">Διαθέσιμες θέσεις εργάσιας</a><br>
			<a href="https://www.w3schools.com/">Αντιμετώπιση κρούσματος</a><br>	
			<a href="https://www.w3schools.com/">Υποχρεώσεις εργοδότη</a>
            <footer><a class="btn" href="pages/kleisimo_rantevou.php">BALE KATI ALLO</a></footer>
          </article>
        </li>
      </ul>
    </section>
	
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<h1> <center>Ανακοινώσεις </h1>

<div class="announcements row2">
  <section id="latest" class="hoc container clear"> 
    <!-- ################################################################################################ -->
    
    <ul class="nospace group">
      <li class="one_third">
        <figure><a class="imgover" href="#"><img style="width: 100%;" src="images/giousef.jpg" alt=""></a>
          <figcaption>Porta facilisis</figcaption>
        </figure>
      </li>
      <li class="one_third">
        <figure><a class="imgover" href="#"><img style="width: 100%;" src="images/giousef.jpg" alt=""></a>
          <figcaption>Tellus lectus nec</figcaption>
        </figure>
      </li>
      <li class="one_third">
        <figure><a class="imgover" href="#"><img style="width: 100%;" src="images/giousef.jpg" alt=""></a>
          <figcaption>Pede suspendisse</figcaption>
        </figure>
      </li>
    </ul>
    <!-- ################################################################################################ -->
  </section>
  
  
  
</div>

<div class="announcements row2">
  <section id="latest" class="hoc container clear"> 
    <!-- ################################################################################################ -->
    
    <ul class="nospace group">
      <li class="one_third">
        <figure><a class="imgover" href="#"><img style="width: 100%;" src="images/giousef.jpg" alt=""></a>
          <figcaption>Porta facilisis</figcaption>
        </figure>
      </li>
      <li class="one_third">
        <figure><a class="imgover" href="#"><img style="width: 100%;" src="images/giousef.jpg" alt=""></a>
          <figcaption>Tellus lectus nec</figcaption>
        </figure>
      </li>
      <li class="one_third">
        <figure><a class="imgover" href="#"><img style="width: 100%;" src="images/giousef.jpg" alt=""></a>
          <figcaption>Pede suspendisse</figcaption>
        </figure>
      </li>
    </ul>
    <footer class="block center"><a class="btn" href="#">ΌΛΕΣ ΟΙ ΑΝΑΚΟΙΝΏΣΕΙΣ</a></footer>
    <!-- ################################################################################################ -->
  </section>
</div>


<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div >
      <section id="cta" class="hoc container clear"> 
      <!-- ################################################################################################ -->
        <ul class="nospace clear">
          <li class="one_quarter first">
            <div class="block clear"><a href="pages/dead_page.php"><i class="fas fa-phone"></i></a> <span><strong>Τηλεφωνήστε μαζίμας:</strong> +00 (111) 111 1111</span></div>
          </li>
          <li class="one_quarter">
            <div class="block clear"><a href="pages/dead_page.php"><i class="fas fa-envelope"></i></a> <span><strong>Επικοινωνήστε με e-mail:</strong> user1@gmail.com</span></div>
          </li>
          <li class="one_quarter">
            <div class="block clear"><a href="pages/dead_page.php"><i class="fas fa-clock"></i></a> <span><strong> Δευτερά - Παρασκευή:</strong> 08.00πμ - 18.00μμ</span></div>
          </li>
          <li class="one_quarter">
            <div class="block clear"><a href="pages/dead_page.php"><i class="fas fa-map-marker-alt"></i></a> <span><strong>Βρείτε μας:</strong> Οδηγιές για <a href="pages/dead_page.php">την περιοχή μας.</a></span></div>
          </li>
        </ul>
      <!-- ################################################################################################ -->
      </section>
  </div>
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a target="_blank" href="https://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><p style="display: none">Top</p><i class="fas fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>
</html>