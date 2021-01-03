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
    <div class="fl_left"> 
      <!-- ################################################################################################ -->
      <ul class="nospace">
        <li><i class="fas fa-phone rgtspace-5"></i> +00 (123) 456 7890</li>
        <li><i class="far fa-envelope rgtspace-5"></i> info@domain.com</li>
      </ul>
      <!-- ################################################################################################ -->
    </div>
    <div class="fl_right"> 
      <!-- ################################################################################################ -->
      <ul class="nospace">
        <li><a href="index.html"><i class="fas fa-home"></i></a></li>
        <li><a href="#" title="Help Centre"><i class="far fa-life-ring"></i></a></li>
        <li><a href="#" title="Login"><i class="fas fa-sign-in-alt"></i></a></li>
        <li><a href="#" title="Sign Up"><i class="fas fa-edit"></i></a></li>
        <li id="searchform">
          <div>
            <form action="pages/dead_page.php" method="post">
              <fieldset>
                <legend>Quick Search:</legend>
                <input type="text" placeholder="Enter search term&hellip;">
                <button type="submit"><i class="fas fa-search"></i></button>
              </fieldset>
            </form>
          </div>
        </li>
      </ul>
      <!-- ################################################################################################ -->
    </div>
  </div>
</div>


<?php
$cookie_name = 'user';
if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie is not set! <br/>";
    echo '<a href="pages/login.html?header=index.php" ><span>Login</span></a>/</li>';
    echo '<a href="pages/register.html?header=index.php"><span>Register</span></a></li>';
} else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name] . '<br/>';
    echo '<a href="pages/edit_profile.php"><span>Edit Profile</span></a>/</li>';
    echo '<a href="pages/actions/logout.php"><span>Logout</span></a></li>';
}
?>

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="hoc clear">
    <div id="logo" class="fl_left"> 
      <!-- ################################################################################################ -->
      <h1><a href="index.html">Υπουργείο Εργασίας</a></h1>
      <!-- ################################################################################################ -->
    </div>
    <nav id="mainav" class="fl_right"> 
      <!-- ################################################################################################ -->
      <ul class="clear">
        <li class="active"><a href="index.html">Αρχική</a></li>
        <!--<li><a class="drop" href="#">Pages</a>
          <ul>
            <li><a href="pages/gallery.html">Gallery</a></li>
            <li><a href="pages/full-width.html">Full Width</a></li>
            <li><a href="pages/sidebar-left.html">Sidebar Left</a></li>
            <li><a href="pages/sidebar-right.html">Sidebar Right</a></li>
            <li><a href="pages/basic-grid.html">Basic Grid</a></li>
            <li><a href="pages/font-icons.html">Font Icons</a></li>
          </ul>
        </li>
        -->
        <li><a href="#">COVID-19</a></li>
        <li><a class="drop" href="#">Εργαζόμενος</a>
          <ul>
            <li><a class="drop" href="#">COVID-19 και Εργασία</a>
              <ul>
                <li><a href="pages/prev-measures.html">Μέτρα προστασίας στον χώρο εργασίας</a></li>
                <li><a href="pages/case-handling.html">Αντιμετώπιση κρούσματος στον χώρο εργασίας</a></li>
                <li><a href="#">Μετακινήσεις και απαραίτητα έγγραφα</a></li>
                <li><a href="pages/tilergasia_anastolh_symvashs_adeia_skopou.html">Τηλεργασία-άδεια-ειδικού σκοπού-αναστολή σύμβαση</a></li>
                <li><a href="#">Καρτέλα εργαζομένου</a></li>
              </ul>
            </li>
            <li><a href="#">Εργασιακα Δικαιώματα</a></li>
            <li><a href="#">Κατάρτιση και σεμινάρια</a></li>
            <li><a href="#">Προκυρήξεις</a></li>
          </ul>
        </li>
        <li><a class="drop" href="#">Εργοδότης</a>
          <ul>
            <li><a class="drop" href="#">COVID-19 και Εργασία</a>
              <ul>
                <li><a href="#">Διαθέσιμες θέσεις εργασίας (COVID-19)</a></li>
                <li><a href="#">Εργασία εξ αποστάσεως-αναστολή σύμβασης</a></li>
                <li><a href="pages/prev-measures.html">Μέτρα προστασίας COVID-19</a></li>
                <li><a href="pages/case-handling.html">Αντιμετώπιση κρούσματος</a></li>
              </ul>
            </li>
            <li><a href="#">Υποχρεώσεις προς εργαζομένους</a></li>
            <li><a class="drop" href="#">Υποχρεώσεις προς το κράτος</a>
              <ul>
                <li><a href="#">Έκπτωση ασφαλιστικών εισφορών</a></li>  
                <li><a href="#">Φόροι</a></li>  
                <li><a href="#">Δήλωση εισόδων-εξόδων</a></li>
                <li><a href="#">Δήλωση εργαζομένων</a></li>
              </ul>
            </li>
            <li><a href="#">Απασχόληση αλλοδαπων-ανηλίκων</a></li>
          </ul>
        </li>
        <li><a class="drop" href="#">Επικοινωία</a>
          <ul>
            <li><a href="pages/epikoinwnia.html">Πληροφορίες για τις υπερησίες του Υπουργείου</a></li>
            <li><a href="#">Αποστολή emai ερωτησέων</a></li>
            <li><a href="#">Τηλεφωνική επικοινωνία με υπάλληλο</a></li>
            <li><a href="#">Χάρτης συμβεβλημένων υπηρεσιών</a></li>
          </ul>
        </li>
        <li><a class="drop" href="#">Ανακοινώσεις</a>
          <ul>
            <li><a href="#">Επιλογή 1 (MUST CHANGE)</a></li>
            <li><a href="#">Επιλογή 2 (MUST CHANGE)</a></li>
          </ul>
        </li>
        <!-- <li><a class="drop" href="#">Dropdown</a>
          <ul>
            <li><a href="#">Level 2</a></li>
            <li><a class="drop" href="#">Level 2 + Drop</a>
              <ul>
                <li><a href="#">Level 3</a></li>
                <li><a href="#">Level 3</a></li>
                <li><a href="#">Level 3</a></li>
              </ul>
            </li>
            <li><a href="#">Level 2</a></li>
          </ul>
        </li> -->
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
      <img src="giousef.jpg" alt="Chania">
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>LA is always so much fun!</p>
      </div>
    </div>

    <div class="item">
      <img src="covid.jpg" alt="Chicago">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>
    </div>

    <div class="item">
      <img src="asteri.jpg" alt="New York">
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
        <h6 class="heading">Γρήγορη Πρόσβαση</h6>
      </div>
      <ul class="nospace group">
        <li class="one_third first">
          <article><a href="#"><i class="#"></i></a>
		  <img src="asteri.jpg" alt="" />
            <h6 class="heading">Covid-19</h6>
            <a href="https://www.w3schools.com/">BALE KATI ALLO</a><br>
			<a href="https://www.w3schools.com/">BALE KATI ALLO</a><br>	
			<a href="https://www.w3schools.com/">BALE KATI ALLO</a>
            <footer><a class="btn" href="pages/kleisimo_rantevou.php">BALE KATI ALLO</a></footer>
          </article>
        </li>
        <li class="one_third">
          <article><a href="#"><i class="#"></i></a>
		  <img src="asteri.jpg" alt="" />
            <h6 class="heading">Εργαζόμενος</h6>
            <a href="pages/kleisimo_rantevou.php">Μέτρα Προστασίας</a><br>
			<a href="https://www.w3schools.com/">Εξ' αποστάσεως εργασία</a><br>	
			<a href="https://www.w3schools.com/">Μετακινήσεις</a>
            <footer><a class="btn" href="pages/kleisimo_rantevou.php">BALE KATI ALLO</a></footer>
          </article>
        </li>
        <li class="one_third">
          <article><a href="#"><i class="#"></i></a>
		  <img src="asteri.jpg" alt="" />
            <h6 class="heading">Εργοδότης</h6>
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
        <figure><a class="imgover" href="#"><img src="giousef.jpg" alt=""></a>
          <figcaption>Porta facilisis</figcaption>
        </figure>
      </li>
      <li class="one_third">
        <figure><a class="imgover" href="#"><img src="giousef.jpg" alt=""></a>
          <figcaption>Tellus lectus nec</figcaption>
        </figure>
      </li>
      <li class="one_third">
        <figure><a class="imgover" href="#"><img src="giousef.jpg" alt=""></a>
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
        <figure><a class="imgover" href="#"><img src="giousef.jpg" alt=""></a>
          <figcaption>Porta facilisis</figcaption>
        </figure>
      </li>
      <li class="one_third">
        <figure><a class="imgover" href="#"><img src="giousef.jpg" alt=""></a>
          <figcaption>Tellus lectus nec</figcaption>
        </figure>
      </li>
      <li class="one_third">
        <figure><a class="imgover" href="#"><img src="giousef.jpg" alt=""></a>
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
<div class="wrapper row3">
  <section id="cta" class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <ul class="nospace clear">
      <li class="one_quarter first">
        <div class="block clear"><a href="#"><i class="fas fa-phone"></i></a> <span><strong>Give us a call:</strong> +00 (123) 456 7890</span></div>
      </li>
      <li class="one_quarter">
        <div class="block clear"><a href="#"><i class="fas fa-envelope"></i></a> <span><strong>Send us a mail:</strong> support@domain.com</span></div>
      </li>
      <li class="one_quarter">
        <div class="block clear"><a href="#"><i class="fas fa-clock"></i></a> <span><strong> Monday - Saturday:</strong> 08.00am - 18.00pm</span></div>
      </li>
      <li class="one_quarter">
        <div class="block clear"><a href="#"><i class="fas fa-map-marker-alt"></i></a> <span><strong>Come visit us:</strong> Directions to <a href="#">our location</a></span></div>
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
    <div class="one_quarter first">
      <h6 class="heading">A convallis ultricies</h6>
      <p>Luctus et dolor nulla facilisi fusce sit amet magna non odio molestie egestas nullam id odio.</p>
      <p class="btmspace-30">Quis risus placerat aliquam nunc nec nunc morbi vel nisi sit amet orci adipiscing pharetra [<a href="#"><i class="fas fa-arrow-right"></i></a>]</p>
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="#"><i class="fab fa-facebook"></i></a></li>
        <li><a class="faicon-google-plus" href="#"><i class="fab fa-google-plus-g"></i></a></li>
        <li><a class="faicon-linkedin" href="#"><i class="fab fa-linkedin"></i></a></li>
        <li><a class="faicon-twitter" href="#"><i class="fab fa-twitter"></i></a></li>
        <li><a class="faicon-vk" href="#"><i class="fab fa-vk"></i></a></li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="heading">Mauris lorem curabitur</h6>
      <ul class="nospace linklist">
        <li>
          <article>
            <p class="nospace btmspace-10"><a href="#">Semper lacus id nibh etiam iaculis viverra pede proin laoreet dolor ut nunc&hellip;</a></p>
            <time class="block font-xs" datetime="2045-04-06">Friday, 6<sup>th</sup> April 2045</time>
          </article>
        </li>
        <li>
          <article>
            <p class="nospace btmspace-10"><a href="#">Donec turpis aliquam sapien est sodales id elementum at molestie in felis class&hellip;</a></p>
            <time class="block font-xs" datetime="2045-04-05">Thursday, 5<sup>th</sup> April 2045</time>
          </article>
        </li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="heading">Eget mauris egestas</h6>
      <ul class="nospace linklist">
        <li><a href="#">Aptent taciti sociosqu ad</a></li>
        <li><a href="#">Litora torquent per conubia</a></li>
        <li><a href="#">Nostra per inceptos himenaeos</a></li>
        <li><a href="#">Nam semper ipsum et purus</a></li>
        <li><a href="#">Suspendisse sed quam aliquam</a></li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="heading">Volutpat quisque mauris</h6>
      <p class="nospace btmspace-15">Viverra etiam dictum euismod lectus vestibulum tincidunt erat vel molestie.</p>
      <form method="post" action="#">
        <fieldset>
          <legend>Newsletter:</legend>
          <input class="btmspace-15" type="text" value="" placeholder="Name">
          <input class="btmspace-15" type="text" value="" placeholder="Email">
          <button type="submit" value="submit">Submit</button>
        </fieldset>
      </form>
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
<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>
</html>