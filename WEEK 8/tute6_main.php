<!DOCTYPE html>
<?php
include "LoginStart.php"
?>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <center>
        <hr>
        <h2>Library Management</h2>
        <hr>
    </center>

    <h3>Welcome <?php echo $_SESSION['username']; ?></h3>
    <a href="Logout.php">Logout</a>

    <form action="./tute6_insert.php">
        <input type="submit" value="Insert">
        <br><br>
  
        <input type="submit" value="Update">
 <br><br>
        <input type="submit" value="Delete">
<br><br>
        <input type="submit" value="Search">
    </form>


</body>

</html>