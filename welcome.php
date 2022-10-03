<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Smart Segel</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon1.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Regna
    Theme URL: https://bootstrapmade.com/regna-bootstrap-onepage-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
  Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="#hero"><img src="img/logo1.png" alt="" title="" /></img></a>
        <!-- Uncomment below if you prefer to use a text logo -->
        <!--<h1><a href="#hero">Regna</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#hero">HOME</a></li>
          <li><a href="#about">Lokasi Segel</a></li>
          <li><a href="#services">Grafik Segel</a></li>
          <li><a href="#portfolio">Tabel</a></li>
          <li><a href="#team">Team</a></li>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="menu-has-children"><a href="#">Drop Down 2</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li>
          <li><a href="#contact">Contact Us</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Hero Section
  ============================-->
  <section id="hero">
    <div class="hero-container">
      <h1>Welcome to Smart Segel Web Service</h1>
      <h2>Menampilkan Informasi Mengenai Data Dari Smart Segel</h2>
      <a href="#about" class="btn-get-started">Get Started</a>
    </div>
  </section><!-- #hero -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">
        <div class="row about-container">
        <center><h1 class="section-title">LOKASI SMART SEGEL</h1>

          <head>
            <title>Google Maps API: Cara Menampilkan Lokasi dengan PHP dan MySQL</title>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBvD6s7wc8yhf-fw95xr44vJ22Ihn3IH5I&callback=initialize"async defer></script>
            <script type="text/javascript">   
                var marker;
                function initialize(){
                    // Variabel untuk menyimpan informasi lokasi
                    var infoWindow = new google.maps.InfoWindow;
                    //  Variabel berisi properti tipe peta
                    var mapOptions = {
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                    } 
                    // Pembuatan peta
                    var peta = new google.maps.Map(document.getElementById('googleMap'), mapOptions);      
                // Variabel untuk menyimpan batas kordinat
                    var bounds = new google.maps.LatLngBounds();
                    // Pengambilan data dari database MySQL
                    <?php
                // Sesuaikan dengan konfigurasi koneksi Anda
                  $host     = "localhost";
                  $username = "root";
                  $password = "";
                  $Dbname   = "web_tutorial";
                  $db     = new mysqli($host,$username,$password,$Dbname);
                  
                  $query = $db->query("SELECT * FROM lokasi ORDER BY nama_lokasi ASC");
                  while ($row = $query->fetch_assoc()) {
                    $nama = $row["nama_lokasi"];
                    $lat  = $row["latitude"];
                    $long = $row["longitude"];
                    $segel = $row["kondisi"];
                    //$segel = 'baik';
                    if ($segel == 'baik'){$t='icon/blue.png';}
                    else if ($segel == 'rusak'){$t='icon/red.png';}
                    else if ($segel == 'ditera'){$t='icon/yellow.png';}
                    
                    echo "addMarker($lat, $long, '$nama','$t');\n";
                  }
                    ?> 
                    
                    // Proses membuat marker 
                    function addMarker(lat, lng, info, t){
                      var image=t;
                        var lokasi = new google.maps.LatLng(lat, lng);
                        bounds.extend(lokasi);
                        var marker = new google.maps.Marker({
                            map: peta,
                            position: lokasi,
                            icon: image
                        
                        });       
                        peta.fitBounds(bounds);
                        bindInfoWindow(marker, peta, infoWindow, info);
                     }
                    // Menampilkan informasi pada masing-masing marker yang diklik
                    function bindInfoWindow(marker, peta, infoWindow, html){
                        google.maps.event.addListener(marker, 'click', function() {
                        infoWindow.setContent(html);
                        infoWindow.open(peta, marker);
                      });
                    }
                }
            </script>
            </head>
            <body>
              <div id="googleMap" style="width:1100px;height:500px;display: block; margin: auto; border:10px solid grey;"></div>
            </body>

      </div>
    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container wow fadeIn">
        <div class="section-header">
        <head>
  <script type="text/javascript" src="chartjs/Chart.js"></script>
