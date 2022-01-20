<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Collapsed Sidebar</title>

  <!-- Google Font: Source Sans Pro -->
  <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> -->
  <style>
  @import url('https://fonts.googleapis.com/css2?family=Oxanium&family=Sen&display=swap');
  </style>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../css/fontawesome/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../css/adminlte/adminlte.css">
  <!-- CSS Personalizado -->
  <link rel="stylesheet" href="../css/main.css">
</head>
<body class="hold-transition sidebar-mini sidebar-collapse text-sm dark-mode">
<!-- Site wrapper -->
<div class="wrapper">

    <?php
    include_once '../_includes/_templates/main-header.php';
    include_once '../_includes/_templates/main-Sidebar.php';
    ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Collapsed Sidebar</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Monitoreo</a></li>
              <li class="breadcrumb-item active">Monitoreo</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card collapsed-card"><!-- para que inicie colapsado agregar la clase:  collapsed-card -->
              <div class="card-header">
                <h3 class="card-title"><span>SAN ANGEL</span> Entrada Principal</h3>

                <div class="card-tools">
                  <span class="right badge badge-danger indMon">3</span>
                  <span class="right badge badge-warning indMon">5</span>
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <!-- <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button> -->
                </div>
              </div>
              <div class="card-body">

                  <div class="contBoxMon spaceBetween-wrap">

                        <div class="boxMon boxSuccess row">
                            <div class="boxLed column-center-center">
                                <a href="#"><i class="fab fa-galactic-senate"></i></a>
                          </div>
                          <div class="boxData">
                              <h1>Torniquete 1</h1>
                              <p class="eventoP">Salida</p>
                          </div>
                          <div class="boxBtns column-center-center">
                              <a href="#"><i class="fas fa-tools btnTool"></i></a>
                              <a href="#"><i class="fas fa-recycle btnRecy"></i></a>
                          </div>
                        </div>

                        <div class="boxMon boxDanger row">
                            <div class="boxLed column-center-center">
                              <a href="#"><i class="fab fa-old-republic"></i></a>
                          </div>
                          <div class="boxData">
                              <h1>Torniquete 1</h1>
                              <p class="eventoP">Entrada</p>
                          </div>
                          <div class="boxBtns column-center-center">
                              <a href="#"><i class="fas fa-tools btnTool"></i></a>
                              <a href="#"><i class="fas fa-recycle btnRecy"></i></a>
                          </div>
                        </div>

                        <div class="boxMon boxSuccess row">
                            <div class="boxLed column-center-center">
                              <a href="#"><i class="fas fa-jedi"></i></a>
                          </div>
                          <div class="boxData">
                              <h1>Torniquete 2</h1>
                              <p class="eventoP">Salida</p>
                          </div>
                          <div class="boxBtns column-center-center">
                              <a href="#"><i class="fas fa-tools btnTool"></i></a>
                              <a href="#"><i class="fas fa-recycle btnRecy"></i></a>
                          </div>
                        </div>

                        <div class="boxMon boxDanger row">
                            <div class="boxLed column-center-center">
                              <a href="#"><i class="fas fa-jedi"></i></a>
                          </div>
                          <div class="boxData">
                              <h1>Torniquete 2</h1>
                              <p class="eventoP">Entrada</p>
                          </div>
                          <div class="boxBtns column-center-center">
                              <a href="#"><i class="fas fa-tools btnTool"></i></a>
                              <a href="#"><i class="fas fa-recycle btnRecy"></i></a>
                          </div>
                        </div>

                        <div class="boxMon boxWarning row">
                            <div class="boxLed column-center-center">
                              <a href="#"><i class="fab fa-jedi-order"></i></a>
                          </div>
                          <div class="boxData">
                              <h1>Torniquete 3</h1>
                              <p class="eventoP">Entrada</p>
                          </div>
                          <div class="boxBtns column-center-center">
                              <a href="#"><i class="fas fa-tools btnTool"></i></a>
                              <a href="#"><i class="fas fa-recycle btnRecy"></i></a>
                          </div>
                        </div>

                        <div class="boxMon boxWarning row">
                            <div class="boxLed column-center-center">
                              <a href="#"><i class="fab fa-old-republic"></i></a>
                          </div>
                          <div class="boxData">
                              <h1>Torniquete 3</h1>
                              <p class="eventoP">Salida</p>
                          </div>
                          <div class="boxBtns column-center-center">
                              <a href="#"><i class="fas fa-tools btnTool"></i></a>
                              <a href="#"><i class="fas fa-recycle btnRecy"></i></a>
                          </div>
                        </div>

                        <div class="boxMon boxSuccess row">
                            <div class="boxLed column-center-center">
                              <a href="#"><i class="fas fa-jedi"></i></a>
                          </div>
                          <div class="boxData">
                              <h1>Buzon</h1>
                              <p class="eventoP">Salida</p>
                          </div>
                          <div class="boxBtns column-center-center">
                              <a href="#"><i class="fas fa-tools btnTool"></i></a>
                              <a href="#"><i class="fas fa-recycle btnRecy"></i></a>
                          </div>
                        </div>

                        <div class="boxMon boxDanger row">
                            <div class="boxLed column-center-center">
                              <a href="#"><i class="fas fa-jedi"></i></a>
                          </div>
                          <div class="boxData">
                              <h1>Torniquete Cont 1</h1>
                              <p class="eventoP">Entrada</p>
                          </div>
                          <div class="boxBtns column-center-center">
                              <a href="#"><i class="fas fa-tools btnTool"></i></a>
                              <a href="#"><i class="fas fa-recycle btnRecy"></i></a>
                          </div>
                        </div>

                        <div class="boxMon boxWarning row">
                            <div class="boxLed column-center-center">
                              <a href="#"><i class="fab fa-jedi-order"></i></a>
                          </div>
                          <div class="boxData">
                              <h1>Torniquete Cont 1</h1>
                              <p class="eventoP">Salida</p>
                          </div>
                          <div class="boxBtns column-center-center">
                              <a href="#"><i class="fas fa-tools btnTool"></i></a>
                              <a href="#"><i class="fas fa-recycle btnRecy"></i></a>
                          </div>
                        </div>

                        <div class="boxMon boxWarning row">
                            <div class="boxLed column-center-center">
                              <a href="#"><i class="fab fa-old-republic"></i></a>
                          </div>
                          <div class="boxData">
                              <h1>Torniquete Cont 2</h1>
                              <p class="eventoP">Entrada</p>
                          </div>
                          <div class="boxBtns column-center-center">
                              <a href="#"><i class="fas fa-tools btnTool"></i></a>
                              <a href="#"><i class="fas fa-recycle btnRecy"></i></a>
                          </div>
                        </div>

                        <div class="boxMon boxWarning row">
                            <div class="boxLed column-center-center">
                              <a href="#"><i class="fab fa-galactic-republic"></i></a>
                          </div>
                          <div class="boxData">
                              <h1>Torniquete Cont 2</h1>
                              <p class="eventoP">Salida</p>
                          </div>
                          <div class="boxBtns column-center-center">
                              <a href="#"><i class="fas fa-tools btnTool"></i></a>
                              <a href="#"><i class="fas fa-recycle btnRecy"></i></a>
                          </div>
                        </div>

                  </div><!-- contBoxMon -->

              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                Footer
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php
  include_once '../_includes/_templates/footer.php';
  ?>

</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../js/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../js/bootstrap/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../js/adminlte/adminlte.js"></script>
<!-- AdminLTE App -->
<script src="../js/main.js"></script>
</body>
</html>
