<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Thanks</title>
    <?php
        session_start();
        $db_type           = "mysql";
        $db_server         = "warehouse.cims.nyu.edu";
        $db_name           = "yh1112_db1";
        $db_user           = "yh1112";
        $db_password       = "ap388a2b";
        $db_link = mysqli_connect($db_server, $db_user, $db_password);
        if (!$db_link)
            die("Could not connect: " . mysql_error());
            //echo nl2br("Connected successfully\n");
        $db_selected = mysqli_select_db($db_link,$db_name);
        if (!$db_selected) 
            die("Can't use \"$db_name\" : " . mysql_error());
         $query= "SELECT * FROM shopping_cart";
         $result = mysqli_query($db_link, $query);
         $items = array();
         $urls = array();
         $quantities = array();
         $prices = array();
         while($row = mysqli_fetch_array($result)){
                     $item = $row['item'];
                     array_push($items, $item);
                     $image = $row['image'];
                     array_push($urls, $image);
                     $quantity = $row['quantity'];
                     array_push($quantities, $quantity);
                     $price = $row['price'];
                     array_push($prices, $price);
         }
       $email =  $_SESSION["mail"];
       $name = $_SESSION["name"];
    ?>
</head>
<body>
</body>
    <?php
           $values= array();
           $tests1= $_POST['orders1'];
           $tests2= $_POST['orders2'];
           $tests3= $_POST['orders3'];
           $tests4= $_POST['orders4'];
           $tests5= $_POST['orders5'];
           $tests6= $_POST['orders6'];
           $tests7= $_POST['orders7'];
           $tests8= $_POST['orders8'];
           $grantot= $_POST['total'];
           array_push($values,$tests1,$tests2,$tests3,$tests4,$tests5,$tests6,$tests7,$tests8);
           for($i=0; $i<8; $i++)
           {
            if($values[$i]==1){
                 $newQuantity=$quantities[$i]-1;
                 $query2 = "UPDATE shopping_cart SET quantity =$newQuantity where item='$items[$i]'";
                 $result = mysqli_query($db_link, $query2);
            }   
           }
           $to=$email."@nyu.edu";
           $subject="Thanks for Purchase";
           $message="Hello, there, ".$name."\n";
           for($i=0; $i<8; $i++){
               if($values[$i]==1){
               $message.=$items[$i].", ";
               }
           }
          $message.="has been purchased for a grand total of $".$grantot."\n";
          $headers= "X-Mailer: PHP/" . phpversion();
          mail($to, $subject, $message, $headers);
    ?>
    <p>Thank you for your purchase, <?php echo($_SESSION["name"]); ?>!</p>
    <p> An email will be sent to <?php echo($_SESSION["mail"]); ?>@nyu.edu</p>
</html