<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('location: LoginForm.php');
}
