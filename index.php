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
  <a href="index.php"><img src="images/logo.jpeg" alt="Ypourgeio-Logo"></a>
  </div>
  <div id="logo" class="fl_left"> 
      <!-- ################################################################################################ -->
      <h1><a href="index.php?ref=title">Υπουργείο Εργασίας <br>και Κοινωνικών Υποθέσεων</a></h1>
      <!-- ################################################################################################ -->
    </div>
    <nav id="mainav" class="fl_right"> 
      <!-- ################################################################################################ -->
      <ul class="clear">
        <li><a class="drop" href="pages/covid_19.php">COVID-19</a>
          <ul>
            <li><a href="pages/metra_prolipsis.php">Μέτρα προστασίας στον χώρο εργασίας</a></li>
            <li><a href="pages/antimetwpisi_krousmatos.php">Αντιμετώπιση κρούσματος στον χώρο εργασίας</a></li>    
            <li><a href="pages/tilergasia_info.php">Τηλεργασία-άδεια ειδικού σκοπού-αναστολή σύμβασης</a></li>
          </ul>
        </li>
        <li><a class="drop" href="pages/ergazomenos.php">Εργαζόμενος</a>
          <ul>
            <li><a class="drop" href="pages/dead_page.php?ref=1">COVID-19 και Εργασία</a>
              <ul>
                <li><a href="pages/adeia_eidikou_skopou.php"> Φόρμα για άδεια ειδικού σκοπού </a></li>
                <li><a href="pages/dead_page.php?ref=2">Μετακινήσεις και απαραίτητα έγγραφα</a></li>
              </ul>
            </li>
            <li><a href="pages/lista_adeiwn.php">Λίστα αδειών ειδικού σκοπού</a></li>
            <li><a href="pages/dead_page.php?ref=3">Εργασιακά δικαιώματα</a></li>
            <li><a href="pages/dead_page.php?ref=4">Κατάρτιση και σεμινάρια</a></li>
            <li><a href="pages/dead_page.php?ref=5">Προκυρήξεις</a></li>
          </ul>
        </li>
        <li><a class="drop" href="pages/ergodotis.php">Εργοδότης</a>
          <ul>
            <li><a class="drop" href="pages/dead_page.php?ref=6">COVID-19 και Εργασία</a>
              <ul>
                <li><a href="pages/anastoli_symvasis.php"> Φόρμα για δήλωση εξ αποστάσεως εργασίας-αναστολή σύμβασης</a></li>    
                <li><a href="pages/dead_page.php?ref=7">Διαθέσιμες θέσεις εργασίας (COVID-19)</a></li>
              </ul>
            </li>
            <li><a href="pages/lista_ergazomenwn.php">Λίστα Εργαζομένων</a></li>
            <li><a href="pages/dead_page.php?ref=8">Υποχρεώσεις προς εργαζομένους</a></li>
            <li><a href="pages/dead_page.php?ref=9">Υποχρεώσεις προς το κράτος</a></li>
            <li><a href="pages/dead_page.php?ref=10">Απασχόληση αλλοδαπών-ανηλίκων</a></li>
          </ul>
        </li>
        <li><a class="drop" href="pages/dead_page.php?ref=11">Επικοινωνία</a>
          <ul>
            <li><a href="pages/epikoinwnia.php">Πληροφορίες για τις υπηρεσίες του Υπουργείου</a></li>
            <li><a href="pages/kleisimo_rantevou.php">Κλείσιμο Ραντεβού</a></li>
            <li><a href="pages/dead_page.php?ref=12">Αποστολή email ερωτησέων</a></li>
          </ul>
        </li>
        <li><a href="pages/dead_page.php?ref=13">Ανακοινώσεις</a></li>
      </ul>
	  </nav>
    </header>
</div>
      <!-- ################################################################################################ -->
