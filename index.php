<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Grocery List Maker Home</title>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <?php require_once('assets/partials/nav.php'); ?>
        <div class="container mt-5">
            <h1>Grocery List Maker</h1>
            <form action="index.php" method="POST">
                <div class="form-group">
                    <label>Name of Item</label>
                    <input type="text" class="form-control" placeholder="Item name" name="iname"/>
                </div> <br>
                <div class="form-group">
                    <label>Quantity</label>
                    <input type="text" class="form-control" placeholder="Item quantity"  name="iqty"/>
                </div> <br>
                <div class="form-group">
                    <label>Availability &amp; Buying Status</label>
                    <select class="form-control" name="istatus">
                        <option value="0" >Pending/Not Yet Bought</option>
                        <option value="1">Bought</option>
                        <option value="2">Not Available</option>
                    </select>
                </div> <br>
                <div class="form-group">
                    <label>Date</label>
                    <input type="date" class="form-control" placeholder="Date" name="idate">
                </div> <br>
                <div class="form-group">
                    <input type="submit" value="Add" class="btn btn-danger" name="btn">
                </div>
            </form>
        </div>
		<?php
           if(isset($_POST["btn"]))
           {
	           include("connect.php");
               $item_name=$_POST['iname'];
               $item_qty=$_POST['iqty'];
               $item_status=$_POST['istatus'];
               $date=$_POST['idate'];
    

               $q="insert into grocerytb(Item_name,Item_Quantity,Item_status,Date)values('$item_name',$item_qty,'$item_status','$date')";

               mysqli_query($con,$q);
               header("location:list.php");

	 
            }
         ?>
		
    </body> 
</html>
