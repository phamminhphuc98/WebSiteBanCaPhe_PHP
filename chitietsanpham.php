<?php
require_once __DIR__. "/autoload/autoload.php";

$id = intval(getInput('id'));
$sql = "Select * from sanpham,loaisp where MaSP=$id AND sanpham.MaLoai=loaisp.MaLoai";
$sanpham = $db -> fetchsql($sql);

?>
<?php require_once __DIR__. "/layout/header.php"; ?>
<link rel="stylesheet" href="ChiTietSanPham.css">
<?php foreach($sanpham as  $item):?>
    <aside>
<div class="Product-info">
<div class="info-right">
    <div class="info-left">
    <img src="Images/<?php echo $item['HinhMinhHoa'] ?>" />
    </div>
        <h1><?php echo $item['TenSP'] ?></h1>
        <h2 style="display:none;"><?php echo $item['MaSP'] ?></h2>
        <div class="Description">
            <h3><strong>Thể loại:</strong></h3><h5><?php echo $item['TenLoai'] ?></h5>
            <p style="border-bottom: 1px dashed #e2e2e2"></p>
            <h3><strong>Đơn vị tính:</strong></h3><h5><?php echo $item['DonViTinh'] ?></h5>
        </div>
        <div class="Product-Price">
            <h3><strong>Giá bán:</strong></h3> <span><?php echo $item['DonGia'] ?></span>
        </div>
        <div class="Cart">
            <h3><strong>Số lượng:</strong></h3><h5><?php echo $item['SoLuong'] ?></h5>
            <p style="border-bottom: 1px dashed #e2e2e2"></p>
            <h3><strong>Trạng thái:</strong></h3><h5><?php echo $item['TrangThai'] ?></h5>
            <div id="SL">
                <button class="btn-Tru" onclick="Tru()">-</button>
                <input type="text" id="txtSL" value="1" />
                <button class="btn-Cong" onclick="Cong()">+</button>
            </div>
            <input type="button" id="btn-Cart" value="Thêm Vào Giỏ Hàng" onclick="DatHang(@Model.MaSP)" />
        </div>
        <div class="review">
            <i class="fa fa-star-o" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i>
            <span> Đánh Giá</span>
            <i>|</i>
            <span><a href="#frmRating">Viết Đánh Giá</a></span>
        </div>
        <?php endforeach ?>

    </div>

</div>
<div class="Tab">
    <a id="Tab-R">Đánh Giá</a>
    <a id="Tab-L">Mô Tả</a>

</div>
<div class="Tab-Description">
    <h3><?php echo $item['TenSP'] ?></h3>
    <h3 style="font-size:18px"><?php echo $item['MoTa'] ?></h3>
</div>
<div class="Tab-Review" id="idReview">
        <div>
            <div style="display:none" class="new-Cmt">
                <div class="review-list">
                    <div class="author">
                        <b></b>
                        Bình Luận Ngày: <span></span>
                    </div>
                    <div class="rating-review">
                    </div>
                    <div class="text-review">

                    </div>
                </div>
            </div>
    </div>
    <h3>Viết Đánh Giá</h3>
    <form class="frm-Rating" id="frmRating">
        <input type="text" id="MaSach" name="MaSach" value="@Model.MaSP" style="display:none;" />
        <input type="text" id="Ngay" name="Ngay" value="@DateTime.Now.ToString()" /><input disabled style="visibility:hidden" type="text" value="@Session["username"]" name="Name" id="txt-frmRating" />
        <span  id="txt-frmRating"></span>
        <br />
        <p>Bình luận Của Bạn:</p>
        <textarea name="Comment" id="erea-frmRating"></textarea>
        <br />
        <b>Đánh Giá:</b>
        <input type="radio" name="Rating" value="1" onclick="Star(1)" />
        <input type="radio" name="Rating" value="2" onclick="Star(2)" />
        <input type="radio" name="Rating" value="3" onclick="Star(3)" />
        <input type="radio" name="Rating" value="4" onclick="Star(4)" />
        <input type="radio" name="Rating" value="5" onclick="Star(5)" />
        <div class="btn-frmRating">
            <div>
                <input type="button" onclick="BinhLuan()" value="Đăng" class="btn-Rating" id="subRating" />
            </div>
        </div>
    </form>
</div>
</aside>
<script type="text/javascript">

    function BinhLuan() {
        var s = $('#txt-frmRating').val();
        if (s == "") {
            alert("Bạn cần đăng nhập đê bình luận về sản phẩm này !")
            window.location.href = "/Account/LoginSSO";
        }
       
        }



    
    //$('#btntimkiem').on('click', function () {
    //    var giatrinhapvao = $('#searchcontent').val();
    //    alert("yeu");
    //});
</script>
<script>
var SL = 1;
function Tru() {
    SL = document.getElementById("txtSL").value;
    if (isNaN(SL) == true) {
        SL = 1;
    }
    SL--;
    if (SL < 1) {
        SL = 1;
    }
    document.getElementById("txtSL").value = SL;
};
function Cong() {
    SL = document.getElementById("txtSL").value;
    if (isNaN(SL) == true) {
        SL = 1;
    }
    SL++;
    document.getElementById("txtSL").value = SL;
};

$(document).ready(function () {
    $('#Tab-R').click(function () {
        if ($('.Tab-Review').is(":hidden") == true) {
            $('.Tab-Review').css("display", "block")
            $('#Tab-R').css({ "background-color": "#fff", "padding-bottom": "13px" })
            $('.Tab-Description').css("display", "none");
            $('#Tab-L').css({ "background-color": "#eee", "padding-bottom": "11px" })
        }
    });
    $('#Tab-L').click(function () {
        if ($('.Tab-Description').is(":hidden") == true) {
            $('.Tab-Description').css("display", "block")
            $('#Tab-L').css({ "background-color": "#fff", "padding-bottom": "13px" })
            $('.Tab-Review').css("display", "none");
            $('#Tab-R').css({ "background-color": "#eee", "padding-bottom": "11px" })
        }
    });
});
</script>
<?php require_once __DIR__. "/layout/footer.php";


