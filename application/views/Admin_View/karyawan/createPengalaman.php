
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User Profile
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

           <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile"> <?php if (empty($dataPersonal)):?>
              <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url();?>asset/dist/img/avatar3.png" alt="User profile picture">
            <?php else :?>
              <img class="profile-user-img img-responsive img-circle" src="<?php echo $dataPersonal->profile;?>" alt="User profile picture">
            <?php endif;?>
              <h3 class="profile-username text-center"><?=$dataId->nama_karyawan?></h3>
              <p class="text-muted text-center"><?=$dataId->emp_no?></p>
              <a href="<?php echo site_url("admin/karyawan/personal/$dataId->emp_no")?>" class="btn btn-primary btn-block"><b>Personal Detail</b></a>
              <a href="<?php echo site_url("admin/karyawan/kontak/$dataId->emp_no")?>" class="btn btn-primary btn-block"><b>Kontak</b></a>
              <a href="<?php echo site_url("admin/karyawan/pengalaman/$dataId->emp_no")?>" class="btn btn-primary btn-block"><b>Pengalaman</b></a>
              <a href="<?php echo site_url("admin/karyawan/pendidikan/$dataId->emp_no")?>" class="btn btn-primary btn-block"><b>Pendidikan</b></a>
              <a href="<?php echo site_url("admin/karyawan/keluarga/$dataId->emp_no")?>" class="btn btn-primary btn-block"><b>Keluarga</b></a>
              <a href="<?php echo site_url("admin/karyawan/pajak/$dataId->emp_no")?>" class="btn btn-primary btn-block"><b>Status Pajak</b></a>
              <a href="<?php echo site_url("admin/karyawan/tunjangan/$dataId->emp_no")?>" class="btn btn-primary btn-block"><b>Tunjangan</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        
        </div>
        <!-- TABS --> 
           <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
             <!-- <li class="active"><a href="#personal" data-toggle="tab">Personal</a></li>
              <li><button type="button" class="btn btn-warning btn-sm" id="btn-tambah-form"> + Form</button></li>
              <li><button type="button" class="btn btn-warning btn-sm" id="btn-reset-form">Reset Data Form</button></li>
              
              <a class="btn btn-info btn-lg" href="<?=site_url("admin/karyawan/createPersonal")?>"><i class="fa fa-plus"></i></a>-->
             
              <!--
              <a class="btn btn-info btn-sm" href="<?php echo site_url('admin/karyawan/createIdentitas')?>"><i class="fa fa-plus"> Personal</i></a>
              <a class="btn btn-info btn-sm" href="#kontak" data-toggle="tab">Kontak</a>
              <a class="btn btn-info btn-sm" href="<?php echo site_url('admin/karyawan/createIdentitas')?>"><i class="fa fa-plus"> Pengalaman</i></a>
              <a class="btn btn-info btn-sm" href="<?php echo site_url('admin/karyawan/createIdentitas')?>"><i class="fa fa-plus"> Pendidikan</i></a>
              <a class="btn btn-info btn-sm" href="<?php echo site_url('admin/karyawan/createIdentitas')?>"><i class="fa fa-plus"> Keluarga</i></a> -->
            </ul>
            <div class="tab-content">
                
              <!-------------------------------------------------------------- Pengalaman  --------------------------------------------------> 
            
                
                <?php echo form_open("admin/karyawan/createPengalaman/$dataId->emp_no",['class'=>'form-horizontal'])?>
                
                  <div class="form-group">
                    <label for="emp_no" class="col-sm-2 control-label">ID</label>
                    <div class="col-sm-10">
                      <input type="text"  name="emp_no" class="form-control" id="emp_no" readonly value=<?php echo $dataId->emp_no?>>
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="nama_karyawan" class="col-sm-2 control-label">Nama</label>
                    <div class="col-sm-10">
                      <input type="text"  name="nama" class="form-control" id="tempat_lahir" readonly value = <?php echo $dataId->nama_karyawan?>>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="posisi" class="col-sm-2 control-label">Posisi</label>
                    <div class="col-sm-10">
                      <input type="text" name="posisi" class="form-control" id="posisi"  value="<?=set_value('posisi')?>" >
                      <?=form_error('posisi')?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="gaji" class="col-sm-2 control-label">Gaji</label>
                    <div class="col-sm-10">
                      <input type="text"  name="gaji" class="form-control" id="gaji"  value= "<?=set_value('gaji')?>" >
                      <?=form_error('gaji')?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="perusahaan" class="col-sm-2 control-label">Perusahaan</label>
                    <div class="col-sm-10">
                      <input type="text"  name="perusahaan" class="form-control" id="perusahaan"  value= "<?=set_value('perusahaan')?>">
                      <?=form_error('perusahaan')?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="thn_masuk" class="col-sm-2 control-label">Tahun Masuk</label>
                    <div class="col-sm-10">
                      <input type="text"  name="thn_masuk" class="form-control" id="thn_masuk"  value= "<?=set_value('thn_masuk')?>">
                      <?=form_error('thn_masuk')?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="thn_keluar" class="col-sm-2 control-label">Tahun Keluar</label>
                    <div class="col-sm-10">
                      <input type="text"  name="thn_keluar" class="form-control" id="thn_keluar"  value= "<?=set_value('thn_keluar')?>">
                      <?=form_error('thn_keluar')?>
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="alasan" class="col-sm-2 control-label">Alasan Keluar</label>
                    <div class="col-sm-10">
                      <input type="text"  name="alasan" class="form-control" id="alasan"  value= "<?=set_value('alasan')?>">
                      <?=form_error('alasan')?>
                    </div>
                  </div>
                  <hr>
                   <div id="insert-form"></div>
                  <hr>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" id="" class="btn btn-info">Submit</button>
                    </div>
                  </div>
                  <?php echo form_close()?>
                </form>
                  <!-- Kita buat textbox untuk menampung jumlah data form -->
  <input type="hidden" id="jumlah-form" value="1">
                </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
       
            </div>

      </div><!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.8
    </div>
    <strong>Indo Mega Vision .</strong> All rights
    reserved.
  </footer>
