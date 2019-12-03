<?php
require_once __DIR__. "/autoload/autoload.php";
$sqlnew = "Select DISTINCT * from  sanpham,loaisp where sanpham.Maloai = loaisp.Maloai AND DonViTinh NOT IN ('Máy')";
$sanpham = $db -> fetchsql($sqlnew);
// unset($_SESSION['cart']);
?>
<?php require_once __DIR__. "/layout/header.php"; ?>
<link rel="stylesheet" href="index.css">
<div class="title">
        <h6><strong>TẤT CẢ SẢN PHẨM</strong></h6>  <div class="search-container">
        <form action="/Home/timkiem">
            <input type="text" id="searchcontent" placeholder="Search.." name="name">
            <button id="btntimkiem" type="submit"><i class="fa faB-search"></i></button>
        </form>
    </div>
    <hr>
</div>
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
                        <li class="tooltip-li li1"><a href="addcard.php?id=<?php echo $item['MaSP'] ?>" id="txtmua"><i class="fa fa-shopping-basket"></i></a></li>
                        <li class="tooltip-li li2"><a id="myBtn" onclick="Poppup()"><i class="fa fa-exchange"></i></a></li>
                        <li class="tooltip-li li3"><a href="chitietsanpham.php?id=<?php echo $item['MaSP'] ?>"><i class="fa fa-eye" style="color:black"></i></a></li>
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
<div class="special">
<?php require_once __DIR__. "/maypha.php"; ?>
</div>
<div class="special">
<?php require_once __DIR__. "/mayxay.php"; ?>
</div>
   <script>
    // Get the modal
    var modelz = document.getElementById("myModal");

    // Get the button that opens the modal

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];
    var btn = document.getElementById("myBtn");

    // When the user clicks the button, open the modal

    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
        modelz.style.display = "none";
    }


    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modelz) {
            modal.style.display = "none";
        }
    }
</script>

<?php require_once __DIR__. "/layout/footer.php";
 ?>
