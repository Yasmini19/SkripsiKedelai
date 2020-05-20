<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Kedelai</title>
  <!-- for-mobile-apps -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="Client Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
  Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

  <!-- css files -->
  <link href="<?php echo base_url();?>assets/HalamanUtama/css/bootstrap.css" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
  <link href="<?php echo base_url();?>assets/HalamanUtama/css/style.css" rel='stylesheet' type='text/css' /><!-- custom css -->
  <link href="<?php echo base_url();?>assets/HalamanUtama/css/css_slider.css" type="text/css" rel="stylesheet" media="all">
  <link href="<?php echo base_url();?>assets/HalamanUtama/css/font-awesome.min.css" rel="stylesheet"><!-- fontawesome css -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/5.3.8/sweetalert2.min.css" rel="stylesheet"/>
  <!-- //css files -->

  <!-- google fonts -->
  <link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
  <!-- //google fonts -->
  <style type="text/css">


  .chartdiv {
    width: 100%;
    max-height: 600px;
    height: 100vh;
    font-size: 12px;
  }
</style>

</head>
<body>

  <!-- header -->
  <header>
   <div class="top-head container">
    <div class="ml-auto text-right right-p">
			<!-- <ul>
				<li class="mr-3">
					<span class="fa fa-phone"></span>+1(21) 234 4567</li>
				
       </ul> -->
     </div>
   </div>
   <div class="container">
    <!-- nav -->
    <nav class="py-3 d-lg-flex">
     <div id="logo">
      <h1> <a href="index.html"><span class="fa fa-free-code-camp"></span> SIPIKN </a></h1>
    </div>
    <label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
    <input type="checkbox" id="drop" />
    <ul class="menu ml-auto mt-1">
      <li class="active"><a href="index.html">Home</a></li>
      <li class=""><a href="#about">About Us</a></li>
      <li class=""><a href="#team">Chart</a></li>
      <!-- <li class=""><a href="#stats">Stats</a></li> -->
      <!-- <li class=""><a href="#testimonials">Testimonials</a></li> -->
      <li class=""><a href="#contact">Contact us</a></li>

      <li>
       <a href="<?php echo site_url()?>/Login" class="btn" style="border-radius: 30px; background-color: #f4b200; color: black; " >LOGIN

       </a>
     </li>
   </ul>
 </nav>
 <!-- //nav -->
</div>
</header>
<!-- //header -->

<!-- banner -->
<div class="banner" id="home">
	<div class="layer">
		<div class="container">
			<div class="row">
				<div class="col-md-6 banner-text-w3ls">
					<!-- banner slider-->
					<div class="csslider infinity" id="slider1">
						<input type="radio" name="slides" checked="checked" id="slides_1" />
						<input type="radio" name="slides" id="slides_2" />
						<input type="radio" name="slides" id="slides_3" />
						<ul class="banner_slide_bg">
							<li>
								<div class="container-fluid">
									<div class="w3ls_banner_txt">
										<h3 class="b-w3ltxt text-capitalize mt-md-4">Kedelai</h3>

									</div>
								</div>
							</li>
							
						</ul>
						
					</div>
					<!-- //banner slider-->
				</div>
				<div class="col-md-6 px-lg-3 px-0">
					<div class="banner-form-w3 ml-lg-5">
						<div class="padding">
							<form action="#" method="post" id="cariData">
								<h5 class="mb-3">Search Kedelai</h5>
								<div class="form-style-w3layout">

									<select id="tipe" name="tipe">
										<option value="" disabled selected>Data</option>
                    <option value="konsumsi" >Konsumsi</option>
                    <option value="produksi" >Produksi</option>
                    <option value="impor" >Impor</option>
                    <option value="harga" >Harga</option>

                  </select>

                  <select id="tahun" name="tahun">
                    <option value="" disabled selected>Tahun</option>
                    <?php foreach ($tahun as $key => $value): ?>
                      <option value="<?= $value->id_tahun; ?>"><?= $value->tahun_ke; ?></option>
                    <?php endforeach ?>


                  </select>
                  <center>
                    <input type="submit" class="btn btn-block" style="border-radius: 30px;" value="Cari">
                  </center>

                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="getCodeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 <div class="modal-dialog modal-lg">
  <div class="modal-content">
   <div class="modal-header">
     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
     <h4 class="modal-title" id="myModalLabel"> API CODE </h4>
   </div>
   <div class="modal-body" id="getCode" style="overflow-x: scroll;">
    //ajax success content here.
  </div>
