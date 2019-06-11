<?php
   
   $con = mysqli_connect('localhost','root','','qlkhuonmat');
?>
<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>
<body id="page-top">

<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="ad.php">Admin</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>


   

  </nav>
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="ad.php">
          <i class="fas fa-users"></i>
          <span>Quản lý người đăng kí dùng</span>
        </a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="Nguoi.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Sinh viên đã đăng kí ảnh</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Chua.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Sinh viên chưa đăng kí ảnh</span></a>
      </li>
    </ul>
      
        <div class="card mb-3" >
          <div class="card-header">
            <i class="fas fa-users"></i>
            Quản lý thông tin người dùng
          
          
          <div class="card-body">

            <div class="table-responsive">

              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                   
                    <th>Mã số</th>
                    <th>Họ tên</th>
                    <th>Mã lớp</th>
                  </tr>
                </thead>
               <tbody>
                 <?php
                   $con = new mysqli('localhost','root','123456','qlkhuonmat');
                  $con->set_charset("utf8");
                  
                    $sql ="SELECT * FROM nguoidangky WHERE MaSo NOT IN (SELECT DISTINCT MaTaiKhoan FROM hinh)";
                   $result = $con->query($sql);
                 
                  
                  if(mysqli_num_rows($result) > 0){
                            while ($row = mysqli_fetch_assoc($result)) {
                                
                  ?>
                        <tr>
                            <td name="maso"><?php echo $row['MaSo'] ?></td>
                            <td><?php echo $row['HoTen'] ?></td>
                            <td><?php echo $row['MaLop'] ?></td>                 
                        </tr>
                    <?php   }
                        }
                    ?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-home"></i>
  </a>
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Bạn có đồng ý đăng xuất hay không?</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="index.php">Logout</a>
        </div>
      </div>
    </div>
  </div>
 

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

 
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>
 
</body>

</body>
</html>
	