<!DOCTYPE html>
<html>
<head>
  <?php include'../template/link.php'?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="../template/Adminlte2/index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <?php include'../template/navbar.php'?>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <?php include'../template/sidebar.php'?>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit User
      </h1>
      <ol class="breadcrumb">
        <li><a href="http://localhost/belajarGit/beranda/index.php"><i class="fa fa-home"></i> Beranda</a></li>
        <li><a href="indexuser.php"><i class="fa fa-user"></i> User</a></li>
        <li class="active"><i class="fa fa-plus"></i>Tambah User</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title"> Edit Akun User</h3>

            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <?php include'../koneksi/koneksi.php'; 
                  $ID = $_GET['id'];
                ?>
               <form role="form" method="POST" action="proces_edit.php">
              <div class="box-body">
                <input type="hidden" name="id" value="<?= $ID ?>">
                <div class="form-group">
                  <label for="name">Nama</label>
                  <input type="text" class="form-control" id="name" placeholder="Masukan Nama" name="name">
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" placeholder="Masukan Email" name="email">
                </div>

                <div class="form-group">
                  <label for="pass">Password</label>
                  <input type="Password" class="form-control" id="pass" placeholder="Masukan Password" name="password">
                </div>
               <!--  <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" id="exampleInputFile">

                  <p class="help-block">Example block-level help text here.</p>
                </div> -->
               
                  </label>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <a href="http://localhost/belajarGit/user/indexuser.php" class="btn btn-xs btn-primary"><i class="fa fa-arrow-left"></i>Kembali</a>
                <button type="submit" class="btn btn-xs btn-primary">Submit</button>
              </div>
            </form>
            </div>
            <!-- /.box-body -->

          </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php include'../template/footer.php'?>

  <!-- Control Sidebar -->
    <?php include'../template/controlsidebar.php'?>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<?php include'../template/java.php'?>
</body>
</html>
