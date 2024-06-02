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

$sth = $db->prepare("SELECT * FROM bilgiler WHERE RehberID = ?");
$sth->execute(array($id));
$kisi = $sth->fetch(PDO::FETCH_ASSOC);



?>

<form action="guncelle_kaydet.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $kisi['RehberID']; ?>">
    Ad: <input type="text" name="Ad" value="<?php echo $kisi['Ad']; ?>"><br>
    Telefon No: <input type="text" name="Telefonno" value="<?php echo $kisi['Telefonno']; ?>"><br>
    <input type="submit" value="Güncelle">
</form>
</body>
</html>