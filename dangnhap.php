<?php
require_once __DIR__ . "/autoload/autoload.php";
$data =[
'TenDN' => postInput("TenDN"),
'MatKhau' =>postInput("MatKhau")
];

$error =[];
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if($data['TenDN'] == '')
    {
        $error['TenDN']="Tên đăng nhập không được để trống !";
    }
    if($data['MatKhau'] == '')
    {
        $error['MatKhau']="Mật khẩu không được để trống !";
    }
    if(empty($error))
    {
        $check = $db -> fetchOne("khachhang","TenDN='".$data['TenDN']. "' AND MatKhau='".$data['MatKhau']."' ");
        if($check != NULL)
        {
            $_SESSION['name_user'] = $check['HoTenKH'];
            $_SESSION['id_user'] = $check['MaKH'];
            echo"<script>alert('Đăng nhập thành công'); location.href='index.php'</script>";

        }
        else
        {
            echo"<script>alert('Đăng nhập thất bại')</script>";

        }
    }

}
?>
<link rel="stylesheet" href="login.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>

<div class="login-ad">
    <!--Sử dụng beginform truy vấn đến phường thức post-->
    <form action="" method="POST" name="myForm" role="form">

        <div class="icon">
            <div class="icon1">
                <i class="fa fa-user" style="font-size:30px"></i>

            </div>
            <p style="color:white">Hi there! Please Sign in</p>


        </div>
        <div class="div-login">
            <input class="input-validation-error text-box single-line" data-val="true" id="TenDN" name="TenDN" placeholder="Email" type="text" value="">
    <?php if(isset($error['TenDN'])): ?>
        <p><?php echo $error["TenDN"] ?></p>
       <?php endif ?>
        </div>
        <div class="div-login">
            <input type="password" class="input-validation-error text-box single-line" data-val="true" id="MatKhau" name="MatKhau" placeholder="Password" value="">
            <?php if(isset($error['MatKhau'])): ?>
        <p><?php echo $error["MatKhau"] ?></p>
       <?php endif ?>
        </div>
        <div>
        </div>
        <div class="div-login"> <button type="submit" name="btnlogin" id="btnlogin" onclick="return validateLogin()"><i class='fas fa-arrow-right' style="font-size:24px; color:white"></i></button> </div>
    </form>


</div>
