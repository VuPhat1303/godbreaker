<?php 
    $id = $_GET['id'];
    $sql_pro = "SELECT * FROM tbl_sanpham WHERE tbl_sanpham.id_danhmuc=$id ORDER BY id_sanpham DESC";
    $query_pro = mysqli_query($mysqli,$sql_pro);
  
   
    //đếm số lượng sp có trong danh mục

    $count = mysqli_num_rows($query_pro);
  
?>

    <?php 
      $sql_cate = "SELECT * FROM tbl_danhmuc WHERE tbl_danhmuc.id_danhmuc=$id LIMIT 1";
      $query_cate = mysqli_query($mysqli,$sql_cate);
     
      $row_title = mysqli_fetch_array($query_cate); //gọi tiêu đề với một biến mới ,1 biến ko gọi dc 2 lần fetch_array

        if($count>0){
        ?>
        <h2>DANH MỤC SẢN PHẨM : <?php echo $row_title['tendanhmuc'] ?></h2>
        <ul class="product_list">
                    <?php
                    while($row_pro = mysqli_fetch_array($query_pro)){
                    ?>
                    <li>
                        <a href="sanpham1.php?quanly=sanpham&id=<?php echo $row_pro['id_sanpham'] ?>">
                        <img src="godbreaker/admincp/module/quanlysp/upload/<?php echo $row_pro['hinhanh']?>">
                        <p class ="title_product"><?php echo $row_pro['tensp']?> </p></a>
                        <p class ="price_product"><?php echo number_format($row_pro['giasp']).' đ ' ?></p>
                    </li>
                    <?php
                    }
                    ?>    
        </ul>
     <?php
        }else{
        ?>
        <p>San pham chung toi dang cap nhat...</p>
<?php
}
?>
   

           

               