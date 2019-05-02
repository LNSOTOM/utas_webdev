<?php
//connect to mysql
$mysqli = new mysqli('localhost', 'laurasr', '447184', 'laurasr');

if (mysqli_connect_errno()) {
	    printf("Connect failed: %s\n", mysqli_connect_error());
	    exit();
	}
?>