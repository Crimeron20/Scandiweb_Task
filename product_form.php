<?php 
require_once "Classes/database.php";

if($_POST['save']){
    $sku=$_POST['sku'];
    $name=$_POST['name'];
    $price=$_POST['price'];
    $value = $_POST['product'];
}
    if($value == "DVD"){
        $text="Size : " . $_POST['size'] . "MB";
    }
    else if($value == "Furniture"){
        $text="Dimension :" . $_POST['heigh'] . "x" . $_POST['width'] . "x" . $_POST['lenght'];
    }
    else if($value == "Book"){
        $text="Weight : " . $_POST['weight'] . "Kg";
    }

    $database = new database;
    $add_data=$database->insertall($sku, $name, $price, $text);

    header("Location: index.php");
?>