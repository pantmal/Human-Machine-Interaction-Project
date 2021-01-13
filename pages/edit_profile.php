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
<title>Προφίλ Χρήστη</title>
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
<script type="text/javascript" src='../layout/scripts/edit_check.js'></script>
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
              echo '<li><a style="color: #0026ff" href="login.html?header=edit_profile.php" title="Σύνδεση">Σύνδεση <i class="fas fa-sign-in-alt"></i></a></li>';
              echo '<li><a style="color: #0026ff" href="register.html?header=edit_profile.php" title="Εγγραφή">Εγγραφή <i class="fas fa-edit"></i></a></li>';
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
        <li><a class="drop" href="ergodotis.php">Εργοδότης</a>
          <ul>
            <li ><a class="drop" href="dead_page.php">COVID-19 και Εργασία</a>
              <ul>
                <li><a href="anastoli_symvasis.php"> Φόρμα για δήλωση εξ αποστάσεως εργασίας-αναστολή σύμβασης</a></li>    
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
	
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->

    <h1 style="text-align:center">Προφίλ Χρήστη</h1>

    <div id="toc_container">
      <p class="toc_title">Περιεχόμενα</p>
      
      <li><a href="#Table1">1. Προσωπικές πληροφορίες</a></li>
      <li><a href="#Table2">2. Στοιχεία προς επεξεργασία</a></li>
      <li><a href="#Table3">3. Ιστορικό </a></li>
      
    </div> 

    <?php
      require_once "../settings.php";
      $cookie_name = 'user';
      if (isset($_COOKIE[$cookie_name])):
        $query = "SELECT * FROM users WHERE username='$_COOKIE[$cookie_name]'";
        $result = $conn->query($query);
        $row = $result->fetch_array(MYSQLI_ASSOC);
        $username = $row['username'];
        $password = $row['password'];
        $email = $row['email'];
        $afm = $row['afm'];
        $first_name = $row['first_name'];
        $last_name = $row['last_name'];
        $parent = $row['parent'];
        $role = $row['role'];
        $tilergasia_start = $row['tilergasia_start'];
        $tilergasia_end = $row['tilergasia_end'];
        $anastoli_start = $row['anastoli_start'];
        $anastoli_end = $row['anastoli_end'];
        
        $tilergasia_start_split = explode('-',$tilergasia_start);
        $new_tilergasia_start = $tilergasia_start_split[2].'-'.$tilergasia_start_split[1].'-'.$tilergasia_start_split[0];

        $tilergasia_end_split = explode('-',$tilergasia_end);
        $new_tilergasia_end = $tilergasia_end_split[2].'-'.$tilergasia_end_split[1].'-'.$tilergasia_end_split[0];

        $anastoli_start_split = explode('-',$anastoli_start);
        $new_anastoli_start = $anastoli_start_split[2].'-'.$anastoli_start_split[1].'-'.$anastoli_start_split[0];

        $anastoli_end_split = explode('-',$anastoli_end);
        $new_anastoli_end = $anastoli_end_split[2].'-'.$anastoli_end_split[1].'-'.$anastoli_end_split[0];
      endif;

      if ($parent == 'yes'):
        $query = "SELECT * FROM adeia_eidikou_skopou WHERE afm='$afm'";
        $result = $conn->query($query);
        $adeies = $result->num_rows;
      endif;

      mysqli_close($conn);
    ?>

    <?php
      if(isset($_GET['status'])):
        if( $_GET['status'] == 'success'):
            echo '<script language="javascript">';
            echo 'alert("Οι αλλαγές σας αποθηκεύτηκαν με επιτυχία")';
            echo '</script>';
        endif;
      endif;
    ?>

    <h id="Table1"><b>1. Προσωπικές πληροφορίες </b></h>
      
      <p>Όνομα: <?php echo $first_name ?></p>
      <p>Επώνυμο: <?php echo $last_name ?> </p> 
      <p>ΑΦΜ: <?php echo $afm ?> </p> <br/>


    <h id="Table2"><b>2. Στοιχεία προς επεξεργασία </b></h> <br>
    <div id="comments">

    <form name="edit_form" action="actions/edit_action.php" onsubmit="return validateEditForm()" method="post">

    <br>
      <label for="uname">Εισάγετε νέο όνομα χρήστη αν το επιθυμείτε: <div class="tooltip"><i class="fas fa-info-circle"></i> <span class="tooltiptext">Ανανεώστε αν θέλετε το όνομα χρήστη σας.</span> </div></label> 
      <input type="text" id="uname" name="uname" value="<?php echo $username ?>" onchange="return validateEmpty(document.getElementById('uname'),document.getElementById('demo'))" > <br>
      <p style="color: darkred" id='demo'></p>
      
      <label for="email">Εισάγετε νέο e-mail αν το επιθυμείτε:  <div class="tooltip"><i class="fas fa-info-circle"></i> <span class="tooltiptext">Ανανεώστε αν θέλετε το email σας.</span> </div></label> 
      <input type="text" name="email" id="email" value="<?php echo $email ?>" size="22" onchange="return validateMail(document.getElementById('email'),document.getElementById('demo2'))" > <br>
      <p style="color: darkred" id='demo2'></p>
      
      <label for="pwd">Ανανεώστε τον κωδικό πρόσβασης σας αν το επιθυμείτε: <div class="tooltip"><i class="fas fa-info-circle"></i> <span class="tooltiptext">Ανανεώστε αν θέλετε τον κωδικό πρόσβασης σας.</span> </div></label> 
      <input type="password" id="pwd" name="pwd" > <br>

      <br>
      <input type="submit" name="submit" value="Αποθηκεύστε τις αλλαγές σας">
      
    </form>        

    <br>
    <h id="Table3"><b>3. Ιστορικό </b></h> <br/>
      
    <br/>

      <?php 

        
        if ($adeies > 0):
          echo '<li>Ως γονέας μπορείτε να μεταβείτε στην <a href="lista_adeiwn.php"> λίστα </a> των αδειών ειδικού σκοπού, για να τις επεξεργαστείτε.</li>';
        endif;

        if ($role == 'ergodotis'){
          echo '<li>Ως εργοδότης μπορείτε να μεταβείτε στην <a href="lista_ergazomenwn.php"> λίστα </a> των εργαζομένων σας.</li>';
          
        }else{
          if ($tilergasia_start != NULL){
            echo '<li>Ως εργαζόμενος είστε σε διάστημα τηλεργασίας από '. $new_tilergasia_start . ' μέχρι ' . $new_tilergasia_end . '</li>';
 
          }
          if ($anastoli_start != NULL){
            echo '<li>Ως εργαζόμενος είστε σε διάστημα αναστολής σύμβασης από '. $new_anastoli_start . ' μέχρι ' . $new_anastoli_end . '</li>';
 
          }
        }
        
      
      ?>

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