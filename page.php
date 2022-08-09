<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <?php
            
            include "db.php";
      
            $result = mysqli_query($conn,"SELECT * FROM `admin`");
      
            if(mysqli_num_rows($result) > 0){
              while($row = mysqli_fetch_assoc($result)){
            
            ?>
            <div class="col col-lg-4 col-md-6 col-12">
                <div class="event-card">
                    <img src="../assets/<?php echo $row["image"]?>" alt="">
                </div>
                <div class="event-content">
                    <h4><?php echo $row['name']?></h4><br>
                    <p><?php echo $row['description']?></p>
                </div>
                <div class="event-content">
                    <a href="delete.php?id=<?php echo $row["id"]?>" class="btn btn-danger">Delete</a>
                    
                </div>
            </div>
            <?php
              }
            }
            ?>
        </div>
    </div>
</body>
</html>