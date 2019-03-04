<!doctype html>
<html lang="us">
<head>
<meta charset="utf-8">
    
<!-----------------CSS STYLES------------------>
<link rel="stylesheet" type="text/css" href="css/styles.css" >
    
<!------------MOBILE RESPONSIVENESS------------>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"> 
    
    <!---JavaScript-->
    <script type="text/javascript" src="javascript/jquery-3.2.1.mis.js"></script>
    
    <!--JQuery-->
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
      <!-- Bootstrap -->
    <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!---[if lt IE 9]---->
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <!----[endif]---->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
    
    <!-------Social Media Icons-------->

    <script src="https://use.fontawesome.com/dcc4d2ce3c.js"></script>
    
    <!------------FAVICON--------------->
    
    <link rel="icon" type="image/png" href="./images/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="./images/favicon-16x16.png" sizes="16x16" />
    
<style>
    .parallax {
    /* The image used */
    background-image: url("images/little-tykes.jpg");

    /* Set a specific height */
    min-height: 550px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
    
    .parallax2 {
    /* The image used */
    background-image: url("images/teen.jpg");

    /* Set a specific height */
    min-height: 550px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
    
      .parallax3 {
    /* The image used */
    background-image: url("images/adult.jpg");

    /* Set a specific height */
    min-height: 550px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
    
.parallax4 {
    /* The image used */
    background-image: url("images/surge-fit.jpg");

    /* Set a specific height */
    min-height: 550px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
    
</style>
    
    <script>
function openModal() {
  document.getElementById('myModal').style.display = "block";
}

function closeModal() {
  document.getElementById('myModal').style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
        
    
     <!---------- Mobile Dropdown Navigation --------->
    
     <script>
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }
         
         function opengtownDiv() {
            document.getElementById("mfClass").style.display = "none";
            document.getElementById("gtownClass").style.display = "block";
        }

        function openmfDiv() {
            document.getElementById("mfClass").style.display = "block";
            document.getElementById("gtownClass").style.display = "none";
        }
         
        function openNav() {
            document.getElementById("myNav").style.width = "100%";
        }

        /* Close */
        function closeNav() {
            document.getElementById("myNav").style.width = "0%";
        } 
         
         $(document).ready(function(){
        $("#about-overlay-dropdown").click(function(){
            $("#about-overlay-dropdown-sub-menu").slideToggle("medium");
            $("#arrow").toggleClass('rotate');
        });
     });
         
          $(document).ready(function(){
        $("#programs-overlay-dropdown").click(function(){
            $("#programs-overlay-dropdown-sub-menu").slideToggle("medium");
            $("#arrow").toggleClass('rotate');
        });
     });
         
          $(document).ready(function(){
        $("#schedule-overlay-dropdown").click(function(){
            $("#schedule-overlay-dropdown-sub-menu").slideToggle("medium");
            $("#arrow").toggleClass('rotate');
        });
     });
         
          $(document).ready(function(){
        $("#login-overlay-dropdown").click(function(){
            $("#login-overlay-dropdown-sub-menu").slideToggle("medium");
            $("#arrow").toggleClass('rotate');
        });
     });
    
         
    </script>
    

</head>
    
<!----
<img src="images/header-logo.png" alt="Surge Martial Arts" id="header-logo" />
---->
    
<div id="slide-content">
    
    <h1 id="welcome">WELCOME TO <br> 
            SURGE MARTIAL ARTS</h1>

    <div id="mission">Ignite, Excite, and Explore Your Potential</div>

</div>
    
    <div class="skdslider">
                <ul id="demo1" class="slides">
            <li>
            <img src="src/image/2.jpg" />
             <div class="slide-desc">
                    <h2 class="slider-title"></h2>
                     <!--Slider Description example--<p>Demo description here. Demo description here. Demo description here. Demo description here. Demo description here. <a class="more" href="#">more</a></p>
            ---->
              </div>
            </li>
            <li><img src="src/image/1.jpg" />
               <div class="slide-desc">
                    <h2 class="slider-title"></h2>
                 <!------ <p>Demo description here. Demo description here. Demo description here. Demo description here. Demo description here. <a class="more" href="#">more</a></p>
            ----> 
              </div>  
            </li>
            </ul>
        </div>
    
    <div id="header">
        <a href="index.php"><img src="images/logo.png" alt="Logo" width="300px" id="logo" /></a>
                <ul id="main-nav">
                    <div id="links">
                        
                        <div id="about">
                            <li><a href="">ABOUT</a></li>
                            <ul class="sub-menu">
                                <li><a href="our-instructors.php">OUR INSTRUCTORS</a></li>
                        
                            </ul>
                        </div>
                        
                             <div id="programs-dropdown">
                                <li><a href="">PROGRAMS</a></li>
                                        <ul class="sub-menu">
                                            <li><a href="little-tykes-martial-arts.php">LITTLE TYKES MARTIAL ARTS</a></li>
                                            <li><a href="youth-martial-arts.php">YOUTH MARTIAL ARTS</a></li>
                                            <li><a href="adult-teen-martial-arts.php">ADULT/TEEN MARTIAL ARTS</a></li>
                                            <li><a href="surge-fit.php">SURGE FIT KICKBOXING</a></li> 
                                        </ul>
                                     </div>
    
                                 <li><a href="surge-news.php">SURGE NEWS</a></li>
                        
                                    <div id="class-schedule-dropdown">
                                         <li><a href="#">CLASS SCHEDULE</a></li>
                                            <ul class="sub-menu">
                                                <li><a href="germantown-class-schedule.php">GERMANTOWN</a></li>
                                                <li><a href="menomonee-falls-class-schedule.php">MENOMONEE FALLS</a></li>   
                                            </ul>
                                    </div> 
                                            
                                    <div id="student-login-dropdown">
                                        <li><a href="#">STUDENT LOGIN</a></li>
                                            <ul class="sub-menu">
                                                <li><a href="https://surgemartialartsgermantown.sites.zenplanner.com/login.cfm">GERMANTOWN</a></li>
                                                <li><a href="https://surgema.sites.zenplanner.com/login.cfm">MENOMONEE FALLS</a></li>   
                                            </ul>
                                    </div> 
                                            
                                    <li><a href="index.php#locations">LOCATIONS</a></li>
                                            
                                    <li><a href="index.php#contact">CONTACT</a></li>
            
                            </div>
                
                        </ul>

        
<!---------Mobile Dropdown Navigation--------------->
        
         <div class="dropdown">
                      <button onclick="myFunction()" class="dropbtn"><img src="images/menu.png" class="icon" width="30px"></button>
                      <div id="myDropdown" class="dropdown-content">          
                          
                    <ul>
                            <div id="about-dropdown">
                                <li><a href="">ABOUT<img src="images/arrow.png" class="arrow"/></a></li>
                                    <ul class="about-dropdown">
                                        <li><a href="our-instructors.php">OUR INSTRUCTORS</a></li>

                                    </ul>
                            </div>
                        
                        <div id="programs-dropdown">
                            <li><a href="#">PROGRAMS<img src="images/arrow.png" class="arrow"/></a></li>
                              <ul class="programs-dropdown">
                                    <li><a href="little-tykes-martial-arts.php">LITTLE TYKES MARTIAL ARTS</a></li>
                                    <li><a href="youth-martial-arts.php">YOUTH MARTIAL ARTS</a></li>
                                    <li><a href="adult-teen-martial-arts.php">ADULT/TEEN MARTIAL ARTS</a></li>
                                    <li><a href="">SURGEFIT</a></li>
                              </ul>
                        </div>
                              <li><a href="surge-news.php">SURGE NEWS</a></li>
                              
                                <div id="class-schedule-dropdown">
                                      <li><a href="#">CLASS SCHEDULE <img src="images/arrow.png" class="arrow"/></a></li>
                                       <ul class="class-schedule-dropdown">
                                          <li><a href="germantown-class-schedule.php">GERMANTOWN</a></li>
                                          <li><a href="menomonee-falls-class-schedule.php">MENOMONEE FALLS</a></li>
                                      </ul>
                                    </div>
                              
                              <div id="student-login-dropdown">
                                    <li><a href="#">STUDENT LOGIN <img src="images/arrow.png" class="arrow"/></a></li>
                                       <ul class="student-login-dropdown">
                                          <li><a href="https://surgemartialartsgermantown.sites.zenplanner.com/login.cfm">GERMANTOWN</a></li>
                                          <li><a href="https://surgema.sites.zenplanner.com/login.cfm">MENOMONEE FALLS</a></li>
                                    </ul>
                              </div>
                        
                        <div id="myDropdown" onclick="myFunction()">
                              <li><a href="index.php#locations">LOCATIONS</a></li>
                        </div>
                        
                        <div id="myDropdown" onclick="myFunction()">
                              <li><a href="index.php#contact">CONTACT</a></li>
                        </div>
                        
                          </ul>
                      </div>
                </div>
        
        
<span style="font-size:30px;cursor:pointer" onclick="openNav()" id="mobile-nav">&#9776;</span>
        
             <!-- The overlay -->
<div id="myNav" class="overlay">

  <!-- Button to close the overlay navigation -->
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

  <!-- Overlay content -->
  <div class="overlay-content">
   
      
            <div id="about-overlay-dropdown"><a href="#" class="overlay-link">ABOUT <img src="images/arrow.png" id="arrow" width="20" /></a>
              <ul id="about-overlay-dropdown-sub-menu">
                 <li><a href="our-instructors.php">OUR INSTRUCTORS</a></li>
              </ul>
            </div>    

        <div id="programs-overlay-dropdown"><a href="#" class="overlay-link">PROGRAMS <img src="images/arrow.png" id="arrow" width="20" /></a>
              <ul id="programs-overlay-dropdown-sub-menu">
                  <li><a href="little-tykes-martial-arts.php">LITTLE TYKES MARTIAL ARTS</a></li>
                  <li><a href="youth-martial-arts.php">YOUTH MARTIAL ARTS</a></li>
                  <li><a href="adult-teen-martial-arts.php">ADULT/TEEN MARTIAL ARTS</a></li>
                  <li><a href="surge-fit.php">SURGE FIT KICKBOXING</a></li>
              </ul>
        </div>


        <a href="surge-news.php" class="overlay-link main-link">SURGE NEWS</a>

        <div id="schedule-overlay-dropdown"><a href="#" class="overlay-link">CLASS SCHEDULE<img src="images/arrow.png" id="arrow" width="20" /></a>
              <ul id="schedule-overlay-dropdown-sub-menu">
                    <li><a href="germantown-class-schedule.php">GERMANTOWN</a></li>
                    <li><a href="menomonee-falls-class-schedule.php">MENOMONEE FALLS</a></li>
              </ul>
        </div>

        <div id="login-overlay-dropdown"><a href="#" class="overlay-link">STUDENT LOGIN <img src="images/arrow.png" id="arrow" width="20" /></a>
              <ul id="login-overlay-dropdown-sub-menu">
                    <li><a href="https://surgemartialartsgermantown.sites.zenplanner.com/login.cfm">GERMANTOWN</a></li>
                    <li><a href="https://surgema.sites.zenplanner.com/login.cfm">MENOMONEE FALLS</a></li>
              </ul>
        </div>
      
      <a href="index.php#locations" onclick="closeNav()" class="overlay-link main-link">LOCATIONS</a>
      <a href="index.php#contact" onclick="closeNav()" class="overlay-link main-link">CONTACT</a>
      
      
    </div>
    
 </div>
        
</div>

</html>
    
    