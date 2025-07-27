<form action="" method="get">
    <input type="text" name="age" />
    <input type="submit" >
</form>

<?php 
$query = $_GET['age'];



?>

<h1><?php  echo $query;?></h1>