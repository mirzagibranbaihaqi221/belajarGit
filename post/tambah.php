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
        Tambah POST
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="../beranda/index.php"><i class="fa fa-home"></i> Beranda</a></li>
        <li><a href="indexuser.php"><i class="fa fa-user"></i> User</a></li>
        <li class="active"><i class="fa fa-plus"></i>Tambah Post</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Post</h3>

            </div>
            <!-- /.box-header -->
            <div class="box-body">
               <form role="form" method="post" action="proses_tambah.php">
              <div class="box-body">
                <div class="form-group">
                  <label for="author">Author</label>
                  <input type="text" class="form-control" id="author" placeholder="Masukan Nama" name="author">
                </div>
                <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" class="form-control" id="title" placeholder="Masukan title" name="title">
                </div>

                <div class="form-group">
                  <label for="content">Content</label><br>
                 <textarea  rows="3" cols="70" name="content"></textarea>
                </div>

                <div class="form-group">
                  <label for="status">Status</label>
                  <input type="checkbox" id="status" value="1" name="status">publish
                  <input type="checkbox" name="status" id="status" value="0" >draft
                </div>
               
                  </label>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <a href="index.php" class="btn btn-xs btn-primary"><i class="fa fa-arrow-left"></i>Kembali</a>
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
