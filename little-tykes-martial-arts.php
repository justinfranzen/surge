<title>Germantown | Surge Martial Arts</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
<?php
include 'includes/header2.php';
?>

 <?php
if (isset($_POST['submitted'])){
    
    require_once('sql/mysql_connect.php');
    
        $fullname = mysqli_real_escape_string($dbc, $_POST['fullname']);
        $email = mysqli_real_escape_string($dbc, $_POST['email']);
        $location = $_POST['location'];   
        $germantown1 = $location == "Germantown";
        $mfalls1 = $location == "Menomonee Falls";
        $redirect = 'little-tykes-martial-arts.php#myForm2';
    
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
        elseif (!preg_match("/^[a-zA-Z]*$", $fullname))
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
        else
            {
            
          $urlgtown = 'gtown-thankyou.php';
          $urlmf = 'mf-thankyou.php';
            
            if ($germantown1) {
                $email_to = "justin.franzen90@.com";
                echo '<script>window.location = "'. $urlgtown .'";</script>';
            }
            else {
                $email_to = "jtfranz90@gmail.com";
                echo '<script>window.location = "'. $urlmf .'";</script>';
            }
            
         $email_from = "mail.justinfranzen.com";
         $subject = "Little Tykes Martial Arts Information Request";
         $content = $fullname . " is interested in more information about the Little Tykes Martial Arts class " . " \nEmail: " . $email;
         mail($email_to, $subject, $content);

            }  
    
    //end form validation
  
}   


?>

<body>
    
<div id="main2">
    
    <div id="content2">
        
        <h1 class="title">LITTLE TYKES MARTIAL ARTS</h1>
        
        <br>
        
        <div class="row">
        
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">

                <p class="main-class-info">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

            </div>
            
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                
                <form id="myForm2" action="little-tykes-martial-arts.php" method="post" >
                    
                    <p class="form-content">Contact us for more information about our Little Tykes class</p>
                    
                    <label>Name *</label>
                        <input type="text" name="fullname" col="4" placeholder="Full Name" value="<?php if(isset($_POST['fullname'])) echo $_POST['fullname'];?>">
                        <p class="error"><?php if(isset($errors['fullname'])) echo $errors['fullname']; ?></p>
                        <p class="error"><?php if(isset($errors['valid_fullname'])) echo $errors['valid_fullname']; ?></p>
                    
                    <label>Email *</label>
                        <input type="email" name="email" placeholder="Email" col="4" value="<?php if(isset($_POST['email'])) echo $_POST['email'];?>">
                        <p class="error"><?php if(isset($errors['email'])) echo $errors['email']; ?></p>
                    
                            <div id="email_2">
                                <label>Email2 *</label>
                                <input type="email" name="email_2" placeholder="email_2" col="4">
                            </div>
                    
                <div id="location-selection2">
                    <label> <input type="radio" name="location" value="Germantown" onclick="opengtownDiv()" <?php if ($_POST['location'] == 'Germantown') echo 'checked="checked"';?>>Germantown</label><br>
                            
                     <label> <input type="radio" name="location" value="Menomonee Falls" onclick="openmfDiv()" <?php if ($_POST['location'] == 'Menomonee Falls') echo 'checked="checked"';?>>Menomonee Falls</label>
                    <p class="error"><?php if(isset($errors['location'])) echo $errors['location']; ?></p>
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