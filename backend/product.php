<!DOCTYPE html>
<html lang="en">
<head>
<?php include('h.php');
error_reporting( error_reporting() & ~E_NOTICE );
?>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
<?php include('navbar.php');?>
    <p></p>
       <div class="row">
        <div class="col-md-3">
        สวัสดี คุณ <?php echo $a_name; ?> 
            <?php include('menu_left.php');?>
        </div>
        <div class="col-md-8">
        <a href="product.php?act=add" class="btn-info btn-sm">เพิ่ม</a>
        <p></p>
        <?php
            $act = $_GET['act'];
            if($act == 'add'){
            include('product_from_add.php');
                    }else if ($act == 'edit') {
             include('product_from_edit.php');
                    }else {
            include('product_list.php');
            }
        ?>
           
        </div>
    </div>
</body>
</html>