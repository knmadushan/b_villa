<?php
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    
    <style>
        .container {
            border-style: solid;
            border-color: rgb(126, 124, 124);
            margin: 15vh auto;
            padding: 10px 10px;
            border-radius: 10px;
            width: 200vh;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="" method="POST">
        <h2 class="h2">Send us a message</h2>
            <div class="row">
                <div class="col-sm-4">
                    <!-- <img src="image/p2.jpg" class="rounded" alt="" style="width: 100%;"> -->
                     <div class="item-group">
                        <div class="d-flex">
                          
                        </div>
                     </div>
                </div>
                <div class="col-sm-8">
                    <form action="" method="post">
                        <div class="mb-3">
                            <input type="text" class="form-control" name=name placeholder="Enter your name">
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" name="email" placeholder="example@gmail.com">
                        </div>
                        <div class="mb-3">
                            <textarea name="" class="form-control" id="" row="5" col="5" placeholder="Message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Send a message</button>
                    </form>
                </div>
            </div>
        </form>
    </div>
</body>

</html>