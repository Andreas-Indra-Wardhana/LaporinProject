<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Css Eksternal -->
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/halAdmin.css">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- CDN Animate Css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <!-- Css eksternal wow animation  -->
    <link rel="stylesheet" href="assets/animate.css">
    <link rel="icon" href="Images/icon.png" type="image/gif">
    <title>LAPORIN PROJEK</title>
  </head>
  <body>
   
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top backgrounD">
      <div class="container">
      <a class="navbar-brand animate__animated animate__heartBeat" href="">ADMIN LAPORIN</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse mr-2 animate__animated animate__fadeInDownBig" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item text-center">
            <a class="nav-link" href="halaman_admin.php">Laporan Baru</a>
          </li>
        <li class="nav-item text-center">
            <a class="nav-link" href="admin_semua_laporan.php">Semua Laporan</a>
          </li>
          <li class="nav-item text-center">
            <a class="nav-link active" href="function/logout_admin.php">Logout</a>
          </li>
        </ul>
      </div>
      </div>
    </nav>
    <!-- End Navbar -->
  <!-- wave animation -->
  
  <!-- end wave animation -->
  
  <!-- history laporan masyarakat -->
  <div class="col historiLaporan" id="historiLaporan">
  <div class="container">
    <div class="col text-center wow fadeInLeft">
      <h1 style="font-family: 'Podkova'; color: #16213E; padding-top: 10%; font-size: 56px;"> Histori <span style="font-weight: bold;"> Laporan </span> </h1>
  </div>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            LAPORAN MASYARAKAT YANG MASUK
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class="kolom">
                  <tr>
                    <th >NAMA</th>
                    <th >NO. TELP</th>
                    <th >TANGGAL</th>
                    <th >JENIS LAPORAN</th>
                    <th >LOKASI</th>
                    <th >DESKRIPSI LAPORAN</th>
                    <th colspan="2">TINDAK LANJUT</th>
                 
                  </tr>
                </thead>
                
