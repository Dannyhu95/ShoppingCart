<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Log In</title>
</head>
<body>
    <h1>Customer Info Page</h1>
    <form name = "login" action="" method="post">
        <input type="text" name="custName" placeholder="Name"><br>
        <input type="text" name="custEmail" placeholder="Email">@nyu.edu <br>
        <button type="submit" name="custSub">Continue to Order Page</button>
        <button type="reset" value="Reset">Reset</button>
    </form>
    <?php
    session_start();
     if (isset($_POST['custSub'])) {
         $name = $_POST['custName'];
         $email = $_POST['custEmail'];
         $_SESSION["name"] = $name;
         $_SESSION["mail"] = $email;
         header('Location:assign7.php');
     }
    ?>
</body>
</html>