<?php ?>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Grocery List Maker (GLM)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans&family=Oswald&display=swap" rel="stylesheet">
</head>

<body>
    <?php require_once('assets/partials/nav.php'); ?>
    <div class="container mt-5 pt-5" id="aboutp">
        <h2>About Grocery List Maker(GLM)</h2>
        <p id="aboutpara" class="rounded p-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
    <div class="container mt-5">
        <h1>Grocery List Maker</h1>
        <form action="index.php" method="POST">
            <div class="form-group">
                <label>Name of Item</label>
                <input type="text" class="form-control" placeholder="Item name" name="iname"/>
            </div> <br>
            <div class="form-group">
                <label>Quantity</label>
                <input type="number" class="form-control" placeholder="Item quantity" name="iqty"/>
            </div> <br>
            <div class="form-group">
                <label>Availability &amp; Buying Status</label>
                <select class="form-control" name="istatus">
                    <option value="0">Pending/Not Yet Bought</option>
                    <option value="1">Bought</option>
                    <option value="2">Not Available</option>
                </select>
            </div> <br>
            <div class="form-group">
                <label>Date</label>
                <input type="date" class="form-control" placeholder="Date" name="idate">
            </div> <br>
            <div class="form-group">
                <input type="submit" value="Add" class="btn btn-danger btn-lg rounded-pill" name="btn">
            </div>
        </form>
    </div>
    <?php
           if(isset($_POST["btn"]))
           {
	           include("connect.php");
               $item_name = $_POST['iname'];
               $item_qty = $_POST['iqty'];
               $item_status = $_POST['istatus'];
               $date = $_POST['idate'];
    

               $q = "insert into grocerytb(Item_name,Item_Quantity,Item_status,Date)values('$item_name',$item_qty,'$item_status','$date')";

               mysqli_query($con,$q);
               header("location:list.php");

	 
            }
         ?>

</body>

</html>
