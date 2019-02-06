<html>
   <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>Shopping Cart</title>
        <link href="cart.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <h1>Edit Page</h1>
        <form name = "editData" action="" method="post">
        <hr>
        <div class="item">
        <div class="inTitle" id="titl1" name="title1">Item</div>
        <div class="inPic" id="pc1" name="pic1" style="background-image: url('');"></div>
        <input class ="inquantity" id="editqua1" type="number" name="editQuantity1" min=0><br>
        <input class ="inprice" id="editpric1" type="number" name="editprice1" min="0.01" step="0.01"><br>
        </div>
        <div class="item">
        <div class="inTitle" id="titl2" name="title2">Item2</div>
        <div class="inPic" id="pc2" name="pic2" style="background-image: url('');"></div>
        <input class ="inquantity" id="editqua2" type="number" name="editQuantity2" min=0><br>
        <input class ="inprice" id="editpric2" type="number" name="editprice2" min="0.01" step="0.01"><br>
        </div>
         <div class="item">
        <div class="inTitle" id="titl3" name="title3">Item3</div>
        <div class="inPic" id="pc3" name="pic3" style="background-image: url('');"></div>
        <input class ="inquantity" id="editqua3" type="number" name="editQuantity3" min=0><br>
        <input class ="inprice" id="editpric3" type="number" name="editprice3" min="0.01" step="0.01"><br>
        </div>
        <div class="item">
        <div class="inTitle" id="titl4" name="title4">Item4</div>
        <div class="inPic"  id="pc4" name="pic4" style="background-image: url('');"></div>
        <input class ="inquantity" id="editqua4" type="number" name="editQuantity4" min=0><br>
        <input class ="inprice" id="editpric4" type="number" name="editprice4" min="0.01" step="0.01"><br>
        </div>
        <div class="item">
        <div class="inTitle" id="titl5" name="title5">Item5</div>
        <div class="inPic"  id="pc5" name="pic5" style="background-image: url('');"></div>
        <input class ="inquantity" id="editqua5" type="number" name="editQuantity5" min=0><br>
        <input class ="inprice" id="editpric5" type="number" name="editprice5" min="0.01" step="0.01"><br>
        </div>
         <div class="item">
        <div class="inTitle" id="titl6" name="title6">Item6</div>
        <div class="inPic" id="pc6" name="pic6" style="background-image: url('');"></div>
        <input class ="inquantity" id="editqua6"  type="number" name="editQuantity6" min=0><br>
        <input class ="inprice" id="editpric6" type="number" name="editprice6" min="0.01" step="0.01"><br>
        </div>
         <div class="item">
        <div class="inTitle" id="titl7" name="title7">Item7</div>
        <div class="inPic" id="pc7" name="pic7" style="background-image: url('');"></div>
        <input class ="inquantity" id="editqua7" type="number" name="editQuantity7" min=0><br>
       <input class ="inprice" id="editpric7" type="number" name="editprice7" min="0.01" step="0.01"><br>
        </div>
         <div class="item">
        <div class="inTitle" id="titl8" name="title8">Item8</div>
        <div class="inPic" id="pc8" name="pic8" style="background-image: url('');"></div>
        <input class ="inquantity" id="editqua8" type="number" name="editQuantity8" min=0><br>
        <input class ="inprice" id="editpric8" type="number" name="editprice8" min="0.01" step="0.01"><br>
        </div>
        <br>
        <br>
        <input type="submit" value="Submit" name="itemSubmit">
        <input type="reset" value="Reset">
        </form>
        <?php
            $name=array();
            $filename="file.txt";
            $file = fopen($filename, "r");
            while(!feof($file)) {
             array_push($name, fgets($file));
            }
            fclose($file);
            if (isset($_POST['itemSubmit'])){
                  $fp = fopen("file.txt","w") or die("can't open file!");
                  fwrite($fp, $name[0]);
                  fwrite($fp, $name[1]);
                  fwrite($fp, $_POST['editQuantity1']."\n");
                  fwrite($fp, $_POST['editprice1']."\n");
                 fwrite($fp, $name[4]);
                  fwrite($fp, $name[5]);
                  fwrite($fp, $_POST['editQuantity2']."\n");
                  fwrite($fp, $_POST['editprice2']."\n");
                 fwrite($fp, $name[8]);
                  fwrite($fp, $name[9]);
                  fwrite($fp, $_POST['editQuantity3']."\n");
                  fwrite($fp, $_POST['editprice3']."\n");
                 fwrite($fp, $name[12]);
                  fwrite($fp, $name[13]);
                  fwrite($fp, $_POST['editQuantity4']."\n");
                  fwrite($fp, $_POST['editprice4']."\n");
                 fwrite($fp, $name[16]);
                  fwrite($fp, $name[17]);
                  fwrite($fp, $_POST['editQuantity5']."\n");
                  fwrite($fp, $_POST['editprice5']."\n");
                 fwrite($fp, $name[20]);
                  fwrite($fp, $name[21]);
                  fwrite($fp, $_POST['editQuantity6']."\n");
                  fwrite($fp, $_POST['editprice6']."\n");
                 fwrite($fp, $name[24]);
                  fwrite($fp, $name[25]);
                  fwrite($fp, $_POST['editQuantity7']."\n");
                  fwrite($fp, $_POST['editprice7']."\n");
                 fwrite($fp, $name[28]);
                  fwrite($fp, $name[29]);
                  fwrite($fp, $_POST['editQuantity8']."\n");
                  fwrite($fp, $_POST['editprice8']);
                  fclose($fp);
                 header("Location: assignment6.php");
             }
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
                  document.getElementById("editqua"+count3).value=Number(itemarr[i]);
                  count3++;
              }
              for (var i=3; i<itemarr.length; i+=4) {
                  document.getElementById("editpric"+count4).value=Number(itemarr[i]);
                  count4++;
              }
        </script>
    </body>
</html>