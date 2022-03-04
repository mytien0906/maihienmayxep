
  <?php
  session_start();
  require_once ('./Model/UserModel.php');
//    include "/head.php";
   if(!isset($_SESSION['admin_login'])){
    header("Location:login.php");
   }
$userModel = new UserModel();

if((isset($_POST['month']) && $_POST['month'] != '') && (isset($_POST['year']) && $_POST['year'] != ''))
    {
        $time = $_POST['year'].'-'.$_POST['month'].'-1';
        $date = strtotime($time);
    }
    else
    {
        $date = strtotime(date('y-m-d')); 
    }

    $day = date('d', $date);
    $month = date('m', $date);
    $year = date('Y', $date);
    $firstDay = mktime(0,0,0,$month, 1, $year);
    $title = strftime('%B', $firstDay);
    $dayOfWeek = date('D', $firstDay);
    $daysInMonth = cal_days_in_month(0, $month, $year);
    $timestamp = strtotime('next Sunday');
    $weekDays = array();

    for($i=0;$i<7;$i++)
    {
        $weekDays[] = strftime('%a', $timestamp);
        $timestamp = strtotime('+1 day', $timestamp);
    }

    $blank = date('w', strtotime("{$year}-{$month}-01"));

$getAllCouter = $userModel->getAllCouter();
// $thang = date ('m', $getAllCouter[0]['date']);
// var_dump($year);die();
if(empty($_POST['submit'])){
    $year_vl = 2022;
    $getAllCountBy_mot = $userModel->getAllCountByMonth(1,$year_vl);
    $getAllCountBy_hai = $userModel->getAllCountByMonth(2,$year_vl);
    $getAllCountBy_ba = $userModel->getAllCountByMonth(3,$year_vl);
    $getAllCountBy_bon = $userModel->getAllCountByMonth(4,$year_vl);
    $getAllCountBy_nam = $userModel->getAllCountByMonth(5,$year_vl);
    $getAllCountBy_sau = $userModel->getAllCountByMonth(6,$year_vl);
    $getAllCountBy_bay = $userModel->getAllCountByMonth(7,$year_vl);
    $getAllCountBy_tam = $userModel->getAllCountByMonth(8,$year_vl);
    $getAllCountBy_chin = $userModel->getAllCountByMonth(9,$year_vl);
    $getAllCountBy_muoi = $userModel->getAllCountByMonth(10,$year_vl);
    $getAllCountBy_muoimot = $userModel->getAllCountByMonth(11,$year_vl);
    $getAllCountBy_muoihai = $userModel->getAllCountByMonth(12,$year_vl);
}
if(isset($_POST['submit'])){
    $month_vl = $_POST['month'];
    $year_vl = $_POST['year'];
    $getAllCountBy_mot = $userModel->getAllCountByMonth(1,$year_vl);
    $getAllCountBy_hai = $userModel->getAllCountByMonth(2,$year_vl);
    $getAllCountBy_ba = $userModel->getAllCountByMonth(3,$year_vl);
    $getAllCountBy_bon = $userModel->getAllCountByMonth(4,$year_vl);
    $getAllCountBy_nam = $userModel->getAllCountByMonth(5,$year_vl);
    $getAllCountBy_sau = $userModel->getAllCountByMonth(6,$year_vl);
    $getAllCountBy_bay = $userModel->getAllCountByMonth(7,$year_vl);
    $getAllCountBy_tam = $userModel->getAllCountByMonth(8,$year_vl);
    $getAllCountBy_chin = $userModel->getAllCountByMonth(9,$year_vl);
    $getAllCountBy_muoi = $userModel->getAllCountByMonth(10,$year_vl);
    $getAllCountBy_muoimot = $userModel->getAllCountByMonth(11,$year_vl);
    $getAllCountBy_muoihai = $userModel->getAllCountByMonth(12,$year_vl);
    // echo(count($getAllCountBy_mot) );die();
}
 
// var_dump(count($getAllCountBy_ba));die();
?>
<!-- Main content -->

