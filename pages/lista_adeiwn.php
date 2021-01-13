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
<title>Λίστα Αδειών</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<style type="text/css">
/* DEMO ONLY */
.container .demo{text-align:center;}
.container .demo div{padding:8px 0;}
.container .demo div:nth-child(odd){color:#FFFFFF; background:#CCCCCC;}
.container .demo div:nth-child(even){color:#FFFFFF; background:#979797;}
@media screen and (max-width:900px){.container .demo div{margin-bottom:0;}}
/* DEMO ONLY */
</style>
<script type="text/javascript" src='anastoli_check.js'></script>
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
              echo '<li><a style="color: #0026ff" href="login.html?header=lista_adeiwn.php" title="Σύνδεση">Σύνδεση <i class="fas fa-sign-in-alt"></i></a></li>';
              echo '<li><a style="color: #0026ff" href="register.html?header=lista_adeiwn.php" title="Εγγραφή">Εγγραφή <i class="fas fa-edit"></i></a></li>';
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
        <li class="active"><a class="drop" href="ergazomenos.php">Εργαζόμενος</a>
          <ul>
            <li><a class="drop" href="dead_page.php">COVID-19 και Εργασία</a>
              <ul>
                <li><a href="adeia_eidikou_skopou.php"> Φόρμα για άδεια ειδικού σκοπού </a></li>
                <li><a href="dead_page.php">Μετακινήσεις και απαραίτητα έγγραφα</a></li>
              </ul>
            </li>
            <li class="active"><a href="pages/lista_adeiwn.php">Λίστα αδειών ειδικού σκοπού</a></li>
            <li><a href="dead_page.php">Εργασιακά δικαιώματα</a></li>
            <li><a href="dead_page.php">Κατάρτιση και σεμινάρια</a></li>
            <li><a href="dead_page.php">Προκυρήξεις</a></li>
          </ul>
        </li>
        <li><a class="drop" href="ergodotis.php">Εργοδότης</a>
          <ul>
            <li><a class="drop" href="dead_page.php">COVID-19 και Εργασία</a>
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
<div id="breadcrumb" class="hoc clear"> 
  <!-- ################################################################################################ -->
  <ul>
    <li><a href="../index.php">Αρχική</a></li>
    <li><a href="ergazomenos.php">Εργαζόμενος</a></li>
    <li><a >Λίστα Αδειών</a></li>
  </ul>
  <!-- ################################################################################################ -->
</div>

<?php
if(isset($_GET['status'])):
    if( $_GET['status'] == 'success'):
      echo '<script language="javascript">';
      echo 'alert("Η άδεια ειδικού σκοπού που επιλέξατε διακόπηκε.")';
      echo '</script>';
    endif;
    
    if( $_GET['status'] == 'not_user'):
      echo '<script language="javascript">';
      echo 'alert("Δεν έχετε κάνει εγγραφή στην εφαρμογή")';
      echo '</script>';
    endif;

    if( $_GET['status'] == 'not_parent'):
      echo '<script language="javascript">';
      echo 'alert("Δεν μπορείτε να επεξεργαστείτε μια άδεια ειδικού σκοπού αν δεν είστε γονέας.")';
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
        
    <?php
        require_once "../settings.php";

        $cookie_name = 'user';
        $query = "SELECT * FROM users WHERE username='$_COOKIE[$cookie_name]'";
        $result = $conn->query($query);
        $row = $result->fetch_array(MYSQLI_ASSOC);
        $parent = $row['parent'];

        if ($parent != 'yes'){
          echo '<p>Πρέπει να είστε γονέας για να έχετε πρόσβαση σε αυτήν την σελίδα.</p>';
        }else{

          
          echo '<form action="adeia_eidikou_skopou.php">';
          echo '<div id="comments">';
          echo '<input style="padding:5px; min-width:70px" type="submit" value="Δήλωση νέας άδειας ειδικού σκοπού" />';
          echo '</div>';
          echo '</form>';
          echo '<br/>';

          $cookie_name = 'user';
          $query = "SELECT * FROM users WHERE username='$_COOKIE[$cookie_name]'";
          $result = $conn->query($query);
          $row = $result->fetch_array(MYSQLI_ASSOC);
          $afm = $row['afm'];
      
          $query = "SELECT * FROM adeia_eidikou_skopou WHERE afm = '$afm' ";
          $result = $conn->query($query);
          $rows = $result->num_rows;
        
          
          if($rows == 0){
            echo '<p>Δεν έχετε δηλώσει άδεια ειδικού σκοπού μέχρι τώρα.</p>';
          }else{
            echo '<table>';
            echo '<thead>';
            echo '<tr>';
            echo '<th>Όνομα</th>';
            echo '<th>Επώνυμο</th>';
            echo '<th>E-mail</th>';
            echo '<th>ΑΦΜ</th>';
            echo '<th>Άδεια από</th>';
            echo '<th>Άδεια μέχρι</th>';
            echo '<th>Αριθμός παιδιών</th>';
            echo '<th>Βαθμίδα πρώτου παιδιού</th>';
            echo '<th>Βαθμίδα δεύτερου παιδιού</th>';
            echo '<th>Βαθμίδα τρίτου παιδιού</th>';
            echo '<th>Βαθμίδα τέταρτου παιδιού</th>';
            echo '<th>Διακοπή άδειας</th>';
            echo '</tr>';
            echo '</thead>';

            echo '<tbody>';
            for ($i = 0; $i < $rows; ++$i){
                echo '<tr>';
                $result->data_seek($i);
                $name = $result->fetch_assoc()['name'];
                $result->data_seek($i);
                $surname = $result->fetch_assoc()['surname'];
                $result->data_seek($i);
                $email = $result->fetch_assoc()['mail'];
                $result->data_seek($i);
                $afm = $result->fetch_assoc()['afm'];
                $result->data_seek($i);
                $date_start = $result->fetch_assoc()['date_start'];
                $result->data_seek($i);
                $date_end = $result->fetch_assoc()['date_end'];
                $result->data_seek($i);
                $num_of_kids = $result->fetch_assoc()['num_of_kids'];
                $result->data_seek($i);
                $first_kid_rank = $result->fetch_assoc()['first_kid_rank'];
                $result->data_seek($i);
                $second_kid_rank = $result->fetch_assoc()['second_kid_rank'];
                $result->data_seek($i);
                $third_kid_rank = $result->fetch_assoc()['third_kid_rank'];
                $result->data_seek($i);
                $fourth_kid_rank = $result->fetch_assoc()['fourth_kid_rank'];
                $result->data_seek($i);
                $id = $result->fetch_assoc()['id'];

                $date_start_split = explode('-',$date_start);
                $new_date_start = $date_start_split[2].'-'.$date_start_split[1].'-'.$date_start_split[0];

                $date_end_split = explode('-',$date_end);
                $new_date_end = $date_end_split[2].'-'.$date_end_split[1].'-'.$date_end_split[0];
        
                
                echo '<td> ' . $name .' </td>';    
                echo '<td> ' . $surname .' </td>'; 
                echo '<td> ' . $email .' </td>';    
                echo '<td> ' . $afm .' </td>'; 
                echo '<td> ' . $new_date_start .' </td>';    
                echo '<td> ' . $new_date_end .' </td>'; 
              
                if($num_of_kids == 'one' ){
                  echo '<td> 1 </td>';
                }   
                else if($num_of_kids == 'two' ){
                  echo '<td> 2 </td>';
                }   
                else if($num_of_kids == 'three' ){
                  echo '<td> 3 </td>';
                }
                else{
                  echo '<td> ' . $num_of_kids .' </td>';
                }   

                if($first_kid_rank == 'nipiagwgio' ){
                  echo '<td> Νηπιαγωγείο </td>';
                }   
                if($first_kid_rank == 'dimotiko' ){
                  echo '<td> Δημοτικό </td>';
                }   
                if($first_kid_rank == 'gymnasio' ){
                  echo '<td> Γυμνάσιο </td>';
                }   
                if($first_kid_rank == 'lykeio' ){
                  echo '<td> Λύκειο </td>';
                }   
                
                
                if($second_kid_rank != 'NULL' ){
                  if($second_kid_rank == 'nipiagwgio' ){
                      echo '<td> Νηπιαγωγείο </td>';
                    }   
                    if($second_kid_rank == 'dimotiko' ){
                      echo '<td> Δημοτικό </td>';
                    }   
                    if($second_kid_rank == 'gymnasio' ){
                      echo '<td> Γυμνάσιο </td>';
                    }   
                    if($second_kid_rank == 'lykeio' ){
                      echo '<td> Λύκειο </td>';
                    }   
                }else{
                  echo '<td> - </td>';    
                }

                if($third_kid_rank != 'NULL' ){
                  if($third_kid_rank == 'nipiagwgio' ){
                      echo '<td> Νηπιαγωγείο </td>';
                    }   
                    if($third_kid_rank == 'dimotiko' ){
                      echo '<td> Δημοτικό </td>';
                    }   
                    if($third_kid_rank == 'gymnasio' ){
                      echo '<td> Γυμνάσιο </td>';
                    }   
                    if($third_kid_rank == 'lykeio' ){
                      echo '<td> Λύκειο </td>';
                    }   
                }else{
                  echo '<td> - </td>';    
                }

                if($fourth_kid_rank != 'NULL' ){
                  if($fourth_kid_rank == 'nipiagwgio' ){
                      echo '<td> Νηπιαγωγείο </td>';
                    }   
                    if($fourth_kid_rank == 'dimotiko' ){
                      echo '<td> Δημοτικό </td>';
                    }   
                    if($fourth_kid_rank == 'gymnasio' ){
                      echo '<td> Γυμνάσιο </td>';
                    }   
                    if($fourth_kid_rank == 'lykeio' ){
                      echo '<td> Λύκειο </td>';
                    }   
                }else{
                  echo '<td> - </td>';    
                }

              
                echo '<td> <form action="actions/diakopi_action.php?id=' . $id .'  " method="post">';
                echo '<div id="comments">';
                echo '<input style="padding:5px; min-width:70px" type="submit" name="diakopi" id="diakopi" value="Διακοπή άδειας" />';
                echo '</div>';
                echo '</form> </td>';
                

                echo '</tr>';
                
            }
            echo '</tbody>';
            echo '</table>';
          }
        }    
        mysqli_close($conn);
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
