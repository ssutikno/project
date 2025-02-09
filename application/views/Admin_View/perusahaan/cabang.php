<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
     <center> <h1>
        DATA CABANG PERUSAHAAN
      </h1></center>
       <ol class="breadcrumb">
        <li><a href="<?php echo base_url('index.php/admin/cabang/create')?>"><i class="fa fa-dashboard"></i> Home</a></li>
        
      </ol>
    </section>
     
    <!-- Main content -->
    <section class="content">
     <?php if($this->session->flashdata('dialogbox')): ?>
        <div class="alert alert-info alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <i class="icon fa fa-check"></i>
        <?php echo $this->session->flashdata('dialogbox'); ?>
        </div>
        <?php endif; ?>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
             <table class="table table-hover table-bordered" id="tableCabang">
                <thead>
                <tr>
                  <th>No</th>
                  <th>ID</th>
                  <th>Cabang</th>
                  <th>Alamat</th>
                  <th>Kota</th>
                  <th><a class="btn btn-primary btn-sm" href="<?php echo site_url('admin/cabang/create')?>"><i class="fa fa-plus"></i></a></th>
                </tr>
              </thead>
               <tbody>
                <?php 
                $no =1;
                foreach($allData as $tampil):?>
                <tr>
                  <td><?php echo $no++?></td>
                  <td><?php echo $tampil->id_cabang ?></td>
                  <td><?php echo $tampil->nama_cabang?></td>
                  <td><?php echo $tampil->alamat_cabang ?></td>
                  <td><?php echo $tampil->kota?></td>
                  <td>
                     <a class="btn btn-info btn-sm" href="<?php echo site_url("admin/cabang/update/$tampil->id_cabang")?>"><i class="fa fa-edit"></i></a>
                     <a class="btn btn-danger btn-sm" onclick= "return confirm('Apakah anda yakin ?')" href ="<?php echo site_url("admin/cabang/delete/$tampil->id_cabang")?>"><i class="fa fa-trash-o"></i></a> 
                    </td>
                </tr>
              <?php endforeach?>
              </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.8
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>
</div>
<!-- ./wrapper -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<!--<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
  $(document).ready( function () {
      $('#tableCabang').DataTable();

  });
</script>


