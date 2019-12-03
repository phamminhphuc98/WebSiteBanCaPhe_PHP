<?php
require_once __DIR__. "/autoload/autoload.php";
$sqlnew = "Select DISTINCT * from  sanpham,loaisp where sanpham.Maloai = loaisp.Maloai AND sanpham.MaLoai=5";
$sanpham = $db -> fetchsql($sqlnew);

?>
<?php require_once __DIR__. "/layout/header.php"; ?>
<link rel="stylesheet" href="index.css">
<h6><strong>MÁY XAY CÀ PHÊ</strong></h6>
<hr />
<form action="" method="post">
    <div class="book-content">
    <?php foreach($sanpham as  $item):?>

            <div id="sanpham">  
                <div id="anhbia"><img src="Images/<?php echo $item['HinhMinhHoa'] ?>" /></div>
                <div id="tensach"><?php echo $item['TenSP']?></div>
                <div id="tieude">
                <?php echo $item['TenLoai'] ?>
                </div>
                <div class="price">
                    
                    <span id="agia"><?php echo $item['DonGia']?></span>
                </div>
                <div class="tooltip-content">
                    <ul>
                        <li class="tooltip-li li1"><a id="txtmua" onclick="DatHang()"><i class="fa fa-shopping-basket"></i></a></li>
                        <li class="tooltip-li li2"><a id="myBtn" onclick="Poppup()"><i class="fa fa-exchange"></i></a></li>
                        <li class="tooltip-li li3"><a href="~/ViewSP/ChiTietSanPham?MaSP=@item.MaSP"><i class="fa fa-eye" style="color:black"></i></a></li>
                    </ul>
                </div>
            </div>
            <div id="myModal" class="modal">
                <!-- Modal content -->
                <div class="modal-content">
                    <div class="modal-header">
                        <h2>THÔNG TIN SẢN PHẨM</h2>
                        <span class="close">&times;</span>


                    </div>
                    <div class="modal-body">
                    </div>
                    <div class="modal-footer">

                    </div>
                </div>
            </div>
            <?php endforeach ?>

    </div>

</form>
