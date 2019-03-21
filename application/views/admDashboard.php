<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Painel ADM - MUB</title>
  <link rel="stylesheet" href="<?php echo base_url('assets/adm/node_modules/font-awesome/css/font-awesome.min.css');?>" />
  <link rel="stylesheet" href="<?php echo base_url('assets/adm/img/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css');?>" />
  <link rel="stylesheet" href="<?php echo base_url('assets/adm/img/node_modules/flag-icon-css/css/flag-icon.min.css');?>" />
  <link rel="stylesheet" href="<?php echo base_url('assets/adm/css/style.css');?>" />
  <link rel="shortcut icon" href="<?php echo base_url('assets/adm/images/favicon.png');?>" />
</head>

<body>
  <div class=" container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar navbar-default col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="bg-white text-center navbar-brand-wrapper">
        <a class="navbar-brand brand-logo" href="index.html"><img src="<?php echo base_url('assets/adm/images/mub_adm.png');?>" /></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="<?php echo base_url('assets/adm/images/mub_adm_mini.png');?>" alt=""></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <button class="navbar-toggler navbar-toggler d-none d-lg-block navbar-dark align-self-center mr-3" type="button" data-toggle="minimize">
          <span class="navbar-toggler-icon"></span>
        </button>
        <form class="form-inline mt-2 mt-md-0 d-none d-lg-block">
          <input class="form-control mr-sm-2 search" type="text" placeholder="Search">
        </form>
        <ul class="navbar-nav ml-lg-auto d-flex align-items-center flex-row">
          <li class="nav-item">
            <a class="nav-link profile-pic" href="#"><img class="rounded-circle" src="<?php echo base_url('assets/adm/images/user/Hiago01.jpg');?>" alt=""></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa fa-th"></i></a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-dark navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>

    <!-- partial -->
    <div class="container-fluid">
      <div class="row row-offcanvas row-offcanvas-right">
        <!-- partial:partials/_sidebar.html -->
        <nav class="bg-white sidebar sidebar-offcanvas" id="sidebar">
          <div class="user-info">
            <img src="<?php echo base_url('assets/adm/images/user/Hiago01.jpg');?>" alt="">
            <p class="name"><?php echo $nome;?></p>
            <p class="designation"><?php echo $cargo;?></p>
            <span class="online"></span>
          </div>
          <ul class="nav">
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo base_url('adm');?>">
                <img src="<?php echo base_url('assets/adm/images/icons/1.png');?>" alt="">
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
          </ul>
        </nav>

        <!-- partial -->
        <div class="content-wrapper">
          <h3 class="page-heading mb-4">Dashboard</h3>
          <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <h4 class="text-danger">
                        <i class="fa fa-exclamation-triangle highlight-icon" aria-hidden="true"></i>
                      </h4>
                    </div>
                    <div class="float-right">
                      <p class="card-text text-dark">Denúncias Totais</p>
                      <h4 class="bold-text">65,650</h4>
                    </div>
                  </div>
                  <p class="text-muted">
                    <i class="fa fa-exclamation-circle mr-1" aria-hidden="true"></i> 123 não foram atendidas
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <h4 class="text-warning">
                        <i class="fa fa-flag highlight-icon" aria-hidden="true"></i>
                      </h4>
                    </div>
                    <div class="float-right">
                      <p class="card-text text-dark">Denúncias Mensais</p>
                      <h4 class="bold-text">656</h4>
                    </div>
                  </div>
                  <p class="text-muted">
                    <i class="fa fa-exclamation-circle mr-1" aria-hidden="true"></i> 123 não foram atendidas
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <h4 class="text-success">
                        <i class="fa fa-road highlight-icon" aria-hidden="true"></i>
                      </h4>
                    </div>
                    <div class="float-right">
                      <p class="card-text text-dark">Cidades Alcançadas</p>
                      <h4 class="bold-text">12</h4>
                    </div>
                  </div>
                  <p class="text-muted">
                    <i class="fa fa-exclamation-circle mr-1" aria-hidden="true"></i> 123 não foram identificadas
                  </p>
                </div>
              </div>    
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <h4 class="text-primary">
                        <i class="fa fa-sitemap highlight-icon" aria-hidden="true"></i>
                      </h4>
                    </div>
                    <div class="float-right">
                      <p class="card-text text-dark">Cidades cobertas</p>
                      <h4 class="bold-text">1</h4>
                    </div>
                  </div>
                  <p class="text-muted">
                    <i class="fa fa-repeat mr-1" aria-hidden="true"></i> 123 não aderiram ao shout
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 mb-4">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Estatísticas</h5>
                  <div class="row">
                    <div class="col-12">
                      <div class="mb-4">
                        <p class="card-text text-muted mb-2">Abuso</p>
                        <div class="progress">
                          <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">65%
                          </div>
                        </div>
                      </div>
                      <div class="mb-4">
                        <p class="card-text text-muted mb-2">Homofobia</p>
                        <div class="progress">
                          <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">65%
                          </div>
                        </div>
                      </div>
                      <div class="mb-4">
                        <p class="card-text text-muted mb-2">Maus Tratos</p>
                        <div class="progress">
                          <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">65%
                          </div>
                        </div>
                      </div>
                      <div class="mb-4">
                        <p class="card-text text-muted mb-2">Outros</p>
                        <div class="progress">
                          <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">65%
                          </div>
                        </div>
                      </div>
                      <div class="mb-4">
                        <p class="card-text text-muted mb-2">Racismo</p>
                        <div class="progress">
                          <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">65%
                          </div>
                        </div>
                      </div>
                      <div class="mb-4">
                        <p class="card-text text-muted mb-2">Violência contra a mulher</p>
                        <div class="progress">
                          <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">65%
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-12">
                      <p class="text-muted mb-0">
                        Estatísticas disponíveis.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-4">
              <div class="card" style="min-height:395px;">
                <div class="card-body">
                  <h5 class="card-title mb-4">Cidades</h5>
                  <table class="table table-hover table-striped">
                    <thead>
                      <tr>
                        <th>Cidade</th>
                        <th>Estado</th>
                        <th>Denúncias</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Juazeiro do Norte</td>
                        <td>Ceará</td>
                        <td>237</td>
                      </tr>
                      <tr>
                        <td>Crato</td>
                        <td>Ceará</td>
                        <td>237</td>
                      </tr>
                      <tr>
                        <td>Barbalha</td>
                        <td>Ceará</td>
                        <td>237</td>
                      </tr>
                      <tr>
                        <td>Barbalha</td>
                        <td>Ceará</td>
                        <td>237</td>
                      </tr>
                      <tr>
                        <td>Barbalha</td>
                        <td>Ceará</td>
                        <td>237</td>
                      </tr>
                      <tr>
                        <td>Barbalha</td>
                        <td>Ceará</td>
                        <td>237</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="float-right">
                <a href="#">Star Admin</a> &copy; 2017
            </span>
          </div>
        </footer>

        <!-- partial -->
      </div>
    </div>

  </div>

  <script src="<?php echo base_url('assets/adm/node_modules/jquery/dist/jquery.min.js');?>"></script>
  <script src="<?php echo base_url('assets/adm/node_modules/popper.js/dist/umd/popper.min.js');?>"></script>
  <script src="<?php echo base_url('assets/adm/node_modules/bootstrap/dist/js/bootstrap.min.js');?>"></script>
  <script src="<?php echo base_url('assets/adm/node_modules/chart.js/dist/Chart.min.js');?>"></script>
  <script src="<?php echo base_url('assets/adm/node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js');?>"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB5NXz9eVnyJOA81wimI8WYE08kW_JMe8g&callback=initMap" async defer></script>
  <script src="<?php echo base_url('assets/adm/js/off-canvas.js');?>"></script>
  <script src="<?php echo base_url('assets/adm/js/hoverable-collapse.js');?>"></script>
  <script src="<?php echo base_url('assets/adm/js/misc.js');?>"></script>
  <script src="<?php echo base_url('assets/adm/js/chart.js');?>"></script>
  <script src="<?php echo base_url('assets/adm/js/maps.js');?>"></script>
</body>

</html>
