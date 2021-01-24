<?php include ('head.php'); ?>
<?php include ('config.php'); ?>
<?php include ('nav.php'); ?>
<head>
<title>Trang Chủ | <?=$site_tenweb;?> </title>
</head>
        <!-- Right sidebar Ends-->
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-lg-6 main-header">
                  <h2>Đặt<span>Hàng </span></h2>
                  <h6 class="mb-0">Xin chào quý khách</h6>
                </div>
                <div class="col-lg-6 breadcrumb-right">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i class="pe-7s-home"></i></a></li>
                    <li class="breadcrumb-item">Home</li>
                    <li class="breadcrumb-item active">Order </li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <div class="container-fluid mt--7">
      <div class="row">

<?php
$result = mysqli_query($ketnoi,"SELECT * FROM `category` ");
while($row = mysqli_fetch_assoc($result))
{
?>
        <div class="col-xl-4 mt-3">
          <div class="card shadow">
            <div class="card-header bg-transparent">
              <div class="row align-items-center">
                <div class="col">
                  <h2 class="mb-0"><i class="ni ni-shop"></i> <?=$row['name'];?> <i class="ni ni-shop"></i></h2>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="card">
                <a href="/order/<?=$row['code'];?>" class="btn btn-primary"> XEM THÊM <i class="ni ni-check-bold"></i></a>
              </div>
            </div>
          </div>
        </div>
<?php }?>

      </div>
<?php include ('script.php'); ?>
<?php include ('foot.php'); ?>