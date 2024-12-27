<?php

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGNUP</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <style>
        .container {
            border-style: solid;
            border-color: rgb(126, 124, 124);
            border-radius: 10px;
            margin: 6vh auto;
            padding: 10px 10px;
            width: 70vh;
        }
        hr{
            width: 75%;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2 class="text-center">SIGNUP</h2>
        <hr>
        <form action="" method="POST">
            <div class="form-group mb-2">
                <label for="" class="form-label">Fist Name</label>
                <input type="text" class="form-control" name="fname">
            </div>
            <div class="form-group mb-2">
                <label for="" class="form-label">Last Name</label>
                <input type="text" class="form-control" name="lname">
            </div>
            <div class="form-group mb-2">
                <label for="" class="form-label">Mobile No <span style="color: red;">*</span></label>
                <input type="text" class="form-control" name="Mno" required>
            </div>
            <div class="form-group mb-2">
                <label for="" class="form-label">E-mail <span style="color: red;">*</span></label>
                <input type="email" class="form-control" name="email" required>
            </div>
            <div class="form-group mt-2">
                <label for="" class="form-label">Password <span style="color: red;">*</span></label>
                <input type="password" class="form-control" name="pw" required>
            </div>
            <div class="butn text-center mt-3">
                <button class="btn btn-primary w-100" type="submit">SIGNUP</button>
            </div>
        </form>
    </div>
</body>

</html>