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
                  <h2>Trang<span>Chủ </span></h2>
                  <h6 class="mb-0">Xin chào quý khách</h6>
                </div>
                <div class="col-lg-6 breadcrumb-right">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i class="pe-7s-home"></i></a></li>
                    <li class="breadcrumb-item">Trang chủ</li>
                    <li class="breadcrumb-item active">Home  </li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12 xl-100">
                <div class="row">
                  <div class="col-xl-3 xl-50 col-md-6 box-col-6">
                    <div class="card gradient-primary o-hidden">
                      <div class="card-body tag-card">
                        <div class="default-chart">
                          <div class="apex-widgets">
                            <div id="area-widget-chart"></div>
                          </div>
                          <div class="widgets-bottom">
                            <h5 class="f-w-700 mb-0">Số dư<span class="pull-right"><?=format_cash($my_vnd);?> <?=$site_currency;?></span></h5>
                          </div>
                        </div><span class="tag-hover-effect"><span class="dots-group"><span class="dots dots1"></span><span class="dots dots2 dot-small"></span><span class="dots dots3 dot-small"></span><span class="dots dots4 dot-medium"></span><span class="dots dots5 dot-small"></span><span class="dots dots6 dot-small"></span><span class="dots dots7 dot-small-semi"></span><span class="dots dots8 dot-small-semi"></span><span class="dots dots9 dot-small"></span></span></span>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 xl-50 col-md-6 box-col-6">
                    <div class="card gradient-secondary o-hidden">
                      <div class="card-body tag-card">
                        <div class="default-chart">
                          <div class="apex-widgets">
                            <div id="area-widget-chart-2"></div>
                          </div>
                          <div class="widgets-bottom">
                            <h5 class="f-w-700 mb-0">Tổng Order<span class="pull-right"><?=format_cash($total_donhang);?></span></h5>
                          </div>
                        </div><span class="tag-hover-effect"><span class="dots-group"><span class="dots dots1"></span><span class="dots dots2 dot-small"></span><span class="dots dots3 dot-small"></span><span class="dots dots4 dot-medium"></span><span class="dots dots5 dot-small"></span><span class="dots dots6 dot-small"></span><span class="dots dots7 dot-small-semi"></span><span class="dots dots8 dot-small-semi"></span><span class="dots dots9 dot-small"></span></span></span>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 xl-50 col-md-6 box-col-6">
                    <div class="card gradient-warning o-hidden">
                      <div class="card-body tag-card">
                        <div class="default-chart">
                          <div class="apex-widgets">
                            <div id="area-widget-chart-3"></div>
                          </div>
                          <div class="widgets-bottom">
                            <h5 class="f-w-700 mb-0">Total Stock<span class="pull-right">70 / 100   </span></h5>
                          </div>
                        </div><span class="tag-hover-effect"><span class="dots-group"><span class="dots dots1"></span><span class="dots dots2 dot-small"></span><span class="dots dots3 dot-small"></span><span class="dots dots4 dot-medium"></span><span class="dots dots5 dot-small"></span><span class="dots dots6 dot-small"></span><span class="dots dots7 dot-small-semi"></span><span class="dots dots8 dot-small-semi"></span><span class="dots dots9 dot-small">     </span></span></span>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 xl-50 col-md-6 box-col-6">
                    <div class="card gradient-info o-hidden">
                      <div class="card-body tag-card">
                        <div class="default-chart">
                          <div class="apex-widgets">
                            <div id="area-widget-chart-4"></div>
                          </div>
                          <div class="widgets-bottom">
                            <h5 class="f-w-700 mb-0">Total Value<span class="pull-right">70 / 100   </span></h5>
                          </div>
                        </div><span class="tag-hover-effect"><span class="dots-group"><span class="dots dots1"></span><span class="dots dots2 dot-small"></span><span class="dots dots3 dot-small"></span><span class="dots dots4 dot-medium"></span><span class="dots dots5 dot-small"></span><span class="dots dots6 dot-small"></span><span class="dots dots7 dot-small-semi"></span><span class="dots dots8 dot-small-semi"></span><span class="dots dots9 dot-small">     </span></span></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-6 xl-100 box-col-12">
                <div class="card">
                  <div class="card-header no-border">
                    <h5>Lịch Sử Order</h5>
                    <ul class="creative-dots">
                      <li class="bg-primary big-dot"></li>
                      <li class="bg-secondary semi-big-dot"></li>
                      <li class="bg-warning medium-dot"></li>
                      <li class="bg-info semi-medium-dot"></li>
                      <li class="bg-secondary semi-small-dot"></li>
                      <li class="bg-primary small-dot"></li>
                    </ul>
                    <div class="card-header-right">
                      <ul class="list-unstyled card-option">
                        <li><i class="icofont icofont-gear fa fa-spin font-primary"></i></li>
                        <li><i class="view-html fa fa-code font-primary"></i></li>
                        <li><i class="icofont icofont-maximize full-card font-primary"></i></li>
                        <li><i class="icofont icofont-minus minimize-card font-primary"></i></li>
                        <li><i class="icofont icofont-refresh reload-card font-primary"></i></li>
                        <li><i class="icofont icofont-error close-card font-primary"></i></li>
                      </ul>
                    </div>
                  </div>
                  <div class="card-body pt-0">
                    <div class="activity-table table-responsive">
                      <table class="table table-bordernone">
                        <tbody>
                          <tr>
                          <th class="text-center" scope="col">MÃ GD</th>
                          <th class="text-center" scope="col">DỊCH VỤ</th>
                          <th class="text-center" scope="col">INPUT</th>
                          <th class="text-center" scope="col">SỐ LƯỢNG</th>
                          <th class="text-center" scope="col">TỔNG TIỀN</th>
                          <th class="text-center" scope="col">THỜI GIAN TẠO</th>
                          <th class="text-center" scope="col">CẬP NHẬT</th>
                          <th class="text-center" scope="col">TRẠNG THÁI</th>
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