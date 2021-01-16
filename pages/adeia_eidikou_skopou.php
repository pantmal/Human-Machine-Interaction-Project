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
<!--CHANGE HERE-->
<title>Άδεια Ειδικού Σκοπού</title>
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
<script type="text/javascript" src='../layout/scripts/adeia_eidikou_check.js'></script>
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
              echo '<li><a style="color: #0026ff" href="login.html?header=adeia_eidikou_skopou.php" title="Σύνδεση">Σύνδεση <i class="fas fa-sign-in-alt"></i></a></li>';
              echo '<li><a style="color: #0026ff" href="register.html?header=adeia_eidikou_skopou.php" title="Εγγραφή">Εγγραφή <i class="fas fa-edit"></i></a></li>';
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
        <li><a class="drop" href="covid_19.php">COVID-19</a>
          <ul>
            <li><a href="metra_prolipsis.php">Μέτρα προστασίας στον χώρο εργασίας</a></li>
            <li><a href="antimetwpisi_krousmatos.php">Αντιμετώπιση κρούσματος στον χώρο εργασίας</a></li>    
            <li><a href="tilergasia_info.php">Τηλεργασία-άδεια ειδικού σκοπού-αναστολή σύμβασης</a></li>
          </ul>
        </li>
        <li class="active"><a class="drop" href="ergazomenos.php">Εργαζόμενος</a>
          <ul>
            <li class="active"><a class="drop" href="dead_page.php?ref=1">COVID-19 και Εργασία</a>
              <ul>
                <li class="active"><a href="adeia_eidikou_skopou.php"> Φόρμα για άδεια ειδικού σκοπού </a></li>
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
            <li><a class="drop" href="dead_page.php?ref=6">COVID-19 και Εργασία</a>
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
<!-- <div class="wrapper bgded overlay gradient" >
  <div id="breadcrumb" class="hoc clear"> 
    <ul>
      <li><a href="../index.php">Αρχική</a></li>
      <li><a href="#">Εργαζόμενος</a></li>
      <li><a href="#">COVID-19 και Εργασία</a></li>
      <li><a >Άδεια Ειδικού Σκοπού</a></li>
    </ul>
  </div>
</div> -->

