<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transtional//EN" "http://www.w3.org/TR/xhtmli/DTD/xhtmli.transitional.dtd">
<html xnlns="http://www.w3.org/1999/xhtml"xnl:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset-UTF8"/>
    <title>Telefon Rehberi</title>
</head>
<body>
<?php
include "config.php";

$id = $_POST["id"];
$Ad = $_POST["Ad"];
$Telefonno = $_POST["Telefonno"];

// Kişinin bilgilerini güncelle
$sth = $db->prepare("UPDATE bilgiler SET Ad = ?, Telefonno = ? WHERE RehberID = ?");
$sth->execute(array($Ad, $Telefonno, $id));

echo "İşlem başarılı.";
header("refresh:2;url=listele.php");
?>
</body>
</html>