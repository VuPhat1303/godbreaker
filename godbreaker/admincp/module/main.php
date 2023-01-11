<div class="clear"></div>
<div class="main">
    <?php
            if(isset($_GET['action']) && $_GET['query']){
                $tam = $_GET['action'];
                $query = $_GET['query'];
            }else{
                $tam = '';
                $query = '';
            }
             if($tam=='quanlydanhmucsanpham' && $query=='them'){
                include("module/quanlydanhmucsp/them.php");
                include("module/quanlydanhmucsp/lietke.php");
            }elseif ($tam=='quanlydanhmucsanpham' && $query=='sua'){
                include("module/quanlydanhmucsp/sua.php");
            }elseif ($tam=='quanlysp' && $query=='them'){
                include("module/quanlysp/them.php");
                include("module/quanlysp/lietke.php");
            }elseif($tam=='quanlysp' && $query=='sua')
                 include("module/quanlysp/sua.php");

            else{
                include("module/dashboard.php");
            }
    ?>
</div>
