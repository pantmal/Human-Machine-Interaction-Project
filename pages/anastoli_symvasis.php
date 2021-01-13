<!DOCTYPE html>
<!--
Template Name: Trealop
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Copyright: OS-Templates.com
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<!--CHANGE HERE-->
<title>Αναστολή Σύμβασης</title>
<!--CHANGE HERE-->
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
<script type="text/javascript" src='../layout/scripts/anastoli_check.js'></script>
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
              echo '<li><a style="color: #0026ff" href="login.html?header=anastoli_symvasis.php" title="Σύνδεση">Σύνδεση <i class="fas fa-sign-in-alt"></i></a></li>';
              echo '<li><a style="color: #0026ff" href="register.html?header=anastoli_symvasis.php" title="Εγγραφή">Εγγραφή <i class="fas fa-edit"></i></a></li>';
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
  <a href="../index.php"><img src="../images/logo.jpeg"></a>
  </div>
  <div id="logo" class="fl_left"> 
      <!-- ################################################################################################ -->
      <h1><a href="../index.php">Υπουργείο Εργασίας <br>και Κοινωνικών Υποθέσεων</a></h1>
      <!-- ################################################################################################ -->
    </div>
    <nav id="mainav" class="fl_right"> 
      <!-- ################################################################################################ -->
      <ul class="clear">
        <li><a class="drop" href="covid_19.php">COVID-19</a>
          <ul>
            <li><a href="metra_prolipsis.php">Μέτρα προστασίας στον χώρο εργασίας</a></li>
            <li><a href="antimetwpisi_krousmatos.php">Αντιμετώπιση κρούσματος στον χώρο εργασίας</a></li>    
            <li><a href="tilergasia_info.php">Τηλεργασία-άδεια-ειδικού σκοπού-αναστολή σύμβαση</a></li>
          </ul>
        </li>
        <li><a class="drop" href="ergazomenos.php">Εργαζόμενος</a>
          <ul>
            <li><a class="drop" href="dead_page.php">COVID-19 και Εργασία</a>
              <ul>
                <li><a href="adeia_eidikou_skopou.php"> Φόρμα για άδεια ειδικού σκοπού </a></li>
                <li><a href="dead_page.php">Μετακινήσεις και απαραίτητα έγγραφα</a></li>
              </ul>
            </li>
            <li><a href="lista_adeiwn.php">Λίστα αδειών ειδικού σκοπού</a></li>
            <li><a href="dead_page.php">Εργασιακά δικαιώματα</a></li>
            <li><a href="dead_page.php">Κατάρτιση και σεμινάρια</a></li>
            <li><a href="dead_page.php">Προκυρήξεις</a></li>
          </ul>
        </li>
        <li class="active"><a class="drop" href="ergodotis.php">Εργοδότης</a>
          <ul>
            <li class="active"><a class="drop" href="dead_page.php">COVID-19 και Εργασία</a>
              <ul>
                <li class="active"><a href="anastoli_symvasis.php"> Φόρμα για δήλωση εξ αποστάσεως εργασίας-αναστολή σύμβασης</a></li>    
                <li><a href="dead_page.php">Διαθέσιμες θέσεις εργασίας (COVID-19)</a></li>
              </ul>
            </li>
            <li><a href="lista_ergazomenwn.php">Λίστα Εργαζομένων</a></li>
            <li><a href="dead_page.php">Υποχρεώσεις προς εργαζομένους</a></li>
            <li><a href="dead_page.php">Υποχρεώσεις προς το κράτος</a></li>
            <li><a href="dead_page.php">Απασχόληση αλλοδαπων-ανηλίκων</a></li>
          </ul>
        </li>
        <li><a class="drop" href="dead_page.php">Επικοινωνία</a>
          <ul>
            <li><a href="epikoinwnia.php">Πληροφορίες για τις υπερησίες του Υπουργείου</a></li>
            <li><a href="kleisimo_rantevou.php">Κλεισιμό Ραντεβού</a></li>
            <li><a href="dead_page.php">Αποστολή emai ερωτησέων</a></li>
          </ul>
        </li>
        <li><a href="dead_page.php">Ανακοινώσεις</a></li>
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
    <li><a href="ergodotis.php">Εργοδότης</a></li>
    <li><a href="dead_page.php">COVID-19 και Εργασία</a></li>
    <li><a >Αναστολή Σύμβασης</a></li>
  </ul>
  <!-- ################################################################################################ -->
