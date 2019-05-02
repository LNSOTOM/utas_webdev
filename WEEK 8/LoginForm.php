
<!DOCTYPE html>
<html></html>
<head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Login Page</title>
    
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <script src="lib/jquery-3.3.1.js"></script>
        <style type="text/css"></style>
    
        <script type="text/javascript" src="script.js"></script> 
    
    <?php
    //print_r ($_REQUEST);
include 'db_conn.php'; //db connection

if (isset($_REQUEST['submit'])) {
    $error = "";
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    $sql = "SELECT * FROM users_week8 WHERE username='$username' and password='$password'";
    // echo $sql;
    $result = $mysqli->query($sql);
    if ($result->num_rows > 0) {
        session_start();
        $_SESSION['username'] = $username;
        echo "success";
        header('location: tute6_main.php');
    } else {
        $error = "Invalid username";
    }
}
?> 
</head>

<body>
     <h1 class="h1-login">Library Management</h1>

     <h3><?php echo (isset($error)) ? $error : ""; ?></h3>

     <form action="" >
         <h2> Please login to the system</h2>
         <label for="">Username:</label><br> 
         <input name="username" type="text" required>
         <br><br>

         <label for="">Password:</label><br> 
         <input name="password" type="password" required>
         <br><br>

         <input type="submit" class="button-registration" name="submit" value="Log in">
         <h4>Don't have an account yet? 
         <a href="SignupPage.php"> Sign up </a></h4>
     </form>


</body>
</html>
