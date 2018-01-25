<?php
session_start();
if (isset($_SESSION['auth']) == true): ?>
<?php include 'menu.php' ?>
<p>HELLO</p>
<?php include 'footer.php'; ?>
<?php else: header('location : /myauth.php');  endif;?>
<!--//if (isset($_SESSION['auth']) == true){-->
<!--//    session_start();-->
<!--//}else {-->
<!--//    header('location : /myauth.php');}-->
<!--//include 'header.php';-->
<!--//include 'menu.php';-->


