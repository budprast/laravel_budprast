
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="/assets/img/favicon.png">
    <title>
      Kelola Data Pasien
    </title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="/cp/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="/cp/assets/css/nucleo-svg.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="/cp/assets/css/nucleo-svg.css" rel="stylesheet" />
    <link id="pagestyle" href="/cp/assets/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />

    <title>Kelola Data Pasien</title>
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-light bg-light navbar-expand-lg fixed-top bg-secondary text-uppercase" id="mainNav">
        <div class="container"><a class="navbar-brand js-scroll-trigger" href="kelola-hospital"><img class="rounded img-fluid" id="image" style="width:70px;height:70px;align-self: center" src="assets/img/logo.png"></a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">

                <ul class="nav navbar-nav mr-auto">
                    <li class="nav-item mx-0 mx-lg-1 active" role="presentation"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="/kelola-hospital">Kelola Data Rumah Sakit</a></li>
                    <li class="nav-item mx-0 mx-lg-1" role="presentation"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="/kelola-patient">Kelola Pasien</a></li>

                </ul>
                    <ul class="nav navbar-nav flex-nowrap ml-auto">
                        <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><i class="fas fa-search"></i></a>
                            <div class="dropdown-menu dropdown-menu-right p-3 animated--grow-in" role="menu" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto navbar-search w-100">
                                    <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                        <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <div class="d-none d-sm-block topbar-divider"></div>
                        <li class="nav-item dropdown no-arrow" role="presentation">
                            <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><span class="d-none d-lg-inline ml-2 text-gray-600 small">admin</span></a>
                                <div
                                    class="dropdown-menu shadow dropdown-menu-right animated--grow-in" role="menu">
                                    <a class="dropdown-item" role="presentation" href="login">Logout</a>
                                </div>
                </div>
        </div>
    </nav>
    <header class="masthead text-white" style="background-color: whitesmoke">
    <div class="container">
        <div class="row">
            <div class="col-md">
                <div class="card p-4">


                    <div class="card-body">


                        {{--  form  --}}
                        <form id="form" style="color: black" method="POST" action="">

                            <label style="color: black"for="membership">Pilih Rumah Sakit:</label>
                                <select name="membership" id="membership">
                                <option value="">Rumah Sakit 1</option>
                                <option value="">Rumah Sakit 2</option>
                                <option value="" selected>Rumah Sakit 3</option>
                                <option value="">Rumah Sakit 4</option>
                            </select>

                            <div class="form-group">
                                <label style="color: black" for="exampleFormControlInput1">ID Rumah Sakit</label>
                                <input type="text" class="form-control" id="idrs" name="idrs"  value="RS.{{Carbon\Carbon::now()->Format('ymd')}}-{{Carbon\Carbon::now()->Format('His')}}" >
                            </div>

                            <div class="form-group">
                                <label style="color: black" for="exampleFormControlInput1">ID Pasien</label>
                                <input type="text" class="form-control" id="idPatient" name="idPatient"  value="PSN.{{Carbon\Carbon::now()->Format('ymd')}}-{{Carbon\Carbon::now()->Format('His')}}" >
                            </div>

                            <div class="form-group">
                                <label style="color: black" for="exampleFormControlInput1">Nama Pasien</label>
                                <input type="text" class="form-control" id="nama_patient" name="nama_patient" placeholder="Masukan Nama Pasien">
                            </div>

                            <div class="form-group">
                                <label style="color: black" for="exampleFormControlInput1">Alamat</label>
                                <textarea class="form-control" id="alamat" name="alamat" cols="30" rows="3"></textarea>
                            </div>

                            <div class="form-group">
                                <label style="color: black" for="exampleFormControlInput1">Telepon</label>
                                <input type="email" class="form-control" id="telepon" name="telepon" placeholder="Masukan no. Telepon">
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-secondary">Submit</button>
                                <button type="reset" class="btn btn-info">Reset</button>
                            </div>

                          </form>
                    </div>

                </div>

                <div class="card">
                    <div class="table-responsive">
                      <table class="table align-items-center mb-0">
                        <thead>
                          <tr style="color: black",>
                            <th>ID Pasien</th>
                            <th>Nama Pasien</th>
                            <th>Alamat</th>
                            <th>No. Telepon</th>
                            <th>ID Rumah Sakit</th>
                            <th style="text-align: center">action</th>
                          </tr>
                        </thead>
                        </tbody>
                      </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
    <footer class="footer bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 my-auto h-100 text-center text-lg-left">
                    <ul class="list-inline mb-2">
                        <li class="list-inline-item"><a href="">About</a></li>
                        <li class="list-inline-item"><span>⋅</span></li>
                        <li class="list-inline-item"><a href="">Contact</a></li>
                    </ul>
                    <p class="text-muted small mb-4 mb-lg-0">© 2022. All Rights Reserved.</p>
                </div>
                <div class="col-lg-6 my-auto h-100 text-center text-lg-right">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href=""><i class="fa fa-facebook fa-2x fa-fw"></i></a></li>
                        <li class="list-inline-item"><a href=""><i class="fa fa-twitter fa-2x fa-fw"></i></a></li>
                        <li class="list-inline-item"><a href=""><i class="fa fa-instagram fa-2x fa-fw"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/login-full-page-bs4.js"></script>
    <script src="assets/js/login-full-page-bs4-1.js"></script>
    <script src="js/jquery-3.6.0.min.js"></script>

</body>

</html>
