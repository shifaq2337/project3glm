<?php
    include("connect.php");

    if (isset($_POST['btn']))
    {
      $date=$_POST['idate'];
      $q="select * from grocerytb where Date='$date'";
      $query=mysqli_query($con,$q);
    } 
	else 
	{
      $q= "select * from grocerytb";
      $query=mysqli_query($con,$q);
    }
?>

<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>View Grocery List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans&family=Oswald&display=swap" rel="stylesheet">
</head>

<body>
    <?php require_once('assets/partials/nav.php'); ?>
    <div class="container mt-5 pt-5">
        <!-- top -->
        <div class="row">
            <div class="col-lg-8">
                <h1>View Grocery List</h1>
                <a href="index.php">Add Item</a>
            </div>
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-lg-8 mt-2">
                        <!-- Date Filtering-->
                        <form method="post" action="">
                            <input type="date" class="form-control" name="idate">
                    </div>
                    <div class="col-lg-4" method="post">
                        <input type="submit" class="btn btn-primary float-right rounded-pill" name="btn" value="Filter">
                    </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Grocery Cards -->
        <div class="row mt-4">

            <?php
                  while ($qq=mysqli_fetch_array($query)) 
                  {
                  
             ?>

            <div class="col-lg-4">
                <div class="card rounded border-success border-opacity-50">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $qq['Item_name']; ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?php echo $qq['Item_Quantity']; ?></h6>
                        <?php
                          if($qq['Item_status'] == 0) {
                          ?>
                        <p class="text-warning">Pending/Not Yet Bought</p>
                        <?php
                          } else if($qq['Item_status'] == 1) {
                          ?>
                        <p class="text-success">Bought</p>
                        <?php } else { ?>
                        <p class="text-danger">Not Available</p>
                        <?php } ?>
                        <p><?php echo $qq['Date']; ?></p>
                        <a href="delete.php?id=<?php echo $qq['Id']; ?>" class="card-link">Delete</a>
                        <a href="update.php?id=<?php echo $qq['Id']; ?>" class="card-link">Update</a>
                    </div>

                </div><br>
            </div>
            <?php
                  

                  }
                ?>

        </div>
    </div>
</body>

</html>
