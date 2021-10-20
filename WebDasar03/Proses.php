<?php
$proses = filter_input(INPUT_GET, 'proses');
if(isset($proses)){
        $name = filter_input(INPUT_GET, "Name");
        $email = filter_input(INPUT_GET, "Email");
        $number = filter_input(INPUT_GET, "Number");
        $photo = filter_input(INPUT_GET, "photo");
        $color = filter_input(INPUT_GET, "color");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <p style="color: green">Contact information successfully saved!</p><br>
    <p><u><i>Nama Anda Adalah: <?php echo $name ?></i></u></p>
    <p style="color: purple">Email Anda Adalah: <?php echo $email ?></p>
    <p style="color: <?php echo $color ?>">Nilai Helix dari warna Favorit Anda adalah: <?php echo $color ?></p>
    <p>Nama Foto Anda Adalah: <?php echo $photo ?></p>
</body>
</html>