</div>
</div>
</div>
<!-- //banner -->
<!-- banner-bottom -->
<section class="some-content py-5" id="about">
  <div class="container py-md-5">
    <div class="row about-vv-top mt-2">
      <!-- <div class="col-lg-6 about-info"> -->
        <h4 class="title-hny  mb-md-5">Kedelai</h4>
        <p class="text-white">Kedelai merupakan salah satu komoditas pangan utama bagi masyarakat indonesia setelah padi dan jagung. Sifat multiguna yang ada pada kedelai menyebabkan tingginya permintaan kedelai dalam negeri. Selain itu, Manfaat kedelai sebagai salah satu sumber protein murah yang membuat kedelai semakin diminati masyarakat. Namun, jumlah produksi kedelai domestik masih belum mencukupi kebutuhan kedelai masyarakat Indonesia.  </p>
        <div class="read-more-button mt-4">
          <a href="index.html" class="read-more btn">Read More </a>
        </div>
      </div>
    </div>
  </section>
  <!-- //banner-bottom-->

  <!-- //stats -->
  <!-- Team  -->
  <section class="team py-5" id="team">
    <div class="container py-md-5">
      <h3 class="heading text-center mb-3 mb-sm-5">Chart</h3>
      <div class="col-12">
       <div class="row">	

         <div class="col-6">


          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Grafik Produki</h3>
            </div>

            <div class="card-footer clearfix">

            </div>

            <!-- /.card-header -->
            <div class="card-body">
              <div id="chartdiv1" class="chartdiv"></div>
            </div>
            <!-- /.card-body -->
          </div>


        </div>
        <div class="col-6">


          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Grafik Konsumsi</h3>
            </div>

            <div class="card-footer clearfix">

            </div>

            <!-- /.card-header -->
            <div class="card-body">
              <div id="chartdiv2" class="chartdiv"></div>
            </div>
            <!-- /.card-body -->
          </div>

        </div></div></div> <br>
        <div class="col-12">
         <div class="row">	

           <div class="col-6">


            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Grafik Impor</h3>
              </div>

              <div class="card-footer clearfix">

              </div>

              <!-- /.card-header -->
              <div class="card-body">
                <div id="chartdiv3" class="chartdiv"></div>
              </div>
              <!-- /.card-body -->
            </div>


          </div>
          <div class="col-6">


            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Grafik Harga</h3>
              </div>

              <div class="card-footer clearfix">

              </div>

              <!-- /.card-header -->
              <div class="card-body">
                <div id="chartdiv4" class="chartdiv"></div>
              </div>
              <!-- /.card-body -->
            </div>

          </div></div>

        </div>
      </section>
      <!-- //Team -->




      <!-- Contact -->
      <section class="contact py-5" id="contact">
       <div class="container py-md-5">
         <h3 class="heading text-center mb-3 mb-sm-5">Contact us</h3>
         <ul class="list-unstyled row text-center mt-lg-5 mt-4 px-lg-5">
          <li class="col-md-4 col-sm-6 adress-w3pvt-info mb-4">
            <div class=" adress-icon">
              <span class="fa fa-map-marker"></span>
            </div>

            <h6>Location</h6>
            <p>Jl. M.I.Ridwan No.5 Jakarta Pusat 10110 DKI Jakarta, Indonesia </p>
          </li>

          <li class="col-md-4 col-sm-6 adress-w3pvt-info mb-4">
            <div class="adress-icon">
              <span class="fa fa-envelope-open-o"></span>
            </div>
            <h6>Phone & Email</h6>
            <p> (021)3450038</p>
            <a href="mailto:info@example.com" class="mail">pusdatin@kemendag.go.id</a>
          </li>
        </ul>
      </section>


      <!-- </footer> -->
      <!-- //footer -->
      <!-- copyright -->
      <div class="copy-right-top">
       <p class="copy-right text-center py-4">&copy; 2020 Sistem Informasi Prediksi Impor Kedelai Nasional. 
       </p>
     </div>
     <!-- //copyright -->	

     <!-- move top -->
     <div class="move-top text-right">
       <a href="#home" class="move-top"> 
        <span class="fa fa-angle-up  mb-3" aria-hidden="true"></span>
      </a>
    </div>
    <!-- move top -->



  </body>
  </html>
  <script src="<?php echo base_url()?>assets/Admin/js/core.js"></script>
  <script src="<?php echo base_url()?>assets/Admin/js/charts.js"></script>
  <script src="<?php echo base_url()?>assets/Admin/js/animated.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/5.3.8/sweetalert2.min.js"></script>


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


