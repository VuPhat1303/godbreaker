
<?php
    $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
    $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
    
?>



<div class="menu-list" style="height: 50px; text-align: center; ">

	<ul  style= "list-style: none;  display: block;  ">
    <?php 
   	 	while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
    ?>
		<li class="nav-item active">
		    <a  href="sanpham.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></a>
        </li>
    <?php 
    }   
    ?>
		
	</ul>

</div>
   
