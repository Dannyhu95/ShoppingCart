<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
    ?>
    <style>
        .item {
	       position: relative;
	       height: 12em;
	       border-bottom: solid 1px gray;
	       overflow: hidden;
        }
        .inTitle {
	       position: absolute;
	       margin-left: 13em;
	       margin-top: 2em;
	       font-size: 1.2em;
        }
        .inPic {
            position: absolute;
            margin-top: 1em;
            margin-left: 2em;
            height: 10em;
            width: 10em;
            border-radius: 50%;
            background-color: #e8e8e8;
	        background-size: cover;
	        background-position: center center;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.1);
        }
        .inquantity {
	       position: absolute;
	       margin-left: 15.5em;
	       margin-top: 5.5em;
	       font-size: 1em;
        }
        .inprice {
	       position: absolute;
	       margin-left: 15.5em;
	       margin-top: 8em;
	       font-size: 1em;
        }
        .inBtn {
           position: absolute;
	       margin-left: 15em;
	       margin-top: 10em;
	       font-size: 1em;
        }
    </style>
</head>
<body>
        <h1>Selling Photos, <?php echo($_SESSION["name"]); ?></h1>
        <hr>
        <form name = "editData" action="confirm.php" method="post">
        <div class="item">
        <div class="inTitle" id="titl1" name="title1"><?php echo $items[0] ?></div>
        <div class="inPic" id="pc1" name="pic1" style="background-image: url('<?php echo $urls[0] ?>');"></div>
        <div class="inquantity" id="qual1" name="quantity1" ><?php echo $quantities[0] ?></div>
        <div class="inprice" id="pric1" name="price1"><?php echo "$".$prices[0] ?></div>
        <button type ="Button" class="inBtn" id="btn1" name="button1">Order</button>
        <input type="hidden" id="test1" name="order1" value="0">
        </div>
        <div class="item">
        <div class="inTitle" id="titl2" name="title2"><?php echo $items[1] ?></div>
        <div class="inPic" id="pc2" name="pic2" style="background-image: url('<?php echo $urls[1] ?>');"></div>
        <div class="inquantity" id="qual2" name="quantity2"><?php echo $quantities[1] ?></div>
        <div class="inprice" id="pric2" name="price2"><?php echo "$".$prices[1] ?></div>
        <button type ="Button" class="inBtn" id="btn2" name="button2">Order</button>
        <input type="hidden" id="test2" name="order2" value="0">
        </div>
         <div class="item">
        <div class="inTitle" id="titl3" name="title3"><?php echo $items[2] ?></div>
        <div class="inPic" id="pc3" name="pic3" style="background-image: url('<?php echo $urls[2] ?>');"></div>
        <div class="inquantity" id="qual3" name="quantity3"><?php echo $quantities[2] ?></div>
        <div class="inprice" id="pric3" name="price3"><?php echo "$".$prices[2] ?></div>
        <button type ="Button" class="inBtn" id="btn3" name="button3">Order</button>
        <input type="hidden" id="test3" name="order3" value="0">
        </div>
        <div class="item">
        <div class="inTitle" id="titl4" name="title4"><?php echo $items[3] ?></div>
        <div class="inPic"  id="pc4" name="pic4" style="background-image: url('<?php echo $urls[3] ?>');"></div>
        <div class="inquantity" id="qual4" name="quantity4"><?php echo $quantities[3] ?></div>
        <div class="inprice" id="pric4" name="price4"><?php echo "$".$prices[3] ?></div>
        <button type ="Button" class="inBtn" id="btn4" name="button4">Order</button>
        <input type="hidden" id="test4" name="order4" value="0">
        </div>
        <div class="item">
        <div class="inTitle" id="titl5" name="title5"><?php echo $items[4] ?></div>
        <div class="inPic"  id="pc5" name="pic5" style="background-image: url('<?php echo $urls[4] ?>');"></div>
        <div class="inquantity" id="qual5" name="quantity5"><?php echo $quantities[4] ?></div>
        <div class="inprice" id="pric5" name="price5"><?php echo "$".$prices[4] ?></div>
        <button type ="Button" class="inBtn" id="btn5" name="button5">Order</button>
        <input type="hidden" id="test5" name="order5" value="0">
        </div>
         <div class="item">
        <div class="inTitle" id="titl6" name="title6"><?php echo $items[5] ?></div>
        <div class="inPic" id="pc6" name="pic6" style="background-image: url('<?php echo $urls[5] ?>');"></div>
        <div class="inquantity" id="qual6" name="quantity6"><?php echo $quantities[5] ?></div>
        <div class="inprice" id="pric6" name="price6"><?php echo "$".$prices[5] ?></div>
        <button type ="Button" class="inBtn" id="btn6" name="button6">Order</button>
        <input type="hidden" id="test6" name="order6" value="0">
        </div>
         <div class="item">
        <div class="inTitle" id="titl7" name="title7"><?php echo $items[6] ?></div>
        <div class="inPic" id="pc7" name="pic7" style="background-image: url('<?php echo $urls[6] ?>');"></div>
        <div class="inquantity" id="qual7" name="quantity7"><?php echo $quantities[6] ?></div>
        <div class="inprice" id="pric7" name="price7"><?php echo "$".$prices[6] ?></div>
        <button type ="Button" class="inBtn" id="btn7" name="button7">Order</button>
        <input type="hidden" id="test7" name="order7" value="0">
        </div>
         <div class="item">
        <div class="inTitle" id="titl8" name="title8"><?php echo $items[7] ?></div>
        <div class="inPic" id="pc8" name="pic8" style="background-image: url('<?php echo $urls[7] ?>');"></div>
        <div class="inquantity" id="qual8" name="quantity8"><?php echo $quantities[7] ?></div>
        <div class="inprice" id="pric8" name="price8"><?php echo "$".$prices[7] ?></div>
        <button type ="Button" class="inBtn" id="btn8" name="button8">Order</button>
        <input type="hidden" id="test8" name="order8" value="0">
        </div>
        <br>
        <br>
        <input type="submit" value="Submit" id="itmSub" name="itemSubmit">
        </form>
    <script type="text/javascript">
        var test=0;	
        
        $(document).ready(function(){ 
            $(".inBtn").click(function(){
                if (this.innerHTML == "Order"){
                    this.innerHTML = "In Cart";
                }
                else {
                    this.innerHTML = "Order";
                }
            });
             $("#itmSub").click(function(){
               for(var i=1; i<9; i++){
                if($('#btn'+i).text()=="In Cart"){
                    $('#test'+i).val('1');
                    test=1;
                }
               }
               if(test==0){
                   alert("Must Order Something!");
                   return false;
               }       
             }); 
        });
        
        
        for(var i=1; i<9; i++){
            if (document.getElementById("qual"+i).innerHTML == 0){
                document.getElementById("pc"+i).innerHTML="<img src='graphics2a.php'>";
                document.getElementById("btn"+i).style.display = "none";
            }
        }
    </script>
</body>
</html> 
