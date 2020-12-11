<?php
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body class="bg-dark">
    <div class="alert alert-success">
        <h4 class="alert-heading " >Hey, <?php echo $_SESSION['username']; ?>!</h4>
        <hr>
        <p >You are now in user dashboard page.</p>
         </div>
    <div class="container border p-5 ">
      <div class="col-sm-12 bg-">
      <table class="table table-hover table-dark">
    <thead>
      <tr>
        <th>Order ID</th>
        <th>Order Amount</th>
        <th>Payment Status</th>
        <th>Order Date</th>
      </tr>
    </thead>
    <tbody>
    
    <?php
      require('define.php');
      $query_1 = " SELECT u1.username,u1.id FROM  user_details u1 WHERE u1.username='".$_SESSION['username']."'";
        $result_1 = mysqli_query($db,$query_1);
        if(mysqli_num_rows($result_1)==1)
        {
          $row = mysqli_fetch_assoc($result_1);
          $id= $row['id'];
        }
      $selecto= " SELECT order_no , o_address, o_amt,o_payment,o_date from orders where user_id=$id";
      $resulto=mysqli_query($db,$selecto);
      $numrows=mysqli_num_rows($resulto);
      if($numrows>0)
      {
        while($row=mysqli_fetch_assoc($resulto))
        {
          $onum=$row['order_no'];
          $amt=$row['o_amt'];
          $pay=$row['o_payment'];
          if($pay==-1)
          {
            $pay="Not Paid ";
          }
          $odate=$row['o_date'];
          echo
          "
            <tr>
            <td>
            $onum
            </td>
            <td>
            $amt
            </td>
            <td>
            $pay
            </td>
            <td>
            $odate
            </td>
            <tr>
          ";
        }
      }

    ?>
  </tbody>
</table>
  </div>
   <div class="col-sm-12 border bg-light rounded ">
   	<div class="row">
        <span class="col-sm-6 text-center btn btn-light"><a href="/printeres/html/consume.html">Go to Shop</a></span>
        <span class="col-sm-6 text-center btn btn-light"><a href="logout.php">Logout</a></span>
   	</div>
   </div>
 </div>
  </button>
</div>
</body>
</html>