</div>


<?php
if(isset($_GET['status'])):
    if( $_GET['status'] == 'success'):
        echo '<script language="javascript">';
        echo 'alert("Επιτυχής δήλωση")';
        echo '</script>';
    endif;
    
    if( $_GET['status'] == 'not_user'):
      echo '<script language="javascript">';
      echo 'alert("Δεν έχετε κάνει εγγραφή στην εφαρμογή")';
      echo '</script>';
    endif;

    if( $_GET['status'] == 'not_ergodotis'):
      echo '<script language="javascript">';
      echo 'alert("Δεν μπορείτε να κάνετε δήλωση για αναστολή σύμβασης ή τηλεργασίας αν δεν είστε εργοδοτης")';
      echo '</script>';
    endif;
endif;
?>
	
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    
    <h1 style="text-align:center">Αίτηση αναστολής σύμβασης ή εξ' αποστάσεως εργασίας (από εργοδότη)</h1>
    
    <p>Παρακαλούμε συμπληρώστε την παρακάτω φόρμα αίτησης τηλεργασίας ή εξ' αποστάσεως εργασίας: </p>
      <!-- TAXIS???-->
    <div id="comments">
    <div style="border: 1px solid black; padding: 10px; margin-right: 400px">  
    <form action="actions/anastoli_action.php" onsubmit="return validateAnastoliForm()" method="post">
    
      <label> Τα πεδία με <span>*</span> είναι υποχρεωτικά </label> <br>  
    
      <label for="name">Όνομα Εργοδότη: <span>*</span> <div class="tooltip"><i class="fas fa-info-circle"></i> <span class="tooltiptext">Τοποθετήστε το όνομα σας.</span> </div></label>
      <input type="text" name="name" id="name" value="" size="22" onchange="return validateName(document.getElementById('name'),document.getElementById('demo'))" > <br>
      <p style="color: darkred" id='demo'></p>
        
      <label for="surname">Επώνυμο Εργοδότη: <span>*</span> <div class="tooltip"><i class="fas fa-info-circle"></i> <span class="tooltiptext">Τοποθετήστε το επώνυμο σας.</span> </div></label>
      <input type="text" name="surname" id="surname" value="" size="22" onchange="return validateName(document.getElementById('surname'),document.getElementById('demo1'))"> <br>
      <p style="color: darkred" id='demo1'></p>
            
      <label for="afm">ΑΦΜ Εργοδότη: <span>*</span> <div class="tooltip"><i class="fas fa-info-circle"></i> <span class="tooltiptext">Τοποθετήστε το ΑΦΜ σας.</span> </div></label>
      <input type="text" name="afm" id="afm" pattern="\d*" size="9" maxlength="9" onchange="return validateNum(document.getElementById('afm'),document.getElementById('demo2'))"> <br>	<!-- id="afm" size="9" maxlength="9" -->
      <p style="color: darkred" id='demo2'></p>
              
      <br/>
        
      <label for="name_worker">Όνομα Εργαζόμενου: <span>*</span> <div class="tooltip"><i class="fas fa-info-circle"></i> <span class="tooltiptext">Τοποθετήστε το όνομα του εργαζόμενου σας.</span> </div></label>
      <input type="text" name="name_worker" id="name_worker" value="" size="22"  onchange="return validateName(document.getElementById('name_worker'),document.getElementById('demo3'))"> <br>
      <p style="color: darkred" id='demo3'></p>
        
      <label for="surname_worker">Επώνυμο Εργαζόμενου: <span>*</span> <div class="tooltip"><i class="fas fa-info-circle"></i> <span class="tooltiptext">Τοποθετήστε το επώνυμο του εργαζόμενου σας.</span> </div></label>
      <input type="text" name="name_worker" id="surname_worker" value="" size="22"  onchange="return validateName(document.getElementById('surname_worker'),document.getElementById('demo4'))"> <br>
      <p style="color: darkred" id='demo4'></p>
            
      <label for="afm_worker">ΑΦΜ Εργαζόμενου: <span>*</span> <div class="tooltip"><i class="fas fa-info-circle"></i> <span class="tooltiptext">Τοποθετήστε το ΑΦΜ του εργαζόμενου σας.</span> </div></label>
      <input type="text" name="afm_worker" id="afm_worker" pattern="\d*" size="9" maxlength="9"  onchange="return validateNum(document.getElementById('afm_worker'),document.getElementById('demo5'))"> <br>
      <p style="color: darkred" id='demo5'></p>
              
      <br/>
      <label>Πείτε μας τον λόγο που στέλνετε την αίτηση: <span>*</span> <div class="tooltip"><i class="fas fa-info-circle"></i> <span class="tooltiptext">Επίλεξτε αν θέλετε τηλεργασία, αναστολή σύμβασης ή και τα δύο.</span> </div></label>
      <label for="tilergasia">Τηλεργασία</label> 
      <input type="checkbox" id="tilergasia" name="tilergasia" value="yes" onclick="show_options(document.getElementById('tilergasia'), document.getElementById('tilergasia_options'))">
      <br>
      <label for="anastoli">Αναστολή Σύμβασης</label> 
      <input type="checkbox" id="anastoli" name="anastoli" value="yes" onclick="show_options(document.getElementById('anastoli'), document.getElementById('anastoli_options'))">
      <p style="color: darkred" id='demo6'></p>
              
      <br/>
      <div id='tilergasia_options' style='display:none'>
        <label>Διάρκεια τηλεργασίας: <span>*</span> <div class="tooltip"><i class="fas fa-info-circle"></i> <span class="tooltiptext">Διαρκεία περιόδου τηλεργασίας. (Προσοχή: Πρώτα είναι ο μήνας και μετά η μέρα!)</span> </div></label>
        <label for="date_from_til">Από:<span>*</span></label>
        <input type="date" id="date_from_til" name="date_from_til" onchange="return validateEmpty(document.getElementById('date_from_til'),document.getElementById('demo7'))"> <br>
        <p style="color: darkred" id='demo7'></p>
        
        <label for="date_to_til">Εώς:<span>*</span></label>
        <input type="date" id="date_to_til" name="date_to_til" onchange="return validateEmpty(document.getElementById('date_to_til'),document.getElementById('demo8'))">
        <p style="color: darkred" id='demo8'></p>
      </div>
      
      <br/>
      <div id='anastoli_options' style='display:none'>
        <label>Διάρκεια αναστολής σύμβασης: <span>*</span> <div class="tooltip"><i class="fas fa-info-circle"></i> <span class="tooltiptext">Διαρκεία περιόδου αναστολής σύμβασης. (Προσοχή: Πρώτα είναι ο μήνας και μετά η μέρα!)</span> </div></label>
        <label for="date_from_anastoli">Από:<span>*</span></label>
        <input type="date" id="date_from_anastoli" name="date_from_anastoli" onchange="return validateEmpty(document.getElementById('date_from_anastoli'),document.getElementById('demo9'))"> <br>
        <p style="color: darkred" id='demo9'></p>
        
        <label for="date_to_anastoli">Εώς:<span>*</span></label>
        <input type="date" id="date_to_anastoli" name="date_to_anastoli" onchange="return validateEmpty(document.getElementById('date_to_anastoli'),document.getElementById('demo10'))">
        <p style="color: darkred" id='demo10'></p>
      </div>

      <br>
      <p> Mεταβείτε και στην <a href="lista_ergazomenwn.php"> λίστα εργαζομένων </a> για να δείτε όλους τους εργαζομένους σας.</p>
      <br/>
      <br/>
      <div style="text-align:center">
        <input type="submit" name="submit" value="Κατάθεση αίτησης">
        &nbsp;
        <input type="reset" name="reset" value="Καθαρισμός πεδίων">
      </div>
    </div>  
    </form>
    </div>
      
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
            <div class="block clear"><a href="dead_page.php"><i class="fas fa-phone"></i></a> <span><strong>Τηλεφωνήστε μαζί μας:</strong> +00 (111) 111 1111</span></div>
          </li>
          <li class="one_quarter">
            <div class="block clear"><a href="dead_page.php"><i class="fas fa-envelope"></i></a> <span><strong>Επικοινωνήστε με e-mail:</strong> user1@gmail.com</span></div>
          </li>
          <li class="one_quarter">
            <div class="block clear"><a href="dead_page.php"><i class="fas fa-clock"></i></a> <span><strong> Δευτερά - Παρασκευή:</strong> 08.00πμ - 18.00μμ</span></div>
          </li>
          <li class="one_quarter">
            <div class="block clear"><a href="dead_page.php"><i class="fas fa-map-marker-alt"></i></a> <span><strong>Βρείτε μας:</strong> Οδηγιές για <a href="dead_page.php">την περιοχή μας.</a></span></div>
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