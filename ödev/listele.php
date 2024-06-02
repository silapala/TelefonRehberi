<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transtional//EN" "http://www.w3.org/TR/xhtmli/DTD/xhtmli.transitional.dtd">
<html xnlns="http://www.w3.org/1999/xhtml"xnl:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset-UTF8"/>
    <title>Telefon Rehberi</title>
</head>
<body>
<?php
include "config.php";

$sth = $db -> prepare("SELECT * FROM bilgiler");
$sth -> execute();
$result = $sth -> fetchAll (PDO::FETCH_ASSOC);

echo "<a href='index.php'>ana sayfa</a> <br> <br> <br>";

foreach ($result as $yaz) {
    echo "<p>{$yaz['Ad']} - {$yaz['Telefonno']} ";
?>
<form action="arama.php" method="post">
    <input type="hidden" name="telno" value="<?php echo $yaz['Telefonno']; ?>">
    <button type="submit" name="ara" value="Ara">Ara</button>
</form>
<form action="silinecek.php" method="post">
    <input type="hidden" name="id" value="<?php echo $yaz['RehberID']; ?>">
    <button type="submit" name="sil" value="Sil">Sil</button>
</form>
<form action="guncelle.php" method="post">
    <input type="hidden" name="id" value="<?php echo $yaz['RehberID']; ?>">
    <button type="submit" name="ara" value="Ara">Güncelle</button>
</form>
<?php
}
?>
</body>
</html>