var chart = am4core.create('chartdiv1', am4charts.XYChart);
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


//chart2

var chart2 = am4core.create('chartdiv2', am4charts.XYChart);
chart2.colors.step = 2;

chart2.legend = new am4charts.Legend();
chart2.legend.position = 'top';
chart2.legend.paddingBottom = 20;
chart2.legend.labels.template.maxWidth = 95;

var xAxis2 = chart2.xAxes.push(new am4charts.CategoryAxis());
xAxis2.dataFields.category = 'category';
xAxis2.renderer.cellStartLocation = 0.1;
xAxis2.renderer.cellEndLocation = 0.9;
xAxis2.renderer.grid.template.location = 0;

var yAxis2 = chart2.yAxes.push(new am4charts.ValueAxis());
yAxis2.min = 0;

//chart3
var chart3 = am4core.create('chartdiv3', am4charts.XYChart);
chart3.colors.step = 2;

chart3.legend = new am4charts.Legend();
chart3.legend.position = 'top';
chart3.legend.paddingBottom = 20;
chart3.legend.labels.template.maxWidth = 95;

var xAxis3 = chart3.xAxes.push(new am4charts.CategoryAxis());
xAxis3.dataFields.category = 'category';
xAxis3.renderer.cellStartLocation = 0.1;
xAxis3.renderer.cellEndLocation = 0.9;
xAxis3.renderer.grid.template.location = 0;

var yAxis3 = chart3.yAxes.push(new am4charts.ValueAxis());
yAxis3.min = 0;


//chart4
var chart4 = am4core.create('chartdiv4', am4charts.XYChart);
chart4.colors.step = 2;

chart4.legend = new am4charts.Legend();
chart4.legend.position = 'top';
chart4.legend.paddingBottom = 20;
chart4.legend.labels.template.maxWidth = 95;

var xAxis4 = chart4.xAxes.push(new am4charts.CategoryAxis());
xAxis4.dataFields.category = 'category';
xAxis4.renderer.cellStartLocation = 0.1;
xAxis4.renderer.cellEndLocation = 0.9;
xAxis4.renderer.grid.template.location = 0;

var yAxis4 = chart4.yAxes.push(new am4charts.ValueAxis());
yAxis4.min = 0;

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

function createSeries2(value, name) {
	
  var series = chart2.series.push(new am4charts.ColumnSeries());
  series.dataFields.valueY = value;
  series.dataFields.categoryX = 'category';
  series.name = name;

  series.events.on("hidden", arrangeColumns2);
  series.events.on("shown", arrangeColumns2);

  var bullet = series.bullets.push(new am4charts.LabelBullet())
  bullet.interactionsEnabled = false
  bullet.dy = 30;
  bullet.label.text = '{valueY}'
  bullet.label.fill = am4core.color('#ffffff')

  return series;
}

function createSeries3(value, name) {
	
  var series = chart3.series.push(new am4charts.ColumnSeries());
  series.dataFields.valueY = value;
  series.dataFields.categoryX = 'category';
  series.name = name;

  series.events.on("hidden", arrangeColumns3);
  series.events.on("shown", arrangeColumns3);

  var bullet = series.bullets.push(new am4charts.LabelBullet())
  bullet.interactionsEnabled = false
  bullet.dy = 30;
  bullet.label.text = '{valueY}'
  bullet.label.fill = am4core.color('#ffffff')

  return series;
}

