<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once '../controllers/page.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
.btnStyle {
    margin:25px;
}
</style>
<body style="background-image: url(<?php print $background; ?>); background-size: cover; background-position: center; background-repeat: no-repeat;">

<form action="" method="post">
    <?php foreach($array['navbar'] as $value): ?>
        <button class="<?php print $value['class']; ?>" name="<?php print $value['name']; ?>"><?php print $value['uzrasas']; ?></button>
    <?php endforeach; ?>
</form> 

<div style="font-size: 35px; color: white;"><?php print date('s') . ' sekunde' ;?></div>

    
</body>
</html>