<?php
include "function/connection.php";
// mengambil data dari database 
$sql = "SELECT nama, no_telepon, tanggal, jenis_laporan, lokasi, deskripsi FROM laporan WHERE info = 0 ORDER BY tanggal DESC";
$hasil = mysqli_query($connection, $sql);
while ($data = mysqli_fetch_array($hasil)) {
// END mengambil data dari database 
?>

                <tbody>
                  <tr>
                    <!-- menampilkan data dari database -->
                    <td><?= $data['nama']; ?></td>
                    <td><?= $data['no_telepon']; ?></td>
                    <td><?= $data['tanggal']; ?></td>
                    <td><?= $data['jenis_laporan']; ?></td>
                    <td><?= $data['lokasi']; ?></td>
                    <td><?= $data['deskripsi']; ?></td>
                    
                    <!-- END tombol setujui -->

                    <!-- tombol tolak -->
                    <td class="hilang">
                    <form method="post" action="function/setujui_laporan_action.php">
                        <input type="hidden" name="baris_sekarang" value="<?= $data['no_telepon']; ?>" />
                        <button name="disetujui" class="btn btn-primary atas">Setujui</button> <!--ini tombolnya-->
                    </form>
                    </td>
                    <td class="x">
                      <form method="post" action="function/tolak_laporan_action.php">
                        <input type="hidden" name="baris_sekarang" value="<?= $data['no_telepon']; ?>" />
                        <button name="ditolak" class="btn btn-danger bawah">Tolak</button> <!--ini tombolnya-->
                    </form>
                    </td>
                    <!-- END tombol tolak -->
                   
                  </tr>
                  <?php
 }
 ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

  <!-- wave animation -->
  <svg width="100%" height="100%" id="svg" viewBox="0 0 1440 400" xmlns="http://www.w3.org/2000/svg" class="transition duration-300 ease-in-out delay-150"><style>
    .path-0{
      animation:pathAnim-0 4s;
      animation-timing-function: linear;
      animation-iteration-count: infinite;
    }
    @keyframes pathAnim-0{
      0%{
        d: path("M 0,400 C 0,400 0,200 0,200 C 117.92344497607655,181.46411483253587 235.8468899521531,162.92822966507177 330,146 C 424.1531100478469,129.07177033492823 494.53588516746413,113.7511961722488 572,134 C 649.4641148325359,154.2488038277512 734.0095693779904,210.06698564593302 840,240 C 945.9904306220096,269.933014354067 1073.4258373205741,273.98086124401914 1177,263 C 1280.5741626794259,252.01913875598083 1360.287081339713,226.00956937799043 1440,200 C 1440,200 1440,400 1440,400 Z");
      }
      25%{
        d: path("M 0,400 C 0,400 0,200 0,200 C 74.88038277511961,228.9090909090909 149.76076555023923,257.8181818181818 244,259 C 338.2392344497608,260.1818181818182 451.8373205741626,233.63636363636363 556,203 C 660.1626794258374,172.36363636363637 754.8899521531101,137.63636363636365 840,137 C 925.1100478468899,136.36363636363635 1000.602870813397,169.8181818181818 1099,186 C 1197.397129186603,202.1818181818182 1318.6985645933014,201.0909090909091 1440,200 C 1440,200 1440,400 1440,400 Z");
      }
      50%{
        d: path("M 0,400 C 0,400 0,200 0,200 C 123.54066985645932,187.76076555023923 247.08133971291863,175.52153110047848 334,164 C 420.91866028708137,152.47846889952152 471.2153110047848,141.67464114832535 572,145 C 672.7846889952152,148.32535885167465 824.0574162679424,165.77990430622012 916,173 C 1007.9425837320576,180.22009569377988 1040.555023923445,177.20574162679424 1118,180 C 1195.444976076555,182.79425837320576 1317.7224880382773,191.39712918660288 1440,200 C 1440,200 1440,400 1440,400 Z");
      }
      75%{
        d: path("M 0,400 C 0,400 0,200 0,200 C 71.11961722488039,227.82775119617224 142.23923444976077,255.6555023923445 238,257 C 333.7607655502392,258.3444976076555 454.16267942583715,233.20574162679426 555,237 C 655.8373205741628,240.79425837320574 737.1100478468901,273.52153110047846 823,267 C 908.8899521531099,260.47846889952154 999.3971291866028,214.70813397129186 1103,197 C 1206.6028708133972,179.29186602870814 1323.3014354066986,189.64593301435406 1440,200 C 1440,200 1440,400 1440,400 Z");
      }
      100%{
        d: path("M 0,400 C 0,400 0,200 0,200 C 117.92344497607655,181.46411483253587 235.8468899521531,162.92822966507177 330,146 C 424.1531100478469,129.07177033492823 494.53588516746413,113.7511961722488 572,134 C 649.4641148325359,154.2488038277512 734.0095693779904,210.06698564593302 840,240 C 945.9904306220096,269.933014354067 1073.4258373205741,273.98086124401914 1177,263 C 1280.5741626794259,252.01913875598083 1360.287081339713,226.00956937799043 1440,200 C 1440,200 1440,400 1440,400 Z");
      }
    }</style><path d="M 0,400 C 0,400 0,200 0,200 C 117.92344497607655,181.46411483253587 235.8468899521531,162.92822966507177 330,146 C 424.1531100478469,129.07177033492823 494.53588516746413,113.7511961722488 572,134 C 649.4641148325359,154.2488038277512 734.0095693779904,210.06698564593302 840,240 C 945.9904306220096,269.933014354067 1073.4258373205741,273.98086124401914 1177,263 C 1280.5741626794259,252.01913875598083 1360.287081339713,226.00956937799043 1440,200 C 1440,200 1440,400 1440,400 Z" stroke="none" stroke-width="0" fill="#ffc107ff" class="transition-all duration-300 ease-in-out delay-150 path-0" transform="rotate(-180 720 200)"></path></svg>
  <!-- end wave animation -->
<!-- end history laporan masyarakat -->

  <br/>
  <br/>
  <!-- footer -->
  <footer class="text-black text-center footer">
    <p>Made with <i class="bi bi-heart-fill text-danger"></i> by us <a href="#" class="fw-bold">LAPORIN PROJECT</a> </p>
  </footer>
  <!-- End footer -->

     <!-- jQuery library -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

     <!-- script wow animation -->
     <script src="assets/Javascript/wow.js"></script>
     <script src="assets/Javascript/main.js"></script>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>