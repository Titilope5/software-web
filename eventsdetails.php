<?php
include "processor.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <?php foreach ($connection as $q) { ?>
                <div class="col-4">
                    <div class="card">
                        <div class="row">
                            <h5 class="card-title"><?php echo $q['artist_name']; ?></h5>
                            <h5 class="card-title"><?php echo $q['about']; ?></h5>
                            <h5 class="card-title"><?php echo $q['event_date']; ?></h5>
                            <h5 class="card-title"><?php echo $q['image_path']; ?></h5>
                        </div>
                    
                    </div>
                </div> 

         <?php }?>
        </div>
    </div>
</body>
</html>