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
</head>
<?php $this->load->view('admin/sidebar.php')?>

    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Kedelai</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Kedelai</li>
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
              <h3 class="card-title">Data Konsumsi</h3>
            </div>

            <div class="card-footer clearfix">
             <button type="button" class="btn btn-info float-left" data-toggle="modal" data-target="#modal-tambah-konsumsi">
              <i class="fas fa-plus"></i> Add
             </button>
            </div>

            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <th class="sorting_asc" tabindex="0" aria-controls="demo-datatables" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending">Id Konsumsi</th>
                    <th>Tahun </th>
                    <th>Jumlah Konsumsi</th>
                    
                    <th>Action</th>
                </thead>
                <tbody>

                    <?php foreach ($konsm as $key => $value) : ?>
                        <tr>
                            <td><?php echo $value->id_konsumsi ?></td>

                            <td><?php echo $value->tahun_ke ?></td>
                            <td><?php echo $value->jumlah_konsumsi ?></td>
                                
                            
                            <td>
                                <a href="<?php echo base_url('/Admin/edit_konsumsi/'. $value->id_konsumsi) ?>" class="fas fa-edit" aria-hidden="true" data-toggle="modal" data-target="#editKonsumsi" name="tombolEditKonsumsi" value="<?php echo $value->id_konsumsi; ?>"></a>
                                <a href="<?php echo base_url('/Admin/delete_konsumsi/'. $value->id_konsumsi) ?>" class="far fa-trash-alt" aria-hidden="true" name="tombolDeleteKonsumsi" value="<?php echo $value->id_konsumsi; ?>"></a>
                            </td>

                        </tr>
                    <?php endforeach; ?>
                </tbody>

                </table>
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

    <!--Modal ADD-->
    <div class="modal fade" id="modal-tambah-konsumsi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <!--Header-->
                <div class="modal-header">
                    <?php //echo form_open_multipart('Admin/add_terapis'); 
                    ?>

                    <h4 class="modal-title" id="myModalLabel">Konsumsi</h4>
                    <?php echo validation_errors(); ?>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <!--Body-->
                <div class="modal-body">
                    <div class="modal-body mx-3">
                        <!-- <FORM id="addTerapis"> -->
                        <form method="post" accept-charset="utf-8" id="addKonsumsi" enctype="multipart/form-data">



                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fa fa-newspaper-o">

                                        </i>
                                    </span>
                                </div>
                                <!-- <input type="text" id="tahun_produksi" name="tahun_produksi" class="form-control" placeholder="Tahun Produksi"> -->

                                <select class="form-control" name="id_tahun" id="id_tahun" required>
                                    <option value="">Pilih Tahun</option>
                                    <?php foreach($thn as $row):?>
                                    <option value="<?php echo $row->id_tahun;?>"><?php echo $row->tahun_ke;?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>

                            <div>

                            </div>                              

                                <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        @
                                    </span>
                                </div>
                                <input type="text" id="jumlah_konsumsi" name="jumlah_konsumsi" class="form-control" placeholder="Jumlah Konsumsi">
                            </div>       
                            

                            
                    </div>

                </div>
                <!--Footer-->
                <div class="modal-footer">
                    <input type="submit" name="submit" class="btn btn-outline-primary" id="btnSimpanKonsumsi">
                    <input type="button" class="btn btn-primary" value="Close" data-dismiss="modal">
                    <?php //echo form_close(); 
                    ?>

                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal Add End -->

    <!-- Modal Edit-->
    <div class="modal fade" id="editKonsumsi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <!--Header-->
                <div class="modal-header">

                    <h4 class="modal-title" id="myModalLabel"> Produksi</h4>
                    <?php echo validation_errors(); ?>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <!--Body-->
                    <div class="modal-body">
                        <form method="post" accept-charset="utf-8" id="editKonsumsi" enctype="multipart/form-data">
                        <div class="modal-body mx-3">
                
                            <!-- <input type="hidden" id="edit_id" name="edit_id"> -->
                            
                            <input type="hidden" id="edit_id" name="edit_id">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        @
                                    </span>
                                </div>
                                <!-- <input type="text" id="edit_tahun_produksi" name="edit_tahun_produksi" class="form-control" placeholder="Tahun Produksi"> -->

                                <select class="form-control" name="edit_tahun_konsumsi" id="edit_tahun_konsumsi" required>
                                    <option value="">Pilih Tahun</option>
                                    <?php foreach($thn as $row):?>
                                    <option value="<?php echo $row->id_tahun;?>"><?php echo $row->tahun_ke;?></option>
                                    <?php endforeach;?>
                                </select>

                            </div>

                                <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        @
                                    </span>
                                </div>
                                <input type="text" id="edit_jumlah_konsumsi" name="edit_jumlah_konsumsi" class="form-control" placeholder="Jumlah Konsumsi">
                            </div>

                        </div>

                    </div>

                    <!--Footer-->
                    <div class="modal-footer">
                        <input type="submit" name="submit" class="btn btn-outline-primary" id="btnSimpanKonsumsi">
                        <input type="button" class="btn btn-primary" value="Close" data-dismiss="modal">
                    </div>
                </form>
            </div>
        </div>
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
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>


 <script type="text/javascript">
        

        $('form#addKonsumsi').submit(function(e) {
            e.preventDefault();
            var formData = new FormData($('form#addKonsumsi')[0]);

            $.ajax({
                url: '<?php echo site_url('admin/add_konsumsi'); ?>',
                type: 'POST',
                data: formData,

                cache: false,
                contentType: false,
                processData: false,

                success: function(response) {

                    if (response = 'true') {
                        alert('berhasil');
                        location.reload();
                    } else {
                        alert('error : ' + response);
                    }

                }
            });
        });

         $('[name="tombolEditKonsumsi"]').click(function() {

            var id = $(this).attr('value');

           

            $.ajax({
                url: '<?php echo site_url('admin/get_konsumsi') ?>',
                type: 'post',
                data: {
                    id: id
                },
                success: function(data) {

                    if (data == null) {
                        alert('kosong');
                    }

                    data = JSON.parse(data);

                    $('#edit_id').val(data.id_konsumsi);
                    $('#edit_tahun_konsumsi').val(data.id_tahun);
                    $('#edit_jumlah_konsumsi').val(data.jumlah_konsumsi);

                }
            });
        });

        //ajaxformedit
        $('form#editKonsumsi').submit(function(e) {
            e.preventDefault();
            var formData = new FormData($('form#editKonsumsi')[0]);

            $.ajax({
                url: '<?php echo site_url('admin/edit_konsumsi'); ?>',
                type: 'POST',
                data: formData,
                dataType: 'json',

                cache: false,
                contentType: false,
                processData: false,

                success: function(response) {

                    if (response==true) {
                        alert('berhasil');
                        location.reload();
                    } else {
                        alert('error : ' + response);
                    }

                }
            });
        });

        //ajaxdelete
        $('[name="tombolDeleteKonsumsi"]').click(function(e){
            e.preventDefault();
            var id = $(this).attr('value')
            //alert(id);
            $.ajax({
                url: '<?php echo site_url('admin/delete_konsumsi') ?>',
                type: 'post',
                data: {id:id},
                success: function(response) {
                    //alert(response);
                    if (response)
                    {
                      alert('berhasil');
                      location.reload();
                    }
                    else
                    { alert('error : ' + response); }
                }
            });
        });


      </script>

</body>
</html>
