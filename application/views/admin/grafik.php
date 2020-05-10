<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SIPIKN | Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/Admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/Admin/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/Admin/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
<style type="text/css">
    

#chartdiv {
  width: 100%;
  max-height: 600px;
  height: 100vh;
  font-size: 12px;
}
</style>
</head>
<?php $this->load->view('admin/sidebar.php')?>

    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Grafik</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Grafik</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Grafik</h3>

              <button type="button" class="btn btn-info float-right" data-toggle="modal" data-target="#">
              <i class="fas fa-plus"></i> Export

            </div>


            <div class="card-footer clearfix">

            </div>

            <!-- /.card-header -->
            <div class="card-body">
              <div id="chartdiv"></div>
                          </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

  <!-- /.content-wrapper -->
  <footer class="main-footer">
    
    <strong>@ SIPIKN - Sistem Informasi Prediksi Impor Kedelai Nasional </strong> 
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url();?>assets/Admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url();?>assets/Admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url();?>assets/Admin/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url();?>assets/Admin/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>assets/Admin/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>assets/Admin/dist/js/demo.js"></script>
   <script src="<?php echo base_url()?>assets/Admin/js/core.js"></script>
    <script src="<?php echo base_url()?>assets/Admin/js/charts.js"></script>
    <script src="<?php echo base_url()?>assets/Admin/js/animated.js"></script>
<!-- page script -->
    <?php 
if(!empty($grafik)){
    foreach ($grafik as $key) {

                                    $kategori[] = $key->tahun_ke;
                                    $nilai_produksi[]=$key->jumlah_produksi;
                                    $nilai_konsumsi[]=$key->jumlah_konsumsi;
                                    $nilai_impor[]=$key->jumlah_impor;
                                    $nilai_harga[]=$key->jumlah_harga;} 
                                  }else{
                                    $kategori="";
                                    $nilai="";
                                  }

                                    ?>
   <script type="text/javascript">
am4core.ready(function() {

// Themes begin
am4core.useTheme(am4themes_animated);
// Themes end




var chart = am4core.create('chartdiv', am4charts.XYChart);
chart.colors.step = 2;

chart.legend = new am4charts.Legend();
chart.legend.position = 'top';
chart.legend.paddingBottom = 20;
chart.legend.labels.template.maxWidth = 95;

var xAxis = chart.xAxes.push(new am4charts.CategoryAxis());
xAxis.dataFields.category = 'category';
xAxis.renderer.cellStartLocation = 0.1;
xAxis.renderer.cellEndLocation = 0.9;
xAxis.renderer.grid.template.location = 0;

var yAxis = chart.yAxes.push(new am4charts.ValueAxis());
yAxis.min = 0;

function createSeries(value, name) {
    var series = chart.series.push(new am4charts.ColumnSeries());
    series.dataFields.valueY = value;
    series.dataFields.categoryX = 'category';
    series.name = name;

    series.events.on("hidden", arrangeColumns);
    series.events.on("shown", arrangeColumns);

    var bullet = series.bullets.push(new am4charts.LabelBullet())
    bullet.interactionsEnabled = false
    bullet.dy = 30;
    bullet.label.text = '{valueY}'
    bullet.label.fill = am4core.color('#ffffff')

    return series;
}

if(<?php echo json_encode($kategori); ?>){
  var datax = [];
var datacategory = [];
var data1 = [];var data2 = [];var data3 = [];var data14 = [];
var visits = '';
 <?php $i=0 ?>

datacategory = <?php echo json_encode($kategori);?>;
data1 = <?php echo json_encode($nilai_produksi);?>;
data2 = <?php echo json_encode($nilai_konsumsi);?>;
data3 = <?php echo json_encode($nilai_impor);?>;
data4 = <?php echo json_encode($nilai_harga);?>;

for( var i = 0; i < datacategory.length; i++){
    datax.push({"category": datacategory[i], "first" : data1[i],"second" : data2[i],"third" : data3[i], "fourth" : data4[i]});
}
chart.data= datax;


}else{

chart.data = [{
  "category": "Tidak Ada Data",
  "data1": 0,
  "data2": 0,
  "data3": 0,
  "data4": 0,
}
]
}



createSeries('first', 'Produksi');
createSeries('second', 'Import');
createSeries('third', 'Konsumsi');
createSeries('fourth', 'Harga');

function arrangeColumns() {

    var series = chart.series.getIndex(0);

    var w = 1 - xAxis.renderer.cellStartLocation - (1 - xAxis.renderer.cellEndLocation);
    if (series.dataItems.length > 1) {
        var x0 = xAxis.getX(series.dataItems.getIndex(0), "categoryX");
        var x1 = xAxis.getX(series.dataItems.getIndex(1), "categoryX");
        var delta = ((x1 - x0) / chart.series.length) * w;
        if (am4core.isNumber(delta)) {
            var middle = chart.series.length / 2;

            var newIndex = 0;
            chart.series.each(function(series) {
                if (!series.isHidden && !series.isHiding) {
                    series.dummyData = newIndex;
                    newIndex++;
                }
                else {
                    series.dummyData = chart.series.indexOf(series);
                }
            })
            var visibleCount = newIndex;
            var newMiddle = visibleCount / 2;

            chart.series.each(function(series) {
                var trueIndex = chart.series.indexOf(series);
                var newIndex = series.dummyData;

                var dx = (newIndex - trueIndex + middle - newMiddle) * delta

                series.animate({ property: "dx", to: dx }, series.interpolationDuration, series.interpolationEasing);
                series.bulletsContainer.animate({ property: "dx", to: dx }, series.interpolationDuration, series.interpolationEasing);
            })
        }
    }
}

}); // end am4core.ready()
        
      </script>
      

</body>
</html>
