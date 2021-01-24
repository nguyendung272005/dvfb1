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
                  <h2>Hoạt<span>Động </span></h2>
                  <h6 class="mb-0">Xin chào quý khách</h6>
                </div>
                <div class="col-lg-6 breadcrumb-right">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i class="pe-7s-home"></i></a></li>
                    <li class="breadcrumb-item">Home</li>
                    <li class="breadcrumb-item active">Log  </li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
                  <div class="card-body pt-0">
                    <div class="activity-table table-responsive">
                      <table class="table table-bordernone">
                        <tbody>
                          <tr>
                          <th class="text-center" scope="col">USER</th>
                          <th class="text-center" scope="col">DỊCH VỤ</th>
                          <th class="text-center" scope="col">SỐ LƯỢNG</th>
                          <th class="text-center" scope="col">TỔNG TIỀN</th>
                          <th class="text-center" scope="col">THỜI GIAN TẠO</th>
                          <th class="text-center" scope="col">GHI CHÚ</th>
                            <!-- <td>
                              <div class="activity-time"><span class="font-primary f-w-700">1 Day Ago</span><span class="d-block light-text">Your Work Deadline 18<sup>th</sup></span></div>
                            </td> -->
                          </tr>
                        </tbody>
                        <?php
$result = mysqli_query($ketnoi,"SELECT * FROM `orders` WHERE `username` = '".$my_username."' ORDER BY id desc limit 0, 100");
while($row = mysqli_fetch_assoc($result))
{
?>
                  <tr>
                    <th scope="row">
                      <?=$row['code'];?>
                    </th>
                    <td class="text-center">
                      <span class="badge badge-default"><b class="text-white"><?=$row['service_name'];?></b></span>
                    </td>
                    <td class="text-center"><?=$row['url'];?></td>
                    <td class="text-center">
                      <b style="color: blue;"><?=format_cash($row['amount']);?></b>
                    </td>
                    <td class="text-center">
                      <b style="color: red;"><?=format_cash($row['money']);?></b> <?=$site_currency;?>
                    </td>
                    <td class="text-center"><?=$row['createdate'];?></td>
                    <td class="text-center"><?=$row['updatedate'];?></td>
                    <td class="text-center"><?=status($row['status']);?></td>
                    <td class="text-center"><?=$row['note_status'];?></td>
                  </tr>
<?php } ?>
                </tbody>
              </table>
              </div>
                </div>
              </div>
<?php include ('script.php'); ?>
<?php include ('foot.php'); ?>