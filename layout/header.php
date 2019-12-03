<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="BookManage.css">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css'
          integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    <link href="~/Content/Layout.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>

    <title>Document</title>
</head>

    <nav>
        <div class="topnav">

            <ul>
                <li>
                    <a href="index.php" class=" ">Trang Chủ</a>
                </li>
                <li>
                    <a href="#" class=" ">Giới Thiệu</a>
                </li>
                <li>
                    <a href="#" cl
                    ass=" ">Sản Phẩm</a>
                </li>
                <li><a href="">Tin tức- Bài viết</a></li>
                <li><a href="">Liên Hệ</a></li>
                <li><a href="">Language</a></li>
                <li>
                    <a href="giohang.php" class="rightz"> <i class="fa fa-shopping-cart"></i>Giỏ Hàng</a>
                </li>
                <?php if(isset($_SESSION['name_user'])): ?>
                    <li> 
                    <a class="rightz" href="#"></i>Xin chao <?php echo $_SESSION['name_user'] ?></a>
                </li>
                    <li>
                    <a class="rightz" href="dangxuat.php"></i>Đăng xuất</a>
                </li>
                <?php else :?>
                <li>
                    <a class="rightz" href="dangnhap.php"></i>Đăng nhập</a>
                </li>
                <?php endif ;?>
               
            </ul>
        </div>
    </nav>
    <header class="header">
        <div class="textbox">
            <h1 class="heading">
                <span class="heading-main">PMP COFFEE</span>
                <span class="heading-sub">COFFEE AND HEALTH</span>
            </h1>
            <a href="#" class="btn btn-animation">Go To Product</a>
        </div>
    </header>

