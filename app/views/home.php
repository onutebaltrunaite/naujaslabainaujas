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
<body>
    
<form action="" method="post">
    <?php foreach($array['navbar'] as $value): ?>
        <button class="<?php print $value['class']; ?>" name="<?php print $value['name']; ?>"><?php print $value['uzrasas']; ?></button>
    <?php endforeach; ?>
</form>


<img style="height: 200px; width: 200px; margin: 25px;" src="<?php print $array['images'][rand(0, 3)]; ?>" alt="">


<form action="" method="post">
    <input type="text" placeholder="Vardas..." name="name">   
    <input type="text" placeholder="Pavarde..." name="surname">   
    <input type="text" placeholder="Amzius..." name="age">   
    <input type="text" placeholder="Email..." name="email">  
    <input type="text" placeholder="Telefonas..." name="phone">  

    <input type="submit" name="button" value="submit">
</form>



</body>
</html>