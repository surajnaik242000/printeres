<?php
    require('auth.php');
    require('getid.php');
    require('orderidgen.php');
    if(isset($_POST['submit']))
{
    $selected_size = $_POST['Size'];  
    $details = $_POST['details'];
    $order_id = generateon('tshirt',$db);
    $total=0;
    $odate = date('Y-m-d H:i:s') ;

    $queryo="   INSERT into table orders values '$order_id',$id , '$ad', $total ,-1,'$details size : $selected_size' , 'TSHIRT' , '$odate'
    "; 
}
?>
<DOCTYPE! html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PrintAnywhere</title>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="css/pay.css">
    </head>

    <body onload="username()">

        <section id="top">
            <b>PRINT ANYWHERE <sup>®</sup></b>
        </section>
       <div class="cupdetail">
            <center>
                <form id="slip">
                <h1><b>placement of the order</b></h1>
                <table>
                     <tr>
                        <td>cutomer name :</td>
                        <td id="username"></td>
                    </tr>
                    <tr>
                        <td>order object :</td>
                        <td id="object"></td>
                    </tr>
                    <tr>
                        <td>t-shirt size :</td>
                        <td id="size"></td>
                    </tr>
                    <tr>
                        <td>total cost :</td>
                        <td id="total"></td>
                    </tr>
                     <tr>
                        <td>order name :</td>
                        <td id="orderno"><?php echo"$order_id" ?></td> <!-- order number let it be combination username and something -->
                    </tr>
                     <tr>
                        
                        <td>image file :</td>
                        <td id="image"></td>
                    </tr>
                </table> </form>
               <button id="done" style="color: aliceblue; background-color: darkslategrey; box-shadow: 2px 2px 2px deepskyblue; width: 200px; height: 40px;" >place order</button>
                   
            </center>
        </div>
                  <footer id="makers" class="makers" style="position: fixed">
                <p style="align-items: left; text-align: center;"> By: <img src="img/Instagram-Logo.wine.png" width="20px" height="20px"><a href="https://www.instagram.com/steve_350/" style="color: white; text-decoration: none;">STEVE ASTON</a> and <img src="img/Instagram-Logo.wine.png" width="20px" height="20px"><a href="https://www.instagram.com/captured._.right/" style="color: white; text-decoration: none;">SURAJ K NAIK</a></p>
        </footer>
        <script type="text/javascript" src="java/tpay.js"></script>
    </body>
</html>