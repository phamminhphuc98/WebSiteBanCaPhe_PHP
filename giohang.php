<?php
require_once __DIR__ . "/autoload/autoload.php";
$sum = 0;
?>
<?php require_once __DIR__ . "/layout/header.php"; ?>

<link rel="stylesheet" href="giohang.css">
<br>
<h3>Giỏ hàng của bạn</h3>
<br>
<div class="Cart-info">
    <table>
        <thead>
            <tr>
                <td>Số thứ tự</td>
                <td>Hình Sản Phẩm</td>
                <td>Tên Sản Phẩm</td>
                <td>Số Lượng Sản Phẩm</td>
                <td>Đơn Giá</td>
                <td>Tổng Tiền</td>
            </tr>
        </thead>
        <tbody>
            <?php $stt = 1; foreach ($_SESSION['cart'] as $key => $cart): ?>

                    <tr>
                        <td><?php echo $stt?></td>
                        <td><a href="#"><img src="Images/<?php echo $cart['hinhminhhoa'] ?>" /></a></td>
                        <td><?php echo $cart['tensp'] ?></td>
                        <td><input type="number" name="soluong" min="0" id="@item.MaSP" class="txtSLGH" value="<?php echo $cart['soluong'] ?>" /><a class="fa fa-upload btn-Update" onclick="CapNhat(@item.MaSP)" aria-hidden="true"></a><a class="fa fa-trash-o btn-Delete" aria-hidden="true" onclick="XoaSP(@item.MaSP)"></a></td>
                        <td><span id="DonGia"><?php echo $cart['dongia'] ?></span></td>
                        <td><?php echo  $cart['soluong'] * $cart['dongia'] ?></td>
                    </tr>
                    <?php $sum += $cart['dongia'] * $cart['soluong']; $_SESSION['tongtien']= $sum; ?>
            <?php $stt ++; endforeach ?>      
 </tbody>
    </table>
    <br>
    <div id="TongTien">
    <h4>Tổng Cộng: <span id="tongtien"></span><?php echo $_SESSION['tongtien']?>VND</h4>    <input style="visibility:hidden" value="@Session["username"]" id="checkemail" /><p style="float:right;"><a href="index.php" class="btn btn-success">Tiếp tục mua</a> <a href="" class="btn btn-success">Thanh toán</a>
</p>

</div>

<?php require_once __DIR__ . "/layout/footer.php";