function createSeries4(value, name) {
	
  var series = chart4.series.push(new am4charts.ColumnSeries());
  series.dataFields.valueY = value;
  series.dataFields.categoryX = 'category';
  series.name = name;

  series.events.on("hidden", arrangeColumns4);
  series.events.on("shown", arrangeColumns4);

  var bullet = series.bullets.push(new am4charts.LabelBullet())
  bullet.interactionsEnabled = false
  bullet.dy = 30;
  bullet.label.text = '{valueY}'
  bullet.label.fill = am4core.color('#ffffff')

  return series;
}

if(<?php echo json_encode($kategori); ?>){
  var datax1 = []; var datax2=[]; var datax3=[]; var datax4=[];
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
    datax1.push({"category": datacategory[i], "first" : data1[i]});
    datax2.push({"category": datacategory[i], "first" : data2[i]});
    datax3.push({"category": datacategory[i], "first" : data3[i]});
    datax4.push({"category": datacategory[i], "first" : data4[i]});
  }
  chart.data= datax1;
  chart2.data= datax2;
  chart3.data= datax3;
  chart4.data= datax4;


}else{

  chart.data = [{
    "category": "Tidak Ada Data",
    "first": 0,
  }
  ];

  chart2.data = [{
    "category": "Tidak Ada Data",
    "first": 0,
  }
  ];

  chart3.data = [{
    "category": "Tidak Ada Data",
    "first": 0,
  }
  ];

  chart4.data = [{
    "category": "Tidak Ada Data",
    "first": 0,
  }
  ];

}



createSeries('first', 'Produksi');
createSeries2('first', 'Konsumsi');
createSeries3('first', 'Import');
createSeries4('first', 'Harga');

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

function arrangeColumns2() {

  var series = chart2.series.getIndex(0);

  var w = 1 - xAxis2.renderer.cellStartLocation - (1 - xAxis2.renderer.cellEndLocation);
  if (series.dataItems.length > 1) {
    var x0 = xAxis2.getX(series.dataItems.getIndex(0), "categoryX");
    var x1 = xAxis2.getX(series.dataItems.getIndex(1), "categoryX");
    var delta = ((x1 - x0) / chart2.series.length) * w;
    if (am4core.isNumber(delta)) {
      var middle = chart2.series.length / 2;

      var newIndex = 0;
      chart2.series.each(function(series) {
        if (!series.isHidden && !series.isHiding) {
          series.dummyData = newIndex;
          newIndex++;
        }
        else {
          series.dummyData = chart2.series.indexOf(series);
        }
      })
      var visibleCount = newIndex;
      var newMiddle = visibleCount / 2;

      chart2.series.each(function(series) {
        var trueIndex = chart2.series.indexOf(series);
        var newIndex = series.dummyData;

        var dx = (newIndex - trueIndex + middle - newMiddle) * delta

        series.animate({ property: "dx", to: dx }, series.interpolationDuration, series.interpolationEasing);
        series.bulletsContainer.animate({ property: "dx", to: dx }, series.interpolationDuration, series.interpolationEasing);
      })
    }
  }
}

function arrangeColumns3() {

  var series = chart3.series.getIndex(0);

  var w = 1 - xAxis3.renderer.cellStartLocation - (1 - xAxis3.renderer.cellEndLocation);
  if (series.dataItems.length > 1) {
    var x0 = xAxis3.getX(series.dataItems.getIndex(0), "categoryX");
    var x1 = xAxis3.getX(series.dataItems.getIndex(1), "categoryX");
    var delta = ((x1 - x0) / chart3.series.length) * w;
    if (am4core.isNumber(delta)) {
      var middle = chart3.series.length / 2;

      var newIndex = 0;
      chart3.series.each(function(series) {
        if (!series.isHidden && !series.isHiding) {
          series.dummyData = newIndex;
          newIndex++;
        }
        else {
          series.dummyData = chart3.series.indexOf(series);
        }
      })
      var visibleCount = newIndex;
      var newMiddle = visibleCount / 2;

      chart3.series.each(function(series) {
        var trueIndex = chart3.series.indexOf(series);
        var newIndex = series.dummyData;

        var dx = (newIndex - trueIndex + middle - newMiddle) * delta

        series.animate({ property: "dx", to: dx }, series.interpolationDuration, series.interpolationEasing);
        series.bulletsContainer.animate({ property: "dx", to: dx }, series.interpolationDuration, series.interpolationEasing);
      })
    }
  }
}

