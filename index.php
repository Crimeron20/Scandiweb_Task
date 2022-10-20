<?php require "Classes/database.php"; 
    $all = new database;
    $select_all = $all->selectall('products');
    $delete = new database;
    $checkbox= $delete->delete();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
    <form action = "" method="post">
    <div class="navbar">
        <h1>Product List</h1>
        <div class="buttons">
            <input type="button" value="ADD" onClick="document.location.href='add-product.php'"/>
            <input type="submit" value="MASS DELETE" name = "delete" window.location.href='index.php'/>
        </div>
    </div>
    <hr>        
  <div class="grid-container">
                <?php
                while ($productInfo = mysqli_fetch_assoc($select_all)){
                    ?><div class="grid-item">
                        <input type="checkbox" class=".delete-checkbox" name="deletesku[]" value="<?=$productInfo["p_sku"]?>">
                        <?=$productInfo["p_sku"]?></br>
                        <?=$productInfo["p_name"]?></br>
                        <?=$productInfo["p_price"]?></br>
                        <?=$productInfo["p_type"]?>
                    </div>
                <?php } ?>
    </div>
    </form>
</body>
</html>