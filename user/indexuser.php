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
        User
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="http://localhost/belajarGit/beranda/index.php"><i class="fa fa-home"></i>beranda</a></li>
        <li class="active"><i class="fa fa-user"></i>User</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
            <div class="box-header with-border">
              <a href="create.php" class="btn btn-xs btn-primary"><i class="fa fa-plus"></i>Tambah</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <?php
                    include '../koneksi/koneksi.php';
                    $nomor =1;
                    $sql   ="select * from users";
                    $results =mysqli_query($konek,$sql);
                    if (mysqli_num_rows($results)>0){
                      while ($row = mysqli_fetch_assoc($results)) {
                        # code...
                        echo"<tr>
                          <td>".$nomor++."</td>
                          <td>".$row['name']."</td>
                          <td>".$row['email']."</td>
                          <td>
                            <a href='edit.php?id=".$row['id']."' class='btn btn-xs btn-primary'>Edit</a>
                            <a href='delete.php?id=".$row['id']."' class='btn btn-xs btn-danger' onclick='javascript:return confirm(\"anda serius ingin menghapus data ini\")'>Hapus</a>
                          </td>

                        </tr>";
                      }
                    }
                  ?>
                </tr>
              
                

                </tr>
              </table>
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
