<?php
require_once __DIR__ . "/autoload/autoload.php";
$id = intval(getInput('id'));

$sanpham = $db->fetchID("sanpham", $id);
if( ! isset($_SESSION['cart'][$id]))
{
$_SESSION['cart'][$id]['tensp']= $sanpham['TenSP'];
$_SESSION['cart'][$id]['masp']= $sanpham['MaSP'];
$_SESSION['cart'][$id]['donvitinh']= $sanpham['DonViTinh'];
$_SESSION['cart'][$id]['hinhminhhoa']= $sanpham['HinhMinhHoa'];
$_SESSION['cart'][$id]['dongia']= $sanpham['DonGia'];
$_SESSION['cart'][$id]['soluong']= 1;
}
else
{
$_SESSION['cart'][$id]['soluong']+=1;

}
echo"<script> alert('Thêm sản phẩm thành công'); location.href='giohang.php'</script>";?>