<div id="breadcrumb" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <ul>
      <li><a href="../index.php">Αρχική</a></li>
      <li><a href="ergazomenos.php">Εργαζόμενος</a></li>
      <li><a href="dead_page.php">COVID-19 και Εργασία</a></li>
      <li><a >Άδεια Ειδικού Σκοπού</a></li>
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

        if( $_GET['status'] == 'not_parent'):
          echo '<script language="javascript">';
          echo 'alert("Δεν μπορείτε να λάβετε την άδεια ειδικού σκοπού αν δεν είστε γονέας")';
          echo '</script>';
        endif;
    endif;
    ?>
    <h1 style="text-align:center">Άδεια Ειδικού Σκοπού</h1>
    
    <p>Παρακαλούμε συμπληρώστε την παρακάτω φόρμα αίτησης άδειας ειδικού σκοπού: </p>
    <div id="comments">
    <div style="border: 1px solid black; padding: 10px; margin-right:400px">  
    <form name="adeia_eidikou_form" action="actions/adeia_eidikou_skopou_action.php" onsubmit="return validateAdeiaEidikouForm()"  method="post">
    
      <label> Τα πεδία με <span>*</span> είναι υποχρεωτικά </label> <br>
              
      <label for="name1">Όνομα: <span>*</span> <div class="tooltip"><i class="fas fa-info-circle"></i> <span class="tooltiptext">Ελληνικοί χαρακτήρες.</span> </div></label> 
      <input type="text" name="name1" id="name1"  size="22" onchange="return validateName(document.getElementById('name1'),document.getElementById('demo'))" >
      <p style="color: darkred" id='demo'></p>
              
      <label for="surname">Επώνυμο: <span>*</span> <div class="tooltip"><i class="fas fa-info-circle"></i> <span class="tooltiptext">Ελληνικοί χαρακτήρες.</span> </div></label>
      <input type="text" name="surname" id="surname" value="" size="22" onchange="return validateName(document.getElementById('surname'),document.getElementById('demo1'))">
      <p style="color: darkred" id='demo1'></p>
            
      <label for="email">Mail: <span>*</span> <div class="tooltip"><i class="fas fa-info-circle"></i> <span class="tooltiptext">Έγκυρη διεύθυνση mail.</span> </div></label>
      <input type="text" name="email" id="email" value="" size="22" onchange="return validateMail(document.getElementById('email'),document.getElementById('demo2'))">
      <p style="color: darkred" id='demo2'></p>  
        
      <label for="afm">ΑΦΜ: <span>*</span> <div class="tooltip"><i class="fas fa-info-circle"></i> <span class="tooltiptext">Αριθμός (ακριβώς 9 χαρακτήρες).</span> </div></label>
      <input type="text" name="afm" id="afm" pattern="\d*" size="9" maxlength="9" onchange="return validateNum(document.getElementById('afm'),document.getElementById('demo3'))" >	<!-- id="afm" size="9" maxlength="9" -->
      <p style="color: darkred" id='demo3'></p>
                  
      <label for="date_from">Από:<span>*</span> <div class="tooltip"><i class="fas fa-info-circle"></i> <span class="tooltiptext"> Μήνας/Ημέρα/Έτος </span> </div></label>
      <input type="date" id="date_from" name="date_from" onchange="return validateEmpty(document.getElementById('date_from'),document.getElementById('demo4'))" >
      <p style="color: darkred" id='demo4' ></p>
      <br>  
      <label for="date_to">Εώς:<span>*</span> <div class="tooltip"><i class="fas fa-info-circle"></i> <span class="tooltiptext"> Μήνας/Ημέρα/Έτος</span> </div></label>
      <input type="date" id="date_to" name="date_to" onchange="return validateEmpty(document.getElementById('date_to'),document.getElementById('demo5'))" >
      <p style="color: darkred" id='demo5'></p>
        
        
      <label for="number_of_kids">Αριθμός Παιδιών:<span>*</span> <div class="tooltip"><i class="fas fa-info-circle"></i> <span class="tooltiptext">Επιλέξτε αριθμό παιδιών.</span> </div></label>
      <select name="number_of_kids" id="number_of_kids" size="4">
        <option value="" selected disabled hidden onclick="show_func()">Επιλέξτε</option>
        <option value="one" onclick="show_func()">Ένα(1)</option>
        <option value="two" onclick="show_func()">Δύο(2)</option>
        <option value="three" onclick="show_func()">Τρία(3)</option>
        <option value="four_or_more" onclick="show_func()">Τέσσερα και πάνω(4+)</option>
      </select>
      <p style="color: darkred" id='demo6'></p>
      
      <br>
      <div id='hidden' style="display: none;">
        <label for="kids_4">Αριθμός Παιδιών(4+): <span>*</span> <div class="tooltip"><i class="fas fa-info-circle"></i> <span class="tooltiptext">Αριθμός (4 και πάνω).</span> </div></label>
        <input type="text" name="kids_4" id="kids_4" pattern="\d*" maxlength="2" onchange="return validateHiddenInput()" >
        <p style="color: darkred" id='demo7'></p>
      </div>
      
      <br><br>
      <div id='hidden_paidi_1' style="display: none;">
        <h>Εισάγετε την βαθμίδα των παιδιών σας <div class="tooltip"><i class="fas fa-info-circle"></i> <span class="tooltiptext">Αν έχετε πάνω από 4 παιδιά, επιλέξτε για τα πρώτα τέσσερα.</span> </div></h>
        
        <label for="paidi_1">1o παιδί </label>
        <select name="paidi_1" id="paidi_1">
          <option value="" selected disabled hidden onclick="return validateEmpty(document.getElementById('paidi_1'), document.getElementById('demo8'))">Επιλέξτε</option>
          <option value="nipiagwgio" onclick="return validateEmpty(document.getElementById('paidi_1'), document.getElementById('demo8'))">Νηπειαγωγείο</option>
          <option value="dimotiko" onclick="return validateEmpty(document.getElementById('paidi_1'), document.getElementById('demo8'))">Δημοτικό</option>
          <option value="gymnasio" onclick="return validateEmpty(document.getElementById('paidi_1'), document.getElementById('demo8'))">Γυμνάσιο</option>
          <option value="lykeio" onclick="return validateEmpty(document.getElementById('paidi_1'), document.getElementById('demo8'))">Λύκειο</option>
        </select>
        <p style="color: darkred" id='demo8'></p>
      </div>
      <br>
          
      <div id='hidden_paidi_2' style="display: none;">	
        
        <label for="paidi_2">2o παιδί </label>
        <select name="paidi_2" id="paidi_2">
          <option value="" selected disabled hidden onclick="return validateEmpty(document.getElementById('paidi_2'), document.getElementById('demo9'))">Επιλέξτε</option>
          <option value="nipiagwgio" onclick="return validateEmpty(document.getElementById('paidi_2'), document.getElementById('demo9'))">Νηπειαγωγείο</option>
          <option value="dimotiko" onclick="return validateEmpty(document.getElementById('paidi_2'), document.getElementById('demo9'))">Δημοτικό</option>
          <option value="gymnasio" onclick="return validateEmpty(document.getElementById('paidi_2'), document.getElementById('demo9'))">Γυμνάσιο</option>
          <option value="lykeio" onclick="return validateEmpty(document.getElementById('paidi_2'), document.getElementById('demo9'))">Λύκειο</option>
        </select>
        <p style="color: darkred" id='demo9'></p>
      </div>
      <br>
      
      <div id='hidden_paidi_3' style="display: none;">
        
        <label for="paidi_3">3o παιδί </label>
        <select name="paidi_3" id="paidi_3">
          <option value="" selected disabled hidden onclick="return validateEmpty(document.getElementById('paidi_3'), document.getElementById('demo10'))">Επιλέξτε</option>
          <option value="nipiagwgio" onclick="return validateEmpty(document.getElementById('paidi_3'), document.getElementById('demo10'))">Νηπειαγωγείο</option>
          <option value="dimotiko" onclick="return validateEmpty(document.getElementById('paidi_3'), document.getElementById('demo10'))">Δημοτικό</option>
          <option value="gymnasio" onclick="return validateEmpty(document.getElementById('paidi_3'), document.getElementById('demo10'))">Γυμνάσιο</option>
          <option value="lykeio" onclick="return validateEmpty(document.getElementById('paidi_3'), document.getElementById('demo10'))">Λύκειο</option>
        </select>
        <p style="color: darkred" id='demo10'></p>
      </div>
      <br>
        
      <div id='hidden_paidi_4' style="display: none;">
        
        <label for="paidi_4">4o παιδί </label>
        <select name="paidi_4" id="paidi_4" >
          <option value="" selected disabled hidden onclick="return validateEmpty(document.getElementById('paidi_4'), document.getElementById('demo11'))">Επιλέξτε</option>
          <option value="nipiagwgio" onclick="return validateEmpty(document.getElementById('paidi_4'), document.getElementById('demo11'))">Νηπειαγωγείο</option>
          <option value="dimotiko" onclick="return validateEmpty(document.getElementById('paidi_4'), document.getElementById('demo11'))">Δημοτικό</option>
          <option value="gymnasio" onclick="return validateEmpty(document.getElementById('paidi_4'), document.getElementById('demo11'))">Γυμνάσιο</option>
          <option value="lykeio" onclick="return validateEmpty(document.getElementById('paidi_4'), document.getElementById('demo11'))">Λύκειο</option>
        </select>
        <p style="color: darkred" id='demo11'></p>
      </div>
              
      <p> Mεταβείτε και στην <a href="lista_adeiwn.php"> λίστα αδειών </a> για να επεξεργαστείτε τις άδειες που έχετε δηλώσει.</p>
      <br/>
      <div style="text-align:center">
        <input type="submit" name="submit" value="Κατάθεση αίτησης">
        &nbsp;
        <input style="border: solid white; text-decoration: underline;" type="reset" name="reset" value="Καθαρισμός πεδίων">
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