<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Любовні романи</title>
</head>
<header style="background: #ff6702; text-align: center">
    <h1>Інформація по книзі</h1>
</header>
<?php
$servername='localhost';
$username='root';
$pass='';
$db='sport';
$connnection=mysqli_connect($servername,$username,$pass,$db);
?>
<?php
$result = mysqli_query($connnection,"SELECT * FROM ser_sport WHERE id=20");
while ($row = mysqli_fetch_array($result)){
    $id = $row['id'];
    $name = $row['name_sport'];
    $command = $row['command'];
    $trener  = $row['trener'];
    $win = $row['kil_peromog'];
    ?>
    <h1><li>Жанр: <?php echo "$name"; ?></li></h1>
    <h1><li>Видав: <?php echo "$command"; ?></li></h1>
    <h1><li>Назва книги: <?php echo "$trener"; ?></li></h1>
    <h1><li>Тираж: <?php echo "$win"; ?></li></h1>
    <?php
}
?>
</body>
</html>