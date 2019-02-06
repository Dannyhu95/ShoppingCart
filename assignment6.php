<html>
   <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>Shopping Cart</title>
        <link href="cart.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <h1>Selling Photos</h1>
        <hr>
         <form name = "editData" action="" method="post">
        <div class="item">
        <div class="inTitle" id="titl1" name="title1">Item</div>
        <div class="inPic" id="pc1" name="pic1" style="background-image: url('');"></div>
        <div class="inquantity" id="qual1" name="quantity1" >2</div>
        <div class="inprice" id="pric1" name="price1">$19.99</div>
        </div>
        <div class="item">
        <div class="inTitle" id="titl2" name="title2">Item2</div>
        <div class="inPic" id="pc2" name="pic2" style="background-image: url('');"></div>
        <div class="inquantity" id="qual2" name="quantity2">2</div>
        <div class="inprice" id="pric2" name="price2">$19.99</div>
        </div>
         <div class="item">
        <div class="inTitle" id="titl3" name="title3">Item3</div>
        <div class="inPic" id="pc3" name="pic3" style="background-image: url('');"></div>
        <div class="inquantity" id="qual3" name="quantity3">2</div>
        <div class="inprice" id="pric3" name="price3">$19.99</div>
        </div>
        <div class="item">
        <div class="inTitle" id="titl4" name="title4">Item4</div>
        <div class="inPic"  id="pc4" name="pic4" style="background-image: url('');"></div>
        <div class="inquantity" id="qual4" name="quantity4">2</div>
        <div class="inprice" id="pric4" name="price4">$19.99</div>
        </div>
        <div class="item">
        <div class="inTitle" id="titl5" name="title5">Item5</div>
        <div class="inPic"  id="pc5" name="pic5" style="background-image: url('');"></div>
        <div class="inquantity" id="qual5" name="quantity5">2</div>
        <div class="inprice" id="pric5" name="price5">$19.99</div>
        </div>
         <div class="item">
        <div class="inTitle" id="titl6" name="title6">Item6</div>
        <div class="inPic" id="pc6" name="pic6" style="background-image: url('');"></div>
        <div class="inquantity" id="qual6" name="quantity6">2</div>
        <div class="inprice" id="pric6" name="price6">$19.99</div>
        </div>
         <div class="item">
        <div class="inTitle" id="titl7" name="title7">Item7</div>
        <div class="inPic" id="pc7" name="pic7" style="background-image: url('');"></div>
        <div class="inquantity" id="qual7" name="quantity7">2</div>
        <div class="inprice" id="pric7" name="price7">$19.99</div>
        </div>
         <div class="item">
        <div class="inTitle" id="titl8" name="title8">Item8</div>
        <div class="inPic" id="pc8" name="pic8" style="background-image: url('');"></div>
        <div class="inquantity" id="qual8" name="quantity8">2</div>
        <div class="inprice" id="pric8" name="price8">$19.99</div>
        </div>
        <br>
        <br>
        <input type="submit" value="Submit" name="itemSubmit">
        </form>
        <?php
            $name=array();
            $filename="file.txt";
            $file = fopen($filename, "r");
            while(!feof($file)) {
             array_push($name, fgets($file));
            }
            fclose($file);
        ?>  
        <script>
             var itemarr = <?php echo json_encode($name); ?>;
             var count=1;
             var count2=1;
             var count3=1;
             var count4=1;
              for (var i=0; i<itemarr.length; i+=4) {
                  document.getElementById("titl"+count).innerHTML=itemarr[i];
                  count++;
              }
            for (var i=1; i<itemarr.length; i+=4) {
            document.getElementById("pc"+count2).style.backgroundImage='url('+itemarr[i]+')';
                  count2++;
              }
             for (var i=2; i<itemarr.length; i+=4) {
                  document.getElementById("qual"+count3).innerHTML=itemarr[i];
                  count3++;
                 if(itemarr[i]==0){
                     var temp=(count3-1); document.getElementById("pc"+temp).style.backgroundImage='url(https://s3.amazonaws.com/images.seroundtable.com/out-of-stock-1395144988.png)';
                 }
              }
              for (var i=3; i<itemarr.length; i+=4) {
                  document.getElementById("pric"+count4).innerHTML='$'+itemarr[i];
                  count4++;
              }
        </script>
    </body>
</html>