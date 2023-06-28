<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PCBMS</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet" />
    <style>
        body {
            background-image: url('../images/vsu-01.jpg');
            background-size: cover;
        }

        .container {
        }

        .login-form {
            width: 340px;
            margin: 15px auto;
            font-size: 15px;
            margin-bottom: 15px;
            background-color: rgba(255, 255, 255, .75);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        }

        .login-form h2 {
            margin: 0 0 15px;
        }

        .form-control,
        .btn {
            min-height: 38px;
            border-radius: 2px;
        }

        .btn {
            font-size: 15px;
            font-weight: bold;
            background-color: #2196f3;
            border-color: #2196f3;
            color: #fff;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .icon {
            max-width: 100px;
            max-height: 100px;
        }

        .h2 {
            color: #FFFFFF;
            margin-top: 25px;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px black;
        }

    </style>
</head>

<body>
    <div class="container">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-12 text-center">
                <?php include "login/Login_2.php"; ?>
                
            </div>
        </div>
        <?php include "footers/footer.php"; ?>
</body>

</html>
