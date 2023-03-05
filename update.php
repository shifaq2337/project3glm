<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Update List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans&family=Oswald&display=swap" rel="stylesheet">
</head>

<body>
    <?php require_once('assets/partials/nav.php'); ?>
    <?php require_once('behindlist.php'); ?>
    <div class="container mt-5 pt-5">
        <h1>Update Grocery List</h1>
        <form method="post">
            <div class="form-group">
                <label>Item name</label>
                <input type="text" class="form-control" name="iname" placeholder="Item name" value="<?php echo $res['Item_name'];?>" />
            </div><br>
            <div class="form-group">
                <label>Item quantity</label>
                <input type="text" class="form-control" name="iqty" placeholder="Item quantity" value="<?php echo $res['Item_Quantity'];?>" />
            </div><br>
            <div class="form-group">
                <label>Item status</label>
                <select class="form-control" name="istatus">
                    <?php
                            if($res['Item_status'] == 0) {
                            ?>
                    <option value="0" selected>Pending/Not Yet Bought</option>
                    <option value="1">Bought</option>
                    <option value="2">Not Available</option>
                    <?php } else if($res['Item_status'] == 1) { ?>
                    <option value="0">Pending/Not Yet Bought</option>
                    <option value="1" selected>Bought</option>
                    <option value="2">Not Available</option>

                    <?php } else if($res['Item_status'] == 2) { ?>
                    <option value="0">Pending/Not Yet Bought</option>
                    <option value="1">Bought</option>
                    <option value="2" selected>Not Available</option>
                    <?php
                            }
                        ?>

                </select>
            </div><br>
            <div class="form-group">
                <label>Date</label>
                <input type="date" class="form-control" name="idate" placeholder="Date" value="<?php echo $res['Date']?>">
            </div><br>
            <div class="form-group">
                <input type="submit" value="Update" name="btn" class="btn btn-danger">
            </div>
        </form>
    </div>
</body>

</html>
