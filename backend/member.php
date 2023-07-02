<!DOCTYPE html>
<html lang="en">
<head>
<?php include('h.php');
error_reporting( error_reporting() & ~E_NOTICE );
?>
    <meta charset="UTF-8">
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
        <div class="col-md-9">
        <a href="member.php?act=add" class="btn-info btn-sm">เพิ่ม</a>
        <p></p>
        <?php
            $act = $_GET['act'];
            if($act == 'add'){
            include('member_from_add.php');
                    }else if ($act == 'edit') {
             include('member_from_edit.php');
                    }else {
            include('member_list.php');  //ฟังก์ชั่นการลิงค์หน้า member
            }
        ?>
           
        </div>
    </div>
</body>
</html>