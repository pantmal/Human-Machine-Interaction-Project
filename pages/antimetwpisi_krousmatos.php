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
<title>Αντιμετώπιση κρούσματος</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="../layout/styles/framework.css" rel="stylesheet" type="text/css" media="all">
<style type="text/css">
/* DEMO ONLY */
.container .demo{text-align:center;}
.container .demo div{padding:8px 0;}
.container .demo div:nth-child(odd){color:#FFFFFF; background:#CCCCCC;}
.container .demo div:nth-child(even){color:#FFFFFF; background:#979797;}
@media screen and (max-width:900px){.container .demo div{margin-bottom:0;}}
/* DEMO ONLY */
</style>
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
              echo '<li><a style="color: #0026ff" href="login.html?header=antimetwpisi_krousmatos.php" title="Σύνδεση">Σύνδεση <i class="fas fa-sign-in-alt"></i></a></li>';
              echo '<li><a style="color: #0026ff" href="register.html?header=antimetwpisi_krousmatos.php" title="Εγγραφή">Εγγραφή <i class="fas fa-edit"></i></a></li>';
          } else {
              echo '<li><a style="color: #0026ff" href="edit_profile.php" title="Προφίλ Χρήστη">Προφίλ Χρήστη <i class="fas fa-user"></i></a></li>';
              echo '<li><a style="color: #0026ff" href="actions/logout.php" title="Αποσύνδεση">Αποσύνδεση <i class="fas fa-sign-out-alt"></i></a></li>';
          }
        ?>
        
        <li id="searchform">
          <div>
            <form action="dead_page.php" method="post">
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
  <a href="../index.php"><img src="../images/logo.jpeg" alt="Ypourgeio-Logo"></a>
  </div>
  <div id="logo" class="fl_left"> 
      <!-- ################################################################################################ -->
      <h1><a href="../index.php?ref=title">Υπουργείο Εργασίας <br>και Κοινωνικών Υποθέσεων</a></h1>
      <!-- ################################################################################################ -->
    </div>
    <nav id="mainav" class="fl_right"> 
      <!-- ################################################################################################ -->
      <ul class="clear">
        <li class="active"><a class="drop" href="covid_19.php">COVID-19</a>
          <ul>
            <li><a href="metra_prolipsis.php">Μέτρα προστασίας στον χώρο εργασίας</a></li>
            <li class="active"><a href="antimetwpisi_krousmatos.php">Αντιμετώπιση κρούσματος στον χώρο εργασίας</a></li>    
            <li><a href="tilergasia_info.php">Τηλεργασία-άδεια ειδικού σκοπού-αναστολή σύμβασης</a></li>
          </ul>
        </li>
        <li><a class="drop" href="ergazomenos.php">Εργαζόμενος</a>
          <ul>
            <li><a class="drop" href="dead_page.php?ref=1">COVID-19 και Εργασία</a>
              <ul>
                <li><a href="adeia_eidikou_skopou.php"> Φόρμα για άδεια ειδικού σκοπού </a></li>
                <li><a href="dead_page.php?ref=2">Μετακινήσεις και απαραίτητα έγγραφα</a></li>
              </ul>
            </li>
            <li><a href="lista_adeiwn.php">Λίστα αδειών ειδικού σκοπού</a></li>
            <li><a href="dead_page.php?ref=3">Εργασιακά δικαιώματα</a></li>
            <li><a href="dead_page.php?ref=4">Κατάρτιση και σεμινάρια</a></li>
            <li><a href="dead_page.php?ref=5">Προκυρήξεις</a></li>
          </ul>
        </li>
        <li><a class="drop" href="ergodotis.php">Εργοδότης</a>
          <ul>
            <li ><a class="drop" href="dead_page.php?ref=6">COVID-19 και Εργασία</a>
              <ul>
                <li><a href="anastoli_symvasis.php"> Φόρμα για δήλωση εξ αποστάσεως εργασίας-αναστολή σύμβασης</a></li>    
                <li><a href="dead_page.php?ref=7">Διαθέσιμες θέσεις εργασίας (COVID-19)</a></li>
              </ul>
            </li>
            <li><a href="lista_ergazomenwn.php">Λίστα Εργαζομένων</a></li>
            <li><a href="dead_page.php?ref=8">Υποχρεώσεις προς εργαζομένους</a></li>
            <li><a href="dead_page.php?ref=9">Υποχρεώσεις προς το κράτος</a></li>
            <li><a href="dead_page.php?ref=10">Απασχόληση αλλοδαπών-ανηλίκων</a></li>
          </ul>
        </li>
        <li><a class="drop" href="dead_page.php?ref=11">Επικοινωνία</a>
          <ul>
            <li><a href="epikoinwnia.php">Πληροφορίες για τις υπηρεσίες του Υπουργείου</a></li>
            <li><a href="kleisimo_rantevou.php">Κλείσιμο Ραντεβού</a></li>
            <li><a href="dead_page.php?ref=12">Αποστολή email ερωτησέων</a></li>
          </ul>
        </li>
        <li><a href="dead_page.php?ref=13">Ανακοινώσεις</a></li>
      </ul>
	  </nav>
	  </header>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<div id="breadcrumb" class="hoc clear"> 
  <!-- ################################################################################################ -->
  <ul>
    <li><a href="../index.php">Αρχική</a></li>
    <li><a href="covid_19.php">COVID-19</a></li>
    <li><a >Αντιμετώπιση κρούσματος</a></li>
  </ul>
  <!-- ################################################################################################ -->
</div>

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div id="toc_container">
      <p class="toc_title">Περιεχόμενα</p>
      
      <li><a href="#Table1">1. Διαχείριση περιστατικών στον χώρο εργασίας</a></li>
      
      <li><a href="#Table2">2. Πιθανά σενάρια και αντίστοιχες δράσεις από τους εργαζομένους</a>
        <ul>
          <li><a href="#Table2.1">2.1 Παρουσίαση σύμπτωματος</a></li>
          <li><a href="#Table2.2">2.2 Παρουσίαση σύμπτωματος με ιστορικό στενής επαφής </a></li>
          <li><a href="#Table2.3">2.3 Απουσία σύμπτωματος αλλά με ιστορικό στενής επαφής </a></li>
          <li><a href="#Table2.4">2.4 Απουσία σύμπτωματος αλλά με ιστορικό περιστασιακής επαφής </a></li>
        </ul>
      </li>
    
      <li><a href="#Table3">3. Επιπλέον σύνδεσμοι </a></li>
      
    </div>


    <h1 id="Table1"><b>1.</b> Διαχείριση περιστατικών στον χώρο εργασίας</h1>
    <p>Συμβουλευτείτε τον παρακάτω σύνδεσμο (link) του ΕΟΔΥ, σχετικά με τα είδη των κρουσμάτων και τα είδη των επαφών.</p>
    <ul>
    <li> υπάρχουν 3 είδη κρούσματος (ενδεχόμενο - πιθανό - επιβεβαιωμένο) και </li>
    <li> 2 είδη επαφών (στενή υψηλού κινδύνου - απλή χαμηλού κινδύνου) </li>
    </ul>
    <p>Περισσότερες πληροφορίες:
    <a href="https://eody.gov.gr/orismoi-kroysmatos-covid-19-kai-epafon-kroysmatos-covid-19/">https://eody.gov.gr/orismoi-kroysmatos-covid-19-kai-epafon-kroysmatos-covid-19/</a> 
    </p>

    <h1 id="Table2"><b>2.</b> Πιθανά σενάρια και αντίστοιχες δράσεις από τους εργαζομένους</h1>
    
    <h2 id="Table2.1"> <b>2.1</b> Παρουσίαση σύμπτωματος </h2>
    <p> Αν ο εργαζόμενος παρουσιάσει συμπτωματολογία ίωσης (πυρετό, βήχα, δυσκολία στην αναπνοή, 
        αγευσία ή ανοσμία, πονοκέφαλο, ρίγος, μυαλγίες, καταβολή, έμετο ή διάρροια)
        <b>τότε δεν έρχεται στην εργασία του, μένει στο σπίτι του,</b> επικοινωνεί με τον
        θεράποντα ιατρό του και παραμένει εκτός εργασίας για όσο χρονικό διάστημα
        απαιτηθεί, προσκομίζοντας ιατρική βεβαίωση ή άδεια απουσίας λόγω ασθενείας
        από τον ασφαλιστικό του φορέα.
    </p>
    
    <h2 id="Table2.2"> <b>2.2 </b> Παρουσίαση σύμπτωματος με ιστορικό στενής επαφής</h2>
    <p> Αν ο εργαζόμενος παρουσιάσει συμπτωματολογία ίωσης όπως παραπάνω, <b>και
        έχει ιστορικό στενής επαφής</b> (= έκθεση υψηλού κινδύνου, < 1,5 μέτρα και > 15
        min) με επιβεβαιωμένο κρούσμα ιού SARS-CoV-2, τις προηγούμενες 14 μέρες
        <b>τότε δεν έρχεται στην εργασία του, μένει στο σπίτι του,</b> επικοινωνεί με
        <ol>
          <li>τον θεράποντα ιατρό του,</li>
          <li>με τον ΕΟΔΥ (τηλ. 1135 για λήψη οδηγιών),</li>
          <li>με τον Προϊστάμενο του και μέσω αυτού με την Εταιρεία</li>
          <li>υποβάλλεται σε τεστ ανίχνευσης του ιού</li>
        </ol> 
    </p>
    
    <h2 id="Table2.3"> <b>2.3</b> Απουσία σύμπτωματος αλλά με ιστορικό στενής επαφής </h2>
    <p> Αν εργαζόμενος δεν έχει κανένα σύμπτωμα, <b> αλλά
        έχει ιστορικό στενής επαφής</b> (= έκθεση υψηλού κινδύνου, < 1,5 μέτρα και > 15
        min) με ύποπτο ή επιβεβαιωμένο κρούσμα ιού SARS-CoV-2 (π.χ. μέλος της
        οικογένειας του, συνοδηγός σε αυτοκίνητο),
        <b>τότε δεν έρχεται στην εργασία του, μένει στο σπίτι του,</b> επικοινωνεί με
        <ol>
          <li>τον θεράποντα ιατρό του,</li>
          <li>με τον ΕΟΔΥ (τηλ. 1135 για λήψη οδηγιών),</li>
          <li>με τον Προϊστάμενο του και μέσω αυτού με την Εταιρεία</li>
          <li>υποβάλλεται σε τεστ ανίχνευσης του ιού</li>
        </ol> 
    </p>

    <h2 id="Table2.4"> <b>2.4</b> Απουσία σύμπτωματος αλλά με ιστορικό περιστασιακής επαφής </h2> 
    <p> Αν εργαζόμενος δεν έχει κανένα σύμπτωμα
        <b>αλλά έχει ιστορικό απλής περιστασιακής επαφής </b> (= έκθεση χαμηλού κινδύνου, >1,5
        μέτρα και < 15 min) με ύποπτο ή επιβεβαιωμένο κρούσμα ιού SARS-CoV-2
        <b>τότε έρχεται</b> μεν στην εργασία του, παρακολουθώντας στενά τον εαυτό του για πιθανά
        συμπτώματα, ακολουθώντας πιστά τις οδηγίες ατομικής υγιεινής.
    </p>

    <h1 id="Table3"><b>3.</b> Επιπλέον σύνδεσμοι </h1>
    <p> Όλα τα παραπάνω υπόκεινται σε αλλαγές σύμφωνα με τις οδηγίες των: </p>
    <p> Εθνικός Οργανισμός Δημόσιας Υγείας <a href="https://eody.gov.gr"> https://eody.gov.gr </a> </p>
    <p> Ευρωπαικό Κέντρο Πρόληψης Νοσημάτων <a href="https://ecdc.europa.eu"> https://ecdc.europa.eu </a> </p>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
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
            <div class="block clear"><a href="dead_page.php?end=1"><i class="fas fa-phone"><h style="display: none">Tilefwno</h></i></a> <span><strong>Τηλεφωνήστε μαζί μας:</strong> +00 (111) 111 1111</span></div>
          </li>
          <li class="one_quarter">
            <div class="block clear"><a href="dead_page.php?end=2"><i class="fas fa-envelope"><h style="display: none">Epikoinwnia</h></i></a> <span><strong>Επικοινωνήστε με e-mail:</strong> user1@gmail.com</span></div>
          </li>
          <li class="one_quarter">
            <div class="block clear"><a href="dead_page.php?end=3"><i class="fas fa-clock"><h style="display: none">Wraria</h></i></a> <span><strong> Δευτερά - Παρασκευή:</strong> 08.00πμ - 18.00μμ</span></div>
          </li>
          <li class="one_quarter">
            <div class="block clear"><a href="dead_page.php?end=4"><i class="fas fa-map-marker-alt"><h style="display: none">Topothesia</h></i></a> <span><strong>Βρείτε μας:</strong> Οδηγιές για <a style="color: lightblue" href="dead_page.php">την περιοχή μας.</a></span></div>
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
    <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved </p>
    <p class="fl_right">Template by <a target="_blank" href="https://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><p style="display: none">Top</p><i class="fas fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="../layout/scripts/jquery.min.js"></script>
<script src="../layout/scripts/jquery.backtotop.js"></script>
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>