<div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <?php include "/header.php" ?>
      <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_settings-panel.html -->
        <?php include "/menu.php" ?>
        <!-- partial -->
        <div class="main-panel">
        <div class="content-wrapper">
        <div class="card-header">
            <h5 class="mb-0">Thống kê truy cập năm <?=$year?></h5>
           </div>
           <div class="card-body">
            <form class="form-filter-charts row align-items-center mb-1" action="index.php" method="post" name="form-thongke" accept-charset="utf-8">
                <div class="col-md-4">
                    <div class="form-group">
                        <select class="form-control select2" name="year" id="year">
                            <option value="">Chọn năm</option>
                            <?php for($i=2022;$i<=date('Y')+10;$i++) { ?>
                                <?php
                                if(isset($_POST['year'])) $selected = ($i==$_POST['year']) ? 'selected':'';
                                else $selected = ($i==date('Y')) ? 'selected':'';
                                ?>
                                <option value="<?=$i?>" <?=$selected?>>Năm <?=$i?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group"><button type="submit" name="submit" class="btn btn-success">Thống Kê</button></div>
                </div>
            </form>
            <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Line chart</h4>
                  <canvas id="lineChart"></canvas>
                </div>
              </div>
            </div>
          </div>
           </div>
          
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2018 <a href="https://www.urbanui.com/" target="_blank">Urbanui</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
        <!-- main-panel ends -->
    </div>
      <!-- page-body-wrapper ends -->
</div>

<!-- <script src="../Admin/apexcharts/apexcharts.min.js"></script> -->
<script>
$(function() {
  /* ChartJS
   * -------
   * Data and config for chartjs
   */
  'use strict';
  var data = {
    labels: ["T1","T2","T3","T4","T5","T6","T7","T8","T9","T10","T11","T12"],
    datasets: [{
      label: '# of Votes',
      data: [<?= count($getAllCountBy_mot) ?>, <?= count($getAllCountBy_hai) ?>, <?= count($getAllCountBy_ba) ?>, <?= count($getAllCountBy_bon) ?>, <?= count($getAllCountBy_nam) ?>, <?= count($getAllCountBy_sau) ?>, <?= count($getAllCountBy_bay) ?>, <?= count($getAllCountBy_tam) ?>, <?= count($getAllCountBy_chin) ?>, <?= count($getAllCountBy_muoi) ?>, <?= count($getAllCountBy_muoimot) ?>, <?= count($getAllCountBy_muoihai) ?>],
      backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(255, 159, 64, 0.2)'
      ],
      borderColor: [
        'rgba(255,99,132,1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(153, 102, 255, 1)',
        'rgba(255, 159, 64, 1)'
      ],
      borderWidth: 1,
      fill: false
    }]
  };
  
  var options = {
    scales: {
      yAxes: [{
        ticks: {
          beginAtZero: true
        }
      }]
    },
    legend: {
      display: false
    },
    elements: {
      point: {
        radius: 0
      }
    }

  };
  
  

  

  var multiAreaOptions = {
    plugins: {
      filler: {
        propagate: true
      }
    },
    elements: {
      point: {
        radius: 0
      }
    },
    scales: {
      xAxes: [{
        gridLines: {
          display: false
        }
      }],
      yAxes: [{
        gridLines: {
          display: false
        }
      }]
    }
  }

  var scatterChartData = {
    datasets: [{
        label: 'First Dataset',
        data: [{
            x: -10,
            y: 0
          },
          {
            x: 0,
            y: 3
          },
          {
            x: -25,
            y: 5
          },
          {
            x: 40,
            y: 5
          }
        ],
        backgroundColor: [
          'rgba(255, 99, 132, 0.2)'
        ],
        borderColor: [
          'rgba(255,99,132,1)'
        ],
        borderWidth: 1
      },
      {
        label: 'Second Dataset',
        data: [{
            x: 10,
            y: 5
          },
          {
            x: 20,
            y: -30
          },
          {
            x: -25,
            y: 15
          },
          {
            x: -10,
            y: 5
          }
        ],
        backgroundColor: [
          'rgba(54, 162, 235, 0.2)',
        ],
        borderColor: [
          'rgba(54, 162, 235, 1)',
        ],
        borderWidth: 1
      }
    ]
  }

  var scatterChartOptions = {
    scales: {
      xAxes: [{
        type: 'linear',
        position: 'bottom'
      }]
    }
  }
  // Get context with jQuery - using jQuery's .get() method.
  if ($("#barChart").length) {
    var barChartCanvas = $("#barChart").get(0).getContext("2d");
    // This will get the first returned node in the jQuery collection.
    var barChart = new Chart(barChartCanvas, {
      type: 'bar',
      data: data,
      options: options
    });
  }

  if ($("#lineChart").length) {
    var lineChartCanvas = $("#lineChart").get(0).getContext("2d");
    var lineChart = new Chart(lineChartCanvas, {
      type: 'line',
      data: data,
      options: options
    });
  }

  if ($("#linechart-multi").length) {
    var multiLineCanvas = $("#linechart-multi").get(0).getContext("2d");
    var lineChart = new Chart(multiLineCanvas, {
      type: 'line',
      data: multiLineData,
      options: options
    });
  }

  
});
</script>