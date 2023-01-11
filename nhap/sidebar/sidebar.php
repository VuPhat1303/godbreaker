<?php
   $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
   $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
?>
<div class="menu">
                <ul class="listmenu" style= "list-style-type: none; "   >
                    <?php
                    while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
                    ?>
                    <li> <a  href="sanpham1.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc']  ?></a></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>