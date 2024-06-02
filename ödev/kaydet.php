<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transtional//EN" "http://www.w3.org/TR/xhtmli/DTD/xhtmli.transitional.dtd">
<html xnlns="http://www.w3.org/1999/xhtml"xnl:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset-UTF8"/>
    <title>Telefon Rehberi</title>
</head>
<body>
<?php
include "config.php";
$Ad = $_POST['Ad'];
$Telefonno = $_POST["Telefonno"];


$sth = $db -> prepare ("INSERT INTO bilgiler (Ad, Telefonno) VALUES (?,?)");
$sth -> execute(array($Ad,$Telefonno));
echo "işlem başarılı" ;
header ("refresh:2;url=index.php");

?>
</body>
</html>