<div>      
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
    <img style="position: relative; left: 137px; width: 1000px; height: 300px; padding: 25px" src="images/gkise.jpeg"  alt="Rantevou">
    <div class="carousel-caption">
    <a style="position: relative; top: 60px;color: #00197C" href="pages/kleisimo_rantevou.php"><p style="font-size: 120%">Κλείσιμο ραντεβού</p></a>
    </div>  
    </div>

    <div class="item">
      <img style="position: relative; left: 137px; width: 1000px; height: 300px; padding: 25px" src="images/tilergasia.jpeg" alt="Tilergasia">
      <div class="carousel-caption">
      <a style="position: relative; top: 60px; color: #00197C" href="pages/tilergasia_info.php"><p style="font-size: 120%">Εργασία εξ' αποστάσεως</p></a>
      </div>
    </div>
       

    <div class="item">
      <img style="position: relative; left: 137px; width: 1000px; height: 300px; padding: 25px" src="images/quarantine.jpeg" alt="Metakiniseis">
      <div class="carousel-caption">
      <a style="position: relative; top: 60px; color: #00197C" href="pages/dead_page.php"><p style="font-size: 120%">Μετακινήσεις και εργασία</p></a>
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
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <section id="introblocks">
      <ul class="nospace group">
        <li class="one_third first">
          <article>
          <a href="pages/covid_19.php?ref=quick_img"><img style="position: relative; left: width: 100px; height: 100px" src="images/ergasia-covid.jpg" alt="Covid19" /></a>
      <a href="pages/covid_19.php?ref=quick"><h2 class="heading">Covid-19</h2></a>
            <a href="pages/metra_prolipsis.php">Μέτρα προστασίας</a><br>
			      <a href="pages/antimetwpisi_krousmatos.php">Αντιμετώπιση κρούσματος</a><br>	
			      <a href="pages/tilergasia_info.php">Τηλεργασία-άδεια-ειδικού σκοπού-αναστολή σύμβαση</a>
          </article>
        </li>
        <li class="one_third">
          <article>
          <a href="pages/ergazomenos.php?ref=quick_img"><img style="position: relative; left: width: 100px; height: 100px" src="images/ergazomenos.png" alt="Ergazomenos" /></a>
      <a href="pages/ergazomenos.php?ref=quick"><h3 class="heading">Εργαζόμενος</h3></a>
            <a href="pages/adeia_eidikou_skopou.php">Άδεια ειδικού σκοπού</a><br>
            <a href="pages/lista_adeiwn.php">Λίστα αδειών ειδικού σκοπού</a><br>	
			      <a href="pages/dead_page.php">Μετακινήσεις και απαραίτητα έγγραφα</a><br>	
          </article>
        </li>
        <li class="one_third">
          <article> 
		      <a href="pages/ergodotis.php?ref=quick_img"><img style="position: relative; left: width: 100px; height: 100px" src="images/ergodotis.png" alt="Ergodotis" /></a>
            <a href="pages/ergodotis.php?ref=quick"><h3 class="heading">Εργοδότης</h3></a>
            <a href="pages/anastoli_symvasis.php">Φόρμα για δήλωση εξ αποστάσεως εργασίας-αναστολή σύμβασης</a><br>
			      <a href="pages/lista_ergazomenwn.php">Λίστα Εργαζομένων</a><br>	
			      <a href="pages/dead_page.php">Υποχρεώσεις προς εργαζομένους</a>
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

<h1> <center><b>Ανακοινώσεις</b> </h1>

