<?php


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

    <style>
        .container {
            border-style: solid;
            border-radius: 10px;
            border-color:rgb(126, 124, 124);
            margin: 15vh auto;
            padding: 10px 10px;
        }

        hr {
            width: 75%;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>

<body>
    <div class="container w-25">
        <h2 class="h2 text-center">LOGIN</h2>
        <hr>
        <form action="" method="POST">
            <input type="text" class="form-control mb-3" placeholder="username" name="uname">
            <input type="password" class="form-control mb-3" placeholder="password" name="pw">
            <div class="d-flex">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" value="" id="formCheck">
                    <label for="" class="form-check-label">Remember me</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-2" style="width: 100%;">LOGIN</button>
            <div class="d-flex mt-3">
                <p>Don't have an account?</p>
                <a href="signup.php">sign up</a>
            </div>
        </form>
    </div>
</body>

</html>