<?php
if (isset($_SESSION['auth']) == true): ?>
    session_start();
<?php include 'menu.php' ?>
<p>HELLO</p>
<?php include 'footer.php'; ?>
<?php else: header('location : http://myproject/private.php');  endif;?>
<!--//if (isset($_SESSION['auth']) == true){-->
<!--//    session_start();-->
<!--//}else {-->
<!--//    header('location : /myauth.php');}-->
<!--//include 'header.php';-->
<!--//include 'menu.php';-->