<div class="announcements row2">
  <section id="latest" class="hoc container clear"> 
    <!-- ################################################################################################ -->
    
    <ul class="nospace group">
      <li class="one_third">
      <div style="border: 1px solid darkblue; padding: 10px; padding-bottom:10px">
        <figure ><a class="imgover" href="pages/dead_page.php?anak=1"><img style=" width: 100%; " src="images/anakoinosi.jpg" alt="Anakoinwsi"></a>
          <figcaption><a style="color:blue" href="pages/dead_page.php?anak=2">Παράταση της προθεσμίας καταβολής φορολογικών οφειλών.</a></figcaption>
            <figcaption style="color:black">Η Κυβέρνηση προχωράει σε ένα ουσιαστικό μέτρο ελάφρυνσης, αλλά και διευκόλυνσης, πολιτών και επιχειρήσεων που έχουν υποστεί τις αρνητικές συνέπειες της πανδημίας στην επαγγελματική και επιχειρηματική δραστηριότητά τους. Συγκεκριμένα, αναστέλλεται μέχρι και τις 30/04/2021.</figcaption>
        
       </figure>
       </div>
      </li>
      <li class="one_third">
      <div style="border: 1px solid darkblue; padding: 10px; padding-bottom:70px">
        <figure><a class="imgover" href="pages/dead_page.php?anak=4"><img style=" width: 100%;" src="images/anakoinosi.jpg" alt="Anakoinwsi"></a>
          <figcaption ><a style="color:blue" href="pages/dead_page.php?anak=5">Μέριμνα για τις ευπαθείς ομάδες στον ιδιωτικό τομέα.</a></figcaption>
        <figcaption style="color:black">Με την ΠΝΠ η οποία δημοσιεύτηκε στις 22/8/2020, καθορίζονται οι όροι για την τηλεργασία στον ιδιωτικό Τομέα και ιδίως τι ισχύει για τους εργαζόμενους που ανήκουν σε ευπαθείς ομάδες.</figcaption>
        
        </figure>
        </div>
      </li>
      <li class="one_third">
      <div style="border: 1px solid darkblue;padding: 10px;">
         <figure><a class="imgover" href="pages/dead_page.php?anak=7"><img style=" width: 100%;" src="images/anakoinosi.jpg" alt="Anakoinwsi"></a>
          <figcaption ><a style="color:blue" href="pages/dead_page.php?anak=8">Ρύθμιση ειδικών θεμάτων με ειδικότερους όρους και προϋποθέσεις.</a></figcaption>
          <figcaption style="color:black">Δικαιούχοι μερικής απαλλαγής από την καταβολή επαγγελματικών μισθώσεων: Οι μισθωτές επαγγελματικής μίσθωσης προς εγκατάσταση επιχειρήσεων, για τις οποίες έχουν ληφθεί ειδικά και έκτακτα μέτρα περί αναστολής ή προσωρινής απαγόρευσης λειτουργίας για προληπτικούς ή κατασταλτικούς λόγους.</figcaption>
        
        </figure>
        </div>
      </li>
    </ul>
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
            <div class="block clear"><a href="pages/dead_page.php?end=1"><i class="fas fa-phone"><h style="display: none">Tilefwno</h></i></a> <span><strong>Τηλεφωνήστε μαζί μας:</strong> +00 (111) 111 1111</span></div>
          </li>
          <li class="one_quarter">
            <div class="block clear"><a href="pages/dead_page.php?end=2"><i class="fas fa-envelope"><h style="display: none">Epikoinwnia</h></i></a> <span><strong>Επικοινωνήστε με e-mail:</strong> user1@gmail.com</span></div>
          </li>
          <li class="one_quarter">
            <div class="block clear"><a href="pages/dead_page.php?end=3"><i class="fas fa-clock"><h style="display: none">Wraria</h></i></a> <span><strong> Δευτερά - Παρασκευή:</strong> 08.00πμ - 18.00μμ</span></div>
          </li>
          <li class="one_quarter">
            <div class="block clear"><a href="pages/dead_page.php?end=4"><i class="fas fa-map-marker-alt"><h style="display: none">Topothesia</h></i></a> <span><strong>Βρείτε μας:</strong> Οδηγιές για <a style="color: lightblue" href="pages/dead_page.php">την περιοχή μας.</a></span></div>
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
    <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved</p>
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