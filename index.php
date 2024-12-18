<!-- 
// to run correctly chorme-> localhost
// safe the file first -->

<?php include "connect.php" ;

//./folder_ka_naam/file_ka_naam
// EG:- include "./includes/footer.php"
//details pr dhyn do.. save each file ke changes before running it.!!

if(isset($_POST['submit'])){
  $username=$_POST['username'];
  $phone=$_POST['phone'];
  $email=$_POST['email'];
  $place=$_POST['place'];
  

$insert_query="insert into crud (userName , email , phone , address) values ('$username','$email','$phone','$place' )"; 
//had written the query wala variable..a b seedhe isko he pass kr denge..
$result=mysqli_query($con,$insert_query);
if($result){echo"<script> alert ('data entered successfully') </script>";
echo"<script> window.open('index.php','_self') </script>";
//header ("Location: index.php"); or undono ki jagah ye akla bhi kaam krega.. 
//done for not inserting dublicate date inside database..
}
else{ die(mysqli_error($con));}
}
?>


<!-- <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mission_PHP</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    

  


    <div class="form_container">
    <header class="main-header">
        
        <h1 style="background-color: #023c42; color: #eff6f8; padding: 17px; text-align: center; border-bottom: 6px solid #5dcce2;margin: 0; font-size: 2.0rem; font-weight: bold; letter-spacing: 1.5px;margin-bottom: 77px;">Welcome to DATABASE MANAGEMENT</h1>
     -->
      <!-- <form> -->
      <!-- <form action="" method="post" style="margin-left: 81px;">
        <fieldset>
          <legend>Personal Details</legend>
          <label for="username"></label>
          <span>Name <span class="required">*</span></span
          ><input
            type="text"
            placeholder="Enter your Username"
            autocomplete="off"
            name="username"
            required
          />

          <label for="email"></label>
          <span>Email <span class="required">*</span></span
          ><input
            type="email"
            placeholder="Enter your Email"
            autocomplete="on"
            name="email"
            value="@gmail.com"
            required
          />

          <label for="phone"></label>
          <span>Phone <span class="required">*</span></span
          ><input
            type="number"
            placeholder="Enter your Mobile"
            autocomplete="off"
            name="phone"
            required
          />

          <label for="place"></label>
          <span>Place <span class="required">*</span></span
          ><input
            type="text"
            name="place"
            placeholder="Enter your Place"
            autocomplete="off"
            required
          /> -->

          <!-- <input type="submit" class="submit_btn" name="submit" /> -->
          <!-- <a href="display.php" class="view_data">Details</a>
        
        </fieldset>
      </form>
      </header>
    </div>

    <footer class="main-footer">
        <p>&copy; 2024 Mission PHP. All rights reserved.</p>
    </footer>


  </body>
</html> -->




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mission_PHP</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    
    <div class="form_container">
      <div>
    <h1 style="display:flex;background-color: #023c42; color: #eff6f8; padding: 17px; text-align: center; border-bottom: 6px solid #5dcce2;margin: 0; font-size: 2.0rem; font-weight: bold; letter-spacing: 1.5px;margin-bottom: 77px;">Welcome to DATABASE MANAGEMENT</h1>
      <!-- <form> -->
      <form action="" method="post" style="margin-left: 81px;">
        <fieldset>
          <legend>Personal Details</legend>
          <label for="username"></label>
          <span>Name <span class="required">*</span></span
          ><input
            type="text"
            placeholder="Enter your Username"
            autocomplete="off"
            name="username"
            required
          />

          <label for="email"></label>
          <span>Email <span class="required">*</span></span
          ><input
            type="email"
            placeholder="Enter your Email"
            autocomplete="on"
            name="email"
            value="@gmail.com"
            required
          />

          <label for="phone"></label>
          <span>Phone <span class="required">*</span></span
          ><input
            type="number"
            placeholder="Enter your Mobile"
            autocomplete="off"
            name="phone"
            required
          />

          <label for="place"></label>
          <span>Place <span class="required">*</span></span
          ><input
            type="text"
            name="place"
            placeholder="Enter your Place"
            autocomplete="off"
            required
          />

          <!-- <input type="submit" class="submit_btn" name="submit" /> -->
<!-- yaha name attribute me submit ka name diya h iss liye ye form isse page ko submit ho ja rahe kahi or ni ja rahe -->
          <input type="submit" class="submit_btn" name="submit" />
          <!-- ab submit krne ke baad ? dikha ra hoga.. lets update action of the file to update.php to data usme jaane lgega.. -->
          <a href="display.php" class="view_data">Details</a>
          <a
            href="https://www.youtube.com/c/StepbyStep_KhanamCoding"
            class="view_data"
            target="_blank"
            >Channel</a
          >
        </fieldset>
      </form>
      <footer class="main-footer">
        <p>&copy; 2024 Mission PHP. All rights reserved.</p>
    </footer>
      </div>
     
    </div>
    

    
  </body>
</html>