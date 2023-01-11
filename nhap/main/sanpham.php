<h1>Chi tiết sản phẩm</h1>
<?php 
    $id = $_GET['id'];
    $sql_chitiet = "SELECT * FROM tbl_danhmuc,tbl_sanpham WHERE tbl_danhmuc.id_danhmuc=tbl_sanpham.id_danhmuc AND tbl_sanpham.id_sanpham=$id LIMIT 1";
    $query_chitiet = mysqli_query($mysqli,$sql_chitiet);
    while($row_chitiet = mysqli_fetch_array($query_chitiet)){
?>
<div class="wrapper_chitiet">        
    <div class="hinhanh_sanpham">
        <img src="web_mysqli/admincp/module/quanlysp/upload/<?php echo $row_chitiet['hinhanh']?>">
    </div>
    <form method="POST"action="#">
        <div class="chitiet_sanpham">
            <h3><?php echo $row_chitiet['tensp']?></h3>
            <p><?php echo $row_chitiet['masp']?></p>
            <p><?php echo number_format($row_chitiet['giasp']).' đ ' ?></p>
            <p>SỐ LƯỢNG : <?php echo $row_chitiet['soluong']?></p>
            <p>DANH MỤC : <?php echo $row_chitiet['tendanhmuc']?></p>
            <p><input class="giohang"type="submit"value="Thêm vào giỏ hàng"></p>
        </div>
    </form>
</div>
<?php
}
?>