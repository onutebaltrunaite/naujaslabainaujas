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
table {
    border-collapse: collapse;
}
th, td {
    text-align: center;
    padding: 5px;
    border: 1px solid black;
}
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

<h3>Klases Nariai</h3>



<table>
    <tr>
        <th>Vardas</th>
        <th>Pavarde</th>
        <th>Amzius</th>
        <th>Emailas</th>
    </tr>
    <?php foreach($tableData as $value): ?>
    <tr>
        <td><?php print $value['0']; ?></td>
        <td><?php print $value['1']; ?></td>
        <td><?php print $value['2']; ?></td>
        <td><?php print $value['3']; ?></td>
    </tr>
    <?php endforeach; ?>


</table>






</body>
</html>