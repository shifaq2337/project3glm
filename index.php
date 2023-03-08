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
        <div>
            <div class="text-center">
                <img src="assets/imgs/glmlogo.png">
            </div>
            <div>
                <p id="aboutpara" class="rounded p-2">The Grcoery List Maker(GLM) is a web-app created by Shifa Quddus. The purpose of GLM is to assist a person in making a responsive grocery list where they can update the status of whether an item has been bought, not yet bought or unavailable. The user is able to update the parameters such as name of item, quatity, status, and the date. Additionally, the user is able to delete any item as well. Once the user adds an item they will be directed to the View Grocery List page where they will be able to view items they added as well as filter items by date.</p>
            </div>
        </div>
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
            <div class="form-group text-center">
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