</head>
<body>
  <style type="text/css">
  body{
    font-family: roboto;
  }
 
  table{
    margin: 0px auto;
  }
  </style>

<br>
<br>
 
 
  <center>
    <h2>GRAFIK KONDISI SEGEL</h2>
  </center>
 
 
  <?php 
  include 'koneksi.php';
  ?>
 
  <div style="width: 800px;margin: 0px auto;">
    <canvas id="myChart"></canvas>
  </div>
 
  <br/>
  <br/>
 
  <script>
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ["baik", "rusak"],
        datasets: [{
          label: '',
          data: [
          <?php 
          $jumlah_baik = mysqli_query($connect,"select * from lokasi where kondisi='baik'");
          echo mysqli_num_rows($jumlah_baik);
          ?>, 
          <?php 
          $jumlah_rusak = mysqli_query($connect,"select * from lokasi where kondisi='rusak'");
          echo mysqli_num_rows($jumlah_rusak);
          ?>
          ],
          backgroundColor: [
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 99, 132, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)'
          ],
          borderColor: [
          'rgba(54, 162, 235, 1)',
          'rgba(255,99,132,1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)'
          ],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero:true
            }
          }]
        }
      }
    });
  </script>
</body>
      </div>
    </section><!-- #services -->

    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Tabel Smart Segel</h3>
          <br>
          <table border="1">
    <thead>
      <tr>
        <th>No</th>
        <th>Lokasi</th>
        <th>Kondisi</th>
        <th>Nama Penera</th>
        <th>ID Penera</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      $no = 1;
      $data = mysqli_query($connect,"select * from lokasi");
      while($d=mysqli_fetch_array($data)){
        ?>
        <tr>
          <td><?php echo $no++; ?></td>
          <td><?php echo $d['nama_lokasi']; ?></td>
          <td><?php echo $d['kondisi']; ?></td>
          <td><?php echo $d['nama_penera']; ?></td>
          <td><?php echo $d['id_penera']; ?></td>
        </tr>
        <?php 
      }
      ?>
    </tbody>
  </table>
        </div>

      </div>
    </section>
    <br>
    <br>
    <br>
    <br><!-- #portfolio -->

    <!--==========================
      Team Section
    ============================-->
    <section id="team">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Team</h3>
          <p class="section-description">Anggota Kelompok 6</p>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6">
            
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="img/team_1.jpg" alt=""></div>
              <h4>Gayuh Tentri</h4>
              <span>NIM : A018002</span>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="img/team_2.jpg" alt=""></div>
              <h4>Rayhan Putra Pratama</h4>
              <span>NIM : A018053</span>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #team -->

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Contact</h3>
        </div>
      </div>

      <!-- Uncomment below if you wan to use dynamic maps -->
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22864.11283411948!2d-73.96468908098944!3d40.630720240038435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbg!4v1540447494452" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>

      <div class="container wow fadeInUp mt-5">
        <div class="row justify-content-center">

          <div class="col-lg-3 col-md-4">

            <div class="info">
              <div>
                <i class="fa fa-map-marker"></i>
                <p>PPSDK<br>Jalan Daeng Muhammad Ardiwinata KM. 3,4, Cihanjuang</p>
              </div>

              <div>
                <i class="fa fa-envelope"></i>
                <p>kelompok6@gmail.com</p>
              </div>

              <div>
                <i class="fa fa-phone"></i>
                <p>+62 89 662 668 983</p>
              </div>
            </div>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-5 col-md-8">
            <div class="form">
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>
              <form action="" method="post" role="form" class="contactForm">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Smart Segel</strong>.
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Regna
        -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
<body>
    <div class="main">
        <div class="user">
            <img src="images/user.png" alt="">
        </div>
        <!---start-main-->
        <div class="login">
            <div class="inset"><center>
                <span><a href="logout.php">Logout?</a></span>
            </div>
        </div>
        <!---//end-main-->
    </div>
</body>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>

