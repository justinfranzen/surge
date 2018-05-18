<title>Menomonee Falls Info Request | Surge Martial Arts</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
<?php
include 'includes/header2.php';
?>

<body>
    
<div id="main2">
    
    <div id="content2">
        
        <h1 class="title">MENOMONEE FALLS INFO REQUEST</h1>
        
            <form id="infoRequest" action="contact.php" method="post" >
                     
                    <label for="Information">Information About *</label>&nbsp;
                             <select name="information">
                             <option selected disabled hidden style='display: none' value=""></option>    
                             <option value="Taekwondo" <?php if ($_POST['information'] == 'Taekwondo') echo 'selected="selected"';?>>Taekwondo</option>
                             <option value="SurgeFIT" <?php if ($_POST['information'] == 'SurgeFIT') echo 'selected="selected"';?>>SurgeFIT</option>
                             </select>
                      <p class="error"><?php if(isset($errors['information'])) echo $errors['information']; ?></p>
                     
                      <label for="fname">First Name *</label><input type="text" name="firstname" size="14" placeholder="First Name" value="<?php if(isset($_POST['firstname'])) echo $_POST['firstname'];?>">
                    <p class="error"><?php if(isset($errors['firstname'])) echo $errors['firstname']; ?></p>

                     <label for="lname">Last Name *</label><input type="text" name="lastname" size="14" placeholder="Last Name" value="<?php if(isset($_POST['lastname'])) echo $_POST['lastname'];?>">
                     <p class="error"><?php if(isset($errors['lastname'])) echo $errors['lastname']; ?></p>

                     <label for="email">Email *</label><input type="email" name="email" placeholder="Email" value="<?php if(isset($_POST['email'])) echo $_POST['email'];?>">
                     <p class="error"><?php if(isset($errors['email'])) echo $errors['email']; ?></p>

                    <label for="subject">Phone</label><input type="text" name="subject" size="12" placeholder="Phone" value="<?php if(isset($_POST['phone'])) echo $_POST['phone'];?>">
                      <p class="error"><?php if(isset($errors['phone'])) echo $errors['phone']; ?></p>
                     <br>
                     <p align="center"><input type="submit" value="Send" name="Submit" id="submit">
                         <input type="hidden" name="submitted" value="TRUE" /></p>
                </form> 
        
    </div>
    
</div>
</body>
    
<?php
include 'includes/footer.php';
?>