</div>
<!-- ./wrapper -->
<!-- Jquery --->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
  <script type='text/javascript' src='//code.jquery.com/jquery-1.8.3.js'></script>

   <script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.min.js"></script>
  
</div>
<!-- ./wrapper -->

 <!--<script>
  $(document).ready(function(){ // Ketika halaman sudah diload dan siap
    $("#btn-tambah-form").click(function(){ // Ketika tombol Tambah Data Form di klik
      var jumlah = parseInt($("#jumlah-form").val()); // Ambil jumlah data form pada textbox jumlah-form
      var nextform = jumlah + 1; // Tambah 1 untuk jumlah form nya
      
      // Kita akan menambahkan form dengan menggunakan append
      // pada sebuah tag div yg kita beri id insert-form
      $("#insert-form").append("<b>Data ke " + nextform + " :</b>" +
        "<table>" +
        "<tr>" +
        "<td>ID</td>" +
        "<td><input type='text' name='emp_no[]' id='emp_no' value='<?php echo $dataId->emp_no?>'></td>" +
        "</tr>" +
         "<tr>" +
        "<td>posisi</td>" +
        "<td><input type='text' name='posisi[]' id='posisi'  required></td>" +
        "</tr>" +
         "<tr>" +
        "<td>Gaji</td>" +
        "<td><input type='text' name='gaji[]' id='gaji' required></td>" +
        "</tr>" +
        "<tr>" +
        "<td>Perusahaan</td>" +
        "<td><input type='text' name='perusahaan[]' id='perusahaan' required></td>" +
        "</tr>" +
        "<tr>" +
        "<td>Tahun Masuk</td>" +
        "<td><input type='text' name='thn_masuk[]' id='thn_masuk' required></td>" +
        "</tr>" +
       "<tr>" +
        "<td>Tahun Keluar</td>" +
        "<td><input type='text' name='thn_keluar[]' id='thn_keluar' required></td>" +
        "</tr>" +
        "<tr>" +
        "<td>alasan</td>" +
        "<td><input type='text' name='alasan[]' id='alasan' required></td>" +
        "</tr>" +
        "</table>" +
        "<br><br>");
      
      $("#jumlah-form").val(nextform); // Ubah value textbox jumlah-form dengan variabel nextform
    });
    
    // Buat fungsi untuk mereset form ke semula
    $("#btn-reset-form").click(function(){
      $("#insert-form").html(""); // Kita kosongkan isi dari div insert-form
      $("#jumlah-form").val("1"); // Ubah kembali value jumlah form menjadi 1
    });
  });
  </script>-->
   <script>
        $('#thn_masuk').datepicker({
          autoClose:true,
          clearBtn:true,
          orientation:"bottom",
          format : 'dd-mm-yyyy',
        }); 

        $('#thn_keluar').datepicker({
          autoClose:true,
          clearBtn:true,
          orientation:"bottom",
          format : 'dd-mm-yyyy',
        });           
 </script>



