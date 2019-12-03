<?php
require_once __DIR__ . "/autoload/autoload.php";
$user = $db -> fetchIDKH("khachhang",intval($_SESSION['id_user']));
$time =date('Y/m/d');
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $data=[
        'TriGia'=> $_SESSION['tongtien'],
        'MaKH'=> $_SESSION['id_user'],
        'NgayDH'=>$time,
        'TrangThai'=>"Đang giao",
        'TenNguoiNhan'=>$user['HoTenKH'],
        'DiaChiNhan'=>$user['DiaChiKH'],
        'DienThoaiNhan'=>$user['DienThoaiKH'],

    ];

    $idonhang = $db->insert("dondathang",$data);

    if($idonhang >0)
    {
       foreach ($_SESSION['cart'] as $key => $value)
       {
           $data2 =
           [
            'SoDH'=>  $idonhang,
            'MaSP'=> $value['masp'],
            'SoLuong'=> $value['soluong'],
            'DonGia'=> $value['dongia'],
            'ThanhTien'=>intval($value['soluong']) * intval($value['dongia'])
           ];
           $idctdonhang=$db->insert("ctdonhang",$data2);


       }
       unset($_SESSION['cart']);
       unset($_SESSION['tongtien']);
       $_SESSION['thanhcong']="Lưu thông tin đơn hàng thành công! Chúng tôi sẽ liên hệ với bạn sớm nhất!"; 
       header("location:thongbao.php");
    }
}

?>
<?php require_once __DIR__ . "/layout/header.php"; ?>
<link rel="stylesheet" href="form.css">
<h2>Thanh toán đơn hàng</h2>
<form action="" method="POST" class="form-horizontal" role="form">
    <div class="form-content">
        <div class="form">
                <label for="fname">Tên khách hàng:</label>
                <input type="text" readonly="" id="HoTenKH" name="HoTenKH" placeholder="Họ Tên KH" value="<?php echo $user['HoTenKH'] ?>">
                <label for="lname">Địa chỉ:</label>
                <input type="text" readonly="" id="DiaChiKH" name="DiaChiKH" placeholder="Địa chỉ" value="<?php echo $user['DiaChiKH'] ?>">
                <label for="lname">Điện thoại:</label>
                <input type="text" readonly=""id="DienThoaiKH" name="DienThoaiKH" placeholder="Số điện thoại" value="<?php echo $user['DienThoaiKH'] ?>">
                <label for="lname">Email:</label>
                <input type="text" readonly="" id="Email" name="Email" placeholder="Email" value="<?php echo $user['Email'] ?>">
                <label for="lname">Tổng tiền:</label>
                <input type="text" readonly="" id="Email" name="Email" placeholder="Email" value="<?php echo $_SESSION['tongtien'] ?>.VNĐ">
                <input type="submit" value="Submit">      
              </div>
    </div>
</form>
<?php require_once __DIR__ . "/layout/footer.php";
