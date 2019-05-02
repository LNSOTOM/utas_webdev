<!DOCTYPE html>
<html>

<head>
     <?php
//print_r ($_REQUEST);

include 'db_conn.php'; //db connection

if (isset($_REQUEST['submit'])) {
     $error = "";
     $username = $_REQUEST["username"];
     $password= $_REQUEST["password"];
     $confirmPassword= $_REQUEST["confirmPassword"];

//validation
if ($password != $confirmPassword) {
     $error .= "Retype password error";
 }
 if ($error == "") {
     $sql = "INSERT INTO users_week8 (username, password, access) VALUES ('$username', '$password', 0);";
     echo $sql;
     $mysqli->query($sql);
     header('location: LoginForm.php');
 } else {
     $error = "";
 }
 echo $error;
}
     ?>

     <link rel="stylesheet" type="text/css" href="style.css">
     <title>Sign up Page</title>

     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <script src="lib/jquery-3.3.1.js"></script>
     <style type="text/css"></style>

     <script type="text/javascript" src="script.js"></script>
</head>

<body>

     <h1 class="h1-registration">Sign up</h1>

     <!--action for a form- where the form send data to-->
     <!--method- what HTTP method (get/post)-->
     <form action="" method="GET">
          <div>
               <label for="">Username</label><br>
               <input name="username" type="text" required>
               <br><br>
          </div>

          <div>
               <label for="">Password</label><br>
               <input name="password" type="password" required>
               <br><br>
          </div>

          <div>
               <label for="">Confirm Password</label><br>
               <input name="confirmPassword" type="password" required>
               <br><br>
          </div>
        
          <div>
               <input type="submit" name="submit" value="Sign up" class="button-registration">
               </div>
               <div>
               <a href="tute6_main.php"> Back to main page </a></h4>
               </div>
     </form>
</body>

</html>
