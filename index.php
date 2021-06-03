<?php 
include "database.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax Dischi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <main>
        <?php foreach ($discs as $info) { ?>
            <div class="disco">
                <h2><?php echo $info['image']; ?></h2>
                <h2><?php echo $info['author']; ?></h2>
                <h3><?php echo $info['title']; ?></h3>
                <h3><?php echo $info['year']; ?></h3>
                <h3><?php echo $info['genre']; ?></h3>
            </div>
        <?php } ?> 



    </main>

</body>
</html>