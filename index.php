<title>Surge Martial Arts | TaeKwonDo, Self Defense, Cardio Fitness</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
<?php
include 'includes/header.php';
?>

<script src="http://code.jquery.com/jquery.js"></script>
<script src="src/skdslider.min.js"></script>
<link href="src/skdslider.css" rel="stylesheet">
<script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery('#demo1').skdslider({delay:5000, animationSpeed: 2000,showNextPrev:true,showPlayButton:true,autoSlide:true,animationType:'fading'});
			jQuery('#demo2').skdslider({delay:5000, animationSpeed: 1000,showNextPrev:true,showPlayButton:false,autoSlide:true,animationType:'sliding'});
			jQuery('#demo3').skdslider({delay:5000, animationSpeed: 2000,showNextPrev:true,showPlayButton:true,autoSlide:true,animationType:'fading'});
			
			jQuery('#responsive').change(function(){
			  $('#responsive_wrapper').width(jQuery(this).val());
			  $(window).trigger('resize');
			});
			
		});
</script>
<style type="text/css">
body{ margin:0; padding:0;}
.demo-code{ background-color:#ffffff; border:1px solid #333333; display:block; padding:10px;}
.option-table td{ border-bottom:1px solid #eeeeee;}
</style>

 <?php
if (isset($_POST['submitted'])){
    
    require_once('sql/mysql_connect.php');
    
        $fullname = mysqli_real_escape_string($dbc, $_POST['fullname']);
        $email = mysqli_real_escape_string($dbc, $_POST['email']);
        $location = $_POST['location'];
        $classType = $_POST['classType'];
    
        $germantown1 = $location == "Germantown" && $classType == "Little Tykes Martial Arts";
        $germantown2 = $location == "Germantown" && $classType == "Youth Martial Arts";
        $germantown3 = $location == "Germantown" && $classType == "Adult/Teen Martial Arts";
        $germantown4 = $location == "Germantown" && $classType == "SurgeFit Kickboxing";
        $germantown5 = $location == "Germantown" && $classType == "Athletic & Strength Training";
        $germantown6 = $location == "Germantown" && $classType == "Yoga";
        $germantown7 = $location == "Germantown" && $classType == "P.U.L.S.E.";
        $mfalls1 = $location == "Menomonee Falls" && $classType == "Little Tykes Martial Arts";
        $mfalls2 = $location == "Menomonee Falls" && $classType == "Youth Martial Arts";
        $mfalls3 = $location == "Menomonee Falls" && $classType == "Adult/Teen Martial Arts";
        $mfalls4 = $location == "Menomonee Falls" && $classType == "SurgeFit Kickboxing";
        $redirect = 'index.php#contact';
        $email2 = mysqli_real_escape_string($dbc, $_POST['email_2']);
        $redirect2 = 'thankyou.html';
    
        //$a = rand(2,9); // this will get a number between 2 and 9
        //$b = rand(2,9); // this will also get a number between 2 and 9. You can change this according to your wish

        //$c = $a+$b;
                     
        //echo '<div id="captcha">' . $a . " + " . $b . " = " . '<input type="text" name="recaptcha" id="recaptcha" maxlength="2" />' . '</div>';

            
        // form validation
        $errors = array();
    
        if (empty($fullname)) 
            {
                echo '<script>window.location = "'. $redirect .'";</script>'; 
                $errors['fullname'] = "Full name required";
            }
        elseif (!preg_match("/^[a-zA-Z ]*$/", $fullname))
            {
                echo '<script>window.location = "'. $redirect .'";</script>'; 
                $errors['valid_fullname'] = "Valid full name required";
            }
        elseif (!filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                echo '<script>window.location = "'. $redirect .'";</script>'; 
                $errors['email'] = "Valid email required";
            }
        elseif (empty($location))
            {
                echo '<script>window.location = "'. $redirect .'";</script>'; 
                $errors['location'] = "Location required";
            }
        elseif (empty($classType))
            {
                echo '<script>window.location = "'. $redirect .'";</script>'; 
                $errors['classType'] = "Class type required";
            }
        elseif (!empty($email2)) {
                echo '<script>window.location = "'. $redirect2 .'";</script>';
        }
        else
            {
          $sql = "INSERT INTO surge (fullName, email, location, classType)
                VALUES ('$fullname', '$email', '$location', '$classType')";
            
            mysqli_query($dbc, $sql);
            
          $urlgtown = 'gtown-thankyou.php';
          $urlmf = 'mf-thankyou.php';
            
            if ($germantown1) {
                $email_to = "justin.franzen90@gmail.com";
                $subject = "Little Tykes Martial Arts Information Request";
                echo '<script>window.location = "'. $urlgtown .'";</script>'; 
            }
            elseif ($germantown2) {
                $email_to = "justin.franzen90@gmail.com";
                $subject = "Youth Martial Arts Information Request";
                echo '<script>window.location = "'. $urlgtown .'";</script>';
            }
            elseif ($germantown3) {
                $email_to = "justin.franzen90@gmail.com";
                $subject = "Adult/Teen Martial Arts Information Request";
                echo '<script>window.location = "'. $urlgtown .'";</script>';
            }
            elseif ($germantown4) {
                $email_to = "justin.franzen90@gmail.com";
                $subject = "SurgeFit Kickboxing Information Request";
                echo '<script>window.location = "'. $urlgtown .'";</script>';
            }
            elseif ($germantown5) {
                $email_to = "justin.franzen90@gmail.com";
                $subject = "Athletic & Strength Training Information Request";
                echo '<script>window.location = "'. $urlgtown .'";</script>';
            }
            elseif ($germantown6) {
                $email_to = "justin.franzen90@gmail.com";
                $subject = "Yoga Information Request";
                echo '<script>window.location = "'. $urlgtown .'";</script>';
            }
            elseif ($germantown6) {
                $email_to = "justin.franzen90@gmail.com";
                $subject = "P.U.L.S.E. Information Request";
                echo '<script>window.location = "'. $urlgtown .'";</script>';
            }
            elseif ($mfalls1) {
                $email_to = "jtfranz90@gmail.com";
                $subject = "Little Tykes Martial Arts Information Request";
                echo '<script>window.location = "'. $urlmf .'";</script>';
            }
            elseif ($mfalls2) {
                $email_to = "jtfranz90@gmail.com";
                $subject = "Youth Martial Arts Information Request";
                echo '<script>window.location = "'. $urlmf .'";</script>';
            }
            elseif ($mfalls3) {
                $email_to = "jtfranz90@gmail.com";
                $subject = "Adult/Teen Martial Arts Information Request";
                echo '<script>window.location = "'. $urlmf .'";</script>';
            }
            else {
                $email_to = "jtfranz90@gmail.com";
                $subject = "SurgeFit Kickboxing Information Request";
                echo '<script>window.location = "'. $urlmf .'";</script>';
            }
            
         $email_from = "mail.justinfranzen.com";
         $content = $fullname . " is interested in more information about the " .  $classType . " class " . " \nEmail: " . $email;
         mail($email_to, $subject, $content);

            }  
    
    //end form validation
  
}   


?>

<body>
    
<div id="main">
             
        <div id="little-tykes-martial-arts-bgimg">
                     
                            <h1 class="class-title">LITTLE TYKES MARTIAL ARTS</h1>

                            <p class="class-info">Kids (7-12yrs) have the best attention,
                            believe in themselves, and love doing their
                                best with our award-winning programs.</p>
            
                            <a href="little-tykes-martial-arts.php"><div class="bgimage-learnmore-quicklink">

                                <span>Learn More</span>

                            </div></a>
                
        </div>
    
    <img src="images/little-tykes.jpg" alt="Little Tykes Martial Arts" class="background-image" />
        
         <div class="parallax">

                        <div id="little-tykes-martial-arts">
                            <h1 class="class-title">LITTLE TYKES MARTIAL ARTS</h1>

                            <p class="class-info">Kids (7-12yrs) have the best attention,
                            believe in themselves, and love doing their
                                best with our award-winning programs.</p>

                            <a href="little-tykes-martial-arts.php"><div class="parallax-learnmore-quicklink">

                                <span>Learn More</span>

                            </div></a>
                            
                        </div>
             </div>
    
     <div id="youth-martial-arts-bgimg">
         
                    <h1 class="class-title">YOUTH MARTIAL ARTS</h1>

                    <p class="class-info">Being a teenager is challenging. They are
                    discovering who they are and dealing with
                        peer pressure in today’s challenging world.</p>
                
                    <a href="youth-martial-arts.php"><div class="bgimage-learnmore-quicklink2">

                        <span>Learn More</span>

                    </div></a>
         
    </div>
    
    <img src="images/teen.jpg" alt="Teen Martial Arts" class="background-image" />

        <div class="parallax2">
            
                <div id="youth-martial-arts">
                    
                    <h1 class="class-title">YOUTH MARTIAL ARTS</h1>

                    <p class="class-info">Being a teenager is challenging. They are
                    discovering who they are and dealing with
                        peer pressure in today’s challenging world.</p>
    
                
                <a href="youth-martial-arts.php"><div class="parallax-learnmore-quicklink2">

                    <span>Learn More</span>

                </div></a>
                    
            </div>
            
        </div>
    
    <div id="adult-teen-martial-arts-bgimg">
        
                    <h1 class="class-title">ADULT/TEEN MARTIAL ARTS</h1>

                    <p class="class-info">Feel safe, get fit, reduce stress,
                        create balance and be part of something
                        special with our simple and proven classes.</p>
                
                    <a href="adult-teen-martial-arts.php"><div class="bgimage-learnmore-quicklink">
                    
                    <span>Learn More</span>

                    </div></a>
        
    </div>
    
    <img src="images/adult.jpg" alt="Adult & Teen Martial Arts" class="background-image" />
            
            <div class="parallax3">
            
                <div id="adult-teen-martial-arts">
                    <h1 class="class-title">ADULT/TEEN MARTIAL ARTS</h1>

                    <p class="class-info">Feel safe, get fit, reduce stress,
                        create balance and be part of something
                        special with our simple and proven classes.</p>
                
                <a href="adult-teen-martial-arts.php"><div class="parallax-learnmore-quicklink">
                    
                    <span>Learn More</span>

                    </div></a>
                    
                </div>
            
            </div>
    
        <div id="surge-fit-bgimg">
        
                    <h1 class="class-title">SURGE FIT KICKBOXING</h1>

                    <p class="class-info"></p>
                
                    <a href="surge-fit.php"><div class="bgimage-learnmore-quicklink2">
                    
                    <span>Learn More</span>

                    </div></a>
        
        </div>
    
    <img src="images/surge-fit-bgimg.jpg" alt="SurgeFIT" class="background-image" />
            
            <div class="parallax4">
            
                <div id="surge-fit">
                    <h1 class="class-title">SURGE FIT KICKBOXING</h1>

                    <p class="class-info"></p>
                
                <a href="surge-fit.php"><div class="parallax-learnmore-quicklink2">
                    
                    <span>Learn More</span>

                    </div></a>
                    
                </div>
            
            </div>
    
    
    <div id="content">
        
        <div id="programs">
            
            <h2><span>Surge Fitness Programs</span></h2>
            
                <div class="row">
                    
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            
                            <div class="blurb">

                                <img src="images/kickboxing.jpg" alt="Kickboxing" class="program" />
                                <figcaption><span class="program-title">Kickboxing Fitness</span> <br> Cardio Boxing and Kickboxing. Offering personalized coaching to individuals, at any level, to help them reach their fitness goals.</figcaption>

                                <span class="learn-more"><a href="#">Learn More</a></span>
                            </div>
                        
                        </div>
                         
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

                            <div class="blurb">
                                <img src="images/strength-training.jpg" alt="Athletic & Strength Training" class="program" />
                                <figcaption><span class="program-title">Athletic &amp; Strength Training</span> <br> TRX Suspension Training. Specializing in programs for general fitness &amp; weight-loss, sport-specific training, and tactical fitness for first-responders.</figcaption>
                                
                                <span class="learn-more"><a href="#">Learn More</a></span>
                            </div>
                         
                    </div>
                    
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

                            <div class="blurb">
                                <img src="images/yoga.jpg" alt="Yoga" class="program" />
                                <figcaption><span class="program-title">Yoga</span> <br> Achieve a leaner, more flexible body and a more relaxed mind as you learn including Yoga poses, breath work and relaxation. All experience levels welcome!</figcaption>
                    
                            </div>
                        
                    </div>
                    
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

                            <div class="blurb">
                                <img src="images/pulse.jpg" alt="P.U.L.S.E." class="program" />
                                <figcaption><span class="program-title">P.U.L.S.E.</span> <br> Part of our SurgeFIT classes, P.U.L.S.E. is a fusion of cardio intervals, kickboxing and yoga.</figcaption>

                            </div>
                            
                    </div>

                </div>
        </div>
            
            <div id="locations">
            
                <h1 class="title">OUR LOCATIONS</h1>
                
                <p id="our-locations">We have two schools located in Germantown and Menomonee Falls. &nbsp;<a href="index.php#contact" class="quick-link">Contact us</a> for more information about any of the schools.</p>
            
                    <div class="row">
                
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            
                            <p class="school-info">(Click image for more information)</p>
                                <a href="germantown.php"><img src="images/germantown1.jpg" alt="Germantown" class="location" /></a>
                                <figcaption class="location-info">W188 N11927 Maple Road <br> <a href="tel:262-229-5443" class="phone">262-229-5443</a></figcaption>
                            
                        </div>
                        
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <p class="school-info">(Click image for more information)</p>
                                <a href="menomonee-falls.php"><img src="images/falls1.jpg" alt="Menomonee Falls" class="location" /></a>
                                <figcaption class="location-info">N56 W14108 Silver Spring Drive <br> <a href="tel:262-391-6306" class="phone">262-391-6306</a></figcaption>
                            
                        </div>
                    
                
                    </div>
        
        <div id="contact">
            
                <h1 class="title">BECOME A MEMBER</h1>
                <br>
                <p>We’d love to hear from you! &nbsp;Choose a location and class type and your information will be sent to the location you select. &nbsp;The class options will appear based on the location you select. </p>
                
                 <form id="myForm" action="index.php" method="post" >
                     
                    <div class="row">
                        
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <label>Name *</label>
                             <input type="text" name="fullname" col="4" placeholder="Name" value="<?php if(isset($_POST['fullname'])) echo $_POST['fullname'];?>">
                            <p class="error"><?php if(isset($errors['fullname'])) echo $errors['fullname']; ?></p>
                            <p class="error"><?php if(isset($errors['valid_fullname'])) echo $errors['valid_fullname']; ?></p>
                        </div>
                            
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">      
                            <label>Email *</label>
                            <input type="email" name="email" placeholder="Email" col="4" value="<?php if(isset($_POST['email'])) echo $_POST['email'];?>">
                             <p class="error"><?php if(isset($errors['email'])) echo $errors['email']; ?></p>
         
                            <div id="email_2">
                                <label>Email2 *</label>
                                <input type="email" name="email_2" placeholder="email_2" col="4">
                            </div>
                        </div>
                    
                         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

                    <!-----------
                
                              <label for="Location">Location *</label>
                                     <select name="location">
                                     <option selected disabled hidden style='display: none' value=""></option>    
                                     <option value="Germantown" <?php if ($_POST['location'] == 'Germantown') echo 'selected="selected"';?>>Germantown</option>
                                     <option value="Menomonee Falls" <?php if ($_POST['location'] == 'Menomonee Falls') echo 'selected="selected"';?>>Menomonee Falls</option>
                                     </select>
                                    <p class="error"><?php if(isset($errors['location'])) echo $errors['location']; ?></p>



                             <label for="Class">Class *</label>
                                <select name="classType">
                                     <option selected disabled hidden style='display: none' value=""></option>    
                                     <option value="Germantown - Kickboxing Fitness" <?php if ($_POST['classType'] == 'Germantown - Kickboxing Fitness') echo 'selected="selected"';?>>Germantown - Kickboxing Fitness</option>
                                         
                                     <option value="Menomonee Falls - Kickboxing Fitness" <?php if ($_POST['classType'] == 'Menomonee Falls- Kicboxing Fitness') echo 'selected="selected"';?>>Menomonee Falls - Kickboxing Fitness</option>
                                         
                                    <option value="Germantown - Athletic Training & Strength" <?php if ($_POST['class'] == 'Germantown - Athletic Training & Strength') echo 'selected="selected"';?>>Germantown - Athletic Training & Strength</option>
                                         
                                     <option value="Germantown - Yoga" <?php if ($_POST['classType'] == 'Germantown - Yoga') echo 'selected="selected"';?>>Germantown - Yoga</option>
                                         
                                     <option value="Germantown - P.U.L.S.E." <?php if ($_POST['classType'] == 'Germantown - P.U.L.S.E.') echo 'selected="selected"';?>>Germantown - P.U.L.S.E.</option>
                                </select>
                                    <p class="error"><?php if(isset($errors['classType'])) echo $errors['classType']; ?></p>
                        -------->
                      
                        <div id="location-selection">
                            
                             <label> <input type="radio" name="location" value="Germantown" onclick="opengtownDiv()" <?php if ($_POST['location'] == 'Germantown') echo 'checked="checked"';?>>Germantown</label><br>
                            
                            <label> <input type="radio" name="location" value="Menomonee Falls" onclick="openmfDiv()" <?php if ($_POST['location'] == 'Menomonee Falls') echo 'checked="checked"';?>>Menomonee Falls</label>
                            
                                <p class="error"><?php if(isset($errors['location'])) echo $errors['location']; ?></p>
                       
                        </div>  
                                         
                                <div id="gtownClass">
                                     <label for="Class">Class * &nbsp;</label>
                                             <select name="classType">
                                             <option selected disabled hidden style='display: none' value=""></option> 
                                             <option value="Little Tykes Martial Arts" <?php if ($_POST['classType'] == 'Little Tykes Martial Arts') echo 'selected="selected"';?>>Little Tykes Martial Arts</option>
                                             <option value="Youth Martial Arts" <?php if ($_POST['classType'] == 'Youth Martial Arts') echo 'selected="selected"';?>>Youth Martial Arts</option>
                                             <option value="Adult/Teen Martial Arts" <?php if ($_POST['classType'] == 'Adult/Teen Martial Arts') echo 'selected="selected"';?>>Adult/Teen Martial Arts</option>
                                             <option value="Kickboxing Fitness" <?php if ($_POST['classType'] == 'Kickboxing Fitness') echo 'selected="selected"';?>>SurgeFit Kickboxing</option>
                                             <option value="Athletic Training & Strength" <?php if ($_POST['classType'] == 'Athletic Training & Strength') echo 'selected="selected"';?>>Athletic Training &amp; Strength</option>
                                             <option value="Yoga" <?php if ($_POST['classType'] == 'Yoga') echo 'selected="selected"';?>>Yoga</option>
                                             <option value="P.U.L.S.E" <?php if ($_POST['classType'] == 'P.U.L.S.E') echo 'selected="selected"';?>>P.U.L.S.E</option>
                                             </select>
                                    <p class="error"><?php if(isset($errors['classType'])) echo $errors['classType']; ?></p>
                                </div>
                             
                             
                             <div id="mfClass">
                             
                                <label for="Class">Class * &nbsp;</label>
                                        <select name="classType">
                                             <option selected disabled hidden style='display: none' value=""></option> 
                                             <option value="Little Tykes Martial Arts" <?php if ($_POST['classType'] == 'Little Tykes Martial Arts') echo 'selected="selected"';?>>Little Tykes Martial Arts</option>
                                             <option value="Youth Martial Arts" <?php if ($_POST['classType'] == 'Youth Martial Arts') echo 'selected="selected"';?>>Youth Martial Arts</option>
                                             <option value="Adult/Teen Martial Arts" <?php if ($_POST['classType'] == 'Adult/Teen Martial Arts') echo 'selected="selected"';?>>Adult/Teen Martial Arts</option>
                                             <option value="Kickboxing Fitness" <?php if ($_POST['classType'] == 'Kickboxing Fitness') echo 'selected="selected"';?>>SurgeFit Kickboxing</option>
                                        </select>
                                 <p class="error"><?php if(isset($errors['classType'])) echo $errors['classType']; ?></p>
                             
                             </div>
                             
                        </div>
                             
                    </div>
                     
                     <br>
                        
                     <p align="center"><input type="submit" value="SUBMIT" name="Submit" id="submit">
                         <input type="hidden" name="submitted" value="TRUE" /></p>
                     
                </form> 

            
            </div>
        
        </div>
    </div>
    </div>
</body>
    
<?php
include 'includes/footer.php';
?>