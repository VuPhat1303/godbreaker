<!--Xu ly-->
<?php 
    $sql_pro = "SELECT * FROM tbl_danhmuc,tbl_sanpham WHERE tbl_danhmuc.id_danhmuc=tbl_sanpham.id_danhmuc 
    ORDER BY tbl_sanphamn.id_sanpham DESC LIMIT 25";
    $query_pro = mysqli_query($mysqli,$sql_pro);
?>
    <div class="khoitieude text-xs-center">
        <h2> </h2>
        
    </div>
    
    <div class="container">
        <div class="row">
             <?php 
               while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
             ?>
                <div class="col-sm-4">
                    <div class="motspchuan">
                        <a class="duoi">
                            <img src="godbreaker/admincp/module/quanlysp/upload/<?php echo $row_pro['hinhanh'] ?>" >
                            <p class="price_prod">
                            <span class="price"><?php number_format($row_pro['giasp'],0,',','.').'vnd' ?></span>
                            </p>
                            <span style="font-weight: bolder;"><?php echo $row_pro['tensanpham'] ?></span>
                            <input type="number" name="" min="1" max="10" value="1" style="border: 1px solid black;border-radius: 4px; height: 25px; text-align: center; ";>
                            <a   onclick="them(this)" class="checkout btn btn-warning mt-2">Thêm Vào Giỏ Hàng</a>
                        </a>
                    </div>
                </div>
            <?php
            }
            ?>
            
            
            
            
            <div id="showcart">
                <table class="shop_table1 table fontroboto" >
                    <thead style="background-color: #eceeef ;">
                        <tr class="th">
                            <th class="product-thumbnail">Image</th>
                            <th class="product-name" >Product</th>
                            <th class="product-price">Price</th>
                            <th class="product-amount">Amount</th>
                            <th class="product-subtotal">Remove</th>
                        </tr>   
                    </thead>
                    <tbody  id="giohangchitiet" style="background-color: #f0AD4E ;">
                            
                    </tbody>
                    
                   
                </table>
                
            </div>
    </div>
        </div>
    </div>
    <!--End xu ly-->

    <!--Pagination-->
    <nav aria-label="Something " class="text-xs-center ">
        <ul class="pagination justify-content-center bg-light ">
            <li class="page-item disabled ">
                <a class="page-link " href="# " tabindex="-1 ">Previous</a>
            </li>
            <li class="page-item "><a class="page-link " href="# ">1</a></li>
            <li class="page-item "><a class="page-link " href="# ">2</a></li>
            <li class="page-item "><a class="page-link " href="# ">3</a></li>
            <li class="page-item ">
                <a class="page-link " href="# ">Next</a>
            </li>
        </ul>
    </nav>
    <!--End Pagination-->