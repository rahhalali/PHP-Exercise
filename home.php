<?php 
  $name_error =$password_error=$conf_error = $Date_error =$number_error =$phone_error=$username_error="";
  $name=$email=$password=$confirmpassword=$security=$Date=$phone=$username="";
  $username1=$password_log="";
  $password_log_error=$username1_error="";
  $array=array("ali"=>"146434");
     if(isset($_POST["btn1"])){
         if(empty($_POST["name"])){
             $name_error = "please filled the full name";
         }else{
             $name=Valid_input($_POST["name"]);
         }
         if(empty($_POST["password"])){
             $password_error = "please filled the password";
         }else{
             $password=Valid_input($_POST["password"]);
         }
         if(empty($_POST["conf"])){
             $conf_error = "please filled the confirm password";
         }else{
             $confirmpassword=Valid_input($_POST["conf"]);
         }
         if(empty($_POST["email"])){
            $email_error = "please filled the email";
        }else{
            $email=Valid_input($_POST["email"]);
        }
         if(empty($_POST["number"])){
             $number_error = "please filled the number";
         }else{
             $security=Valid_input($_POST["number"]);
         }
         if(empty($_POST["phone"])){
             $phone_error = "please filled the phone";
         }else{
             $phone=Valid_input($_POST["phone"]);
         }
         if(empty($_POST["username"])){
             $username_error = "please filled the username";
         }else{
             $username=Valid_input($_POST["username"]);
         }
         if(empty($_POST["date"])){
            $Date_error = "please filled the Date";
        }else{
            $Date=Valid_input($_POST["date"]);
        }
     }
     
     if(isset($_POST["btn2"])){
        if(empty($_POST["username1"])){
            $username1_error="please fill username";
        }else{
            $username1=Valid_input($_POST["username1"]);
        }
        if(empty($_POST["password_log"])){
            $password_log_error="please fill password";
        }else{
            $password_log=Valid_input($_POST["password_log"]);
        }
        if(!empty($username1) && !empty($password_log)){
         foreach($array as $key=>$content){
             if($username1===$key && $password_log===$content){
                header("location:safe.php");
             }else{
                $error="not matches";
             }
          }}
          
         }
     
     if($_POST["password"]!== $_POST["conf"]){
         $conflict_error = "password not matching try again";
     }
     function Valid_input($data){
         $data = trim($data);
         $data=stripslashes($data);
         $data=htmlspecialchars($data);
       return $data;
     }

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>part1</title>
    <link rel="stylesheet" href="home.css">
  </head>
  <body>
    
    <div id="exer1">

    <form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?> autocomplete="off" method="POST">
      <div class="register">
          <div class="register-box">
            <h1>Registration</h1>
            <div class="fill">
            <div><?php echo "$name_error"; ?></div>
            <i class="fa fa-info" aria-hidden="true"></i>
            <input type="text" name="name" placeholder="full name">
            </div>
            <div class="fill">
            <div class="own"><?php echo "$username_error"; ?></div>
            <i class="fa fa-user" aria-hidden="true"></i>
            <input type="text" name="username" placeholder="Username">
            </div>
            <div class="fill">
            <div class="own"><?php echo "$password_error"; ?></div>
            <i class="fas fa-lock"></i>
            <input type="password" name="password" placeholder="password">
            </div>
            <div class="fill">
            <div class="own"><?php echo "$conf_error"; ?></div>
            <div class="own"><?php echo "$conflict_error"; ?></div>
            <i class="fas fa-lock"></i>
            <input type="password" name="conf" placeholder="confirm password">
            </div>
            <div class="fill">
            <div class="own"><?php echo "$Date_error"; ?></div>
            <i class="fa fa-calendar" aria-hidden="true"></i>
            <input type="date" name="date" placeholder="date">
            </div>
            <div class="fill">
            <div class="own"><?php echo "$phone_error"; ?></div>
            <i class="fa fa-phone-square" aria-hidden="true"></i>
            <input type="number" name="phone"  placeholder="phone">
            </div>
            <div class="fill">
            <div class="own"><?php echo "$email_error"; ?></div>
            <i class="fa fa-envelope" aria-hidden="true"></i>
            <input type="email" name="email"  placeholder="email">
            </div>
            <div class="fill">
            <div class="own"><?php echo "$number_error"; ?></div>
            <i class="fa fa-share-square" aria-hidden="true"></i>
            <input type="number" name="number" placeholder="social security number">
            </div>
            <input type="submit" class="btn" name="btn1" value="Register Now">
          </div>
          </form>
      </div>
      <form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?> autocomplete="off" method="POST"> 
      <div class="container">
      <div class="login-box">
       <h1>Login</h1>
        <div class="textbox">
        <div class="own"><?php echo "$username1_error"; ?></div>
        <div class="own"><?php echo "$error"; ?></div>
      <i class="fas fa-user"></i>
      <input type="text" name="username1" placeholder="Username">
    </div>
    <div class="textbox">
    <div class="own"><?php echo "$password_log_error"; ?></div>
      <i class="fas fa-lock"></i>
      <input type="password" name="password_log" placeholder="Password">
    </div>
  
    <input type="submit" class="btn" name="btn2" value="Sign in">
  </div>
</form>
    </div>
       <div class="info">
         <div class="inner">
              <?php
           if(!empty($_POST["name"]) && !empty($_POST["password"]) && !empty($_POST["conf"]) && !empty($_POST["date"]) && !empty($_POST["email"]) && !empty($_POST["number"]) && !empty($_POST["phone"])  && !empty($_POST["username"]) && ($_POST["password"] === $_POST["conf"])){
               echo "The full name is " . "$name"  . "</br> </br>"  ;
               echo "The username is " . "$username"  . "</br> </br>" ;
               echo "The password is " . "$password"  . "</br> </br>" ;
               echo "The email is " . "$email"  . "</br> </br>" ;
               echo "The social security is " . "$security"  . "</br> </br>" ;
               echo "The phone number  is " . "$phone"  . "</br> </br>" ;
               echo "The date of birth is " . "$Date" ."</br> </br>";
           }
             
              ?>
          </div>
        </div>
    </div>
  </body>
</html>
