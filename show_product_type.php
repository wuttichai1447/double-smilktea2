<?php
    $type_id = $_GET['type_id'];
    // echo $type_id;
    // exit();



    $query_product_type ="SELECT * FROM tbl_product as p
    -- t ย่อมาจาก type  p ย่อมาจาก product 
    INNER JOIN tbl_type as t   
    ON p.type_id = t.type_id
    where p.type_id = $type_id
     ORDER BY p.p_id ASC";
    $result_pro =mysqli_query($con, $query_product_type) or die ("Error in query:$query_product_type" . mysqli_error());

    // echo $query_product_type;
    // exit();
?>
    <div class="row">
<?php foreach ($result_pro as $row_pro) { ?>

<div class="card text-white bg-secondary mb-3" style="width: 10rem; margin-top:8px">
  <img class="card-img-top" src="backend/p_img/<?php echo $row_pro['p_img'] ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $row_pro['p_name'] ?></h5>
  
    <p class="card-text">
        ประเภท: <?php echo $row_pro['type_name'];  ?>
    </p>
    <center><a href="product_detail.php?id=<?php echo $row_pro['p_id']?>" class="btn btn-primary">รายละเอียด</a><center>
  </div>
</div>
<?php }?>
