<?php
    include("connect.php");
    if(isset($_POST['btn']))
    {
        $item_name = $_POST['iname'];
        $item_qty = $_POST['iqty'];
        $istatus = $_POST['istatus'];
        $date = $_POST['idate'];
        $id = $_GET['id'];
        $q = "update grocerytb set Item_name='$item_name', Item_Quantity='$item_qty', Item_status='$istatus', Date='$date' where Id=$id";
        $query = mysqli_query($con,$q);
        header('location:list.php');
    } 
	else if(isset($_GET['id'])) 
	{
        $q = "SELECT * FROM grocerytb WHERE Id='".$_GET['id']."'";
        $query = mysqli_query($con,$q);
        $res = mysqli_fetch_array($query);
    }
?>