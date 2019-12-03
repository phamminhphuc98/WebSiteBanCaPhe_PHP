<?php
require_once __DIR__ . "/autoload/autoload.php";


?>
<?php require_once __DIR__ . "/layout/header.php"; ?>
<link rel="stylesheet" href="form.css">
<h2>Thanh toán đơn hàng</h2>
<form action="" method="POST" class="form-horizontal" role="form">
    <div class="form-content">
        <div class="form">
                <label for="fname">First Name</label>
                <input type="text" id="fname" name="firstname" placeholder="Your name..">
                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                <input type="submit" value="Submit">      
              </div>
    </div>
</form>
<?php require_once __DIR__ . "/layout/footer.php";
