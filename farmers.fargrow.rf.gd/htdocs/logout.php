<?php
session_start();
unset($_SESSION['MobNo']);
unset($_SESSION['Fname']);
unset($_SESSION['Lname']);
unset($_SESSION['email']);
unset($_SESSION['Addr1']);
unset($_SESSION['Addr2']);
unset($_SESSION['zone_id']);
unset($_SESSION['postcode']);
unset($_SESSION['country_id']);
unset($_SESSION['zone_id_2']);
session_destroy();
header('location:index.php')
?>