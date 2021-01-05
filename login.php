<!--

=========================================================
* Agus Banirahman
* Kuningan, 05 - 08 - 1990
* Nipp : 68088
* Balai Yasa Manggarai
=========================================================

* Kontak: agus.banirahman@gmail.com / 68088@kereta-api.co.id
* Copyright 2020 Banira

* Designed by Boostrap Free Template

=========================================================

-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/logo_kai.png">
  <link rel="icon" type="image/png" href="assets/img/logo_kai.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    RODA KERETA
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="" background="assets/img/header.jpg" style="height: 100%; background-position: center; background-repeat: no-repeat; background-size: cover;">

      <!-- Awal Body -->


<div class="wrapper ">
  <div class="main-card" align="center">

      <br>

      
        
          <div class="col-md-3">
            <div class="card card-user">
              <div class="image">
                <img src="assets/img/bg5.jpg" alt="...">
              </div>

              <div class="card-body">
                <div class="author">
                  
                    <img class="avatar border-gray" src="assets/img/default-avatar.png" alt="...">
                    <h5 class="title text-info">MASUK!</h5>
                </div>


                 <form action="cek_log.php" method="POST" autocomplete="off">
                      <div class="row" align="left">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>Id Pengguna</label>
                            <input type="number" class="form-control" name="nipp" placeholder="NIPP" autofocus="autofocus" required="required">
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Password Anda" required="required" id="buka">
                          </div>
                          <div class="form-group">
                            <input type="checkbox" onclick="myFunction()"> Lihat
                          </div>
                        </div>
                        <div class="col-md-9">
                          <div class="form-group">
                            <button class="btn btn-success">
                            Masuk <i class="now-ui-icons media-1_button-play"></i></button>
                          </div>
                        </div>
                      </div>
                  </form>
            </div>

           </div>
          </div>
        
      

  </div>
</div>




<!--   Core JS Files   -->
  <script src="assets/js/core/jquery.min.js"></script>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> 
  -->
  <!-- Chart JS -->
  <script src="assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="assets/demo/demo.js"></script>
  <script>
function myFunction() {
  var x = document.getElementById("buka");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
</body>


</html>