<?php 
    $sql_pro = "SELECT * FROM tbl_danhmuc,tbl_sanpham WHERE tbl_danhmuc.id_danhmuc=tbl_sanpham.id_danhmuc 
    ORDER BY tbl_sanphamn.id_sanpham DESC LIMIT 25";
    $query_pro = mysqli_query($mysqli,$sql_pro);
?>
                <ul class="product_list">
                   <?php
                        while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
                    ?>
                    <li>
                        <a href="sanpham1.php?quanly=sanpham&id=<?php echo $row_pro['id_sanpham'] ?>">
                        <img src="gobreaker/admincp/module/quanlysp/upload/<?php echo $row_pro['hinhanh']?>">
                        <p class ="title_product"><?php echo $row_pro['tensp']?> </p></a>
                        <p class ="price_product"><?php echo number_format($row_pro['giasp']).' đ ' ?></p>
                    </li>
                    <?php
                    }
                    ?>    
                </ul>