function arrangeColumns4() {

  var series = chart4.series.getIndex(0);

  var w = 1 - xAxis4.renderer.cellStartLocation - (1 - xAxis4.renderer.cellEndLocation);
  if (series.dataItems.length > 1) {
    var x0 = xAxis4.getX(series.dataItems.getIndex(0), "categoryX");
    var x1 = xAxis4.getX(series.dataItems.getIndex(1), "categoryX");
    var delta = ((x1 - x0) / chart4.series.length) * w;
    if (am4core.isNumber(delta)) {
      var middle = chart4.series.length / 2;

      var newIndex = 0;
      chart4.series.each(function(series) {
        if (!series.isHidden && !series.isHiding) {
          series.dummyData = newIndex;
          newIndex++;
        }
        else {
          series.dummyData = chart4.series.indexOf(series);
        }
      })
      var visibleCount = newIndex;
      var newMiddle = visibleCount / 2;

      chart4.series.each(function(series) {
        var trueIndex = chart4.series.indexOf(series);
        var newIndex = series.dummyData;

        var dx = (newIndex - trueIndex + middle - newMiddle) * delta

        series.animate({ property: "dx", to: dx }, series.interpolationDuration, series.interpolationEasing);
        series.bulletsContainer.animate({ property: "dx", to: dx }, series.interpolationDuration, series.interpolationEasing);
      })
    }
  }
}
}); // end am4core.ready()

$(document).ready(function() {
  $('form#cariData').submit(function(e){
    e.preventDefault();
    var formData = new FormData(this);
    if ($('#tahun').val() != null  && $('#tipe').val() != null){
      $.ajax({
        url: '<?php echo site_url()?>/HalamanUtama/cari',
        type: 'post',
        data: formData,
        success: function(data) {
          var take_type = data.split('"jumlah_').pop();
          var type = take_type.substr(0, take_type.indexOf('"'));
          if(type == 'harga'){
            var string = data.split('"jumlah_harga":"').pop();
            var jumlah_harga = string.substr(0, string.indexOf('"'));

            swal({
              title: "<i>Hasil Pencarian</i>", 
              html: "Jumlah Harga : "+jumlah_harga,  
              confirmButtonText: "Ok", 
            });

          }else if (type == 'produksi') {
            var string = data.split('"jumlah_produksi":"').pop();
            var jumlah_produksi = string.substr(0, string.indexOf('"'));

            swal({
              title: "<i>Hasil Pencarian</i>", 
              html: "Jumlah Produksi : "+jumlah_produksi,  
              confirmButtonText: "Ok", 
            });

          }else if (type == 'konsumsi') {
            var string = data.split('"jumlah_konsumsi":"').pop();
            var jumlah_konsumsi = string.substr(0, string.indexOf('"'));

            swal({
              title: "<i>Hasil Pencarian</i>", 
              html: "Jumlah Konsumsi : "+jumlah_konsumsi,  
              confirmButtonText: "Ok", 
            });

          }else if (type == 'impor') {
            var string = data.split('"jumlah_impor":"').pop();
            var jumlah_impor = string.substr(0, string.indexOf('"'));

            swal({
              title: "<i>Hasil Pencarian</i>", 
              html: "Jumlah Impor : "+jumlah_impor,  
              confirmButtonText: "Ok", 
            });

          }
        },
        cache : false,
        contentType : false,
        processData : false,
        error: function(data) {
          alert(data.responseText);
        }         
      });
    }else{
      swal({
              title: "<i>Form Belum Diisi</i>", 
              confirmButtonText: "Ok", 
            });
    };
  });
});
</script>