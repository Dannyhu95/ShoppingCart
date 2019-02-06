<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Shopping Cart 2</title>
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
    $values= array();
    if (isset($_POST['itemSubmit'])) {
           $test1= $_POST['order1'];
           $test2= $_POST['order2'];
           $test3= $_POST['order3'];
           $test4= $_POST['order4'];
           $test5= $_POST['order5'];
           $test6= $_POST['order6'];
           $test7= $_POST['order7'];
           $test8= $_POST['order8'];
           array_push($values,$test1,$test2,$test3,$test4,$test5,$test6,$test7,$test8);
    }
    ?>
    <style>
            table, th, td {
                border: 1px solid black;
            }
            td {
               padding: 2px;
              text-align: left;
              vertical-align: top;
            }
        </style>
</head>
<body>
    <table>
        <h2>Confirm Your Order,  <?php echo($_SESSION["name"]); ?></h2>
        
        <tr>
        <th></th><th>Item</th><th>Price</th>
        </tr>  
    <?php
        $count=0.0;
        for($i=0; $i<8; $i++){
            if($values[$i]==1)
            {
                echo("<tr><td> <img src='$urls[$i]' height='100' width='100'></td><td>$items[$i]</td><td>$".$prices[$i]."</td></tr>");
                $count+=$prices[$i];
            }
        }
        echo "<tr><td></td><td>Sub-Total</td><td>$".$count."</td></tr>";
        $tax=(float)$count*0.08875;
        $formattedtax=number_format((float)$tax, 2, '.', '');
        $grandTot= (float)$formattedtax+(float)$count;
        $formattedtot=number_format((float)$grandTot, 2, '.', '');
        echo "<tr><td></td><td>Tax of 8.875%</td><td>$".$formattedtax."</td></tr>";
        echo "<tr><td></td><td>Grand Total</td><td>$".$formattedtot."</td></tr>";  
    ?>
    </table>
    <br>
    <br>
         <form name = "submitData" id="target" action="complete.php" method="post">
         <input type="hidden" id="tests1" name="orders1" value="<?php echo $values[0] ?>">
         <input type="hidden" id="tests2" name="orders2" value="<?php echo $values[1] ?>">
         <input type="hidden" id="tests3" name="orders3" value="<?php echo $values[2] ?>">
         <input type="hidden" id="tests4" name="orders4" value="<?php echo $values[3] ?>">
         <input type="hidden" id="tests5" name="orders5" value="<?php echo $values[4] ?>">
         <input type="hidden" id="tests6" name="orders6" value="<?php echo $values[5] ?>">
         <input type="hidden" id="tests7" name="orders7" value="<?php echo $values[6] ?>">
         <input type="hidden" id="tests8" name="orders8" value="<?php echo $values[7] ?>">
         <input type="hidden" id="tests9" name="total" value="<?php echo $grandTot ?>">
         <input type="submit" value="Confirm" id="itmSub" name="confirmSubmit">
    </form>
</body>
</html> 