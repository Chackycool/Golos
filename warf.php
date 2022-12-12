<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Warface</title>
</head>
<header style="background: #ff6702; text-align: center">
    <h1>Інформація по грі</h1>
</header>
<?php
$servername='localhost';
$username='root';
$pass='';
$db='sport';
$connnection=mysqli_connect($servername,$username,$pass,$db);
?>
<?php
$result = mysqli_query($connnection,"SELECT * FROM ser_sport WHERE id=16");
while ($row = mysqli_fetch_array($result)){
    $id = $row['id'];
    $name = $row['name_sport'];
    $command = $row['command'];
    $trener  = $row['trener'];
    $win = $row['kil_peromog'];
    ?>
    <h1><li>Кількість гравців: <?php echo "$name"; ?></li></h1>
    <h1><li>Вийшла у: <?php echo "$command"; ?></li></h1>
    <h1><li>Бюджет: <?php echo "$trener"; ?></li></h1>
    <h1><li>Ціна у грн: <?php echo "$win"; ?></li></h1>
    <?php
}
?>
</body>
</html>