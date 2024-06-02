<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transtional//EN" "http://www.w3.org/TR/xhtmli/DTD/xhtmli.transitional.dtd">
<html xnlns="http://www.w3.org/1999/xhtml"xnl:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset-UTF8"/>
    <title>Telefon Rehberi</title>
</head>
<body>
<?php
include "config.php";


$id = $_POST['id'];

$sth = $db->prepare("DELETE FROM bilgiler WHERE RehberID = ?");
$sth->execute(array($id));

echo "Kişi silindi.";
header("refresh:2;url=listele.php");
?>
